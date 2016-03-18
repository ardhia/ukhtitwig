<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class TasController extends Controller
{
	public function tampilTas (){
    	$daftartoko =  DB::table('toko')->select('photoToko')->where('jb', 'Tas')->get();
    	
		return view('tas', ['toko' => $daftartoko]);
	}

	public function tampilTasUser (){
    	$daftartoko =  DB::table('toko')->select('photoToko')->where('jb', 'Tas')->get();
    	
		return view('auth\tas', ['toko' => $daftartoko]);
	}

	public function tampilTasAdmin (){
    	$daftartoko =  DB::table('toko')->select('photoToko')->where('jb', 'Tas')->get();
    	
		return view('admin\tas', ['toko' => $daftartoko]);
	}

}
