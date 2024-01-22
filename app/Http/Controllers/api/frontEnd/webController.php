<?php

namespace App\Http\Controllers\api\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\UserProfile;

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

        return view('frontEnd/Pages/products/ProductDetailsPage')->with(compact('product', 'products_accoring_category'));
    }

    public function ProductsByCategories($Kategorie_Name)
    {

        $products = Product::where('Kategorie_1', $Kategorie_Name)->get();
        // dd($products);

        return view('frontEnd/Pages/products/ProductsByCategories')->with(compact('products', 'Kategorie_Name',));
    }

    public function accountSetting()
    {
        return view('frontEnd/pages/user_profile/setting');
    }

    public function profileViewApi()
    {
        $user = Auth::guard('api')->user();
        return response()->json(['success' => $user]);
    }

    public function addPermanentProfileApi(Request $request)
    {
        $userId = Auth::guard('api')->user()->id;

        // return response()->json(['success' => $request->input('RepeatuserName')]);

        // Validate the request data
        // $validator = UserProfile::make($request->all(), [
        //     'name' => 'required|string',
        //     'email' => 'required|email',
        //     'mobile' => 'nullable|string',
        //     'permanent_address' => 'nullable|string',
        //     'city' => 'nullable|string',
        //     'zipCode' => 'nullable|string|max:10',
        //     'country' => 'nullable|string',
        //     'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust as needed

        // ]);

        // // If validation fails, return the errors
        // if ($validator->fails()) {
        //     return response()->json(['errors' => $validator->errors()]);
        // }
        

        // Create a new user profile
        $userProfile = UserProfile::create([
            'name' => $request->input('RepeatuserName'),
            'email' => $request->input('userEmail'),
            'mobile' => $request->input('mobile'),
            'permanent_address' => $request->input('permanentAddress'),
            'city' => $request->input('City'),
            'zipCode' => $request->input('zipCode'),
            'country' => $request->input('country'),
            'user_id' => $userId,
        ]);

        // Save profile picture in the storage
        if ($request->hasFile('profile_picture')) {
            $uploadedImage = $request->file('profile_picture');
            $imagePath = $uploadedImage->store('public/profile_pictures');
            $userProfile->update(['profile_picture' => $imagePath]);
        }

        return response()->json(['success' => 'User profile created successfully', 'userProfile' => $userProfile]);
    }
}
