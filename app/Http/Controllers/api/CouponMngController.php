<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Coupon;


class CouponMngController extends Controller
{
    // function for find all orders details
    public function couponListingApi()
    {
        $Coupon = Coupon::orderBy('created_at', 'desc')->get();
        
        if ($Coupon->count()){
            return response()->json(['couponsList'=>$Coupon]);
        }
     
        return response()->json(['errors'=>"Customer Not Found"]);
    }


    // function for add Coupon view page
    public function addCoupon($role){
        $couponCode = $this->generateCouponCode();
        return view('admin_theme/pages/coupon/addCoupon', compact('role', 'couponCode'));
    }


    // function for save Coupon data
    public function addcouponApi(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'Gutscheincode' => 'required',
            'Gültig_ab' => 'required',
            'Bis_gültig'    => 'required',
            'Typ'   => 'required',
            'Rate'  => 'required|numeric',
            'Mindestbetrag' => 'required',
            'Gutscheinstatus'   => 'required',
        ]);

        if ($validator->fails()) {
            // Return validation errors in the response
            return response()->json(['ValidationError' => $validator->errors(), 'message' => 'Pls Fill Form Properly']);
        }

        $data = new Coupon();

        $data->Gutscheincode    = $request->Gutscheincode;
        $data->Gültig_ab        = $request->Gültig_ab;
        $data->Bis_gültig       = $request->Bis_gültig;
        $data->Typ              = $request->Typ;
        $data->Rate             = $request->Rate;
        $data->Mindestbetrag    = $request->Mindestbetrag;
        $data->Gutscheinstatus  = $request->Gutscheinstatus;
        $data->save();

        return response()->json(['status' => '1', 'success' => 'Coupon Generated Successfully']);
    }


    public function editOrder($role, $id)
    {
        return view('admin_theme/pages/order/editOrder', compact('role', 'id'));
    }


    // function for generate coupon code
    public function generateCouponCode()
    {
        $lastCouponCode = Coupon::latest()->first();

        // If any lastCouponCode not found
        if ($lastCouponCode) {
            $lastCouponCode = $lastCouponCode->Gutscheincode;
            // $lastCouponCode = 'GU-12345';
            // Assuming $lastCouponCode is 'GU-12345'
        }else {
            $lastCouponCode = 'GU-12344';
        }


        // Split the string into an array based on the dash
        $parts = explode('-', $lastCouponCode);
        $parts = $parts[1];

        // Increment the numeric part
        $newNumericPart = $parts + 1;

        // Create the new CouponCode
        $newCouponCode = 'GU-' . $newNumericPart;
        // echo $newCouponCode;

        // $newCouponCode will be 'GU-12346'


        return $newCouponCode;
    }
}
