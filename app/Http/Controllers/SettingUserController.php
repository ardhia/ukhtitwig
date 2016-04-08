<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests;
use Redirect;

class SettingUserController extends Controller
{
	public function tampilSettingUser (){
        $user = Auth::user();

		return view('auth/settingUser', ['user' => $user]);
	}

	public function prosesEditSetting (Request $request, $id) {
    $user = User::where('id', $id)
            ->update(['name' => $request->input('name')]);

        //dd($user);exit;
        return redirect()->route('settingUser', ['id' => $id]);
    }

    public function prosesEditSettingEmail (Request $request, $id) {
    $user = User::where('id', $id)
            ->update(['email' => $request->input('email'), 'al_email' => $request->input('al_email')]);

        //dd($user);exit;
        return redirect()->route('settingUser', ['id' => $id]);
    }

    public function prosesEditSettingPswd (Request $request, $id) {
    $user = User::where('id', $id)
            ->update(['password' => $request->input('password')]);

        //dd($user);exit;
        return redirect()->route('settingUser', ['id' => $id]);
    }


    public function prosesEditSettingIdentitas (Request $request, $id) {
    $user = User::where('id', $id)
            ->update(['noHp' => $request->input('noHp'), 'tempat_lahir' => $request->input('tempat_lahir'), 'tanggal_lahir' => $request->input('tanggal_lahir'), 'status' => $request->input('status'), 'alamat' => $request->input('alamat')]);

        //dd($user);exit;
        return redirect()->route('settingUser', ['id' => $id]);
    }



}
