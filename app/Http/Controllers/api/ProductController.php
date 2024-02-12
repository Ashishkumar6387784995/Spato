<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Validator;
use PDF;
use App\Imports\productsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;


class ProductController extends Controller
{
    // public function productList(){
    //     $products = Product::all();

    //     return response()->json(['Product Details' => $products]);
    // }

    public function addproduct($role)
    {

        return view('admin_theme/pages/products/addProduct')->with(compact('role'));
    }


    // function for fetch all product category
    public function getProductCategory(){
        $allProducts = ProductCategory::where('status', 'ACTIVE')->get();
        return response()->json(['allProductsCat' => $allProducts]);
    }

    public function addproductList(Request $request)
    {

        // return response()->json(['success' => 'Pls Fill Form Properly']);

        $validator = Validator::make($request->all(), [
            'type' => 'required|string',
            'Hersteller' => 'required|string',
            'Herst_Nr' => 'nullable|string',
            'Lief_Art_Nr' => 'nullable|string',
            'Hersteller_Artikelnummer' => 'nullable|string',
            'descriKatalog_Art_Nummertion' => 'nullable|string',
            'Katalog_Art_Nummer' => 'nullable|string',
            'Kategorie_1' => 'required|string',
            'VE_VPE' => 'nullable|string',
            'Einheit' => 'nullable|string',
            'Rabattcode_1' => 'nullable|string',
            'Rabattcode_2' => 'nullable|string',
            'Rabattcode_3' => 'nullable|string',
            'Preis_zzgl_MwSt' => 'nullable|numeric',
            'Preis_inkl_MwSt' => 'nullable|numeric',
            'Einkausfpreis_zzgl_MwSt' => 'nullable|numeric',
            'Einkaufsrabatt' => 'nullable|numeric',
            'Artikelname' => 'required|string',
            'Beschreibung_kurz' => 'nullable|string',
            'Beschreibung_lang' => 'nullable|string',

            'addedBy' => 'nullable|string',

            'Bild_1' => 'nullable|image|mimes:jpeg,jpg,png,webp',
            'Bild_2' => 'nullable|image|mimes:jpeg,jpg,png,webp',
            'Bild_3' => 'nullable|image|mimes:jpeg,jpg,png,webp',
            'Bild_4' => 'nullable|image|mimes:jpeg,jpg,png,webp',

            'Anleitung_PDF_1' => 'nullable|mimes:pdf',
            'Anleitung_PDF_2' => 'nullable|mimes:pdf',
            'Anleitung_PDF_3' => 'nullable|mimes:pdf',





        ]);


        if ($validator->fails()) {
            // Return validation errors in the response
            return response()->json(['ValidationError' => $validator->errors(), 'message' => 'Pls Fill Form Properly']);
        }


        $uploadedimages = [];
        $imageFields = ['Bild_1', 'Bild_2', 'Bild_3', 'Bild_4'];

        foreach ($imageFields as $image) {
            if ($request->hasFile($image)) {
                $uploadedImage = $request->file($image);
                $imagePath = $uploadedImage->store('public/products_images');

                // Save file path in the database
                $uploadedimages[$image] = '/products_images/' . $uploadedImage->hashName();

                // You can also save the full path like $uploadedimages[$image] = $imagePath; if needed.
            }
        }

        // Handle file uploads
        $uploadedFiles = [];
        $fileFields = ['Anleitung_PDF_1', 'Anleitung_PDF_2', 'Anleitung_PDF_3'];

        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $uploadedFile = $request->file($field);
                $filePath = $uploadedFile->store('public/products_pdf');

                // Save file path in the database
                $uploadedFiles[$field] = '/products_pdf/' . $uploadedFile->hashName();

                // You can also save the full path like $uploadedFiles[$field] = $filePath; if needed.
            }
        }

        // Create a new product
        $product = Product::create(array_merge(
            $request->only(['type', 'Hersteller', 'Herst_Nr', 'Lief_Art_Nr', 'Hersteller_Artikelnummer', 'descriKatalog_Art_Nummertion', 'Katalog_Art_Nummer', 'Kategorie_1', 'Kategorie_2', 'Kategorie_3', 'Kategorie_4', 'Kategorie_5', 'VE_VPE', 'Einheit', 'Rabattcode_1', 'Rabattcode_2', 'Rabat
            code_3', 'Preis_zzgl_MwSt', 'Preis_inkl_MwSt', 'Einkausfpreis_zzgl_MwSt', 'Einkaufsrabatt', 'Artikelname', 'Beschreibung_kurz', 'Beschreibung_lang']),
            $uploadedimages,
            $uploadedFiles,
            ['addedBy' => 'addedBy'] // Adjust this value as needed
        ));



        // Check if the product was created successfully
        if ($product) {
            return response()->json(['success' => 'Product Added successfully...']);
        } else {
            return response()->json(['error' => 'Product not Added successfully !']);
        }
    }




    public function productListing()
    {

        $products = Product::orderBy('created_at', 'desc')->get();

        if ($products) {
            return response()->json(['productList' => $products]);
        }

        return response()->json(['errors' => "Products Not Found"]);
    }


    public function editProduct()
    {

        return view('admin_theme/pages/products/editProduct');
    }

    public function deleteProduct($id,)
    {

        $deletedProduct = Product::where('id', $id)->delete();

        if ($deletedProduct) {
            return response()->json(['success' => "Product Deleted Successfully"]);
        } else {
            return response()->json(['errors' => "Products Not Deleted"]);
        }


        // return view('admin_theme/pages/products/addProduct');
    }


    public function productImport(Request $request)
    {
       
    
        $validator = Validator::make($request->all(), [
            'ProductsImportFile' => 'required|mimes:csv,xlsx',
        ]);
    
        if ($validator->fails()) {
            // Validation failed, return the errors as a JSON response
            return response()->json(['ValidationError' => $validator->errors()]);
        }
        

        // Check if the file was uploaded successfully
        if ($request->hasFile('ProductsImportFile')) {
            // Get the file from the request
            $excelFile = $request->file('ProductsImportFile');
    
            // Access other form data if needed
            $otherFormData = $request->input('otherFormData');
    
            // Move the Excel file to a specific location
            $excelFile->move(storage_path('app/public/products_import_files'), $excelFile->getClientOriginalName());
    
            // Process the Excel file and import data into the database using the import class
            $excelFilePath = storage_path('app/public/products_import_files') . '/' . $excelFile->getClientOriginalName();
            Excel::import(new productsImport(), $excelFilePath);
    
            // Retrieve the last inserted product ID
            $lastProductId = Product::latest('id')->first()->id;
    
            // Check and handle the ProductsImageFile
            if ($request->hasFile('ProductsImageFile')) {
                $uploadedImages = $request->file('ProductsImageFile');
                $imagePaths = [];
    
                foreach ($uploadedImages as $image) {
                    $imagePath = $image->storeAs('public/products_images', $image->getClientOriginalName());
                    $imagePaths[] = $imagePath;
                }
            }
    
            // Check and handle the ProductsPdfFile
            if ($request->hasFile('ProductsPdfFile')) {
                $uploadedFiles = $request->file('ProductsPdfFile');
                $pdfPaths = [];
    
                foreach ($uploadedFiles as $file) {
                    $pdfPath = $file->storeAs('public/products_pdf', $file->getClientOriginalName());
                    $pdfPaths[] = $pdfPath;
                }
            }
    
            // Return a response or perform other actions
            return response()->json(['success' => 'File uploaded and data imported successfully']);
        } else {
            // Handle the case where no file was uploaded
            return response()->json(['error' => 'No file uploaded']);
        }
    }

    public function productExport(Request $request)
    {
        if ($request->ajax()) {
            try {
                $exportFile = 'users.xlsx';
    
                return response()->stream(
                    function () use ($exportFile) {
                        Excel::download(new ProductsExport, $exportFile, \Maatwebsite\Excel\Excel::XLSX)
                            ->deleteFileAfterSend(false);
                    },
                    200,
                    [
                        'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                        'Content-Disposition' => 'attachment; filename="' . $exportFile . '"',
                    ]
                );
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()]);
            }
        }

        // Handle non-AJAX requests (if needed)
        return Excel::download(new ProductsExport, 'Products.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }
    
    

    
}



