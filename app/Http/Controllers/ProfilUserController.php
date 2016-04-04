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
        //dd($user);
        //exit;


        //Untuk menampilkan table
    	$daftarartikel =  Artikel::where('user_id', $user->id)->get();
    	$tutorial = Tutorial::where('user_id', $user->id)->get();
    	$toko =  Toko::where('user_id', $user->id)->get();

        return view('auth/profilU', ['user' => $user, 'artikel' => $daftarartikel, 'tutorial' => $tutorial, 'toko' => $toko]);
    }

    public function getPhotoProfil ($id) {
        $user = Auth::user();
        view('auth/changePhotoProfil', ['user' => $user]);
    }

    public function changePhotoProfil (Request $request, $id) {
        $user = Auth::user();

        if($request->hasFile('photoProfil')) {
            $file = Input::file('photoProfil');
            $name = $file->getClientOriginalName();
            $user->photoProfil = $name;
            $file->move(public_path().'/uploadPhoto/photoProfil/', $name);
        }

        $user = DB::table('users')
                ->select('id', 'photoProfil')
                ->where('id', $id)
                ->update(['photoProfil' => $request->input('photoProfil')]);
        dd($user);exit;
        return Redirect::to('/auth/profilU');

    }
}
