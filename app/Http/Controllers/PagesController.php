<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

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

    public function hadits () {
        return view('hadits');
    }
    //END
/*
|
|
|
*/
    //User
    public function homeUser () {
        return view('auth/ukhti');
    }

    public function aboutUser () {
        return view('auth/about');
    }

    public function profilUser () {
        return view('auth/profilU');
    }

    public function haditsUser () {
        return view('auth/hadits');
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

    public function haditsAdmin () {
        return view('admint/hadits');
    }
    //END
}
