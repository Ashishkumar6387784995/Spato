<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function admin_Dashboard(){
        return view('admin_theme/admin_dashboard');
    }
}
