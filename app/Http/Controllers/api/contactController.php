<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class contactController extends Controller
{

    public function contactsListingApi()
    {


        $user = Auth::guard('api')->user();

        if ($user->role == 'Admin') {
            $users = User::select('id', 'name', 'role', 'zipCode', 'address')
            ->whereIn('role', ["b2b", "Normal"])
            ->orderBy('created_at', 'desc')
            ->get()
            ->unique('id');

        } else {
            $users = 'offer not found';
        }

        if ($users) {
            return response()->json(['users' => $users, 'responseTo' => 'Admin']);
        } else {
            return response()->json(['errors' => 'Users Not Found']);
        }
    }


    public function addContacts($role)
    {

        return view('admin_theme/pages/contacts/addContacts')->with(compact('role'));
    }

    public function addContactsApi(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'typ' => 'required',
            'firm_name' => 'required',
            'Straße' => 'required',
            'Ort' => 'required',
            'PLZ' => 'required|numeric',
            'Land' => 'required|string',
            'vat_id' => 'required|string',
            'mobile' => 'required|integer|min:8|',
            'password' => 'required|min:8|',
            'email' => 'required|email|unique:users',
            'Newsletter' => 'required|string',
            'rabatt_Gruppe' => 'required|string',
            // 'Zahlung' => 'required|string',
            // 'MwSt_Satz' => 'required|string',
            'Shop_APP' => 'required|string',
            'Premium_connection' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['ValidationError' => $validator->errors()]);
        }

        $user = Auth::guard('api')->user();

        if ($user->role == 'Admin') {



            $user = new User();
            $user->name = $request->input('firm_name');
            $user->email  = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->mobile = $request->input('mobile');

            $user->action = $request->input('Newsletter');
            $user->role = $request->input('typ');
            $user->address = $request->input('Straße') . ' ' . $request->input('Ort') . ' ' . $request->input('Land');
            $user->zipCode = $request->input('PLZ');
            $user->vatNo = $request->input('vat_id');
            $user->rabatt_Gruppe = $request->input('rabatt_Gruppe');
            $user->Zahlung = $request->input('Zahlung'); 
            $user->MwSt_Satz = $request->input('MwSt_Satz');


            $user->Shop_APP = $request->input('Shop_APP');
            $user->Premium_connection = $request->input('Premium_connection');

            $user->save();

            // Return a success response
            return response()->json(['success' => "User Is Added Successfully",]);
        } else {
            // Return a success response
            return response()->json(['error' => "User Is not Added SuccessFully",]);
        }
    }
}
