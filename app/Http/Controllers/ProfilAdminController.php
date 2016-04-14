<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Artikel;
use App\Tutorial;
use App\subscribe;
use App\Toko;

class ProfilAdminController extends Controller
{
    public function tampilProfilAdmin (){

    	$artikel =  Artikel::get();
    	$tutorial = Tutorial::get();
    	$toko =  Toko::get();
    	$subs =  Subscribe::get();

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
