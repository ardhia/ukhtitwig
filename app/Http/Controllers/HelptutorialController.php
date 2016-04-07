<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HelptutorialController extends Controller
{
    public function menampilkan_HelpTutorial() {

    	return view('/helpTutorial');
    }
}
