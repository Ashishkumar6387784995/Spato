<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class tryController extends Controller
{
    public function productListing(){

        return view('frontEnd/Pages/products/productListing');

    }

    public function image(){
        return view('frontEnd/Pages/products/images');
    }
}
