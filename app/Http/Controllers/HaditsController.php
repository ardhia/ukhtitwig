<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class HaditsController extends Controller
{
    //Publik

    public function hadits () {
    	$daftarhadits =  DB::table('hadits')->select('Sumber_HR', 'Isi_Hadits')->get();
    	

        return view('/hadits', ['hadits' => $daftarhadits]);
    }

    public function haditsUser () {
        return view('auth/hadits');
    }

    public function haditsAdmin () {
        return view('admint/hadits');
    }

}
