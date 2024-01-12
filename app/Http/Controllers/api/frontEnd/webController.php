<?php

namespace App\Http\Controllers\api\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class webController extends Controller
{
    public function home(){


        $productCategories = ProductCategory::get();


        // dd($productCategories);
        

        return view('frontEnd/home')->with(compact('productCategories'));
    }

    public function ProductdetailPage(){
        return view('frontEnd/Pages/products/ProductDetailsPage');
    }

    public function ProductsByCategories(){
        return view('frontEnd/Pages/products/ProductsByCategories');
    }
}
