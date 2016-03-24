<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class TableSubscribeController extends Controller
{
    public function tampilTableSubscribe (){
    	$subs =  DB::table('subscribe')->select('Id', 'email')->get();

    	return view('admin/tableSubscribe', ['subscribe' => $subs]);
    }
}
