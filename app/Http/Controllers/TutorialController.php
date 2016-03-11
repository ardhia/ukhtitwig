<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;
use App\User_insertTutorial;

class TutorialController extends Controller
{
    public function tampilUser_insertTutorial () {
    	return view('user_insertTutorial');
    }

    public function prosesUser_insertTutorial (Request $request) {
		$user_insertTutorial= new User_insertTutorial;
		$user_insertTutorial->Judul_Tutorial = $request->input('Judul_Tutorial');
		$user_insertTutorial->Isi_Tutorial = $request->input('Isi_Tutorial');
		$user_insertTutorial->save();

		return Redirect::to('/user_profilU/user_insertTutorial');
	}
}
