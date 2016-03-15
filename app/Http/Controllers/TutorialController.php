<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;
use App\User_insertTutorial;

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

    public function prosesUser_insertTutorial (Request $request) {
		$user_insertTutorial= new User_insertTutorial;
		$user_insertTutorial->Judul_Tutorial = $request->input('Judul_Tutorial');
		$user_insertTutorial->Isi_Tutorial = $request->input('Isi_Tutorial');
		$user_insertTutorial->save();

		return Redirect::to('auth/user_profilU/user_insertTutorial');
	}
	//END
}
