<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfilUserController extends Controller
{
    public function profilUser (Request $request) {
        $user = Auth::user();
        //dd($user);
        //exit;


        //Untuk menampilkan table
    	$daftarartikel =  DB::table('artikel')->select('No', 'user_id', 'Judul_Artikel', 'Isi_Artikel')->where('user_id', $user->id)->get();
    	$tutorial = DB::table('tutorial')->select('No', 'user_id', 'Judul_Tutorial', 'Isi_Tutorial')->where('user_id', $user->id)->get();
    	$toko =  DB::table('toko')->select('idToko', 'user_id', 'judulToko', 'harga', 'jb', 'ketToko', 'photoToko')->where('user_id', $user->id)->get();

        return view('auth/profilU', ['user' => $user, 'artikel' => $daftarartikel, 'tutorial' => $tutorial, 'toko' => $toko]);
    }
}
