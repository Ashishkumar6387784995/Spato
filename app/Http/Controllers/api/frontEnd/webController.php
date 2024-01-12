<?php

namespace App\Http\Controllers\api\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;

class webController extends Controller
{
    public function home(){


        $productCategories = ProductCategory::where('status', 'active')->get();



        // dd($productCategories);
        

        return view('frontEnd/home')->with(compact('productCategories'));
    }

    public function ProductdetailPage(){
        return view('frontEnd/Pages/products/ProductDetailsPage');
    }

    public function ProductsByCategories($Kategorie_Nr){

        $productCategories = Product:: where('Kategorie_Nr_1', $Kategorie_Nr)->get();

        return view('frontEnd/Pages/products/ProductsByCategories');
    }
}
