<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\User;
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
        $testimoni = DB::table('testimoni')->select('nama', 'email', 'isiTestimoni', 'No', 'Photo', 'created_at')->where('user_id', $id)->get();
        $user = User::select('name', 'email', 'password', 'username', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'status', 'al_email', 'photoProfil')->where('id', $id)->get();
        //dd($user);

    	return view('profilU', ['user' => $user, 'testimoni' => $testimoni, 'id' => $id]);
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
