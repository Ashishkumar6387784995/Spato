<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Delivery_notes;
use Illuminate\Support\Facades\Validator;
use App\Mail\DeliveryNotesMailer;
use Illuminate\Support\Facades\Mail;

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
        
        $lastOffer = Delivery_notes::latest()->first();
        if ($lastOffer) {
            $lastOffer= $lastOffer->Lieferschein_Nr;
            // Assuming $lastOffer is 'LI-1234'
      
            // Split the string into an array based on the dash
            $parts = explode('-', $lastOffer);
            $parts= $parts[1];
                
            // Increment the numeric part
            $newNumericPart = $parts + 1;
    
            // Create the new offerNo
            $newDeliveryNotesNo = 'LI-' . $newNumericPart;
            // echo $newOfferNo;

            // $newOfferNo will be 'LI-1235'
        }
        else {
            $newDeliveryNotesNo = 'LI-1234';
        }

        return view('admin_theme/pages/delivery_notes/addDeliveryNotes')->with(compact('newDeliveryNotesNo','role'));
    }


    public function addDeliveryNotesApi(Request $request){

        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'Lieferschein_Nr' => 'required|string|unique:delivery_notes',
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
            $offer->Ihre_Ust_ID = $request->input('Ihre_Ust_ID');

            $offer->POS = $dynamicField['POS'];
            $offer->Produkt = $dynamicField['Produkt'];
            $offer->Beschreibung = $dynamicField['Beschreibung'];
            $offer->Menge = $dynamicField['Menge'];
            $offer->Einheit = $dynamicField['Einheit'];
        
            $offer->save();
        }

        // Return a success response
        return response()->json(['success' => "Delivery Notes Is Added SuccessFully"]);
    }

     
    // function is used for send Delivery Notes Mail
    public function sendDeliveryNotesMailsToB2C(Request $request)
    {
        $Lieferschein_Nr = $request->input('Lieferschein_Nr');
        $email = $request->input('email');

        // return response()->json(['success' => $email]);

        Mail::to($email)->send(new DeliveryNotesMailer($Lieferschein_Nr));

        return response()->json(['success' => "Delivery Notes Mail Send SuccessFully"]);
    }
}
