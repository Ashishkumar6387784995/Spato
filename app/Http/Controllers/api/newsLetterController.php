<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\NewsLetter;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class newsLetterController extends Controller
{
    //
    public function addNewsLetter($role)
    {
        $newsLetter = 'NW-12345';
        // $newsLetter = $this->generateNewsletterID();
        return view('admin_theme/pages/newsLetter/addNewsLetter', compact('role', 'newsLetter'));
    }

    // function for get Total Number Of NewsLetter Users
    public function getTotalNumberOfNewsLetterUsers(Request $request){
        $users = $this->getNewsLetterUsers($request->Kunden);

        return response()->json(['success'=>'1', 'noOfCustomer'=>count($users)]);
    }


    // function for get Product Details DRP
    public function getProductDetailsDRP(Request $request){
        $product  = $request->Produkt;
        $success  = Product::select('id', 'Katalog_Art_Nummer', 'Artikelname', 'Beschreibung_kurz', 'Bild_1', 'Preis_zzgl_MwSt')->where('Katalog_Art_Nummer', $product)->where('status', 'active')->orderby('Katalog_Art_Nummer', 'ASC')->get();
        $products = Product::select('id', 'Katalog_Art_Nummer', 'Artikelname', 'Beschreibung_kurz', 'Bild_1', 'Preis_zzgl_MwSt')->where('Katalog_Art_Nummer', 'LIKE', '%'.$product.'%')->where('status', 'active')->orderby('Katalog_Art_Nummer', 'ASC')->get();
        return response()->json(['status'=> count($success), 'success'=>$success, 'productsList'=>$products]);
    }



    // function for save record
    public function addNewsLetterApi(Request $request)
    {
        $user = Auth::guard('api')->user();

        $validator = Validator::make($request->all(), [
            'Newsletter_Nr' => 'required|string|unique:news_letters',
            'Newsletterdatum' => 'required|date_format:Y-m-d',
            'Kunden' => 'required|string',
            'POS' => 'required|numeric',
            'Produkt' => 'required|string',

            'greeting_info' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]); // 422 Unprocessable Entity
        }

        // find supplier
            $parts = explode(".", $request->Produkt);
            $supplier_number = $parts[0]; // Get the value after the dot symbol
            // dd($supplier_number);

        // check for valid supplier number
            $validSupplier = User::where('Lieferantennummer', $supplier_number)->where('role', 'supplier')->first();
            if (!$validSupplier) {
                return response()->json(['productError' => "Please enter valid Product Number"]);
            }

        // for images
            if ($request->hasFile('imageUpload')) {
                $uploadedImage = $request->file('imageUpload');
                $uploadedImage->store('public/claims_mng_images');

                // Save file path in the database
                $imagePath = '/claims_mng_images/' . $uploadedImage->hashName();

                // You can also save the full path like $uploadedimages[$image] = $imagePath; if needed.
            }

        $claim = new Claims_List();
        $claim->Claim_Nr = $request->input('Claim_Nr');
        $claim->Claimdatum = $request->input('Claimdatum');
        $claim->Referenz = $request->input('Referenz');
        $claim->Ihre_Kundennummer = $request->input('Ihre_Kundennummer');
        $claim->Ihre_Ust_ID = $request->input('Ihre_Ust_ID');

        $claim->POS = $request->POS;
        $claim->Produkt = $request->Produkt;
        $claim->Beschreibung = $request->Beschreibung;
        $claim->Menge = $request->Menge;
        $claim->Einheit = $request->Einheit;
        $claim->supplier_number = $supplier_number;
        $claim->Seriennummer = $request->Seriennummer;
        $claim->Fehlerbeschreibung = $request->Fehlerbeschreibung;
        $claim->imageUpload = $imagePath;
        $claim->status = $request->status;
        $claim->created_by = $user->id;
        $claim->save();

        // Return a success response
        return response()->json(['success' => "Claim Is Added SuccessFully"]);
    }







    // function for generate Newsletter-Nr
    public function generateNewsletterID()
    {
        $lastNewsletterID = Newsletter::latest()->first();

        // If any lastNewsletterID not found
        if ($lastNewsletterID) {
            $lastNewsletterID = $lastNewsletterID->Newsletter_Nr;
            // $lastNewsletterID = 'NW-12345';
            // Assuming $lastNewsletterID is 'NW-12345'
        }else {
            $lastNewsletterID = 'NW-12344';
        }


        // Split the string into an array based on the dash
        $parts = explode('-', $lastNewsletterID);
        $parts = $parts[1];

        // Increment the numeric part
        $newNumericPart = $parts + 1;

        // Create the new NewsletterID
        $newNewsletterID = 'NW-' . $newNumericPart;
        // echo $newNewsletterID;

        // $newNewsletterID will be 'NW-12346'


        return $newNewsletterID;
    }

    // function for get News Letter Users
    public function getNewsLetterUsers($Kunden){

        $users = User::where('action', 'ja')->get();    // all users

        if ($Kunden!='All') {
            $users = $users->where('role', $Kunden);
        }
        return $users;
    }
}
