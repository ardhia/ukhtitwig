<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Redirect;
use App\User_insertArtikel;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Input;

class ArtikelController extends Controller
{

    //Publik
    public function tampilArtikel () {
    	$daftarartikel =  DB::table('artikel')->select('Judul_Artikel', 'Isi_Artikel', 'Photo')->Paginate(3);

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
        dd($tahun);
        exit;


    	return view('artikel', ['artikel' => $daftarartikel, 'tahun' => $tahun, 'bulan' => $bulan]);
    }

    public function tampilIsiArtikel () {
        return view('isi-artikel');
    }

    //END
/*
|
|
|
*/
    //User

    //get
    public function tampilArtikelUser () {
        $daftarartikel =  DB::table('artikel')->select('Judul_Artikel', 'Isi_Artikel', 'Photo')->get();
        
        return view('auth/artikel', ['artikel' => $daftarartikel]);
    }

    public function tampilIsiArtikelUser () {
        return view('auth/isi-artikel');
    }

    public function tampilUser_insertArtikel () {
        return view('auth/user_insertArtikel');
    }

    //post
    public function prosesUser_insertArtikel (Request $request){
        $this->validate($request, [
        'Judul_Artikel' => 'required',
        'Isi_Artikel' => 'required',
        'Photo' => 'required|unique:artikel|max:255',
        ]);
        $artikel = new User_insertArtikel;
        $artikel->Judul_Artikel = $request->input('Judul_Artikel');
        $artikel->Isi_Artikel = $request->input('Isi_Artikel');
        if($request->hasFile('Photo')) {
            $file = Input::file('Photo');
            //getting timestamp
            
            $name = $file->getClientOriginalName();
            
            $artikel->Photo = $name;

            $file->move(public_path().'/uploadPhoto/artikel/', $name);
        }
        $artikel->save();

        return Redirect::to('auth/profilU/user_insertArtikel');
    }

    //END
/*
|
|
|
*/
    //Admin
    public function tampilArtikelAdmin () {
        $daftarartikel =  DB::table('artikel')->select('Judul_Artikel', 'Isi_Artikel', 'Photo')->get();
        
        return view('admin/artikel', ['artikel' => $daftarartikel]);
    }

    public function tampilIsiArtikelAdmin () {
        return view('admin/isi-artikel');
    }
    //END
}
