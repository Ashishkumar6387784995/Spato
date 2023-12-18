<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PoolBuilder extends Controller
{
    public function poolBuilderRegister(){

        return view('frontEnd/Pages/poolBuilder/poolRegistration');
        
    }

    public function submitpoolBuilderRegistration(Request $request)
    {
        // Validate the request data
     

        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'address' => 'required|string',
            'zipCode' => 'required|integer|min:8|',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:8|integer',
            'password' => 'required|min:8|',
            'vatNo' => 'required',
        ]);

        // return response()->json(['success'=>'errors']);

        if ($validator->fails()) {
            // Return validation errors in the response
            return response()->json(['ValidationError' => $validator->errors()]);
        }

        $token = Str::random(40);
        // Create a new user
        $user = User::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'zipCode' => $request->input('zipCode'),
            'email' => $request->input('email'),

            'mobile' => $request->input('phone'),
    
            'password' => Hash::make($request->input('password')),
            'remember_token' => $token,
            'vatNo' => $request->input('vatNo'),
            'role' => $request->input('role'),

        ]);


        if ($user) {
            return response()->json(['success' => 'User registered successfully', 'token' => $token]);
        } else {
            return response()->json(['error' => 'User registered Failed due Query']);
        }


      
    
    }




    public function poolBuilderProfile(){

        return view('frontEnd/Pages/poolBuilder/pollProfile');
        
    }

    public function poolBuilderClaim(){

        return view('frontEnd/Pages/poolBuilder/poolClaim&Request');
        
    }
}
