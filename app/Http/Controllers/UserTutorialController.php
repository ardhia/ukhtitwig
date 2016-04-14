<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests;
use Redirect;
use App\Notifikasi;
use App\Tutorial;

class UserTutorialController extends Controller
{
    public function tampilUserTutorial (){
        $user = Auth::user();
        $tutorial =  Tutorial::Paginate(3);
        $notif = Notifikasi::where('user_id', $user->id)->paginate(5);


        return view('auth/user_tutorial', ['user' => $user, 'notif' => $notif, 'tutorial' => $tutorial]);
	}
}
