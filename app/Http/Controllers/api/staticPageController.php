<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class staticPageController extends Controller
{
    public function contact(){
        return view('/frontEnd/Pages/contact');
    }

    public function agb(){
        return view('/frontEnd/Pages/agb');
    }

    public function cancelationPolicy(){
        return view('/frontEnd/Pages/cancellation');
    }
    
}
