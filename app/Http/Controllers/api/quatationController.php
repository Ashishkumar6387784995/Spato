<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quote_requests;

class quatationController extends Controller
{
    public function quatationListingApi(){
        $quatations = Quote_requests::orderBy('created_at', 'desc')->get();

        if ($quatations){
            return response()->json(['quatations'=>$quatations]);
        }
     
            return response()->json(['errors'=>"Assignments Not Found"]);
    }

    public function quatationList($role){

        return view('admin_theme/pages/quotes/QuotesList')->with(compact('role'));

    }
}
