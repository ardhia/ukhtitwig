<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class TableTutorialController extends Controller
{
	public function tampilTableTutorial (){
	
	$tutorial = DB::table('tutorial')->select('No', 'email', 'Judul_Tutorial', 'Isi_Tutorial')->get();

     return view('admin/tableTutorial', ['tutorial' => $tutorial]);
	}
}
