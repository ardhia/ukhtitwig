<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests;

class SettingUserController extends Controller
{
	public function tampilSettingUser (){
        $user = Auth::user();

		return view('auth/settingUser', ['settinguser' => $user]);
	}
}
