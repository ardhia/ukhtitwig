<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class TableTokoController extends Controller
{
    public function tampilTableToko (){
    	$toko =  DB::table('toko')->select('idToko', 'email', 'judulToko', 'harga', 'jb', 'ketToko')->get();

    	return view('admin/profilA', ['toko' => $toko]);
    }
}
