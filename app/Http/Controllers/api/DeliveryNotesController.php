<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Delivery_notes;
use Illuminate\Support\Facades\Validator;

class DeliveryNotesController extends Controller
{

    public function DeliveryNotesListingApi()
    {
        $delivery_notes = Delivery_notes::orderBy('created_at', 'desc')->get();

        if ($delivery_notes){
            return response()->json(['delivery_notes'=>$delivery_notes]);
        }
     
            return response()->json(['errors'=>"Offer Not Found"]);
    }


  


    public function editDeliveryNotes(){
     
        return view('admin_theme/pages/delivery_notes/editDeliveryNotes');
    }

    public function addDeliveryNotes($role){
     
        
         // $lastOffer = "AB-123456";
        //  $lastOffer = Delivery_notes::latest()->first();
        //  $lastOffer= $lastOffer->Lieferschein_Nr;
        // Assuming $lastOffer is 'AN-12345'
        $lastOffer = 'Li-12345';


  
            // Split the string into an array based on the dash
            $parts = explode('-', $lastOffer);
            $parts= $parts[1];
        
         
 
   
        // Increment the numeric part
        $newNumericPart = $parts + 1;

        // Create the new offerNo
        $newDeliveryNotesNo = 'AN-' . $newNumericPart;
        // echo $newOfferNo;

        // $newOfferNo will be 'AN-12346'


        return view('admin_theme/pages/delivery_notes/addDeliveryNotes')->with(compact('newDeliveryNotesNo','role'));

      
    }


    public function addDeliveryNotesApi(Request $request){

   

        $validator = Validator::make($request->all(), [
            // 'Angebots_Nr' => 'required|string',
            'Lieferdatum' => 'required|date_format:Y-m-d',
            // 'Referenz' => 'required|string',
            'Ihre_Kundennummer' => 'required|string',
            'inputs.*.POS' => 'required|numeric',
            'inputs.*.Produkt' => 'required|string',
            'inputs.*.Beschreibung' => 'required|string',
            // 'inputs.*.Menge' => 'required|string',
            'inputs.*.Einheit' => 'required|string',
     
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]); 
        }

        // return response()->json(['success' => "Offer Is Added SuccessFully after validation"]);
 
    $offer = new delivery_notes();

    // Set the attributes of the model with the main form data
   

    // Get the dynamic fields from the request
    $dynamicFields = $request->input('inputs');

    // Set dynamic fields on the offer
    foreach ($dynamicFields as $dynamicField) {
        $offer = new Delivery_notes();
        $offer->Lieferschein_Nr = $request->input('Lieferschein_Nr');
        $offer->Lieferdatum = $request->input('Lieferdatum');
        $offer->Referenz = $request->input('Referenz');
        $offer->Ihre_Kundennummer = $request->input('Ihre_Kundennummer');

       


        $offer->POS = $dynamicField['POS'];
        $offer->Produkt = $dynamicField['Produkt'];
        $offer->Beschreibung = $dynamicField['Beschreibung'];
        $offer->Menge = $dynamicField['Menge'];
        $offer->Einheit = $dynamicField['Einheit'];
      
        $offer->save();
    }      

        // Return a success response
        return response()->json(['success' => "Delivery Notes Is Added SuccessFully"]);

    // Return a success response


    }




}
