<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class LainnyaController extends Controller
{
	public function tampilDll (){
		
		$user = Auth::user();
    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Lainnya')->Paginate(12);
    	
		return view('dll', ['toko' => $daftartoko, 'user' => $user]);
	}
}
