<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class creditsController extends Controller
{
    public function creditListing(){
     
        return view('admin_theme/pages/bills/creditsList');

    }


    public function editCredits(){
     
        return view('admin_theme/pages/credits/editCredits');
    }

    public function addCredits(){
     
        return view('admin_theme/pages/credits/addCredits');
    }
}
