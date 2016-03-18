<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class LainnyaController extends Controller
{
	public function tampilDll (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Lainnya')->get();
    	
		return view('dll', ['toko' => $daftartoko]);
	}

	public function tampilDllUser (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Lainnya')->get();
    	
		return view('auth\dll', ['toko' => $daftartoko]);
	}

	public function tampilDllAdmin (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Lainnya')->get();
    	
		return view('admin\dll', ['toko' => $daftartoko]);
	}

}
