<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Imports\contactsImport;
use Maatwebsite\Excel\Facades\Excel;


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

    public function contactsImportApi(Request $request){

        $validator = Validator::make($request->all(), [
            'contactsImportFile' => 'required|mimes:csv,xlsx',
        ]);

        if ($validator->fails()) {
            // Validation failed, return the errors as a JSON response
            return response()->json(['ValidationError' => $validator->errors()]);
        }

           // Check if the file was uploaded successfully
           if ($request->hasFile('contactsImportFile')) {
            // Get the file from the request
            $excelFile = $request->file('contactsImportFile');

            // Access other form data if needed
            $otherFormData = $request->input('otherFormData');

            // Move the Excel file to a specific location
            $excelFile->move(storage_path('app/public/contacts_import_files'), $excelFile->getClientOriginalName());

            // Process the Excel file and import data into the database using the import class
            $excelFilePath = storage_path('app/public/contacts_import_files') . '/' . $excelFile->getClientOriginalName();
            Excel::import(new contactsImport(), $excelFilePath);

            // Retrieve the last inserted product ID
            $lastProductId = User::latest('id')->first()->id;


            // Return a response or perform other actions
            return response()->json(['success' => 'Data imported successfully']);
        } else {
            // Handle the case where no file was uploaded
            return response()->json(['error' => 'No file uploaded']);   
        }



    }
}
