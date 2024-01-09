<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use PDF;


class ProductController extends Controller
{
    // public function productList(){
    //     $products = Product::all();

    //     return response()->json(['Product Details' => $products]);
    // }

   public function addproduct(){

     return view('admin_theme/pages/products/addProduct');
   }

    public function addproductList(Request $request){

        
        $validator = Validator::make($request->all(), [
            'type' => 'required|string',
            'Hersteller' => 'required|string',
            'Herst_Nr' => 'nullable|string',
            'Lief_Art_Nr' => 'nullable|string',
            'Hersteller_Artikelnummer' => 'nullable|string',
            'descriKatalog_Art_Nummertion' => 'nullable|string',
            'Katalog_Art_Nummer' => 'nullable|string',
            'Kategorie' => 'nullable|string',
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


           

        ]);


        if ($validator->fails()) {
            // Return validation errors in the response
            return response()->json(['ValidationError' => $validator->errors(), 'message'=>'Pls Fill Form Properly']);
        }


        // $imagePaths = [];
        // if ($request->hasFile('images')) {
        //     foreach ($request->file('images') as $image) {
        //         $filename = uniqid() . '_' . $image->getClientOriginalName();
        //         $image->move(public_path('uploads'), $filename);
        //         $imagePaths[] = 'uploads/' . $filename;
        //     }
        // }

        // Create a new user
        $Product = Product::create([
            'type' => $request->input('type'),

            'Hersteller' => $request->input('Hersteller'),
            'Herst_Nr' => $request->input('Herst_Nr'),
            'Lief_Art_Nr' => $request->input('Lief_Art_Nr'),
             'Hersteller_Artikelnummer' => $request->input('Hersteller_Artikelnummer'),
            'Katalog_Art_Nummertion' => $request->input('descriKatalog_Art_Nummertion'), 
            'Katalog_Art_Nummer' => $request->input('Katalog_Art_Nummer'),

            'Kategorie' => $request->input('Kategorie'),
            'VE_VPE' => $request->input('VE_VPE'),
            'Einheit' => $request->input('Einheit'),
            'Lief_Art_Nr' => $request->input('Lief_Art_Nr'),
            'Lief_Art_Nr' => $request->input('Lief_Art_Nr'),
            'Rabattcode_1' => $request->input('Rabattcode_1'), 
            'Rabattcode_2' => $request->input('Rabattcode_2'),
            'Rabattcode_3' => $request->input('Rabattcode_3') ,
            'Preis_zzgl_MwSt' => $request->input('Preis_zzgl_MwSt'),
            'Preis_inkl_MwSt' => $request->input('Preis_inkl_MwSt'),
            'Einkausfpreis_zzgl_MwSt' => $request->input('Einkausfpreis_zzgl_MwSt'),
            'Einkaufsrabatt' => $request->input('Einkaufsrabatt'),
            'Artikelname' => $request->input('Artikelname'), 
            'Beschreibung_kurz' => $request->input('Beschreibung_kurz'),
            'Beschreibung_lang' => $request->input('Beschreibung_lang'),

            
            'm3/h' => $request->input('m3/h') ,
            'Stichmass' => $request->input('Stichmass'),
            'kW' => $request->input('kW'),
            'Volt' => $request->input('Volt'),
            'Kelvin' => $request->input('Kelvin'),
            'lm' => $request->input('lm'), 
            'Druckstufe_PN' => $request->input('Druckstufe_PN'),
            'Material' => $request->input('Material') ,
            'Körnung/h' => $request->input('Körnung'),
            'Durchmesser' => $request->input('Durchmesser'),
            'Radius' => $request->input('Radius'),
            'Gewicht' => $request->input('Gewicht'),
            'Länge' => $request->input('Länge'), 
            'Breite' => $request->input('Breite'),
            'Höhe' => $request->input('Höhe') ,
            'Bild_1' => $request->input('Bild_1'),
            'Bild_2' => $request->input('Bild_2'),
            'Bild_3' => $request->input('Bild_3'),
            'Bild_4' => $request->input('Bild_4'),
            'Anleitung_PDF_1' => $request->input('Anleitung_PDF_1'), 
            'Anleitung_PDF_2' => $request->input('Anleitung_PDF_2'),
            'Anleitung_PDF_3' => $request->input('Anleitung_PDF_3'),


           
         






            'addedBy' => "addedBy",
          
        ]);

        if($Product){

        return response()->json(['success' => 'Product Added successfully...']);

        }

        else{

        return response()->json(['error' => 'Product not Added successfully !']);

        }
    }



    
    public function productListing(){

        $products = Product::orderBy('created_at', 'desc')->get();

        if ($products){
            return response()->json(['productList'=>$products]);
        }
     
            return response()->json(['errors'=>"Products Not Found"]);
    }


    public function editProduct(){
     
        return view('admin_theme/pages/products/editProduct');
    }

    public function deleteProduct($id){

        $deletedProduct = Product::where('id', $id)->delete();

        if ($deletedProduct){
            return response()->json(['success'=>"Product Deleted Successfully"]);
        }
     
        else{
            return response()->json(['errors'=>"Products Not Deleted"]);
        }
           
     
        // return view('admin_theme/pages/products/addProduct');
    }

   
}
