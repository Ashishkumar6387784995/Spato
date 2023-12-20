<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class claims_manager_Controller extends Controller
{
    public function billsListing(){
     
        return view('admin_theme/pages/bills/assignmentList');
    }


    public function editbills(){
     
        return view('admin_theme/pages/bills/editbills');
    }

    public function addbills(){
     
        return view('admin_theme/pages/bills/addbills');
    }
}
