<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HelpsignupController extends Controller
{
    public function menampilkan_HelpSignUp() {

    	return view('/helpSignUp');
    }
}
