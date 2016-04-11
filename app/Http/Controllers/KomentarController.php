<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\isi_tutorial;
use App\KomentarTutorial;
use App\Notifikasi;
use App\Tutorial;
use App\Artikel;


class KomentarController extends Controller
{
    //post komentar tutorial
    public function prosesKomentarTutorial(Request $request, $No){
        $this->validate($request, [
        'nama' => 'required',
        'isi_komentar' => 'required',
        ]);
        $tutorial = Tutorial::where('No', $No)
                    ->first();
        $komentar = new KomentarTutorial;
        $komentar = DB::table('komentar_tutorial')
                    ->where('no_tutorial', $No)
                    ->insert(['nama' => $request->input('nama'), 'isi_komentar' => $request->input('isi_komentar'), 'no_tutorial' => $No]);

        $notif = new Notifikasi;
        $notif = Notifikasi::where('user_id', $tutorial->user_id)
                ->insert(['link' => route('tutorial.isi-tutorial', ['no_tutorial' => $No]), 'user_id' => $tutorial->user_id, 'status' => $request->input('status'), 'nama' => $request->input('nama'), 'verb' => $request->input('verb')]);

        return redirect()->route('tutorial.isi-tutorial', ['no_tutorial' => $No]);
    }


    public function prosesKomentarArtikel(Request $request, $No){
        $this->validate($request, [
        'nama' => 'required',
        'isi_komentar' => 'required',
        ]);
        $artikel = Artikel::where('No', $No)
                    ->first();
        $komentar = new KomentarTutorial;
        $komentar = DB::table('komentar_artikel')
                    ->where('no_artikel', $No)
                    ->insert(['nama' => $request->input('nama'), 'isi_komentar' => $request->input('isi_komentar'), 'no_artikel' => $No]);
                    

        $notif = new Notifikasi;
        $notif = Notifikasi::where('user_id', $artikel->user_id)
                ->insert(['link' => route('artikel.isi-artikel', ['no_tutorial' => $No]), 'user_id' => $artikel->user_id, 'status' => $request->input('status'), 'nama' => $request->input('nama'), 'verb' => $request->input('verb')]);

        return redirect()->route('artikel.isi-artikel', ['no_artikel' => $No]);
    }
}
