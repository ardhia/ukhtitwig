<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TutorialController extends Controller
{
	 //PUBLIK
 public function tutorial () {
  return view('tutorial');
 }

 public function isi_tutorial () {
  return view('isi-tutorial');
 }
 //END

 //USER
 public function tutorialUser () {
  return view('auth/tutorial');
 }

 public function isi_tutorialUser (){
  return view('auth/isi-tutorial');
 }

 public function user_insertTutorial (){
  return view('auth/user_insertTutorial');
 }

    public function prosesUser_insertTutorial (Request $request) {
  $user_insertTutorial= new User_insertTutorial;
  $user_insertTutorial->Judul_Tutorial = $request->input('Judul_Tutorial');
  $user_insertTutorial->Isi_Tutorial = $request->input('Isi_Tutorial');
  $user_insertTutorial->save();

  return Redirect::to('auth/profilU/user_insertTutorial');
 }

 //ADMIN

 public function tutorialAdmin (){
  return view('admin/tutorial');
 }

 public function isi_tutorialAdmin (){
  return view('admin/isi-tutorial');
 }

    public function tampilIsiTutorial () {
     $tutorial = DB::table('tutorial')->select('Judul_Tutorial', 'Isi_Tutorial')->get();

     return view('admin/isi-tutorial', ['tutorial' => $tutorial]);
    }

      public function tampilTutorial () {
     $daftartutorial = DB::table('tutorial')->select('Judul_Tutorial', 'Isi_Tutorial')->get();

     return view('admin/tutorial', ['tutorial' => $daftartutorial]);
    }
 //END
}
