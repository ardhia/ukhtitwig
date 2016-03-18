<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\User_insertToko;
use App\Http\Requests;
use DB;

class PakaianController extends Controller
{
	//get
	public function tampilPakaian (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Pakaian')->get();
    	
    	return view('pakaian', ['toko' => $daftartoko]);
	}

	public function tampilPakaianUser (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Pakaian')->get();
    	
    	return view('auth/pakaian', ['toko' => $daftartoko]);
	}

	public function tampilPakaianAdmin (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Pakaian')->get();
    	
    	return view('admin/pakaian', ['toko' => $daftartoko]);
	}

}
