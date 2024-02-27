<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Order;


class OrderMngController extends Controller
{
    // function for find all orders details
    public function orderListingApi()
    {
        $orders = DB::table('orders')
                ->select('orders.order_id', 'orders.created_at', 'orders.payment_status', 'orders.final_status', 'users.name')
                ->join('users', 'users.id', '=', 'orders.user_id')
                ->orderby('orders.created_at', 'DESC')
                ->get()->unique('order_id');

        // $orders = Order::orderBy('created_at', 'desc')->where('id', 'dssd')->get()->unique('order_id');

        if ($orders->count()){
            return response()->json(['ordersList'=>$orders]);
        }
     
        return response()->json(['errors'=>"Order Not Found"]);
    }



    // function for find orders details by his order id
    public function getOrdersDetailsApi(Request $request)
    {
        $orders = DB::table('orders')
                ->select('orders.*', 'users.name', 'products.Artikelname', 'products.Hersteller', 'products.Bild_1')
                ->join('users', 'users.id', '=', 'orders.user_id')
                ->join('products', 'products.id', '=', 'orders.product_id')
                ->where('orders.order_id', $request->order_id)
                ->orderby('orders.created_at', 'DESC')
                ->get();

        // $orders = Order::orderBy('created_at', 'desc')->where('id', 'dssd')->get()->unique('order_id');

        if ($orders->count()){
            return response()->json(['ordersDtl'=>$orders]);
        }
     
        return response()->json(['errors'=>"Order Not Found"]);
    }


    public function editOrder($role, $id)
    {
        return view('admin_theme/pages/order/editOrder', compact('role', 'id'));
    }
    
    // function for find orders details by his order id
    public function updateOrderFinalStatusApi(Request $request)
    {
        $orderItem = Order::where('order_id', $request->order_id)
                    ->update([
                        'final_status' => 'Complete',
                    ]);

        if ($orderItem) {
            return response()->json(['message' => 'Final Status Updated successfully']);
        } else {

            return response()->json(['erors' => 'Final Status Not Updated']);
        }
    }
}
