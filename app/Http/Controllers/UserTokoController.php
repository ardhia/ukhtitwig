<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests;
use Redirect;
use App\Notifikasi;
use App\Toko;


class UserTokoController extends Controller
{
    public function tampilUserToko (){
        $user = Auth::user();
        $toko =  Toko::Paginate(3);
        $notif = Notifikasi::where('user_id', $user->id)->paginate(5);


        return view('auth/user_toko', ['user' => $user, 'notif' => $notif, 'toko' => $toko]);
	}
}
