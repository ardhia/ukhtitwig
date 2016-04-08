<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class TasController extends Controller
{
	public function tampilTas (){
		$user = Auth::user();
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Tas')->Paginate(12);
    	
		return view('tas', ['toko' => $daftartoko, 'user' => $user]);
	}

}
