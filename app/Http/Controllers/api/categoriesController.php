<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Models\ProductCategory;
use App\Models\CategorieStatic;

class categoriesController extends Controller
{
    public function categoriesListing()
    {
        $category = ProductCategory::where('status', 'active')->orderBy('created_at', 'desc')->get();


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

    
        $lastOffer = ProductCategory::latest()->first();

        if($lastOffer){

            
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
        }

        else{

            $lastCategory = 'AN-12345';
            
        }

    

        return view('admin_theme/pages/categories/addCategories')->with(compact('lastCategory', 'role'));
    }

    public function addCategoriesApi(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'Kategorie_Nr' => 'required|string',
            'Kategorie_1' => 'required|string',
            'Kategorie_2' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        if($request->input('Kategorie_3')==null){

            $validator = Validator::make($request->all(), [
                'Kategorie_4' => 'required|string',
            ]);
    
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()]);
            }

            // new static category
            $staticCat = CategorieStatic::where('categorie_1', $request->input('Kategorie_1'))->first();
            $category1 = new CategorieStatic([
                'categorie_1' => $request->input('Kategorie_1'),
                'categorie_2' => $request->input('Kategorie_2'),
                'categorie_3' => $request->input('Kategorie_4'),
                'imageFile'   => $staticCat->imageFile
            ]);
            $category1->save();

            // Create new ProductCategory instance
            $category = new ProductCategory([
                'Kategorie_Nr' => $request->input('Kategorie_Nr'),
                'Kategorie_1' => $request->input('Kategorie_1'),
                'Kategorie_2' => $request->input('Kategorie_2'),
                'Kategorie_3' => $request->input('Kategorie_4'),
                'Kategorie_4' => $request->input('Kategorie_5'),
                'Kategorie_5' => $request->input('Kategorie_6'),
            ]);
        }
        else {
            
            // Create new ProductCategory instance
            $category = new ProductCategory([
                'Kategorie_Nr' => $request->input('Kategorie_Nr'),
                'Kategorie_1' => $request->input('Kategorie_1'),
                'Kategorie_2' => $request->input('Kategorie_2'),
                'Kategorie_3' => $request->input('Kategorie_3'),
                'Kategorie_4' => $request->input('Kategorie_4'),
                'Kategorie_5' => $request->input('Kategorie_5'),
                'Kategorie_6' => $request->input('Kategorie_6'),
            ]);
        }


        // Save the category to the database
        $category->save();

        return response()->json(['success' => "Category Added Successfully"]);
        
    }


    public function deleteCategory($Kategorie_Nr)
    {
        $productCategory = ProductCategory::where('id', $Kategorie_Nr)->first();
    
        // Check if the product category exists
        if ($productCategory) {
            // Update the status
            $productCategory->status = 'deactive';
            $productCategory->save();
    
            // Output success message or perform other actions
            return response()->json(['success' => "Category Deleted Successfully"]);
        } else {
            // Output error message or perform other actions
            return response()->json(['error' => "No product categories found for the given condition."], 404);
        }
    }
    
    

    // function for fetch all product category
    public function getProductCategory(Request $request){

        // dd($request->all());
        // $allProducts = ProductCategory::where('status', 'ACTIVE')->get();

        $allProducts = CategorieStatic::get()->unique($request->selectColumn);
        if ($request->value !='%') {
            $allProducts = $allProducts->where($request->matchColumn, $request->value);
        }
        
        // dd($allProducts);
        return response()->json(['allProductsCat' => $allProducts]);
    }
    
}
