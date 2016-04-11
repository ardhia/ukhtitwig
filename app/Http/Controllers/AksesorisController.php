<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Toko;

class AksesorisController extends Controller
{
	public function tampilAksesoris (){
		$user = Auth::user();

    	$daftartoko =  Toko::where('jb', 'Aksesoris')->Paginate(12);
    	
		return view('aksesoris', ['toko' => $daftartoko, 'user' => $user]);
	}
}
