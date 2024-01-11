<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\offers;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use App\Mail\OfferMailer;
use App\Mail\sendResetLinkEmail;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class OfferController extends Controller
{
    public function offerListing()
    {
        $offers = offers::orderBy('created_at', 'desc')->get();

        if ($offers) {
            return response()->json(['offersList' => $offers]);
        }

        return response()->json(['errors' => "Offer Not Found"]);
    }


    public function editOffer()
    {

        return view('admin_theme/pages/offers/editoffers');
    }

    public function addOffer($role)
    {

        // $lastOffer = "AB-123456";
        $lastOffer = offers::latest()->first();
        $lastOffer = $lastOffer->Angebots_Nr;
        // Assuming $lastOffer is 'AN-12345'
        // $lastOffer = 'AN-12345';



        // Split the string into an array based on the dash
        $parts = explode('-', $lastOffer);
        $parts = $parts[1];




        // Increment the numeric part
        $newNumericPart = $parts + 1;

        // Create the new offerNo
        $newOfferNo = 'AN-' . $newNumericPart;
        // echo $newOfferNo;

        // $newOfferNo will be 'AN-12346'


        return view('admin_theme/pages/offers/addOffers')->with(compact('newOfferNo', 'role'));
    }

    public function addOfferApi(Request $request)
    {



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
            return response()->json(['errors' => $validator->errors()]); // 422 Unprocessable Entity
        }





        // Set the attributes of the model with the main form data


        // Get the dynamic fields from the request
        $dynamicFields = $request->input('inputs');

        // Set dynamic fields on the offer
        foreach ($dynamicFields as $dynamicField) {
            $offer = new offers();
            $offer->Angebots_Nr = $request->input('Angebots_Nr');
            $offer->Angebotsdatum = $request->input('Angebotsdatum');
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
        return response()->json(['success' => "Offer Is Added SuccessFully", 'dynamicFields' => $dynamicFields]);

        // Return a success response


    }


  

    public function downloadPdf($offerId)
    {

        $offer = offers::where('Angebots_Nr', $offerId)->first();
        // dd($offers);
        if($offer){
            $offers = offers::where('Angebots_Nr', $offerId)->get(); 
            // dd($offers);  
            $pdf = PDF::loadView('admin_theme/pages/offers/offersPdf', compact('offers'));
        
            // Save the PDF to the storage/app/pdf directory
            $pdfFilePath = 'pdf/' . $offerId . '.pdf';
            Storage::put($pdfFilePath, $pdf->output());
        
            // Download the saved PDF
            return response()->download(storage_path('app/' . $pdfFilePath));
        }
        else{
            return back();
        }
       
    }
    

    public function sendOfferMailsToB2C(Request $request)
{



    $offerId = $request->input('Angebots_Nr');
    $email = $request->input('email');
   
    // return response()->json(['success' => $email]);

    Mail::to($email)->send(new OfferMailer($offerId,));

      return response()->json(['success' => "Pfd File Is Send SuccessFully"]);
   
}

}
