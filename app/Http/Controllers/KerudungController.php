<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class KerudungController extends Controller
{
	public function tampilKerudung (){
    	$daftartoko =  DB::table('toko')->select('photoToko')->where('jb', 'Kerudung')->get();
    	
    	return view('pakaian', ['toko' => $daftartoko]);
	}

	public function tampilKerudungUser (){
    	$daftartoko =  DB::table('toko')->select('photoToko')->where('jb', 'Kerudung')->get();
    	
		return view('auth\kerudung', ['toko' => $daftartoko]);
	}

	public function tampilKerudungAdmin (){
    	$daftartoko =  DB::table('toko')->select('photoToko')->where('jb', 'Kerudung')->get();
    	
		return view('admin\kerudung', ['toko' => $daftartoko]);
	}

}
