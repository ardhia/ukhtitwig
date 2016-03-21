<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class TasController extends Controller
{
	public function tampilTas (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Tas')->Paginate(12);
    	
		return view('tas', ['toko' => $daftartoko]);
	}

	public function tampilTasUser (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Tas')->Paginate(12);
    	
		return view('auth\tas', ['toko' => $daftartoko]);
	}

	public function tampilTasAdmin (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Tas')->Paginate(12);
    	
		return view('admin\tas', ['toko' => $daftartoko]);
	}

}
