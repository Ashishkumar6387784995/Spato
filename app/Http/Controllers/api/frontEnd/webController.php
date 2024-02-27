<?php

namespace App\Http\Controllers\api\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategorieStatic;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;


class webController extends Controller
{
    public function home()
    {

        $productCategories = CategorieStatic::get()->unique('categorie_1');

        // dd(auth()->user());
        // dd($productCategories);

        // Get the latest products for each category
        $latestProducts = Product::select('Kategorie_2', DB::raw('MAX(created_at) as latest_created_at'))
            ->groupBy('Kategorie_2')
            ->get();

        // Fetch the complete details of the latest products
        $latestProduct = Product::whereIn('Kategorie_2', $latestProducts->pluck('Kategorie_2'))
            ->whereIn('created_at', $latestProducts->pluck('latest_created_at'))
            ->orderby('created_at', 'DESC')->take(10)
            ->get();

        // Fetch the complete details of the all products
        $allProduct = Product::select()
            ->take(10)->get();

        // Now, $products contains all details of t`he latest products for each category
        // dd($latestProduct);


        return view('frontEnd/home')->with(compact('productCategories', 'latestProduct', 'allProduct'));
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

        return view('frontEnd/Pages/products/ProductDetailsPage')->with(compact('product', 'products_accoring_category'));
    }

    // for get count no of items of this product
    public function getCountOfThisProductApi(Request $request)
    {
        $guestToken = $request->header('guest-token', Str::uuid());
        $countProductInCard = Cart::where('guest_token', $guestToken)->where('product_id', $request->product_id)->first()->quantity ?? 1;
        return response()->json(['message' => $countProductInCard]);
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
        return response()->json(['errors' => "Customer Not Found"]);
    }



    public function addPermanentProfileApi(Request $request)
    {
        $user = Auth::guard('api')->user();
        if (!$user) {
            return response()->json(['error' => 'Unauthenticated.'],);
        }

        $userId = $user->id;

        // Validation
        $validator = $this->validateUserProfile($request);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], );
        }

        $data = [
            'name' => $request->input('RepeatuserName'),
            'email' => $request->input('userEmail'),
            'mobile' => $request->input('mobile'),
            'permanent_address' => $request->input('permanentAddress'),
            'city' => $request->input('City'),
            'zipCode' => $request->input('zipCode'),
            'country' => $request->input('country'),
            'vat_number' => $request->input('vat_number'),
            'status' => 'Permanent',
        ];

        if ($request->hasFile('imageUpload')) {
            $uploadedImage = $request->file('imageUpload');
            $fileName = $uploadedImage->getClientOriginalName();
            $imagePath = $uploadedImage->storeAs('profile_pictures', $fileName, 'public');
            $data['profile_picture'] = $imagePath;
        }

        $userProfile = UserProfile::where('user_id', $userId)->where('status', 'Permanent')->first();
        if ($userProfile) {
            $userProfile->update($data);
            return response()->json(['success' => 'User profile updated successfully']);
        }

        $data['user_id'] = $userId;
        UserProfile::create($data);
        return response()->json(['success' => 'User profile created successfully']);
    }

    private function validateUserProfile($request)
    {
        return Validator::make($request->all(), [
            'RepeatuserName' => 'required|string',
            'userEmail' => 'required|email',
            'mobile' => 'required|string',
            'permanentAddress' => 'required|string',
            'City' => 'required|string',
            'zipCode' => 'required|string|max:10',
            'country' => 'required|string',
            'imageUpload' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
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
            'company_name' => 'required|string||unique:user_profiles',
            'tempAddress' => 'required|string',
            'tempCity' => 'required',
            'tempZip' => 'required|string',
            'tempCountry' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $userProfile = UserProfile::create([
            'company_name' => $request->input('company_name'),
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

    public function tempAddressDelete($id)
    {



        // Find and delete the cart item with the given product ID and guest token
        $tempAddress = UserProfile::where('id', $id)
            ->first();

        if ($tempAddress) {
            $tempAddress->delete();
            return response()->json(['message' => 'Address removed successfully']);
        }

        return response()->json(['message' => 'Address not found']);
    }

    // function for fetch Order History
    public function showOrderHistoryApi()
    {
        $userId = Auth::guard('api')->user()->id;
        $orders = Order::select('orders.*', 'users.name', 'products.Artikelname', 'products.Hersteller')
                ->join('users', 'users.id', '=', 'orders.user_id')
                ->join('products', 'products.id', '=', 'orders.product_id')
                // ->where('orders.user_id', $userId)
                ->orderby('orders.created_at', 'DESC')
                ->get()->unique('order_id');

        if (count($orders)) {
            return response()->json(['message' => '1', 'orders'=> $orders]);
        }

        return response()->json(['error' => 'No order found.']);
    }
}
