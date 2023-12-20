<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactController extends Controller
{
    // public function billsListing(){
     
    //     return view('admin_theme/pages/claim_manager/assignmentList');
    // }


    // public function editCliams(){
     
    //     return view('admin_theme/pages/claim_manager/editClaims');
    // }

    public function addContacts(){
     
        return view('admin_theme/pages/contacts/addContacts');
    }
}
