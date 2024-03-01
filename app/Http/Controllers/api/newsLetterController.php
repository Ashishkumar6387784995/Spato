<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsLetter;
use App\Models\User;
use App\Models\Product;

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
