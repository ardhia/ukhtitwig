<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
	public function updateProfile(Request $request){
        if ($request->user()) {
            // $request->user() returns an instance of the authenticated user...
        }
    }
    
    public function __construct() {
    	$this->middleware('auth');
	}
}
