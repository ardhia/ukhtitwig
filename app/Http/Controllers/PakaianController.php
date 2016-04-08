<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Auth;
use App\User_insertToko;
use App\Http\Requests;
use DB;

class PakaianController extends Controller
{
	//get
	public function tampilPakaian (){
        $user = Auth::user();

    	$daftartoko =  DB::table('toko')->select('photoToko', 'idToko', 'judulToko', 'harga', 'jb', 'ketToko')->where('jb', 'Pakaian')->Paginate(12);
    	
    	return view('pakaian', ['toko' => $daftartoko, 'user' => $user]);
	}
}
