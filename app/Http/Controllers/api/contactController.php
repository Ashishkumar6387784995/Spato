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
            $offers = User::select('Angebots_Nr', 'Angebotsdatum', 'Ihre_Kundennummer', 'gesamt_netto', 'status')->orderBy('created_at', 'desc')->get()->unique('Angebots_Nr');
        } else {
            $offers = 'offer not found';
        }

        if ($offers) {
            return response()->json(['offersList' => $offers, 'user' => $user]);
        } else {
            return response()->json(['errors' => 'Offer Not Found']);
        }
    }


    public function addContacts($role)
    {

        return view('admin_theme/pages/contacts/addContacts')->with(compact('role'));
    }

    public function addContactsApi(Request $request)
    {



        $validator = Validator::make($request->all(), [

            // 'typ' => 'required',
            // 'Ansprechpartner' => 'required',
            // 'Straße' => 'required',
            // 'Ort' => 'required',
            // 'PLZ' => 'required|numeric',
            // 'Land' => 'required|string',
            // 'vat_id' => 'required|string',
            // 'mobile' => 'required|integer|min:8|',
            // 'password' => 'required|min:8',
            // 'mail' => 'required|email|unique:users',
            // 'Newsletter' => 'required|string',
            // 'rabatt_Gruppe' => 'required|string',
            // 'Shop_APP' => 'required|string',
            // 'Shop_APP' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $user = Auth::guard('api')->user();

        if ($user->role == 'Admin') {

            $dynamicFields = $request->input('inputs');

            // Set dynamic fields on the offer

            $user = new User();
            $user->name = $request->input('Ansprechpartner');
            $user->email  = $request->input('mail');
            $user->password = Hash::make($request->input('password'));
            $user->mobile = $request->input('mobile');

            $user->action = $request->input('Newsletter');
            $user->role = $request->input('typ');
            $user->address = $request->input('Straße') . ' ' . $request->input('Ort') . ' ' . $request->input('Land');
            $user->zipCode = $request->input('PLZ');
            $user->vatNo = $request->input('vat_id');

            $user->save();

            // Return a success response
            return response()->json(['success' => "Offer Is Added SuccessFully",]);
        } else {
            // Return a success response
            return response()->json(['error' => "Offer Is not Added SuccessFully",]);
        }
    }
}
