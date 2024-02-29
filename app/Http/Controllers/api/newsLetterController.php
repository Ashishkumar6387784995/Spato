<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class newsLetterController extends Controller
{
    //
    public function addNewsLetter($role)
    {
        return view('admin_theme/pages/newsLetter/addNewsLetter', compact('role'));
    }
}
