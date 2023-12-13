<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function productList(){
        $products = Product::all();

        return response()->json(['Product Details' => $products]);
    }

    public function addproductList(Request $request){
        $validator = Validator::make($request->all(), [
            'productName' => 'required',
            'productQuantity' => 'required|integer',
            'productRateForNormalUsers' => 'required|numeric', // Allow float values
            'productRateForB2BUsers' => 'required|numeric', // Allow float values
            'productRateForB2CUsers' => 'required|numeric', // Allow float values
            'description' => 'required',
            'image' => 'required',
        ]);


        if ($validator->fails()) {
            // Return validation errors in the response
            return response()->json(['errors' => $validator->errors(), 'message'=>'Pls Fill Form Properly']);
        }

        // Create a new user
        $Product = Product::create([
            'productName' => $request->input('productName') ,
            'productQuantity' => $request->input('productQuantity'),
            'productRateForNormalUsers' => $request->input('productRateForNormalUsers'),
            'productRateForB2BUsers' => $request->input('productRateForB2BUsers'),
            'productRateForB2CUsers' => $request->input('productRateForB2CUsers'),
            'description' => $request->input('description'), 
            'image' => $request->input('image'),
          
        ]);

        if($Product){

        return response()->json(['success' => 'Product Added successfully']);

        }

        else{

        return response()->json(['error' => 'Product not Added successfully']);

        }
    }

    public function productListing(){
     
        return view('admin_theme/pages/products/productsList');
    }


    public function addProduct(){
     
        return view('backEnd/add_products');
    }
}
