<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class SuppliersController extends Controller
{

    public function suppliersListingApi()
    {


        $user = Auth::guard('api')->user();

        if ($user->role == 'Admin') {
            $users = User::select('id', 'name', 'role', 'zipCode', 'address')
                ->whereIn('role', ["b2b", "Normal"])
                ->orderBy('created_at', 'desc')
                ->get()
                ->unique('id');
        } else {
            $users = 'Users not found';
        }

        if ($users) {
            return response()->json(['users' => $users, 'responseTo' => 'Admin']);
        } else {
            return response()->json(['errors' => 'Users Not Found']);
        }
    }



    public function addSuppliers($role)
    {

        return view('admin_theme/pages/suppliers/addSuppliers')->with(compact('role'));
    }

    public function addSuppliersApi(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'Lieferantennummer' => 'required|unique:users',
            'firm_name' => 'required',
            'Straße' => 'required',
            'Ort' => 'required',
            'PLZ' => 'required|numeric',
            'Land' => 'required|string',
            'vat_id' => 'required|string',
            'mobile' => 'required|integer|min:8|',
            'password' => 'required|min:8|',
            'email' => 'required|email|unique:users',
        
            'Zahlung' => 'required|string',
            'Shop_APP' => 'required|string',
           
        ]);

        if ($validator->fails()) {
            return response()->json(['ValidationError' => $validator->errors()]);
        }

        $user = Auth::guard('api')->user();

        if ($user->role == 'Admin') {

            $user = new User();
            $user->Lieferantennummer = $request->input('Lieferantennummer');
            $user->name = $request->input('firm_name');
            $user->email  = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->mobile = $request->input('mobile');


            $user->role = "supplier";
            $user->address = $request->input('Straße') . ' ' . $request->input('Ort') . ' ' . $request->input('Land');
            $user->zipCode = $request->input('PLZ');
            $user->vatNo = $request->input('vat_id');
            // $user->Zahlung = $request->input('Zahlung');
            $user->Shop_APP = $request->input('Shop_APP');
           

            $user->save();

            // Return a success response
            return response()->json(['success' => "Supplier Is Added Successfully",]);
        } else {
            // Return a success response
            return response()->json(['error' => "Supplier Is not Added SuccessFully",]);
        }
    }
}
