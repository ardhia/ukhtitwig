<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;
use App\User_insertTutorial;
use DB;

class TutorialController extends Controller
{
    public function tampilUser_insertTutorial () {
    	return view('user_insertTutorial');
    }

    public function tampilIsiTutorial () {
    	$tutorial = DB::table('tutorial')->select('Judul_Tutorial', 'Isi_Tutorial')->get();

    	return view('isi-tutorial', ['tutorial' => $tutorial]);
    }

      public function tampilTutorial () {
    	$daftartutorial = DB::table('tutorial')->select('Judul_Tutorial', 'Isi_Tutorial')->get();

    	return view('tutorial', ['tutorial' => $daftartutorial]);
    }

    public function prosesUser_insertTutorial (Request $request) {
		$user_insertTutorial= new User_insertTutorial;
		$user_insertTutorial->Judul_Tutorial = $request->input('Judul_Tutorial');
		$user_insertTutorial->Isi_Tutorial = $request->input('Isi_Tutorial');
		$user_insertTutorial->save();

		return Redirect::to('/user_profilU/user_insertTutorial');
	}
}
