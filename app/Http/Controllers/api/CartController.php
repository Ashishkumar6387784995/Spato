<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\Quote_requests;
use Illuminate\Support\Facades\Validator;
use App\Models\UserProfile;


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
            ->select('cart_items.*', 'products.Artikelname as product_name', 'products.Bild_1 as product_image', 'products.Hersteller as Hersteller', 'products.Preis_inkl_MwSt as Preis_inkl_MwSt')
            ->orderBy('cart_items.created_at', 'desc') // Order by the creation date in descending order
            ->get();





        return response()->json(['cartItems' => $cartItems, ]);
    }

    public function userAddress()
    {
       
        $userId = Auth::guard('api')->user()->id;
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


    public function updateQuantityOfItems(Request $request)
    {

        $guestToken = $request->header('guest-token');
        $productId = $request->input('product_id');
        $newQuantity = $request->input('quantity');

        // Find the cart item with the given product ID and guest token
        $cartItem = Cart::where('guest_token', $guestToken)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            // Update the quantity
            $cartItem->quantity = $newQuantity;
            $cartItem->save();

            return response()->json(['message' => 'Quantity updated successfully']);
        }

        return response()->json(['message' => 'Cart item not found'], 404);
    }


    public function deleteCartProducts(Request $request, $product_id)
    {



        $guestToken = $request->header('guest-token');

        // Find and delete the cart item with the given product ID and guest token
        $cartItem = Cart::where('guest_token', $guestToken)
            ->where('product_id', $product_id)
            ->first();

        if ($cartItem) {
            $cartItem->delete();
            return response()->json(['message' => 'Item removed successfully']);
        }

        return response()->json(['message' => 'Cart item not found'], 404);
    }


    public function checkout()
    {
        return view('frontEnd/Pages/cart/checkout');
    }

    public function quotesForm($product_id)
    {
        return view('frontEnd/pages/cart/quotesForm')->with(compact('product_id'));
    }


    public function submitQuotes(Request $request)
    {
        $userId = Auth::guard('api')->user()->id;
        $userName = Auth::guard('api')->user()->name;

        // Define validation rules
        $rules = [
            'product_id' => 'required',
            'firmName' => 'required|string|max:255',
            'contactName' => 'required|string|max:255',
            'new_email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'sparePartName' => 'required|string|max:255',
            'QuoteNeededBy' => 'required|string|max:255',
            'budget' => 'required|string', // Assuming 'budget' is the name of your radio button group
            // 'Overview' => 'required|string',
            // 'Document' => 'nullable|file|mimes:jpg,jpeg,png,gif|max:2048',
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]); // Adjust the HTTP status code as needed
        }

        // Extract data from the request
        $product_id = $request->input('product_id');
        $firmName = $request->input('firmName');
        $contactName = $request->input('contactName');
        $email = $request->input('new_email');
        $mobile = $request->input('mobile');
        $sparePartName = $request->input('sparePartName');
        $QuoteNeededBy = $request->input('QuoteNeededBy');
        $budgetStatus = $request->input('budget');
        $overview = $request->input('Overview');
        $document = $request->file('Document');

        // Handle file upload if a document is provided
        $documentPath = null;
        if ($document && $request->hasFile('Document')) {
            $uploadedFile = $request->file('Document');
            $documentPath = $uploadedFile->store('public/quotes_request');
        }

        // Create a new Quote_requests instance and save it to the database
        Quote_requests::create([
            'product_id' => $product_id,
            'firmName' => $firmName,
            'contactName' => $contactName,
            'email' => $email,
            'mobile' => $mobile,
            'sparePartName' => $sparePartName,
            'QuoteNeededBy' => $QuoteNeededBy,
            'budgetStatus' => $budgetStatus,
            'overview' => $overview,
            'document' => $documentPath,
            'userId' => $userId,
            'userName' => $userName,
        ]);

        // Optionally, you can return a response or redirect the user
        return response()->json(['message' => 'Quote Request submitted successfully']);
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


    public function viewCart()
    {

        return view('frontEnd/Pages/cart/cartView');
    }
}
