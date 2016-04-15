<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests;
use Redirect;
use App\Notifikasi;
use App\Artikel;

class UserArtikelController extends Controller
{
	public function tampilUserArtikel (){
        $user = Auth::user();
        $artikel =  Artikel::Paginate(3);
        $notif = NULL;
        $count = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
            $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        }


        return view('auth/user_artikel', ['user' => $user, 'notif' => $notif, 'artikel' => $artikel, 'count' => $count]);
	}
}
