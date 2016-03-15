<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;
use App\User_insertTutorial;
use DB;

class TutorialController extends Controller
{

	//PUBLIK
	public function tutorial () {
		return view('auth/tutorial');
	}

	public function isi_tutorial () {
		return view('auth/tutorial/isi-tutorial');
	}
	//END

	//USER
	public function tutorialUser () {
		return view('auth/tutorial');
	}

	public function isi_tutorialUser (){
		return view('auth/tutorial/isi_tutorial');
	}

	public function user_insertTutorial (){
		return view('auth/user_profilU/user_insertTutorial');
	}

	//ADMIN

	public function tutorialAdmin (){
		return view('auth/tutorial');
	}

	public function isi_tutorialAdmin (){
		return view('auth/tutorial/isi-tutorial');
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

		return Redirect::to('auth/user_profilU/user_insertTutorial');
	}
	//END
}
