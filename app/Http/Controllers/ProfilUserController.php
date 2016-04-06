<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Tutorial;
use App\Toko;
use App\Artikel;
use Redirect;

class ProfilUserController extends Controller
{
    public function profilUser (Request $request) {
        $user = Auth::user();

        //Untuk menampilkan table
    	$daftarartikel =  Artikel::where('user_id', $user->id)->get();
    	$tutorial = Tutorial::where('user_id', $user->id)->get();
    	$toko =  Toko::where('user_id', $user->id)->get();
        //dd($toko);exit;

        return view('auth/profilU', ['user' => $user, 'artikel' => $daftarartikel, 'tutorial' => $tutorial, 'toko' => $toko]);
    }

    public function getPhotoProfil ($id) {
        $user = Auth::user();
        view('auth/changePhotoProfil', ['user' => $user]);
    }

    public function changePhotoProfil (Request $request, $id) {

        if($request->hasFile('photoProfil')) {
            $file = Input::file('photoProfil');
            $name = $file->getClientOriginalName();
            $file->move(public_path().'/uploadPhoto/photoProfil/', $name);

        $user = DB::table('users')
                ->where('id', $id)
                ->update(['photoProfil' => $name]);
        }

        //dd($user);exit;
        return Redirect::to('/auth/profilU');

    }

}
