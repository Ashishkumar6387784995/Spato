<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\offers;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{
    public function offerListing()
    {

        return view('admin_theme/pages/offers/offerList');
    }


    public function editOffer()
    {

        return view('admin_theme/pages/offers/editoffers');
    }

    public function addOffer()
    {

        // $lastOffer = offers::latest()->first();
        // Assuming $lastOffer is 'AN-12345'
        $lastOffer = 'AN-12345';

        // Extract the numeric part
        $numericPart = preg_replace('/[^0-9]/', '', $lastOffer);

        // Increment the numeric part
        $newNumericPart = $numericPart + 1;

        // Create the new offerNo
        $newOfferNo = 'AN-' . $newNumericPart;
        // echo $newOfferNo;

        // $newOfferNo will be 'AN-12346'


        return view('admin_theme/pages/offers/addoffers')->with(compact('newOfferNo'));
    }

    public function addOfferApi(Request $request){

        // return response()->json(['hello' => 'hello']);

         // $lastOffer = offers::latest()->first();
        // Assuming $lastOffer is 'AN-12345'
        $lastOffer = 'AN-12345';

        // Extract the numeric part
        $numericPart = preg_replace('/[^0-9]/', '', $lastOffer);

        // Increment the numeric part
        $newNumericPart = $numericPart + 1;

        // Create the new offerNo
        $newOfferNo = 'AN-' . $newNumericPart;

        // dd($request);

         // Validation rules
         $rules = [
            'Angebots_Nr' => 'required|string',
            'Angebotsdatum' => 'required|date_format:Y-m-d',
            'Referenz' => 'required|string',
            'Ihre_Kundennummer' => 'required|string',
            'inputs.*.POS' => 'required|numeric',
            'inputs.*.Produkt' => 'required|string',
            'inputs.*.Beschreibung' => 'required|string',
            'inputs.*.Menge' => 'required|string',
            'inputs.*.Einheit' => 'required|string',
            'inputs.*.Einzelpreis' => 'required|string',
            'inputs.*.Rabatt' => 'required|string',
            'inputs.*.Gesamtpreis' => 'required|string',
        ];

        // Custom validation messages
        $messages = [
            'inputs.*.POS.required' => 'POS field is required.',
            // Add more custom messages for other fields if needed
        ];

        // Perform validation
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            $errors = $validator->errors();
        
                return response()->json(['errors' => $errors]);
        }

        // If validation passes, retrieve the validated data
        $validatedData = $validator->validated();
      
         return response()->json(['message' => 'Data validated and processed successfully', 'newOfferNo' => $newOfferNo]);
    

    }
}
