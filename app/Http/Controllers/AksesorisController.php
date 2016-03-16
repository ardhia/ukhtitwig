<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AksesorisController extends Controller
{
	public function tampilAksesoris (){
    	$daftartoko =  DB::table('toko')->select('photoToko')->where('jb', 'Artikel')->get();
    	
		return view('aksesoris', ['toko' => $daftartoko]);
	}

	public function tampilAksesorisUser (){
    	$daftartoko =  DB::table('toko')->select('photoToko')->where('jb', 'Artikel')->get();
    	
		return view('auth\aksesoris', ['toko' => $daftartoko]);
	}

	public function tampilAksesorisAdmin (){
    	$daftartoko =  DB::table('toko')->select('photoToko')->where('jb', 'Artikel')->get();
    	
		return view('admin\aksesoris', ['toko' => $daftartoko]);
	}

}
