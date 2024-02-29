<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Claims_List;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class claims_manager_Controller extends Controller
{
    public function claimsListing(){

        $user = Auth::guard('api')->user();

        $cliamList = user::select('users.name', 'claims_lists.*')
                    ->join('claims_lists', 'users.id', '=', 'claims_lists.Ihre_Kundennummer')
                    ->orderby('claims_lists.created_at', 'ASC');

        // filter by role
        if ($user->role == 'Admin' || $user->role == 'b2b') {
            $cliamList = $cliamList->where('claims_lists.created_by', $user->id)->get();
        } elseif ($user->role == 'supplier') {
            $cliamList = $cliamList->where('claims_lists.supplier_number', $user->Lieferantennummer)->get();
        } else {
            $cliamList = 'Claims not found';
        }

        if ($cliamList) {
            return response()->json(['cliamList' => $cliamList, 'user' => $user]);
        } else {
            return response()->json(['errors' => 'Claim Not Found']);
        }
    }


    public function editClaims($role, $id){
        return view('admin_theme/pages/claim_manager/editClaims')->with(compact('role', 'id'));
    }

    public function addCliams($role){

        
        // $lastOffer = "CL-123456";
        $lastOffer = Claims_List::latest()->first();

        if ($lastOffer) {

            $lastOffer = $lastOffer->Claim_Nr;
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

    // function for save record
    public function addClaimsApi(Request $request)
    {
        $user = Auth::guard('api')->user();

        $validator = Validator::make($request->all(), [
            'Claim_Nr' => 'required|string|unique:claims_lists',
            'Claimdatum' => 'required|date_format:Y-m-d',
            // 'Referenz' => 'required|string',
            'Ihre_Kundennummer' => 'required|string',
            'POS' => 'required|numeric',
            'Produkt' => 'required|string',
            'Beschreibung' => 'required|string',
            'Menge' => 'required',
            'Einheit' => 'required',
            'Seriennummer' => 'required|string',
            'Fehlerbeschreibung' => 'required|string',
            'imageUpload' => 'required',
            'status' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]); // 422 Unprocessable Entity
        }

        // find supplier
            $parts = explode(".", $request->Produkt);
            $supplier_number = $parts[0]; // Get the value after the dot symbol
            // dd($supplier_number);

        // check for valid supplier number
            $validSupplier = User::where('Lieferantennummer', $supplier_number)->where('role', 'supplier')->first();
            if (!$validSupplier) {
                return response()->json(['productError' => "Please enter valid Product Number"]);
            }

        // for images
            if ($request->hasFile('imageUpload')) {
                $uploadedImage = $request->file('imageUpload');
                $uploadedImage->store('public/claims_mng_images');

                // Save file path in the database
                $imagePath = '/claims_mng_images/' . $uploadedImage->hashName();

                // You can also save the full path like $uploadedimages[$image] = $imagePath; if needed.
            }

        $claim = new Claims_List();
        $claim->Claim_Nr = $request->input('Claim_Nr');
        $claim->Claimdatum = $request->input('Claimdatum');
        $claim->Referenz = $request->input('Referenz');
        $claim->Ihre_Kundennummer = $request->input('Ihre_Kundennummer');
        $claim->Ihre_Ust_ID = $request->input('Ihre_Ust_ID');

        $claim->POS = $request->POS;
        $claim->Produkt = $request->Produkt;
        $claim->Beschreibung = $request->Beschreibung;
        $claim->Menge = $request->Menge;
        $claim->Einheit = $request->Einheit;
        $claim->supplier_number = $supplier_number;
        $claim->Seriennummer = $request->Seriennummer;
        $claim->Fehlerbeschreibung = $request->Fehlerbeschreibung;
        $claim->imageUpload = $imagePath;
        $claim->status = $request->status;
        $claim->created_by = $user->id;
        $claim->save();

        // Return a success response
        return response()->json(['success' => "Claim Is Added SuccessFully"]);
    }
}
