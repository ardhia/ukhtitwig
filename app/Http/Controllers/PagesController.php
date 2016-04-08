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

class PagesController extends Controller
{

	//Publik
    public function home () {
        $user = Auth::user();

    	return view('ukhti', ['user' => $user]);
    }

    public function about () {
        $user = Auth::user();

    	return view('about', ['user' => $user]);
    }

    public function profilU ($id) {
        $user = Auth::user();
        $testimoni = Testimoni::where('user_id', $id)->get();
        $toko = Toko::where('user_id', $id)->get();
        $artikel = Artikel::where('user_id', $id)->get();
        $tutorial = Tutorial::where('user_id', $id)->get();
        $foruser = User::where('id', $id)->first();
        //dd($user);

    	return view('profilU', ['foruser' => $foruser, 'testimoni' => $testimoni, 'id' => $id, 'toko' => $toko, 'tutorial' => $tutorial, 'artikel' => $artikel, 'user' => $user]);
    }

    //END
}