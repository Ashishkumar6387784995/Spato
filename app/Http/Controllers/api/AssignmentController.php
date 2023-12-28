<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Assignments_list;

class AssignmentController extends Controller
{
  
    public function AssignmentListing()
    {
        $assignments = Assignments_list::orderBy('created_at', 'desc')->get();

        if ($assignments){
            return response()->json(['assignments'=>$assignments]);
        }
     
            return response()->json(['errors'=>"Assignments Not Found"]);
    }


    public function editAssignment(){
     
        return view('admin_theme/pages/assignments/editAssignments');
    }

    public function addAssignment(){
     
         // $lastOffer = "AB-123456";
         $lastOffer = Assignments_list::latest()->first();
         $lastOffer= $lastOffer->Auftrags_Nr;
        // Assuming $lastOffer is 'AN-12345'
        // $lastOffer = 'AN-12345';


  
            // Split the string into an array based on the dash
            $parts = explode('-', $lastOffer);
            $parts= $parts[1];
        
         
 
   
        // Increment the numeric part
        $newNumericPart = $parts + 1;

        // Create the new offerNo
        $newAssignmentNo = 'AN-' . $newNumericPart;
        // echo $newOfferNo;

        // $newOfferNo will be 'AN-12346'


        return view('admin_theme/pages/assignments/addAssignments')->with(compact('newAssignmentNo'));


    }

    public function addAssignmentsApi(Request $request){

      

        $validator = Validator::make($request->all(), [
            // 'Angebots_Nr' => 'required|string',
            'Angebotsdatum' => 'required|date_format:Y-m-d',
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
            return response()->json(['errors' => $validator->errors()]);
        }


 
    $offer = new Assignments_list();

    // Set the attributes of the model with the main form data
   

    // Get the dynamic fields from the request
    $dynamicFields = $request->input('inputs');



    // Set dynamic fields on the offer
    foreach ($dynamicFields as $dynamicField) {
        $offer = new Assignments_list();
        $offer->Auftrags_Nr = $request->input('Auftrags_Nr');
        $offer->Angebotsdatum = $request->input('Angebotsdatum');
        $offer->Referenz = $request->input('Referenz');
        $offer->Ihre_Kundennummer = $request->input('Ihre_Kundennummer');
        $offer->Ihre_Ust_ID = $request->input('Ihre_Ust_ID');

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
        return response()->json(['success' => "Assignment Added SuccessFully"]);

      // Return a success response


    }



}
