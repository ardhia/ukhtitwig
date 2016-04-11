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
use App\Notifikasi;

class PagesController extends Controller
{

	//Publik
    public function home () {
        $user = Auth::user();
        $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
        $artikel = Artikel::get();
        $tutorial = Tutorial::get();
        $toko = Toko::get();

        //dd($artikel);exit;

    	return view('ukhti', ['user' => $user, 'notif' => $notif, 'toko' => $toko, 'tutorial' => $tutorial, 'artikel' => $artikel]);
    }

    public function about () {
        $user = Auth::user();
        $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);

    	return view('about', ['user' => $user, 'notif' => $notif]);
    }

    public function profilU ($id) {
        $user = Auth::user();
        $testimoni = Testimoni::where('user_id', $id)->get();
        $toko = Toko::where('user_id', $id)->get();
        $artikel = Artikel::where('user_id', $id)->get();
        $tutorial = Tutorial::where('user_id', $id)->get();
        $foruser = User::where('id', $id)->first();
        $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
        //dd($user);

    	return view('profilU', ['foruser' => $foruser, 'testimoni' => $testimoni, 'id' => $id, 'toko' => $toko, 'tutorial' => $tutorial, 'artikel' => $artikel, 'user' => $user, 'notif' => $notif]);
    }

    //END
}