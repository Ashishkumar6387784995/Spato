<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class claims_manager_Controller extends Controller
{
    public function billsListing(){
     
        return view('admin_theme/pages/claim_manager/assignmentList');
    }


    public function editCliams(){
     
        return view('admin_theme/pages/claim_manager/editClaims');
    }

    public function addCliams(){
     
        return view('admin_theme/pages/claim_manager/addClaims');
    }
}
