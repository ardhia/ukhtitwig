<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Hadits;

class HaditsController extends Controller
{
    //Publik

    public function hadits () {
    	//$hadits =  DB::table('hadits')->select('Sumber_HR', 'Isi_Hadits')->Paginate(5);
        $hadits = Hadits::paginate(5);
        return view('hadits', ['hadits' => $hadits]);
    }

    public function haditsUser () {
        return view('auth/hadits');
    }

    public function haditsAdmin () {
        return view('admint/hadits');
    }

}