<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\offers;

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

    public function addOfferApi(){
        
    }
}
