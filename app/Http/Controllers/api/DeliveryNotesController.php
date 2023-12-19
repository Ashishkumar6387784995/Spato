<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryNotesController extends Controller
{
    public function DeliveryNotesListing(){
     
        return view('admin_theme/pages/delivery_notes/DeliveryNotesList');
    }


    public function editDeliveryNotes(){
     
        return view('admin_theme/pages/delivery_notes/editDeliveryNotes');
    }

    public function addDeliveryNotes(){
     
        return view('admin_theme/pages/delivery_notes/addDeliveryNotes');
    }
}
