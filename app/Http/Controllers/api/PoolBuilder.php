<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PoolBuilder extends Controller
{
    public function poolBuilderRegister(){

        return view('frontEnd/Pages/poolBuilder/pollProfile');
        
    }

    public function poolBuilderProfile(){

        return view('frontEnd/Pages/poolBuilder/poolClaim&Request');
        
    }

    public function poolBuilderClaim(){

        return view('frontEnd/Pages/poolBuilder/poolRegistration');
        
    }
}
