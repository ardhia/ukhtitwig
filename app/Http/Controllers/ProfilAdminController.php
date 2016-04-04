<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class ProfilAdminController extends Controller
{
    public function tampilProfilAdmin (){

    	$artikel =  DB::table('artikel')->select('No', 'user_id', 'Judul_Artikel', 'Isi_Artikel')->get();

    	$tutorial = DB::table('tutorial')->select('No', 'user_id', 'Judul_Tutorial', 'Isi_Tutorial')->get();

    	$toko =  DB::table('toko')->select('idToko', 'user_id', 'judulToko', 'harga', 'jb', 'ketToko')->get();

    	$subs =  DB::table('subscribe')->select('Id', 'email')->get();

    	return view('admin/profilA', ['artikel' => $artikel, 'tutorial' => $tutorial, 'toko' => $toko, 'subscribe' => $subs]);
    }

    //delete Artikel
    public function hapusArtikel ($No){
    	$hapusartikel = DB::table('artikel')
    					->where('No', $No)
    					->delete();
    }

    //delete Tutorial
    public function hapusTutorial ($No){
    	$hapustutorial = DB::table('tutorial')
    					->where('No', $No)
    					->delete();
    }

    //delete Toko
    public function hapusToko ($No){
    	$hapustoko = DB::table('toko')
    				->where('idToko', $No)
    				->delete();
    }

    //hapus Subscribe
    public function hapusSubscribe ($No){
    	$hapussubscribe = DB::table('subscribe')
    					->where('Id', $No)
    					->delete();
    }
}
