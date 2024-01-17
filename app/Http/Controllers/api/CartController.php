<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Str;

class CartController extends Controller
{

    public function addToCart(Request $request)
    {
        $guestToken = $request->header('guest-token', Str::uuid());
        $productID = $request->product_id;
        $quantity = $request->quantity;
        
        // Check if a cart item with the same product_id and guest_token exists
        $existingCartItem = Cart::where('guest_token', $guestToken)
            ->where('product_id', $productID)
            ->first();
        
        if ($existingCartItem) {
            // If the cart item exists, update the quantity
            $existingCartItem->quantity += $quantity;
            $existingCartItem->save();
        } else {
            // If the cart item does not exist, create a new one
            $cartItem = new Cart([
                'guest_token' => $guestToken,
                'product_id' => $productID,
                'quantity' => $quantity,
            ]);
        
            $cartItem->save();
        }
        
        return response()->json(['message' => 'Item added to cart successfully']);
        
    }


    public function getCartItems(Request $request)
    {
        $guestToken = $request->header('guest-token', Str::uuid());

  
        $cartItems = Cart::where('guest_token', $guestToken)
            ->join('products', 'cart_items.product_id', '=', 'products.id')
            ->select('cart_items.*', 'products.Artikelname as product_name', 'products.Bild_1 as product_image', 'products.Hersteller as Hersteller')
            ->get();
        // dd($cartItems);


        return response()->json(['cartItems' => $cartItems]);
    }




    public function cartProductList(Request $request)
    {

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',

        ]);

        $productRateArray = Product::Select('productRateForNormalUsers')
            ->where('id', $request->product_id)
            ->get();

        $productRate = $productRateArray[0]->productRateForNormalUsers;

        $productsAmount = $productRate * $request->quantity;

        $user = Auth::user();
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');

        // If using a Cart model:
        $cartItem = Cart::Create(
            [
                'userEmail' => $request->user_email,
                'product_id' => $request->product_id,
                'productName' => $request->productName,
                'productQuantity' => $request->quantity,
                'calculatedAmount' => $productsAmount,

            ]
        );

        if ($cartItem) {

            return response()->json(['message' => 'Item Added successfully']);
        } else {

            return response()->json(['message' => 'Item not Added successfully']);
        }
    }

    public function UpdateCartProductList($id, Request $request)
    {

        $user = Auth::user();

        $cartItem = Cart::where('id', $id)
            // ->where('userEmail', $request->user_email)
            // Upper Line is very Important . So UnComment Upper Line When IntreGate Api.
            ->update([
                'productName' => $request->productName,
                'productQuantity' => $request->productQuantity,
            ]);

        if ($cartItem) {

            return response()->json(['message' => 'Cart Updated successfully']);
        } else {

            return response()->json(['message' => 'Cart Not Updated successfully']);
        }
    }

    public function deleteCartProductList($id, Request $request)
    {

        $user = Auth::user();

        $cartItem = Cart::where('id', $id)->delete();


        if ($cartItem) {

            return response()->json(['message' => 'Product deleted successfully']);
        } else {

            return response()->json(['message' => 'Product Not Found']);
        }
    }


    public function checkOutCartProduct($email, Request $request)
    {

        $cartItems = Cart::where('userEmail', $email)->get();

        $totalCalculatedAmount = 0;

        // Iterate through the cart details array
        foreach ($cartItems as $cartItem) {
            // Convert the calculatedAmount to float and add to the total
            $totalCalculatedAmount += (float) $cartItem['calculatedAmount'];
        }

        if ($cartItems) {

            return response()->json(['cart Details' => $cartItems, 'Total Amount' => $totalCalculatedAmount]);
        } else {

            return response()->json(['message' => 'Product Not Found']);
        }
    }
}
