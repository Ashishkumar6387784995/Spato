<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class billsController extends Controller
{
    public function AssignmentListing(){
     
        return view('admin_theme/pages/assignments/assignmentList');
    }


    public function editAssignment(){
     
        return view('admin_theme/pages/assignments/editAssignments');
    }

    public function addAssignment(){
     
        return view('admin_theme/pages/assignments/addAssignments');
    }
}
