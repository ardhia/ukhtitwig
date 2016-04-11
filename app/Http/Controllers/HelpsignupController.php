<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Notifikasi;

class HelpsignupController extends Controller
{
    public function menampilkan_HelpSignUp() {

    	return view('/helpSignUp');
    }
}
