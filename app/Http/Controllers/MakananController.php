<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MakananController extends Controller
{
	public function tampilMakanan (){
    	$daftartoko =  DB::table('toko')->select('photoToko')->where('jb', 'Makanan')->get();

		return view('makanan', ['toko' => $daftartoko]);
	}

	public function tampilMakananUser (){
    	$daftartoko =  DB::table('toko')->select('photoToko')->where('jb', 'Makanan')->get();

		return view('auth\makanan', ['toko' => $daftartoko]);
	}

	public function tampilMakananAdmin (){
    	$daftartoko =  DB::table('toko')->select('photoToko')->where('jb', 'Makanan')->get();

		return view('admin\makanan', ['toko' => $daftartoko]);
	}

}
