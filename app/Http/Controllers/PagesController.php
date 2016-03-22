<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\User;

class PagesController extends Controller
{

	//Publik
    public function home () {
    	return view('ukhti');
    }

    public function about () {
    	return view('about');
    }

    public function profilU () {
    	return view('profilU');
    }

    //END
/*
|
|
|
*/
    //User
    public function homeUser () {
        return view('auth\ukhti');
    }

    public function aboutUser () {
        return view('auth\about');
    }

    public function profilUser (Request $request) {
        $user = Auth::user();
        return view('auth\profilU', ['user' => $user ]);
    }

    
    //END
/*
|
|
|
*/
    //Admin
    public function homeAdmin () {
        return view('admin/ukhti');
    }

    public function aboutAdmin () {
        return view('admin/about');
    }

    public function profilAdmin () {
        return view('admin/profilU');
    }

    //END
}
