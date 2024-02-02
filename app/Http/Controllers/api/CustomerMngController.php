<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\credits;

class CustomerMngController extends Controller
{
    public function customerListingApi()
    {
        $credits = credits::orderBy('created_at', 'desc')->get();

        if ($credits){
            return response()->json(['creditList'=>$credits]);
        }
     
        return response()->json(['errors'=>"Offer Not Found"]);
    }


    public function editCustomer($role, $id)
    {
        return view('admin_theme/pages/customer/editCustomer', compact('role', 'id'));
    }
}

