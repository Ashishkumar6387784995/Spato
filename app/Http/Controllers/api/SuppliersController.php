<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function addSuppliers($role){
     
        return view('admin_theme/pages/suppliers/addSuppliers')->with(compact('role'));
    }

    // public function addSuppliers(){
     
    //     return view('admin_theme/pages/suppliers/addSuppliers');
    // }

}
