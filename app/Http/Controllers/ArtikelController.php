<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\User_insertArtikel;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Input;

class ArtikelController extends Controller
{

    //Publik
    public function tampilArtikel () {
    	$daftarartikel =  DB::table('artikel')->select('Judul_Artikel', 'Isi_Artikel', 'Photo')->get();
    	
    	return view('artikel', ['artikel' => $daftarartikel]);
    }

    public function tampilIsiArtikel () {
        return view('isi-artikel');
    }
    //END
/*
|
|
|
*/
    //User

    //get
    public function tampilArtikelUser () {
        $daftarartikel =  DB::table('artikel')->select('Judul_Artikel', 'Isi_Artikel', 'Photo')->get();
        
        return view('auth/artikel', ['artikel' => $daftarartikel]);
    }

    public function tampilIsiArtikelUser () {
        return view('auth/isi-artikel');
    }

    public function tampilUser_insertArtikel () {
        return view('auth/user_insertArtikel');
    }

    //post
    public function prosesUser_insertArtikel (Request $request){
        $artikel = new User_insertArtikel;
        $artikel->Judul_Artikel = $request->input('Judul_Artikel');
        $artikel->Isi_Artikel = $request->input('Isi_Artikel');
        if($request->hasFile('Photo')) {
            $file = Input::file('Photo');
            //getting timestamp
            
            $name = $file->getClientOriginalName();
            
            $artikel->Photo = $name;

            $file->move(public_path().'/uploadPhoto/artikel/', $name);
        }
        $artikel->save();

        return Redirect::to('auth/profilU/user_insertArtikel');
    }
    //END
/*
|
|
|
*/
    //Admin
    public function tampilArtikelAdmin () {
        $daftarartikel =  DB::table('artikel')->select('Judul_Artikel', 'Isi_Artikel')->get();
        
        return view('admin/artikel', ['artikel' => $daftarartikel]);
    }

    public function tampilIsiArtikelAdmin () {
        return view('admin/isi-artikel');
    }
    //END
}
