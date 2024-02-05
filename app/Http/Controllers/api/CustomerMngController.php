<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CustomerMngController extends Controller
{

    // function for get data of all customer
    public function customerListingApi()
    {
        $User = User::where('role', '!=', 'Admin')->orderBy('created_at', 'desc')->first();
        
        if ($User){
            $User = User::where('role', '!=', 'Admin')->orderBy('created_at', 'desc')->get();
            return response()->json(['usersList'=>$User]);
        }
     
        return response()->json(['errors'=>"Customer Not Found"]);
    }


    // function for finding data for customer edit
    public function editCustomer($role, $id)
    {
        $record = User::where('id', $id)->where('role', '!=', 'Admin')->first();
        if ($record) {
            return view('admin_theme/pages/customer/editCustomer', compact('role', 'id'));
        }
        return response()->json(['errors'=>"Customer Not Found"]);
    }


    // function for updating record of customer
    public function updateCustomer(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'customerRole' => 'required',
        ]);

        // check submit type is saveAll
        if ($request->saveFormType =='saveAll') {
            $validator = Validator::make($request->all(), [
                'customerRole' => 'required',
                'password' => 'required|min:8|confirmed',
            ]);
        }

        if ($validator->fails()) {
            // Return validation errors in the response
            return response()->json(['errors' => $validator->errors()]);
        }

        // check for valid customer
        $record = User::where('id', $request->saveLieferschein_Nr)->where('role', '!=', 'Admin')->first();

        if ($record) {
            $record->role = $request->input('customerRole');

            // check submit type is saveAll
            if ($request->saveFormType =='saveAll') {
                $record->password = Hash::make($request->input('password'));
            }

            $record->update();
            // dd($record);
            return response()->json(['success' => 'Customer Updated Successfully', 'data' => $record]);
        }
        return response()->json(['errors'=>"Customer Not Found"]);
    }


    // this function is used for edit customer
    public function deleteCustomer(Request $request, $id)
    {
        // Find and delete the Customer with the given customer ID 
        $record = User::where('id', $id)->where('role', '!=', 'Admin')->first();

        if ($record) {
            $record->role = 'Normal';
            $record->update();
            return response()->json(['success' => 'Customer delete successfully']);
        }

        return response()->json(['success' => 'Customer not found'], 404);
    }
}

