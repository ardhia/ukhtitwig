<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminRegisterController extends Controller
{
    public function tampilRegisterAdmin(){
    	return view('admin/registrasi_admin');
    }
}
