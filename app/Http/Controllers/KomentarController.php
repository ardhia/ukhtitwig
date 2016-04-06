<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Redirect;
use App\isi_tutorial;
use App\KomentarTutorial;


class KomentarController extends Controller
{
    //post komentar tutorial
    public function prosesKomentarTutorial(Request $request, $No){
        /*$this->validate($request, [
        'nama' => 'required',
        'isi_komentar' => 'required',
        ]);*/
        $tutorial = DB::table('tutorial')
                    ->select('Judul_Tutorial', 'Isi_Tutorial', 'Photo')
                    ->where('No', $No)
                    ->first();
        $komentar = new KomentarTutorial;
        $komentar = DB::table('komentar_tutorial')
                    ->where('no_tutorial', $No)
                    ->insert(['nama' => $request->input('nama'), 'isi_komentar' => $request->input('isi_komentar'), 'no_tutorial' => $No]);

        return redirect()->route('tutorial.isi-tutorial', ['no_tutorial' => $No]);
    }

	//get komentar tutorial
   /* public function isi_tutorial ($No) {
    	$dataTutorial = DB::table('tutorial')->select('No', 'Judul_Tutorial', 'Isi_Tutorial', 'Photo', 'created_at')->where('No', $No)->first();
      //dd($dataTutorial);
        $komentar_tutorial= DB::table('komentar_tutorial')
                            ->select('No', 'nama', 'isi_komentar')
                            ->where('no_tutorial', $No)
                            ->get();

        return view('isi-tutorial', ['dataTutorial' => $dataTutorial, 'komentar_tutorial' => $komentar_tutorial, 'No' => $No]);
    }*/
}
