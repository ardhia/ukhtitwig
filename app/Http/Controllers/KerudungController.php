<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class KerudungController extends Controller
{
	public function tampilKerudung (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Kerudung')->Paginate(12);
    	
    	return view('pakaian', ['toko' => $daftartoko]);
	}

	public function tampilKerudungUser (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Kerudung')->Paginate(12);
    	
		return view('auth\kerudung', ['toko' => $daftartoko]);
	}

	public function tampilKerudungAdmin (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Kerudung')->Paginate(12);
    	
		return view('admin\kerudung', ['toko' => $daftartoko]);
	}

}
