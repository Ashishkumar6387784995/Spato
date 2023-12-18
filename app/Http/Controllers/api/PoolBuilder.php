<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FrontEnd\PoolBuilders_users;

class PoolBuilder extends Controller
{
    public function poolBuilderRegister(){

        return view('frontEnd/Pages/poolBuilder/poolRegistration');
        
    }

    public function submitpoolBuilderRegistration(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'zip_code' => 'required|string',
            'email' => 'required|email|unique:poolsBuilders_users,email',
            'contact' => 'required|string',
            'password' => 'required|string',
            'vat_no' => 'nullable|string',
            // Add validation rules for other fields
        ]);

        // Create a new PoolBuildersUsers instance and save it to the database
        $poolBuilder = new PoolBuilders_users();
        $poolBuilder->name = $request->input('name');
        $poolBuilder->address = $request->input('address');
        $poolBuilder->zip_code = $request->input('zip_code');
        $poolBuilder->email = $request->input('email');
        $poolBuilder->contact = $request->input('contact');
        $poolBuilder->password = bcrypt($request->input('password'));
        $poolBuilder->vat_no = $request->input('vat_no');
        // Set other fields

        $poolBuilder->save();

        // Return a response (you can customize this based on your needs)
        if($poolBuilder){
            return response()->json(['success' => 'Pool Builder registered successfully']);
        }
        else{
            return response()->json(['success' => 'Pool Builder not registered successfully']);
        }
    
    }




    public function poolBuilderProfile(){

        return view('frontEnd/Pages/poolBuilder/pollProfile');
        
    }

    public function poolBuilderClaim(){

        return view('frontEnd/Pages/poolBuilder/poolClaim&Request');
        
    }
}
