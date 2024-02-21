<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\credits;
use App\Mail\CreditsMailer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


class creditsController extends Controller
{
    public function creditListingApi()
    {
        $user = Auth::guard('api')->user();

        if ($user->role == 'Admin') {
            $credits = credits::select('Gutschrifts_Nr','Gutschriftsdatum','Ihre_Kundennummer','Einheit')->orderBy('created_at', 'desc')->get()->unique('Gutschrifts_Nr');
        } elseif ($user->role == 'b2b') {
            $credits = credits::select('Gutschrifts_Nr','Gutschriftsdatum','Ihre_Kundennummer','Einheit')->where('Ihre_Kundennummer', $user->id)->orderBy('created_at', 'desc')->get()->unique('Gutschrifts_Nr');
        } else {
            $credits = 'offer not found';
        }

        if ($credits) {
            return response()->json(['creditList' => $credits]);
        } else {
            return response()->json(['errors' => 'Credits Not Found']);
        }
    }


    public function editOffer()
    {

        return view('admin_theme/pages/offers/editoffers');
    }

    public function addCredits($role)
    {

        $lastOffer = credits::latest()->first();
        if ($lastOffer) {

            $lastOffer = $lastOffer->Gutschrifts_Nr;
            // Assuming $lastOffer is 'AN-12345'
            // $lastOffer = 'GS-12345';

            // Split the string into an array based on the dash
            $parts = explode('-', $lastOffer);
            $parts = $parts[1];

            // Increment the numeric part
            $newNumericPart = $parts + 1;

            // Create the new offerNo
            $CreditNo = 'GS-' . $newNumericPart;
            // echo $newOfferNo;

            // $newOfferNo will be 'AN-12346'
        } else {
            $CreditNo = 'GS-12345';
        }


        return view('admin_theme/pages/credits/addCredits')->with(compact('CreditNo', 'role'));
    }

    public function addCreditsApi(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'Gutschrifts_Nr' => 'required|string|unique:credits_list',
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

        $user = Auth::guard('api')->user();

        if ($user->role == 'Admin') {

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
            return response()->json(['success' => "Credits Is Added SuccessFully"]);
        } else {
            // Return a success response
            return response()->json(['error' => "Offer Is not Added SuccessFully",]);
        }
    }



    // function is used for send Delivery Notes Mail
    public function sendCredistMailsToB2C(Request $request)
    {
        $Gutschrifts_Nr = $request->input('Gutschrifts_Nr');
        $email = $request->input('email');

        // return response()->json(['success' => $email]);

        Mail::to($email)->send(new CreditsMailer($Gutschrifts_Nr));

        return response()->json(['success' => "Credits Mail Send SuccessFully"]);
    }
}
