<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Delivery_notes;
use Illuminate\Support\Facades\Validator;
use App\Mail\DeliveryNotesMailer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class DeliveryNotesController extends Controller
{

    public function DeliveryNotesListingApi()
    {
        $user = Auth::guard('api')->user();
        if ($user->role == 'Admin') {
            $delivery_notes = Delivery_notes::select('Lieferschein_Nr','Lieferdatum','Ihre_Kundennummer','Einheit','calculate_status')->orderBy('created_at', 'desc')->get()->unique('Lieferschein_Nr');
        } elseif ($user->role == 'supplier') {
            $delivery_notes = Delivery_notes::select('id','Lieferschein_Nr', 'Lieferdatum', 'Ihre_Kundennummer', 'Einheit','deliveryStatus')
            ->whereRaw('CAST(SUBSTRING_INDEX(Produkt, ".", 1) AS UNSIGNED) = ?', [$user->Lieferantennummer])
            ->orderBy('created_at', 'desc')
            ->get()
            ->unique('Lieferschein_Nr');
        
        } else {
            $offers = 'offer not found';
        }

        if ($delivery_notes) {
            return response()->json(['delivery_notes' => $delivery_notes, 'user' => $user,]);
        } else {
            return response()->json(['errors' => 'Deleivery Notes Not Found']);
        }
    }


    public function editDeliveryNotes($role, $deliveryId)
    {
        $deliveryNotes = Delivery_notes::select()
        ->where('Lieferschein_Nr', $deliveryId)
        ->orderBy('created_at', 'desc')
        ->get();
    
        return view('admin_theme/pages/delivery_notes/editDeliveryNotes')->with(compact('role','deliveryNotes'));
    }

    public function addDeliveryNotes($role)
    {

        $lastOffer = Delivery_notes::latest()->first();
        if ($lastOffer) {
            $lastOffer = $lastOffer->Lieferschein_Nr;
            // Assuming $lastOffer is 'LI-1234'

            // Split the string into an array based on the dash
            $parts = explode('-', $lastOffer);
            $parts = $parts[1];

            // Increment the numeric part
            $newNumericPart = $parts + 1;

            // Create the new offerNo
            $newDeliveryNotesNo = 'LI-' . $newNumericPart;
            // echo $newOfferNo;

            // $newOfferNo will be 'LI-1235'
        } else {
            $newDeliveryNotesNo = 'LI-1234';
        }

        return view('admin_theme/pages/delivery_notes/addDeliveryNotes')->with(compact('newDeliveryNotesNo', 'role'));
    }


    public function addDeliveryNotesApi(Request $request)
    {

        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'Lieferschein_Nr' => 'required|string|unique:delivery_notes',
            'Lieferdatum' => 'required|date_format:Y-m-d',
            // 'Referenz' => 'required|string',
            'Ihre_Kundennummer' => 'required|string',
            'inputs.*.POS' => 'required|numeric',
            'inputs.*.Produkt' => 'required|string',
            'inputs.*.Beschreibung' => 'required|string',
            // 'inputs.*.Menge' => 'required|string',
            'inputs.*.Einheit' => 'required|string',

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $user = Auth::guard('api')->user();

        if ($user->role == 'Admin') {

            $offer = new delivery_notes();
            // Set the attributes of the model with the main form data

            // Get the dynamic fields from the request
            $dynamicFields = $request->input('inputs');

            // Set dynamic fields on the offer
            foreach ($dynamicFields as $dynamicField) {
                $offer = new Delivery_notes();
                $offer->Lieferschein_Nr = $request->input('Lieferschein_Nr');
                $offer->Lieferdatum = $request->input('Lieferdatum');
                $offer->Referenz = $request->input('Referenz');
                $offer->Ihre_Kundennummer = $request->input('Ihre_Kundennummer');
                $offer->Ihre_Ust_ID = $request->input('Ihre_Ust_ID');

                $offer->POS = $dynamicField['POS'];
                $offer->Produkt = $dynamicField['Produkt'];
                $offer->Beschreibung = $dynamicField['Beschreibung'];
                $offer->Menge = $dynamicField['Menge'];
                $offer->Einheit = $dynamicField['Einheit'];

                $offer->save();
            }

            // Return a success response
            return response()->json(['success' => "Delivery Notes Is Added SuccessFully"]);
        } else {
            // Return a success response
            return response()->json(['error' => "Delivery Notes Is not Added SuccessFully",]);
        }
    }


    // function is used for send Delivery Notes Mail
    public function sendDeliveryNotesMailsToB2C(Request $request)
    {
        $Lieferschein_Nr = $request->input('Lieferschein_Nr');
        $email = $request->input('email');

        // return response()->json(['success' => $email]);

        Mail::to($email)->send(new DeliveryNotesMailer($Lieferschein_Nr));

        return response()->json(['success' => "Delivery Notes Mail Send SuccessFully"]);
    }

    public function editDeliveryNotesForSuppliers($role, $Id){

        $deliveryNotes = Delivery_notes::select()
        ->where('id', $Id)
        ->get();

        return view('admin_theme/pages/delivery_notes/editDeliveryNotesForSuppliers')->with(compact('role','deliveryNotes'));

    }

    public function downloadDeliveryPdf($deliveryId){

          // Retrieve the offer
          $notes = Delivery_notes::where('Lieferschein_Nr', $deliveryId)->first();

          if ($notes) {
              // Retrieve offers associated with the offer ID
              $offers = Delivery_notes::where('Lieferschein_Nr', $deliveryId)->get();
  
              // Generate PDF from the view
              $pdf = PDF::loadView('admin_theme/pages/delivery_notes/deliveryNotesPdf', compact('notes'));
  
              // Specify the directory path for storing the PDF in the public storage folder
              $pdfDirectory = 'public/deleivery_notes_pdf';
  
              // Specify the file path for the PDF
              $pdfFilePath = $deliveryId . '.pdf';
  
              // Save the PDF in the specified path
              Storage::put($pdfDirectory . '/' . $pdfFilePath, $pdf->output());
  
              // Get the public URL of the saved PDF file
              $pdfUrl = Storage::url($pdfDirectory . '/' . $pdfFilePath);
  
              // Download the saved PDF
              Delivery_notes::where('Lieferschein_Nr', $deliveryId)->update(['calculate_status' => 'Berechnet']);

              return response()->download(storage_path('app/' . $pdfDirectory . '/' . $pdfFilePath));
          } else {
              return back()->with('error', 'Offer not found');
          }

    }

    public function editDeliveryNotesForSuppliersApi(Request $request){

    
        $user = Auth::guard('api')->user();

        if ($user->role == 'supplier') {
            $status = Delivery_notes::where('id', $request->id) // Assuming $id is the ID of the record you want to update
            ->update([
                'changedDeliveryAddress' => $request->changedDeliveryAddress,
                'serialNo' => $request->serialNo,
                'addInformation' => $request->addInformation,
                'deliveryStatus' => $request->deliveryStatus,
            ]);
        }  else {
            $status = 'DeliveryNotes not found';
        }

        if ($status) {
            return response()->json(['success' => $status, 'user' => $user]);
        } else {
            return response()->json(['errors' => 'Offer Not Found']);
        }


    }
}
