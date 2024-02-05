<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\enquiryMailer;


class staticPageController extends Controller
{
    public function contact(){
        return view('/frontEnd/Pages/contact');
    }

    
    public function contactSubmit(Request $request){


        $name = $request->input('enquiry_name');
        $email = $request->input('enquiry_email');
        $phone = $request->input('enquiry_phone');
        $textarea = $request->input('textarea');


        $validator = Validator::make($request->all(), [
            'enquiry_phone' => 'required|string|max:20',
            'enquiry_name' => 'required|string|max:255',
            'enquiry_email' => 'required|email|max:255',
            
            'textarea' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

       $enquiry = Enquiry::create($request->all());

        if ($enquiry) {

            $permanentEmail= 'sumitpal4689@gmail.com';
            $message = Mail::to($permanentEmail)->send(new enquiryMailer($name, $email, $phone, $textarea));
        }

        return response()->json(['message' => 'Enquiry submitted successfully']);
    
    }

    public function agb(){
        return view('/frontEnd/Pages/agb');
    }

    public function cancelationPolicy(){
        return view('/frontEnd/Pages/cancellation');
    }

    public function Impressum(){
        return view('/frontEnd/Pages/Impressum');
    }

    public function lieferbedingungen(){
        return view('/frontEnd/Pages/lieferbedingungen');
    }
    
}
