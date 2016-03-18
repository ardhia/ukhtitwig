<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class MakananController extends Controller
{
	public function tampilMakanan (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Makanan')->get();

		return view('makanan', ['toko' => $daftartoko]);
	}

	public function tampilMakananUser (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Makanan')->get();

		return view('auth\makanan', ['toko' => $daftartoko]);
	}

	public function tampilMakananAdmin (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Makanan')->get();

		return view('admin\makanan', ['toko' => $daftartoko]);
	}

}
