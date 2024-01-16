<?php

namespace App\Http\Controllers\api\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class webController extends Controller
{



    public function home()
    {



        $productCategories = ProductCategory::where('status', 'active')->get();



        // dd(auth()->user());
        // dd($productCategories);


        return view('frontEnd/home')->with(compact('productCategories'));
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





    public function ProductdetailPage()
    {
        return view('frontEnd/Pages/products/ProductDetailsPage');
    }

    public function ProductsByCategories($Kategorie_Name)
    {

        
        $products = Product:: where('Kategorie_1', $Kategorie_Name)->get();
        // dd($products);

        $latestProducts = Product::select('Kategorie_1', DB::raw('MAX(created_at) as latest_created_at'))
        ->groupBy('Kategorie_1')
        ->get();

        // dd($latestProducts);


        return view('frontEnd/Pages/products/ProductsByCategories')->with(compact('products', 'Kategorie_Name', 'latestProducts'));
    }
}
