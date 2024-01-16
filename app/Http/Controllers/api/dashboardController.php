<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{


    public function admin_Dashboard($role){

        return view('admin_theme/pages/dashboard/dashboard')->with(compact('role'));
        
    }
}
