<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class billsController extends Controller
{
    public function billsListing(){
     
        return view('admin_theme/pages/bills/assignmentList');
    }


    public function editAssignment(){
     
        return view('admin_theme/pages/assignments/editAssignments');
    }

    public function addAssignment(){
     
        return view('admin_theme/pages/assignments/addAssignments');
    }
}
