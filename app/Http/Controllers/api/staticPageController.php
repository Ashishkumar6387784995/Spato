<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class staticPageController extends Controller
{
    public function contact(){
        return view('/frontEnd/Pages/contact');
    }
    
}
