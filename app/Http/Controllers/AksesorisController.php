<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AksesorisController extends Controller
{
	public function tampilAksesoris (){
		$user = Auth::user();

    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Aksesoris')->Paginate(12);
    	
		return view('aksesoris', ['toko' => $daftartoko, 'user' => $user]);
	}
}
