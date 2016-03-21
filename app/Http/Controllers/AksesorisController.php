<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class AksesorisController extends Controller
{
	public function tampilAksesoris (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Aksesoris')->Paginate(12);
    	
		return view('aksesoris', ['toko' => $daftartoko]);
	}

	public function tampilAksesorisUser (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Aksesoris')->Paginate(12);
    	
		return view('auth\aksesoris', ['toko' => $daftartoko]);
	}

	public function tampilAksesorisAdmin (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Aksesoris')->Paginate(12);
    	
		return view('admin\aksesoris', ['toko' => $daftartoko]);
	}

}
