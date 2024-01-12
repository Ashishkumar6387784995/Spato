<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\offers;
use Illuminate\Support\Facades\Validator;
use App\Models\ProductCategory;

class categoriesController extends Controller
{
    public function categoriesListing()
    {
        $category = ProductCategory::orderBy('created_at', 'desc')->get();

        if ($category) {
            return response()->json(['offersList' => $category]);
        }

        return response()->json(['errors' => "Offer Not Found"]);
    }


    public function editOffer()
    {

        return view('admin_theme/pages/offers/editoffers');
    }

    public function addCategories($role)
    {

        // $lastOffer = "AB-123456";
        $lastOffer = ProductCategory::latest()->first();

        $lastOffer = $lastOffer->Kategorie_Nr;
        // Assuming $lastOffer is 'AN-12345'
        // $lastOffer = 'AN-12345';
        // dd($lastOffer);



        // Split the string into an array based on the dash
        $parts = explode('-', $lastOffer);
        $parts = $parts[1];




        // Increment the numeric part
        $newNumericPart = $parts + 1;

        // Create the new offerNo
        $lastCategory = 'KA-' . $newNumericPart;
        // echo $lastCategory;

        // $newOfferNo will be 'AN-12346'

            //   $lastCategory = 'AN-12345';


        return view('admin_theme/pages/categories/addCategories')->with(compact('lastCategory', 'role'));
    }

    public function addCategoriesApi(Request $request)
    {
       

        $validator = Validator::make($request->all(), [
            'Kategorie_Nr' => 'required|string',
            'Kategorie_datum' => 'nullable|date',
            'Kategorie_Name' => 'required|string|max:50',
            'Kategorie_Beschreibung' => 'nullable|string',
            'imageFile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]); 
        }

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('imageFile')) {
            $image = $request->file('imageFile');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            
            $imagePath = $request->file('imageFile')->storeAs('category_icons', $imageName, 'public');
        }

        // Create new ProductCategory instance
        $category = new ProductCategory([
            'Kategorie_Nr' => $request->input('Kategorie_Nr'),
            'Kategorie_datum' => $request->input('Kategorie_datum'),
            'Kategorie_Name' => $request->input('Kategorie_Name'),
            'Kategorie_Beschreibung' => $request->input('Kategorie_Beschreibung'),
            'imageFile' => $imagePath,
        ]);

        // Save the category to the database
        $category->save();

        return response()->json(['success' => "Category Added Successfully"]); 
    }
}
