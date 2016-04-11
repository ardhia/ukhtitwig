<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Artikel;
use App\Notifikasi;

class ArtikelController extends Controller
{

    //Publik
    public function tampilArtikel () {
        $user = Auth::user();

        /*if (empty($user->konfirmasi)) {
            echo "hmm";
        } else {
            echo "tidak";
        }*/
        //dd($isi);exit;
    	$artikel =  Artikel::Paginate(3);
        $notif = Notifikasi::where('user_id', $user->id)->get();

        //Arsip
        $tahun = DB::table('artikel')
                        ->select (DB::raw("YEAR(created_at) as tahun"), DB::raw("count(*) as total "))
                        ->groupBy(DB::raw("YEAR(created_at)"))
                        //->groupBy MONTH('created_at');
                        ->get();

        foreach($tahun as $item){
            $bulan = DB::table('artikel')
                ->select(DB::raw('MONTH(created_at) as bulan'), DB::raw('count(*) as jumlah'))
                ->groupBy(DB::raw('MONTH(created_at)'))
                ->where(DB::raw('YEAR(created_at)'), $item->tahun)->get();
            $item->bulan = $bulan;
            //dd($item);
        }
        //dd($tahun);
        //exit;
    	return view('artikel', ['artikel' => $artikel, 'tahun' => $tahun, 'user' => $user, 'notif' => $notif]);
    }

    //
    public function tampilIsiArtikel ($No) {
        $user = Auth::user();
        $dataArtikel = Artikel::where('No', $No)->first();
        $notif = Notifikasi::where('user_id', $user->id)->get();
        //dd($dataArtikel);
        $komentar_artikel= DB::table('komentar_artikel')
                            ->select('nama', 'isi_komentar')
                            ->where('no_artikel', $No)
                            ->get();

        //Arsip
        $tahun = DB::table('artikel')
                        ->select (DB::raw("YEAR(created_at) as tahun"), DB::raw("count(*) as total "))
                        ->groupBy(DB::raw("YEAR(created_at)"))
                        //->groupBy MONTH('created_at');
                        ->get();

        foreach($tahun as $item){
            $bulan = DB::table('artikel')
                ->select(DB::raw('MONTH(created_at) as bulan'), DB::raw('count(*) as jumlah'))
                ->groupBy(DB::raw('MONTH(created_at)'))
                ->where(DB::raw('YEAR(created_at)'), $item->tahun)->get();
            $item->bulan = $bulan;
            //dd($item);
        }
        //dd($tahun);
        //exit;

        return view('isi-artikel', ['dataArtikel' => $dataArtikel, 'komentar_artikel' => $komentar_artikel, 'No' => $No, 'tahun' => $tahun, 'user' => $user, 'notif' => $notif]);
    }

    public function search (Request $request) {
        $user = Auth::user();
        $notif = Notifikasi::where('user_id', $user->id)->get();

        $keywords= $request->get('keywords');
        $table = Artikel::where('Judul_Artikel',  'LIKE', '%' . $keywords . '%')->get();

        //Arsip
        $tahun = DB::table('artikel')
                        ->select (DB::raw("YEAR(created_at) as tahun"), DB::raw("count(*) as total "))
                        ->groupBy(DB::raw("YEAR(created_at)"))
                        //->groupBy MONTH('created_at');
                        ->get();

        foreach($tahun as $item){
            $bulan = DB::table('artikel')
                ->select(DB::raw('MONTH(created_at) as bulan'), DB::raw('count(*) as jumlah'))
                ->groupBy(DB::raw('MONTH(created_at)'))
                ->where(DB::raw('YEAR(created_at)'), $item->tahun)->get();
            $item->bulan = $bulan;
            //dd($item);
        }
        //dd($tahun);
        //exit;
        
        return view('searchartikel', ['keywords' => $table, 'tahun' => $tahun, 'user' => $user, 'notif' => $notif]);
    }

    //END
/*
|
|
|
*/
    //User

    public function user_editArtikel ($No){
        $user = Auth::user();
        $notif = Notifikasi::where('user_id', $user->id)->get();

        $isiArtikel = Artikel::where('No', $No)->where('user_id', $user->id)->firstOrFail();
        //dd($isiArtikel, $user);exit;
        return view('auth/user_editArtikel', ['user' => $user, 'isiArtikel' => $isiArtikel, 'notif' => $notif]);
    }


    public function tampilUser_insertArtikel () {
        $user = Auth::user();
        $notif = Notifikasi::where('user_id', $user->id)->get();
        //dd($user);exit;
        return view('auth/user_insertArtikel', ['user' => $user, 'notif' => $notif]);
    }

    //post
    public function prosesUser_insertArtikel (Request $request){
        $user = Auth::user();
        //dd($user->id);exit;
        $this->validate($request, [
        'Judul_Artikel' => 'required',
        'Isi_Artikel' => 'required',
        'Photo' => 'required|unique:artikel|max:255',
        ]);
        $artikel = new Artikel;
        $artikel->Judul_Artikel = $request->input('Judul_Artikel');
        $artikel->Isi_Artikel = $request->input('Isi_Artikel');
        if($request->hasFile('Photo')) {
            $file = Input::file('Photo');
            $name = $file->getClientOriginalName();
            $artikel->Photo = $name;
            $file->move(public_path().'/uploadPhoto/artikel/', $name);
        }
        $artikel->user_id = $user->id;
        $artikel->user_name = $user->username;
        $artikel->save();
        //dd($artikel);exit;
        return Redirect::to('auth/profilU');
    }

    public function prosesUser_editArtikel (Request $request, $No) {
        /*$this->validate($request, [
        'Judul_Artikel' => 'required',
        'Isi_Artikel' => 'required',
        'Photo' => 'required|unique:artikel|max:255',
        ]);*/
        //$editArtikel= new User_insertArtikel;
        if($request->hasFile('Photo')) {
                                    $file = Input::file('Photo');
                                    $name = $file->getClientOriginalName();
                                    $file->move(public_path().'/uploadPhoto/artikel/', $name);
        $editArtikel = DB::table('artikel')
                        ->select('Judul_Artikel', 'Isi_Artikel', 'Photo', 'No')
                        ->where('No', $No)
                        ->update(['Judul_Artikel' => $request->input('Judul_Artikel'),
                        'Isi_Artikel' =>  $request->input('Isi_Artikel'),
                        'Photo' => $name]);
        }
        //$editArtikel->save();
        //dd($editArtikel);
        //exit;

        return Redirect::to('/auth/profilU');
    }

    public function deleteArtikel ($No){
        $user = Auth::user();
        $delete = DB::table('artikel')->where('No', $No)->where('user_id', $user->id)->delete();

        return Redirect::to('/auth/profilU');
    }

    //END
/*
|
|
|
*/
    //Admin

    //END

}
