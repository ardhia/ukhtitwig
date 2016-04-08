<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class MakananController extends Controller
{
	public function tampilMakanan (){
		$user = Auth::user();
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Makanan')->Paginate(12);

		return view('makanan', ['toko' => $daftartoko, 'user', $user]);
	}

}
