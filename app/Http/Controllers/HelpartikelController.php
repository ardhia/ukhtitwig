<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HelpartikelController extends Controller
{
    public function menampilkan_HelpArtikel () {

    	return view('/helpArtikel');
    }
}
