<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class KerudungController extends Controller
{
	public function tampilKerudung (){
		$user = Auth::user();

    	$daftartoko =  Toko::where('jb', 'Kerudung')->Paginate(12);
    	
    	return view('pakaian', ['toko' => $daftartoko, 'user' => $user]);
	}

}
