<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class SepatuController extends Controller
{
	public function tampilSepatu (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Sepatu')->Paginate(12);
    	
		return view('sepatu', ['toko' => $daftartoko]);
	}

	public function tampilSepatuUser (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Sepatu')->Paginate(12);
    	
		return view('auth\sepatu', ['toko' => $daftartoko]);
	}

	public function tampilSepatuAdmin (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Sepatu')->Paginate(12);
    	
		return view('admin\sepatu', ['toko' => $daftartoko]);
	}

}
