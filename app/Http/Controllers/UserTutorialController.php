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
        $tutorial =  Tutorial::where('user_id', $user->id)Paginate(3);
        $notif = NULL;
        $count = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->orderBy('No', 'desc')->Paginate(5);
            $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        }


        return view('auth/user_tutorial', ['user' => $user, 'notif' => $notif, 'tutorial' => $tutorial, 'count' => $count]);
	}
}
