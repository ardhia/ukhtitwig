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
    	$daftarartikel =  DB::table('artikel')->select('No', 'email', 'Judul_Artikel', 'Isi_Artikel')->get();
    	$tutorial = DB::table('tutorial')->select('No', 'email', 'Judul_Tutorial', 'Isi_Tutorial')->get();
    	$toko =  DB::table('toko')->select('idToko', 'email', 'judulToko', 'harga', 'jb', 'ketToko')->get();
    	$subs =  DB::table('subscribe')->select('Id', 'email')->get();

        return view('auth/profilU', ['user' => $user, 'artikel' => $daftarartikel, 'tutorial' => $tutorial, 'toko' => $toko]);
    }
}
