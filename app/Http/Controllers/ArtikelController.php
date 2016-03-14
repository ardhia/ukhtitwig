<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\User_insertArtikel;
use App\Http\Requests;
use DB;

class ArtikelController extends Controller
{
    public function tampilUser_insertArtikel () {
    	return view('user_insertArtikel');
    }

    public function tampilIsiArtikel () {
    	$artikel =  DB::table('artikel')->select('Judul_Artikel', 'Isi_Artikel')->get();
    	
    	return view('isi-artikel', ['artikel' => $artikel]);
    }

    public function tampilArtikel () {
    	$daftarartikel =  DB::table('artikel')->select('Judul_Artikel', 'Isi_Artikel')->get();
    	
    	return view('artikel', ['artikel' => $daftarartikel]);
    }

    public function prosesUser_insertArtikel (Request $request){
	    $artikel = new User_insertArtikel;
	    $artikel->Judul_Artikel = $request->input('Judul_Artikel');
	    $artikel->Isi_Artikel = $request->input('Isi_Artikel');
	    $artikel->save();
	 	return Redirect::to('/user_profilU/user_insertArtikel');
	}
}
