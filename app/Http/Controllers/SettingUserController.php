<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests;
use Redirect;
use App\Notifikasi;


class SettingUserController extends Controller
{
	public function tampilSettingUser (){
        $user = Auth::user();
        $notif = NULL;
        $count = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
            $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        }

		return view('auth/settingUser', ['notif' => $notif, 'user' => $user, 'count' => $count]);
	}

	//post
	public function prosesSettingNama (Request $request){
		$user = Auth::user();
		$this->validate($request, [
        'name' => 'required',
        ]);
		$user = DB::table('users')
            ->where('id', $user->id)
            ->update(['name' => $request->input('name')]);

        //dd($user);exit;
       return redirect()->route('settingUser');
	}

	public function prosesSettingEmail (Request $request){
		$user = Auth::user();
		$this->validate($request, [
        'email' => 'required|unique:users|max:255',
        'al_email' => 'required|unique:users|max:255',
        ]);
		$user = DB::table('users')
            ->where('id', $user->id)
            ->update(['email' => $request->input('email'), 'al_email' => $request->input('al_email')]);

        //dd($user);exit;
       return redirect()->route('settingUser');
	}

	public function prosesSettingPswd (Request $request){
		$user = Auth::user();
		$this->validate($request, [
        'password' => 'required',
        ]);
		$user = DB::table('users')
            ->where('id', $user->id)
            ->update(['password' => $request->input('password')]);

        //dd($user);exit;
       return redirect()->route('settingUser');
	}

	public function prosesSettingIdentitas (Request $request){
		$user = Auth::user();
		$this->validate($request, [
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'status' => 'required',
        'alamat' => 'required',
        'noHP' => 'required',
        ]);
		$user = DB::table('users')
            ->where('id', $user->id)
            ->update(['tempat_lahir' => $request->input('tempat_lahir'), 'tanggal_lahir' => $request->input('tanggal_lahir'), 'status' => $request->input('status'), 'alamat' => $request->input('alamat'), 'noHP' => $request->input('noHP')]);

        //dd($user);exit;
       return redirect()->route('settingUser');
	}

	public function prosesSettingLainnya (Request $request){
		$user = Auth::user();

		$user = DB::table('users')
            ->where('id', $user->id)
            ->update(['kutipanHadits' => $request->input('kutipanHadits'), 'kesukaan' => $request->input('kesukaan'), 'statusUser' => $request->input('statusUser'), 'contactUs' => $request->input('contactUs')]);

        //dd($user);exit;
       return redirect()->route('settingUser');
	}


}
