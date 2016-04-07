<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HelptokoController extends Controller
{
    public function menampilkan_HelpToko() {

    	return view('/helpToko');
    }
}
