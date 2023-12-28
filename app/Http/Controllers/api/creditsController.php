<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\credits;

class creditsController extends Controller
{
    public function creditListingApi()
    {
        $credits = credits::orderBy('created_at', 'desc')->get();

        if ($credits){
            return response()->json(['creditList'=>$credits]);
        }
     
            return response()->json(['errors'=>"Offer Not Found"]);
    }


    public function editOffer()
    {

        return view('admin_theme/pages/offers/editoffers');
    }

    public function addCredits()
    {

        // $lastOffer = "AB-123456";
        // $lastOffer = offers::latest()->first();
        //  $lastOffer= $lastOffer->Angebots_Nr;
        // Assuming $lastOffer is 'AN-12345'
        $lastOffer = 'AN-12345';


  
            // Split the string into an array based on the dash
            $parts = explode('-', $lastOffer);
            $parts= $parts[1];
        
         
 
   
        // Increment the numeric part
        $newNumericPart = $parts + 1;

        // Create the new offerNo
        $CreditNo = 'Gs-' . $newNumericPart;
        // echo $newOfferNo;

        // $newOfferNo will be 'AN-12346'


        return view('admin_theme/pages/credits/addCredits')->with(compact('CreditNo'));
    }

    public function addCreditsApi(Request $request){


        $validator = Validator::make($request->all(), [
            // 'Angebots_Nr' => 'required|string',
            'Gutschriftsdatum' => 'required|date_format:Y-m-d',
            // 'Referenz' => 'required|string',
            'Ihre_Kundennummer' => 'required|string',
            'inputs.*.POS' => 'required|numeric',
            'inputs.*.Produkt' => 'required|string',
            'inputs.*.Beschreibung' => 'required|string',
            // 'inputs.*.Menge' => 'required|string',
            'inputs.*.Einheit' => 'required|string',
            'inputs.*.Einzelpreis' => 'required|string',
            'inputs.*.Rabatt' => 'required|string',
            'inputs.*.Gesamtpreis' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]); // 422 Unprocessable Entity
        }


 
    $offer = new credits();

    // Set the attributes of the model with the main form data
   

    // Get the dynamic fields from the request
    $dynamicFields = $request->input('inputs');

    // Set dynamic fields on the offer
    foreach ($dynamicFields as $dynamicField) {
        $offer = new credits();
        $offer->Gutschrifts_Nr = $request->input('Gutschrifts_Nr');
        $offer->Gutschriftsdatum = $request->input('Gutschriftsdatum');
        $offer->Referenz = $request->input('Referenz');
        $offer->Ihre_Kundennummer = $request->input('Ihre_Kundennummer');

        $offer->gesamt_netto = $request->input('gesamt_netto');
        $offer->zzgl_Umsatzsteuer = $request->input('zzgl_Umsatzsteuer');
        $offer->Gesamtbetrag_brutto = $request->input('Gesamtbetrag_brutto');


        $offer->POS = $dynamicField['POS'];
        $offer->Produkt = $dynamicField['Produkt'];
        $offer->Beschreibung = $dynamicField['Beschreibung'];
        $offer->Menge = $dynamicField['Menge'];
        $offer->Einheit = $dynamicField['Einheit'];
        $offer->Einzelpreis = $dynamicField['Einzelpreis'];
        $offer->Rabatt = $dynamicField['Rabatt'];
        $offer->Gesamtpreis = $dynamicField['Gesamtpreis'];
        $offer->save();
    }      

        // Return a success response
        return response()->json(['success' => "Offer Is Added SuccessFully"]);

    // Return a success response


    }
}
