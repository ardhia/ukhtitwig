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
        $this->validate($request, [
        'nama' => 'required',
        'isi_komentar' => 'required',
        ]);
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


    public function prosesKomentarArtikel(Request $request, $No){
        $this->validate($request, [
        'nama' => 'required',
        'isi_komentar' => 'required',
        ]);
        $artikel = DB::table('artikel')
                    ->select('Judul_Artikel', 'Isi_Artikel', 'Photo')
                    ->where('No', $No)
                    ->first();
        $komentar = new KomentarTutorial;
        $komentar = DB::table('komentar_artikel')
                    ->where('no_artikel', $No)
                    ->insert(['nama' => $request->input('nama'), 'isi_komentar' => $request->input('isi_komentar'), 'no_artikel' => $No]);

        return redirect()->route('artikel.isi-artikel', ['no_artikel' => $No]);
    }
}
