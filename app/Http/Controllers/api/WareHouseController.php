<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WareHouseController extends Controller
{
    public function wareHouseProductList(){
        return view('admin_theme/pages/wareHouse/productsList');
    }
}
