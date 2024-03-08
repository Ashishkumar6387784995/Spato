<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assignments_list;
use App\Models\offers;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use App\Mail\AssignmentMailer;
use App\Mail\sendResetLinkEmail;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AssignmentController extends Controller
{

    public function AssignmentListing()
    {

        $user = Auth::guard('api')->user();

        if ($user->role == 'Admin') {
            $assignments = Assignments_list::select('Auftrags_Nr', 'Ihre_Kundennummer', 'Auftragsdatum', 'gesamt_netto')
            ->orderBy('created_at', 'desc')
            
            ->get()->unique('Auftrags_Nr');
        
        } elseif ($user->role == 'b2b') {
            $assignments = Assignments_list::select('Auftrags_Nr', 'Ihre_Kundennummer', 'Auftragsdatum', 'gesamt_netto')->orderBy('created_at', 'desc')->where('Ihre_Kundennummer', $user->id)->get()->unique('Auftrags_Nr');
        } elseif ($user->role == 'supplier') {
            $assignments = Assignments_list::select('Auftrags_Nr', 'Ihre_Kundennummer', 'Auftragsdatum', 'gesamt_netto')->orderBy('created_at', 'desc')->where('Supplier_ID', $user->Lieferantennummer)->get()->unique('Auftrags_Nr');
        } else {
            $offers = 'offer not found';
        }


        if ($assignments) {
            return response()->json(['assignments' => $assignments, 'user' => $user]);
        }

        return response()->json(['errors' => "Assignments Not Found"]);
    }


    public function editAssignment($role)
    {

        return view('admin_theme/pages/assignments/editAssignments')->with(compact('role'));
    }

    public function addAssignment($role)
    {

        // $lastOffer = "AB-123456";
        $lastOffer = Assignments_list::latest()->first();

        if ($lastOffer) {

            $lastOffer = $lastOffer->Auftrags_Nr;
            // Assuming $lastOffer is 'AB-12345'
            // $lastOffer = 'AB-12345';



            // Split the string into an array based on the dash
            $parts = explode('-', $lastOffer);
            $parts = $parts[1];




            // Increment the numeric part
            $newNumericPart = $parts + 1;

            // Create the new offerNo
            $newAssignmentNo = 'AB-' . $newNumericPart;
            // echo $newOfferNo;

            // $newOfferNo will be 'AB-12346'
        } else {
            $newAssignmentNo = 'AB-12345';
        }


        return view('admin_theme/pages/assignments/addAssignments')->with(compact('newAssignmentNo', 'role'));
    }

    public function addAssignmentsApi(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'Auftrags_Nr' => 'required|string|unique:assignments_list',
            'Angebots_Nr' => 'string|unique:assignments_list',
            'Auftragsdatum' => 'required|date_format:Y-m-d',
            // 'Referenz' => 'required|string',
            'Ihre_Kundennummer' => 'required|string',
            'inputs.*.POS' => 'required|numeric',
            'inputs.*.Produkt' => 'required|string',
            'inputs.*.Beschreibung' => 'required|string',
            // 'inputs.*.Menge' => 'required|string',
            'inputs.*.Einheit' => 'required|string',
            'inputs.*.Einzelpreis' => 'required|string',
            'inputs.*.Rabatt' => 'required|string',
            'inputs.*.Gesamtpreis' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }


        $user = Auth::guard('api')->user();

        if ($user->role == 'Admin') {

            // Get the dynamic fields from the request
            $dynamicFields = $request->input('inputs');



            // Set dynamic fields on the offer
            foreach ($dynamicFields as $dynamicField) {

                // for split supplier id
                
                $parts = explode(".", $dynamicField['Produkt']);
                $Supplier_ID = $parts[0]; // Get the value after the dot symbol
                
                $assignment = new Assignments_list();
                $assignment->Auftrags_Nr = $request->input('Auftrags_Nr');
                $assignment->Angebots_Nr = $request->input('Angebots_Nr');
                $assignment->Supplier_ID = $Supplier_ID;
                $assignment->Auftragsdatum = $request->input('Auftragsdatum');
                $assignment->Referenz = $request->input('Referenz');
                $assignment->Ihre_Kundennummer = $request->input('Ihre_Kundennummer');
                $assignment->Ihre_Ust_ID = $request->input('Ihre_Ust_ID');

                $assignment->gesamt_netto = $request->input('gesamt_netto');
                $assignment->zzgl_Umsatzsteuer = $request->input('zzgl_Umsatzsteuer');
                $assignment->Gesamtbetrag_brutto = $request->input('Gesamtbetrag_brutto');


                $assignment->POS = $dynamicField['POS'];
                $assignment->Produkt = $dynamicField['Produkt'];
                $assignment->Beschreibung = $dynamicField['Beschreibung'];
                $assignment->Menge = $dynamicField['Menge'];
                $assignment->Einheit = $dynamicField['Einheit'];
                $assignment->Einzelpreis = $dynamicField['Einzelpreis'];
                $assignment->Rabatt = $dynamicField['Rabatt'];
                $assignment->Gesamtpreis = $dynamicField['Gesamtpreis'];
                $assignment->save();
            }
            
            // for update deliver status
            Offers::where('Angebots_Nr', $request->Angebots_Nr)->update(['assign_status' => 'Assigend']);


            // Return a success response
            return response()->json(['success' => "Assignment Added SuccessFully"]);
        } else {
            // Return a success response
            return response()->json(['error' => "Assignment Is not Added SuccessFully",]);
        }

    }


    // function for download pdf
    public function downloadPdf($assignmentNo)
    {

        // Retrieve the offer
        $assignment = Assignments_list::where('Auftrags_Nr', $assignmentNo)->first();

        if ($assignment) {
            // Retrieve Assignments_list associated with the offer ID
            $assignments = Assignments_list::where('Auftrags_Nr', $assignmentNo)->get();
            // Generate PDF from the view
            $pdf = PDF::loadView('admin_theme/pages/assignments/assignmentsPdf', compact('assignments'));

            // code for view pdf
            // return $pdf->stream('result.pdf');

            // Specify the directory path for storing the PDF in the public storage folder
            $pdfDirectory = 'public/assignments_pdf';

            // Specify the file path for the PDF
            $pdfFilePath = $assignmentNo . '.pdf';

            // Save the PDF in the specified path
            Storage::put($pdfDirectory . '/' . $pdfFilePath, $pdf->output());

            // Get the public URL of the saved PDF file
            $pdfUrl = Storage::url($pdfDirectory . '/' . $pdfFilePath);

            // Download the saved PDF
            return response()->download(storage_path('app/' . $pdfDirectory . '/' . $pdfFilePath));
        } else {
            return back()->with('error', 'Offer not found');
        }
    }


    // function is used for send Assignment Mail
    public function sendAssignmentMailsToB2C(Request $request)
    {
        $Auftrags_Nr = $request->input('Auftrags_Nr');
        $email = $request->input('email');

        // return response()->json(['success' => $email]);

        Mail::to($email)->send(new AssignmentMailer($Auftrags_Nr));

        return response()->json(['success' => "Pfd File Is Send SuccessFully"]);
    }



    // function for find assignment details by his order id
    public function getAssignmentDetailsApi(Request $request)
    {
        $user = Auth::guard('api')->user();

        $assignments = DB::table('assignments_list')
                ->select('assignments_list.*', 'users.name')
                ->join('users', 'users.id', '=', 'assignments_list.Ihre_Kundennummer')
                ->where('assignments_list.Auftrags_Nr', $request->assignment_no)
                ->where('assignments_list.Supplier_ID', $user->Lieferantennummer)
                ->orderby('assignments_list.created_at', 'DESC')
                ->get();

        if ($assignments->count()){
            return response()->json(['assignmentDtl'=>$assignments]);
        }
        
        return response()->json(['errors'=>"Order Not Found"]);
    }
}
