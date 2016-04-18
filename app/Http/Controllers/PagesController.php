<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Artikel;
use App\Toko;
use App\Testimoni;
use App\Tutorial;
use App\Notifikasi;
use DB;

class PagesController extends Controller
{

	//Publik
    public function home () {
        $user = Auth::user();
        $notif = NULL;
        $count = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->orderBy('No', 'desc')->Paginate(5);
            $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        }
        $artikel = Artikel::orderBy('created_at', 'desc')->get();
        $tutorial = Tutorial::orderBy('created_at', 'desc')->get();
        $artikel1 = Artikel::orderBy('created_at', 'desc')->Paginate(3);
        $tutorial1 = Tutorial::orderBy('created_at', 'desc')->Paginate(3);
        $toko = Toko::get();


        /*/Arsip Tutorial
        $tahunTu = DB::table('tutorial')
                        ->select (DB::raw("YEAR(created_at) as tahun"), DB::raw("count(*) as total "))
                        ->groupBy(DB::raw("YEAR(created_at)"))
                        ->orderBy('created_at', 'desc')
                        //->groupBy MONTH('created_at');
                        ->get();

        foreach($tahunTu as $item){
            $bulan = DB::table('tutorial')
                ->select(DB::raw('MONTH(created_at) as bulan'), DB::raw('count(*) as jumlah'))
                ->groupBy(DB::raw('MONTH(created_at)'))
                ->orderBy('created_at', 'desc')
                ->where(DB::raw('YEAR(created_at)'), $item->tahun)->get();
            foreach ($bulan as $itemdua) {
                $link = Tutorial::select('Judul', 'No')
                        ->groupBy(DB::raw('Judul'))
                        ->orderBy('created_at', 'desc')
                        ->where(DB::raw('YEAR(created_at)'), $item->tahun)
                        ->where(DB::raw('MONTH(created_at)'), $itemdua->bulan)
                        ->get();
            $itemdua->link = $link;
            }
            $item->bulan = $bulan;
            //dd($item);
        }

        //Arsip Artikel
        $tahunAr = DB::table('artikel')
                        ->select (DB::raw("YEAR(created_at) as tahun"), DB::raw("count(*) as total "))
                        ->groupBy(DB::raw("YEAR(created_at)"))
                        ->orderBy('created_at', 'desc')
                        //->groupBy MONTH('created_at');
                        ->get();

        foreach($tahunAr as $item){
            $bulan = DB::table('artikel')
                ->select(DB::raw('MONTH(created_at) as bulan'), DB::raw('count(*) as jumlah'))
                ->groupBy(DB::raw('MONTH(created_at)'))
                ->orderBy('created_at', 'desc')
                ->where(DB::raw('YEAR(created_at)'), $item->tahun)->get();
            foreach ($bulan as $itemdua) {
                $link = Artikel::select('Judul', 'No')
                        ->groupBy(DB::raw('Judul'))
                        ->orderBy('created_at', 'desc')
                        ->where(DB::raw('YEAR(created_at)'), $item->tahun)
                        ->where(DB::raw('MONTH(created_at)'), $itemdua->bulan)
                        ->get();
            $itemdua->link = $link;
            }
            $item->bulan = $bulan;
            //dd($item);
        }
        $arsip = $tahunTu->union($tahunAr)->get();*/
        //dd($notif);exit;

    	return view('ukhti', ['user' => $user, 'notif' => $notif, 'toko' => $toko, 'tutorial' => $tutorial, 'artikel' => $artikel /*,'tahun' => $arsip*/, 'count' => $count, 'tutorial1' => $tutorial1, 'artikel1' => $artikel1]);
    }

    public function about () {
        $user = Auth::user();
        $notif = NULL;
        $count = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->orderBy('No', 'desc')->Paginate(5);
            $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        }

    	return view('about', ['user' => $user, 'notif' => $notif, 'count' => $count]);
    }

    public function profilU ($id) {
        $user = Auth::user();
        $notif = NULL;
        $count = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->orderBy('No', 'desc')->Paginate(5);
            $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        }
        $testimoni = Testimoni::where('user_id', $id)->get();
        $toko = Toko::where('user_id', $id)->get();
        $artikel = Artikel::where('user_id', $id)->get();
        $tutorial = Tutorial::where('user_id', $id)->get();
        $foruser = User::where('id', $id)->first();
        //dd($user);

    	return view('profilU', ['foruser' => $foruser, 'testimoni' => $testimoni, 'id' => $id, 'toko' => $toko, 'tutorial' => $tutorial, 'artikel' => $artikel, 'user' => $user, 'notif' => $notif, 'count' => $count]);
    }

    //END
}