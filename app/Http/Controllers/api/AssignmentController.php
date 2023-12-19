<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function AssignmentListing(){
     
        return view('admin_theme/pages/Assignments/assignmentList');
    }


    public function editAssignment(){
     
        return view('admin_theme/pages/Assignments/editAssignments');
    }

    public function addAssignment(){
     
        return view('admin_theme/pages/Assignments/addAssignments');
    }
}
