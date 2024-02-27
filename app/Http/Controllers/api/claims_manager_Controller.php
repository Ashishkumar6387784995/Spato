<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assignments_list;

class claims_manager_Controller extends Controller
{
    public function billsListing(){
     
        return view('admin_theme/pages/claim_manager/assignmentList');
    }


    public function editClaims(){
     
        return view('admin_theme/pages/claim_manager/editClaims');
    }

    public function addCliams($role){

        
        // $lastOffer = "CL-123456";
        $lastOffer = Assignments_list::latest()->first();

        if ($lastOffer) {

            $lastOffer = $lastOffer->Auftrags_Nr;
            // Assuming $lastOffer is 'CL-12345'
            // $lastOffer = 'CL-12345';



            // Split the string into an array based on the dash
            $parts = explode('-', $lastOffer);
            $parts = $parts[1];




            // Increment the numeric part
            $newNumericPart = $parts + 1;

            // Create the new offerNo
            $newAssignmentNo = 'CL-' . $newNumericPart;
            // echo $newOfferNo;

            // $newOfferNo will be 'CL-12346'
        } else {
            $newAssignmentNo = 'CL-12345';
        }
     
        return view('admin_theme/pages/claim_manager/addClaims')->with(compact('role', 'newAssignmentNo'));
    }
}
