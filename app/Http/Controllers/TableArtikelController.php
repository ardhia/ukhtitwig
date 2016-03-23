<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class TableArtikelController extends Controller
{
    
     public function tampilTableArtikel () {
    	$daftarartikel =  DB::table('artikel')->select('No', 'email', 'Judul_Artikel', 'Isi_Artikel')->get();

    	return view('admin/tableArtikel', ['artikel' => $daftarartikel]);
    }


}
