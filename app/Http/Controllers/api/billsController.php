<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\bills;

class billsController extends Controller
{
 

    public function billsListingApi()
    {
        $billsNo = bills::orderBy('created_at', 'desc')->get();

        if ($billsNo){
            return response()->json(['billsNo'=>$billsNo]);
        }
     
            return response()->json(['errors'=>"Offer Not Found"]);
    }



    public function addbills()
    {

        // $lastOffer = "AB-123456";
        // $lastOffer = offers::latest()->first();
        // $lastOffer = $lastOffer->Angebots_Nr;
        // Assuming $lastOffer is 'AN-12345'
        $lastOffer = 'RE-12345';



        // Split the string into an array based on the dash
        $parts = explode('-', $lastOffer);
        $parts = $parts[1];




        // Increment the numeric part
        $newNumericPart = $parts + 1;

        // Create the new offerNo
        $newBillNo = 'AN-' . $newNumericPart;
        // echo $newOfferNo;

        // $newOfferNo will be 'AN-12346'


        return view('admin_theme/pages/bills/addbills')->with(compact('newBillNo'));
    }

    
    public function addbillsApi(Request $request){


        $validator = Validator::make($request->all(), [
            // 'Angebots_Nr' => 'required|string',
            'Rechnungsdatum' => 'required|date_format:Y-m-d',
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


 
    $offer = new bills();

    // Set the attributes of the model with the main form data
   

    // Get the dynamic fields from the request
    $dynamicFields = $request->input('inputs');

    // Set dynamic fields on the offer
    foreach ($dynamicFields as $dynamicField) {
        $offer = new bills();
        $offer->Rechnungs_Nr = $request->input('Rechnungs_Nr');
        $offer->Rechnungsdatum = $request->input('Rechnungsdatum');
        $offer->Referenz = $request->input('Referenz');
        $offer->Ihre_Kundennummer = $request->input('Ihre_Kundennummer');
        $offer->Ihre_Ust_ID = $request->input('Ihre_Ust_ID');

        $offer->gesamt_netto = $request->input('gesamt_netto');
        $offer->zzgl_Umsatzsteuer = $request->input('zzgl_Umsatzsteuer');
        $offer->Gesamtbetrag_brutto = $request->input('Gesamtbetrag_brutto');


        $offer->POS = $dynamicField['POS'];
        $offer->Produkt = $dynamicField['Produkt'];
        $offer->Beschreibung = $dynamicField['Beschreibung'];
        // $offer->Menge = $dynamicField['Menge'];
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


    public function editbills()
    {

        return view('admin_theme/pages/bills/editbills');
    }
}
