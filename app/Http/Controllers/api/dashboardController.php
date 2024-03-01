<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class dashboardController extends Controller
{


    public function admin_Dashboard($role){

        $role= Crypt::decrypt($role);

        return view('admin_theme/pages/dashboard/dashboard')->with(compact('role'));
        
    }
}
