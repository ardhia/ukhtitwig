<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;




class TokoController extends Controller
{
    public function uploadPhoto (Request $request){
    	$file = $request->file('photo');
    }
}
