<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Claims_List;
use App\Models\User;

class claims_manager_Controller extends Controller
{
    public function billsListing(){
     
        return view('admin_theme/pages/claim_manager/assignmentList');
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
            $parts = explode(".", $request->POS);
            $supplier_number = $parts[0]; // Get the value after the dot symbol
            // dd($supplier_number);

        // check for valid supplier number
            $validSupplier = User::where('Lieferantennummer', $supplier_number)->where('role', 'supplier')->first();
            if (!$validSupplier) {
                return response()->json(['posError' => "Please enter valid POS Number"]);
            }

        // for images
            if ($request->hasFile('imageUpload')) {
                $uploadedImage = $request->file('imageUpload');
                $uploadedImage->store('public/claims_mng_images');

                // Save file path in the database
                $imagePath = '/claims_mng_images/' . $uploadedImage->hashName();

                // You can also save the full path like $uploadedimages[$image] = $imagePath; if needed.
            }

        $offer = new Claims_List();
        $offer->Claim_Nr = $request->input('Claim_Nr');
        $offer->Claimdatum = $request->input('Claimdatum');
        $offer->Referenz = $request->input('Referenz');
        $offer->Ihre_Kundennummer = $request->input('Ihre_Kundennummer');
        $offer->Ihre_Ust_ID = $request->input('Ihre_Ust_ID');

        $offer->POS = $request->POS;
        $offer->Produkt = $request->Produkt;
        $offer->Beschreibung = $request->Beschreibung;
        $offer->Menge = $request->Menge;
        $offer->Einheit = $request->Einheit;
        $offer->supplier_number = $supplier_number;
        $offer->Seriennummer = $request->Seriennummer;
        $offer->Fehlerbeschreibung = $request->Fehlerbeschreibung;
        $offer->imageUpload = $imagePath;
        $offer->status = $request->status;
        $offer->save();

        // Return a success response
        return response()->json(['success' => "Claim Is Added SuccessFully"]);
    }
}
