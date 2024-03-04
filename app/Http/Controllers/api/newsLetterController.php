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
        $newsLetter = $this->generateNewsletterID();
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
            'inputs.*.Produkt' => 'required|string',

            'PDF_Datei' => 'nullable|mimes:pdf',
            'greeting_info' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]); // 422 Unprocessable Entity
        }

        // for images
            if ($request->hasFile('PDF_Datei')) {
                $uploadedImage = $request->file('PDF_Datei');

                $uploadedImage->store('public/news_letter_pdf');

                // Save file path in the database
                $pdfPath = '/news_letter_pdf/' . $uploadedImage->hashName();
                // You can also save the full path like $uploadedimages[$image] = $pdfPath; if needed.
            }

        

        // Get the dynamic fields from the request
        $dynamicFields = $request->input('inputs');

        // Set dynamic fields on the news
        foreach ($dynamicFields as $dynamicField) {
            $news = new Newsletter();
            $news->Newsletter_Nr = $request->input('Newsletter_Nr');
            $news->Newsletterdatum = $request->input('Newsletterdatum');
            $news->Kunden = $request->input('Kunden');


            $news->POS = $dynamicField['POS'];
            $news->Produkt = $dynamicField['Produkt'];
            $news->Produktname = $dynamicField['Produktname'];
            $news->Beschreibung = $dynamicField['Beschreibung'];
            $news->Produktimage = $dynamicField['Produktimage'];
            $news->Einzelpreis = $dynamicField['Einzelpreis'];
            $news->PDF_Datei = @$pdfPath;
            $news->greeting_info = $request->input('greeting_info');
            $news->sell_info = $request->input('sell_info');
            $news->free_text = $request->input('free_text');
            $news->save();
        }

        // Return a success response
        return response()->json(['success' => "News Letter Is Added SuccessFully"]);
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
