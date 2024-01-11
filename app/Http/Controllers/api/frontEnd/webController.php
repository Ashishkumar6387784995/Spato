<?php

namespace App\Http\Controllers\api\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class webController extends Controller
{
    public function home(){
        return view('frontEnd/home');
    }

    public function ProductdetailPage(){
        return view('frontEnd/Pages/products/ProductDetailsPage');
    }

    public function ProductsByCategories(){
        return view('frontEnd/Pages/products/ProductsByCategories');
    }
}
