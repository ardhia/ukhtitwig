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

	public function search (Request $request){
		$keywords = $request->get('keywords');
		$table = DB::table('aksesoris')->select('judulToko')->where('jb', 'Aksesoris', 'judulToko', 'LIKE', '%' .$keywords. '%')->get();

		return view('toko/aksesoris/searchaksesoris', ['keywords' => $table]);
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
