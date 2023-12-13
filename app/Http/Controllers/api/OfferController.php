<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function offerListing(){
     
        return view('admin_theme/pages/offers/offerList');
    }


    public function editOffer(){
     
        return view('admin_theme/pages/offers/editoffers');
    }

    public function addOffer(){
     
        return view('admin_theme/pages/offers/addoffers');
    }
}
