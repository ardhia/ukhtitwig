<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Artikel;
use App\Toko;
use App\Testimoni;
use App\Tutorial;
use DB;

class PagesController extends Controller
{

	//Publik
    public function home () {
    	return view('ukhti');
    }

    public function about () {
    	return view('about');
    }

    public function profilU ($id) {
        $testimoni = Testimoni::where('user_id', $id)->get();
        $toko = Toko::where('user_id', $id)->get();
        $artikel = Artikel::where('user_id', $id)->get();
        $tutorial = Tutorial::where('user_id', $id)->get();
        $user = User::where('id', $id)->first();
        //dd($user);

    	return view('profilU', ['user' => $user, 'testimoni' => $testimoni, 'id' => $id, 'toko' => $toko, 'tutorial' => $tutorial, 'artikel' => $artikel]);
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
