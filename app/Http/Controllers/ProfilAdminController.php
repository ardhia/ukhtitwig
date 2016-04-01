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
}
