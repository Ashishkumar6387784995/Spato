<?php

namespace App\Http\Controllers\api\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Hash;


class webController extends Controller
{
    public function home()
    {

        $productCategories = ProductCategory::where('status', 'active')->get();

        // dd(auth()->user());
        // dd($productCategories);

        // Get the latest products for each category
        $latestProducts = Product::select('Kategorie_1', DB::raw('MAX(created_at) as latest_created_at'))
            ->groupBy('Kategorie_1')
            ->get();

        // Fetch the complete details of the latest products
        $latestProduct = Product::whereIn('Kategorie_1', $latestProducts->pluck('Kategorie_1'))
            ->whereIn('created_at', $latestProducts->pluck('latest_created_at'))
            ->get();

        // Now, $products contains all details of the latest products for each category
        // dd($latestProduct);


        return view('frontEnd/home')->with(compact('productCategories', 'latestProduct'));
    }



    public function home1()
    {
        $user = Auth::guard('api')->user();

        if ($user) {
            return response()->json(['success' => $user]);
        } else {
            return response()->json(['error' => 'User not authenticated']);
        }
    }





    public function ProductdetailPage($product_id, $product_category)
    {
        // dd($product_id, $product_category);

        $product = Product::where('id', $product_id)->get();

        $products_accoring_category = Product::where('Kategorie_1', $product_category)->get();
        $countProductInCard = Cart::where('product_id', $product[0]->id)->first()->quantity??0;

        return view('frontEnd/Pages/products/ProductDetailsPage')->with(compact('product', 'products_accoring_category', 'countProductInCard'));
    }




    public function ProductsByCategories($Kategorie_Name)
    {

        $products = Product::where('Kategorie_1', $Kategorie_Name)->get();
        // dd($products);

        return view('frontEnd/Pages/products/ProductsByCategories')->with(compact('products', 'Kategorie_Name',));
    }




    public function accountSetting()
    {
        return view('frontEnd/Pages/user_profile/setting');
    }




    public function profileViewApi()
    {
        $userName = Auth::guard('api')->user()->name;
        $userEmail = Auth::guard('api')->user()->email;
        $userMobile = Auth::guard('api')->user()->mobile;
        $userId = Auth::guard('api')->user()->id;

        $user = UserProfile::where('user_id', $userId)
            ->where('status', 'Permanent')
            ->latest('created_at')
            ->first();

        if ($user) {
            return response()->json(['success' => $user, 'userName' => $userName, 'userEmail' => $userEmail, 'userMobile' => $userMobile]);
        } else {
            return response()->json(['userName' => $userName, 'userEmail' => $userEmail, 'userMobile' => $userMobile]);
        }
    }


    // Function for get user details by his id
    public function profileViewByIdApi($id)
    {   
        $user = User::where('id', $id)->first();
        if ($user) {
            $userJoin = DB::table('users')
                ->select('users.*', 'user_profiles.permanent_address', 'user_profiles.city', 'user_profiles.zipCode', 'user_profiles.country', 'user_profiles.profile_picture')
                ->join('user_profiles', 'users.id', '=', 'user_profiles.user_id')
                ->where('users.id', $id)
                ->where('user_profiles.status', 'Permanent')
                ->first();
            if ($userJoin) {
                $user = $userJoin;
            }
            // dd($user);
            return response()->json(['status' => '1', 'user' => $user]);
        }
        return response()->json(['errors'=>"Customer Not Found"]);
    }


    public function addPermanentProfileApi(Request $request)
    {
        $userId = Auth::guard('api')->user()->id;

        // Find the user by user_id
        $userProfile = UserProfile::where('user_id', $userId)
        ->where('status', 'Permanent')
        ->first();

        // If user exists, update the details; otherwise, create a new record
        if ($userProfile) {
            // User exists, update the details
            $validator = Validator::make($request->all(), [
                'RepeatuserName' => 'required|string',
                'userEmail' => 'required|email',
                'mobile' => 'required|string',
                'permanentAddress' => 'required|string',
                'City' => 'required|string',
                'zipCode' => 'required|string|max:10',
                'country' => 'required|string',
                'imageUpload' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()]);
            }

            if ($request->hasFile('imageUpload')) {
                $uploadedImage = $request->file('imageUpload');

                // Use a unique filename to prevent overwriting existing files
                $fileName = uniqid() . '_' . $uploadedImage->getClientOriginalName();

                // Store the file in the 'public/profile_pictures' directory
                $imagePath = $uploadedImage->storeAs('profile_pictures', $fileName, 'public');

                // Update the user profile with the new details and profile picture
                $userProfile->update([
                    'name' => $request->input('RepeatuserName'),
                    'email' => $request->input('userEmail'),
                    'mobile' => $request->input('mobile'),
                    'permanent_address' => $request->input('permanentAddress'),
                    'city' => $request->input('City'),
                    'zipCode' => $request->input('zipCode'),
                    'country' => $request->input('country'),
                    'status' => 'Permanent',
                    'profile_picture' => $imagePath ?? null,
                ]);

                return response()->json(['success' => 'User profile updated successfully']);
            }

            // If no image is uploaded, update the user profile without changing the existing profile picture
            $userProfile->update([
                'name' => $request->input('RepeatuserName'),
                'email' => $request->input('userEmail'),
                'mobile' => $request->input('mobile'),
                'permanent_address' => $request->input('permanentAddress'),
                'city' => $request->input('City'),
                'zipCode' => $request->input('zipCode'),
                'country' => $request->input('country'),
                'status' => 'Permanent',
            ]);

            return response()->json(['success' => 'User profile updated successfully']);
        }

        // User not found, create a new record
        $validator = Validator::make($request->all(), [
            'RepeatuserName' => 'required|string',
            'userEmail' => 'required|email',
            'mobile' => 'required|string',
            'permanentAddress' => 'required|string',
            'City' => 'required|string',
            'zipCode' => 'required|string|max:10',
            'country' => 'required|string',
            'imageUpload' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        if ($request->hasFile('imageUpload')) {
            $uploadedImage = $request->file('imageUpload');

            // Use a unique filename to prevent overwriting existing files
            $fileName = uniqid() . '_' . $uploadedImage->getClientOriginalName();

            // Store the file in the 'public/profile_pictures' directory
            $imagePath = $uploadedImage->storeAs('profile_pictures', $fileName, 'public');
        }

        // Create a new user profile
        UserProfile::create([
            'name' => $request->input('RepeatuserName'),
            'email' => $request->input('userEmail'),
            'mobile' => $request->input('mobile'),
            'permanent_address' => $request->input('permanentAddress'),
            'city' => $request->input('City'),
            'zipCode' => $request->input('zipCode'),
            'country' => $request->input('country'),
            'user_id' => $userId,
            'status' => 'Permanent',
            'profile_picture' => $imagePath ?? null,
        ]);

        return response()->json(['success' => 'User profile created successfully']);
    }


    public function changePasswordApi(Request $request)
    {


        $userId = Auth::guard('api')->user()->id;

        $validator = Validator::make($request->all(), [
            'oldPassword' => 'required|string',
            'newPassword' => 'required|string|min:8|confirmed',

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $user = User::find($userId);

        if ($user) {
            // Check if the old password matches the current password
            if (Hash::check($request->input('oldPassword'), $user->password)) {
                // Update the password with the new one
                $user->update([
                    'password' => bcrypt($request->input('newPassword')),
                ]);

                return response()->json(['success' => 'Password updated successfully']);
            } else {
                return response()->json(['error' => 'Old password is incorrect']);
            }
        } else {
            return response()->json(['error' => 'User not found'], 404);
        }
    }


    public function saveTempAddressApi(Request $request)
    {


        $userId = Auth::guard('api')->user()->id;

        // return response()->json(['success' => $userId]);
        $validator = Validator::make($request->all(), [
            'tempAddress' => 'required|string',
            'tempCity' => 'required',
            'tempZip' => 'required|string',
            'tempCountry' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $userProfile = UserProfile::create([
            'permanent_address' => $request->input('tempAddress'),
            'city' => $request->input('tempCity'),
            'zipCode' => $request->input('tempZip'),
            'country' => $request->input('tempCountry'),
            'user_id' => $userId,
            'status' => "temp",
        ]);
        return response()->json(['success' => 'Data saved successfully']);
    }


    public function showTempAddressApi()
    {

        $userId = Auth::guard('api')->user()->id;

        $permanent = UserProfile::where('user_id', $userId)
            ->where('status', 'Permanent')
            ->get();

        $temp = UserProfile::where('user_id', $userId)
            ->where('status', 'temp')
            ->get();

        if ($permanent->isEmpty() && $temp->isEmpty()) {
            return response()->json(['message' => 'No profiles found.']);
        } elseif ($permanent->isNotEmpty() && $temp->isEmpty()) {
            return response()->json(['permanent' => $permanent]);
        } elseif ($permanent->isNotEmpty() && $temp->isNotEmpty()) {
            return response()->json(['permanent' => $permanent, 'temp' => $temp]);
        }
    }

    public function tempAddressDelete($id){



        // Find and delete the cart item with the given product ID and guest token
        $tempAddress = UserProfile::where('id', $id)
            ->first();

        if ($tempAddress) {
            $tempAddress->delete();
            return response()->json(['message' => 'Address removed successfully']);
        }

        return response()->json(['message' => 'Address not found']);

    }
}