<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\bills;
use App\Mail\BillsMailer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


class billsController extends Controller
{


    public function billsListingApi()
    {
        $user = Auth::guard('api')->user();

        if ($user->role == 'Admin') {
            $billsNo = bills::orderBy('created_at', 'desc')->get();
        } elseif ($user->role == 'b2b') {
            $billsNo = bills::select()->where('Ihre_Kundennummer', $user->id)->orderBy('created_at', 'desc')->get();
        } else {
            $billsNo = 'offer not found';
        }

        if ($billsNo) {
            return response()->json(['billsNo' => $billsNo]);
        } else {
            return response()->json(['errors' => 'Bills Not Found']);
        }
    }



    public function addbills($role)
    {
        $lastOffer = bills::latest()->first();
        if ($lastOffer) {
            $lastOffer = $lastOffer->Rechnungs_Nr;
            // Assuming $lastOffer is 'RE-12345'
            // $lastOffer = 'RE-12345';



            // Split the string into an array based on the dash
            $parts = explode('-', $lastOffer);
            $parts = $parts[1];




            // Increment the numeric part
            $newNumericPart = $parts + 1;

            // Create the new offerNo
            $newBillNo = 'RE-' . $newNumericPart;
            // echo $newOfferNo;

            // $newOfferNo will be 'RE-12346'
        } else {
            $newBillNo = 'RE-12345';
        }


        return view('admin_theme/pages/bills/addbills')->with(compact('newBillNo', 'role'));
    }


    public function addbillsApi(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'Rechnungs_Nr' => 'required|string|unique:bills_list',
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

        
        // $user = Auth::guard('api')->user();

        // if ($user->role == 'Admin') {


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
            $offer->Menge = $dynamicField['Menge'];
            $offer->Einheit = $dynamicField['Einheit'];
            $offer->Einzelpreis = $dynamicField['Einzelpreis'];
            $offer->Rabatt = $dynamicField['Rabatt'];
            $offer->Gesamtpreis = $dynamicField['Gesamtpreis'];
            $offer->save();
        }

        // Return a success response
        return response()->json(['success' => "Bills Are Added SuccessFully"]);

    // }
    // else{
    //       // Return a success response
    // return response()->json(['error' => "Bills Is not Added SuccessFully",]); 
    // }
        // Return a success response


    }


    public function editbills()
    {

        return view('admin_theme/pages/bills/editbills');
    }



    // function is used for send Assignment Mail
    public function sendBillstMailsToB2C(Request $request)
    {
        $Rechnungs_Nr = $request->input('Rechnungs_Nr');
        $email = $request->input('email');

        // return response()->json(['success' => $email]);

        Mail::to($email)->send(new BillsMailer($Rechnungs_Nr));

        return response()->json(['success' => "Bill Mail Send SuccessFully"]);
    }
}
