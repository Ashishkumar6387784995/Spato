<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserProfile;
use App\Models\Payment;
use App\Models\Order;
use DB;

class PaymentController extends Controller
{
    public function index(){
        $userId = Auth::guard('api')->user();
        // $userId = Auth::guard('api')->user()->id;
        $userPermannetAddsress = UserProfile::select()
            ->where('user_id', $userId)
            ->where('status', 'Permanent')
            ->get();
            $userTempAddsress = UserProfile::select()
            ->where('user_id', $userId)
            ->where('status', 'temp')
            ->get();


        return response()->json(['Permanent_address' => $userPermannetAddsress, 'userTempAddsress' => $userTempAddsress]);
    }

    public function addOrder(Request $request){
        // dd($request->all(), $request->user['id']);
        $userId = $request->user['id'];
        $order_id = $this->generateOrderID();
        $order_idConst = $order_id;

        // Begin a transaction
        DB::beginTransaction();

        // code for items checkout 
        if (isset($request->product_id)) {
            $count = count($request->product_id);
            if($count > 0){

                // check if data is already exist for User on today
                $alreadyExist = Payment::where('user_id', $userId)->whereDate('created_at', date('Y-m-d'))->first();
                if ($alreadyExist) {
                    // check if data is already exist for User on today
                    $order_id = $alreadyExist->order_id;
                    Payment::where('user_id', $userId)->whereDate('created_at', date('Y-m-d'))->delete();
                }

                // Save projects sub details
                for ($x = 0; $x < $count; $x++){
                    // save data in payments table for use bulk data
                    $data = new Payment();

                    $data->order_id         = $order_id;
                    $data->user_id          = $userId;
                    $data->delv_address     = $request->delv_address;
                    $data->product_id       = $request->product_id[$x];
                    $data->product_price    = $request->product_price[$x];
                    $data->product_quanty   = $request->product_quanty[$x];
                    $data->apply_disc_code  = $request->apply_disc_code;
                    $data->sub_total        = $request->sub_total;
                    $data->shipping_amt     = $request->shipping_amt;
                    $data->tax_amt          = $request->tax_amt;
                    $data->order_total      = $request->order_total;
                    $data->save();

                    
                    // save data in order table 
                    $order = new Order();

                    $order->order_id         = $order_idConst;
                    $order->user_id          = $userId;
                    $order->delv_address     = $request->delv_address;
                    $order->product_id       = $request->product_id[$x];
                    $order->product_price    = $request->product_price[$x];
                    $order->product_quanty   = $request->product_quanty[$x];
                    $order->apply_disc_code  = $request->apply_disc_code;
                    $order->sub_total        = $request->sub_total;
                    $order->shipping_amt     = $request->shipping_amt;
                    $order->tax_amt          = $request->tax_amt;
                    $order->order_total      = $request->order_total;
                    $order->transaction_id   = 'TRN001';
                    $order->save();
                }
                // Commit the transaction
                DB::commit();
                return response()->json(['status' => '1', 'message' => 'Ordered Successfully']);
            }
        }else {
            return response()->json(['status' => '0', 'message' => 'Please add minimum 1 item into cart for checkout']);
        }
    }

    // for next step after checkout
    public function payment(){
        return view('frontEnd/Pages/cart/payment');
    }

    public function generateOrderID()
    {
        $lastOrderID = Payment::latest()->first();

        // If any lastOrderID not found
        if ($lastOrderID) {
            $lastOrderID = $lastOrderID->order_id;
            // $lastOrderID = 'BE-12345';
            // Assuming $lastOrderID is 'BE-12345'
        }else {
            $lastOrderID = 'BE-12344';
        }


        // Split the string into an array based on the dash
        $parts = explode('-', $lastOrderID);
        $parts = $parts[1];

        // Increment the numeric part
        $newNumericPart = $parts + 1;

        // Create the new OrderID
        $newOrderID = 'BE-' . $newNumericPart;
        // echo $newOrderID;

        // $newOrderID will be 'BE-12346'


        return $newOrderID;
    }
}
