<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class CustomerMngController extends Controller
{
    public function customerListingApi()
    {
        $User = User::where('role', '!=', 'Admin')->orderBy('created_at', 'desc')->first();
        
        if ($User){
            $User = User::where('role', '!=', 'Admin')->orderBy('created_at', 'desc')->get();
            return response()->json(['usersList'=>$User]);
        }
     
        return response()->json(['errors'=>"Customer Not Found"]);
    }


    public function editCustomer($role, $id)
    {
        $record = User::where('id', $id)->where('role', '!=', 'Admin')->first();

        if ($record) {
            return view('admin_theme/pages/customer/editCustomer', compact('role', 'id'));
        }
        return response()->json(['errors'=>"Customer Not Found"]);
    }
}

