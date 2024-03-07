<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\offers;
use App\Models\Product;
use App\Models\Assignments_list;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use App\Mail\OfferMailer;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;



class OfferController extends Controller
{

    public function offerListing()
    {


        $user = Auth::guard('api')->user();

        if ($user->role == 'Admin') {
            $offers = offers::select('Angebots_Nr','Angebotsdatum','Ihre_Kundennummer','gesamt_netto', 'status')->orderBy('created_at', 'desc')->get()->unique('Angebots_Nr');
        } elseif ($user->role == 'b2b') {
            $offers = offers::select('Angebots_Nr','Angebotsdatum','Ihre_Kundennummer','gesamt_netto', 'status')->where('Ihre_Kundennummer', $user->id)->orderBy('created_at', 'desc')->get()->unique('Angebots_Nr');
        } elseif ($user->role == 'Normal') {
            $offers = offers::select('Angebots_Nr','Angebotsdatum','Ihre_Kundennummer','Produkt','Beschreibung','Menge','Einheit','Einzelpreis','Rabatt','Gesamtpreis','gesamt_netto', 'status')->where('Ihre_Kundennummer', $user->id)->orderBy('created_at', 'desc')->get();
            $offersGroupBy = offers::select('Angebots_Nr', 'Angebotsdatum', 'Ihre_Kundennummer', 'gesamt_netto', 'status')
            ->where('Ihre_Kundennummer', $user->id)
            ->orderByDesc('created_at')
            ->get()
            ->unique('Angebots_Nr');

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

        return view('admin_theme/pages/offers/editOffers')->with(compact('role'));
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
            'Angebots_Nr' => 'required|string|unique:offers_list',
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
        } else {
            // Return a success response
            return response()->json(['error' => "Offer Is not Added SuccessFully",]);
        }
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


    // function for update offer status by offer code
    public function updateOfferB2B(Request $request)
    {
        $record = offers::where('Angebots_Nr', $request->offer_code)->update(['status' => 'Bestätigt']);
        // dd($record);

        if ($record) {
            return response()->json(['message' => 'Status Updated successfully', 'record'=>$record]);
        } else {
            return response()->json(['erors' => 'Status Not Updated']);
        }
    }


    // function for update bill status by bill code
    public function updateOfferStatus(Request $request)
    {
        $user = Auth::guard('api')->user();

        if (offers::where('Angebots_Nr', $request->Angebots_Nr)->where('Ihre_Kundennummer', $user->id)->where('Angebotsdatum', '<', date('Y-m-d'))->first()) {
            return response()->json(['status'=>'0', 'message' => 'Offer No. '. $request->Angebots_Nr.' Expired']);
        }
        $record = offers::where('Angebots_Nr', $request->Angebots_Nr)->where('Ihre_Kundennummer', $user->id)->update(['status' => 'schließen']);
        // dd($record);

        if ($record) {
            return response()->json(['status'=>'1', 'message' => 'Offer No. '. $request->Angebots_Nr.' Status Updated successfully', 'record'=>$record]);
        } else {
            return response()->json(['erors' => 'Status Not Updated']);
        }
    }


    // function for get offers details by his Angebots_Nr
    public function getOfferDetails(Request $request){
        $user = Auth::guard('api')->user();
        $offers = offers::where('Ihre_Kundennummer', $user->id)->where('Angebots_Nr', $request->Angebots_Nr)->orderBy('created_at', 'desc')->get();
        if (count($offers)) {
            return response()->json(['status'=>'1' ,'offersList' => $offers]);
        }
        else {
            return response()->json(['status'=>'0' ,'message' => 'No offer Found']);
        }
    }


    // function for get Generated Product Dtl Api
    public function getGeneratedProductDtlApi(Request $request){

        $page_name = $request->page_name;
        $generatedNo = $request->generatedNo;

        if ($page_name=='Offer') {      // if offer
            $products = offers::select('Angebots_Nr as guessedGenID')->where('Angebots_Nr', 'LIKE', '%'.$generatedNo.'%')->where('status', 'Bestätigt')->where('assign_status', 'Unassigned')->orderby('Angebots_Nr', 'ASC')->get()->unique('guessedGenID');
            $success  = offers::select('Ihre_Kundennummer', 'Produkt', 'Beschreibung', 'Menge', 'Einheit', 'Einzelpreis', 'Rabatt', 'Gesamtpreis')->where('Angebots_Nr', $generatedNo)->where('status', 'Bestätigt')->orderby('Produkt', 'ASC')->get();
        }
        
        if ($page_name=='Assignment') {  // if Assignment
            $products = Assignments_list::select('Auftrags_Nr as guessedGenID')->where('Auftrags_Nr', 'LIKE', '%'.$generatedNo.'%')->orderby('Auftrags_Nr', 'ASC')->get()->unique('guessedGenID');
            $success  = Assignments_list::select('Ihre_Kundennummer', 'Produkt', 'Beschreibung', 'Menge', 'Einheit', 'Einzelpreis', 'Rabatt', 'Gesamtpreis')->where('Auftrags_Nr', $generatedNo)->orderby('Produkt', 'ASC')->get();
        }
        
        return response()->json(['status'=> count($success), 'success'=>$success, 'productsList'=>$products]);
    }
}
