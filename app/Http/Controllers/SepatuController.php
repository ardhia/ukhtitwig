<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class SepatuController extends Controller
{
	public function tampilSepatu (){
		$user = Auth::user();

    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Sepatu')->Paginate(12);
    	
		return view('sepatu', ['toko' => $daftartoko, 'user' => $user]);
	}

}
