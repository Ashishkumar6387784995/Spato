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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class OfferController extends Controller
{

    public function offerListing()
    {


        $user = Auth::guard('api')->user();

        if ($user->role == 'Admin') {
            $offers = Offers::orderBy('created_at', 'desc')->get();
        } elseif ($user->role == 'b2b') {
            $offers = Offers::select()->where('Ihre_Kundennummer', $user->id)->orderBy('created_at', 'desc')->get();
        } elseif ($user->role == 'Normal') {
            $offers = Offers::select()->where('Ihre_Kundennummer', $user->id)->orderBy('created_at', 'desc')->get();
            $offersGroupBy = Offers::select('Angebots_Nr', DB::raw('MAX(Angebotsdatum) as max_angebotsdatum'))
            ->where('Ihre_Kundennummer', $user->id)
            ->orderBy('created_at', 'desc')
            ->groupBy('Angebots_Nr')
            ->get();
            return response()->json(['offersList' => $offers, 'user' => $user, 'offersGroupBy' => $offersGroupBy]);
        } else {
            $offers = 'offer not found';
        }

        if ($offers) {
            return response()->json(['offersList' => $offers, 'user' => $user]);
        } else {
            return response()->json(['errors' => 'Offer Not Found']);
        }
    }


    public function editOffer($role)
    {

        return view('admin_theme/pages/offers/editoffers')->with(compact('role'));
    }

    public function addOffer($role)
    {

        // $lastOffer = "AB-123456";
        $lastOffer = offers::latest()->first();

        if ($lastOffer) {
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



        } else {
            $newOfferNo = 'AN-1234';
        }
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




        $user = Auth::guard('api')->user();

        if ($user->role == 'Admin') {

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
        }
        else{
              // Return a success response
        return response()->json(['error' => "Offer Is not Added SuccessFully",]); 
        }



        // Return a success response


    }



    public function downloadPdf($offerId)
    {
        // Retrieve the offer
        $offer = offers::where('Angebots_Nr', $offerId)->first();

        if ($offer) {
            // Retrieve offers associated with the offer ID
            $offers = offers::where('Angebots_Nr', $offerId)->get();

            // Generate PDF from the view
            $pdf = PDF::loadView('admin_theme/pages/offers/offersPdf', compact('offers'));

            // Specify the directory path for storing the PDF in the public storage folder
            $pdfDirectory = 'public/offers_pdf';

            // Specify the file path for the PDF
            $pdfFilePath = $offerId . '.pdf';

            // Save the PDF in the specified path
            Storage::put($pdfDirectory . '/' . $pdfFilePath, $pdf->output());

            // Get the public URL of the saved PDF file
            $pdfUrl = Storage::url($pdfDirectory . '/' . $pdfFilePath);

            // Download the saved PDF
            return response()->download(storage_path('app/' . $pdfDirectory . '/' . $pdfFilePath));
        } else {
            return back()->with('error', 'Offer not found');
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

    public function viewOffersForB2C()
    {

        return view('frontEnd/Pages/offers/viewOffersForB2C');
    }
}
