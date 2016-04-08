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
    $user = DB::table('users')
            ->where('id', $id)
            ->update(['name' => $request->input('name'), 'email' => $request->input('email'), 'password' => $request->input('password'), 'tempat_lahir' => $request->input('tempat_lahir'), 'tanggal_lahir' => $request->input('tanggal_lahir'), 'jenis_kelamin' => $request->input('jenis_kelamin'), 'status' => $request->input('status'), 'al_email' => $request->input('al_email'), 'alamat' => $request->input('alamat'), 'noHP' => $request->input('noHP'), 'kesukaan' => $request->input('kesukaan'), 'kutipanHadits' => $request->input('kutipanHadits'), 'statusUser' => $request->input('statusUser'), 'contactUs' => $request->input('contactUs')]);

        //dd($user);exit;
        return redirect()->route('settingUser', ['id' => $id]);

    }

}
