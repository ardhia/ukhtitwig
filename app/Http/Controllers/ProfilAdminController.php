<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Artikel;
use App\Tutorial;
use App\subscribe;
use App\Toko;
use App\Notifikasi;
use App\KomentarArtikel;
use App\KomentarTutorial;
use Illuminate\Support\Facades\Auth;
use Redirect;

class ProfilAdminController extends Controller
{
    public function tampilProfilAdmin (){
        $user = Auth::user();
        $notif = Notifikasi::where('user_id', $user->id)->orderBy('No', 'desc')->Paginate(5);
        $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();

    	$artikel =  Artikel::get();
    	$tutorial = Tutorial::get();
    	$toko =  Toko::get();
    	$subs =  Subscribe::get();
        $KomentarTutorial = KomentarTutorial::get();
        $KomentarArtikel = KomentarArtikel::get();

    	return view('admin/profilA', ['artikel' => $artikel, 'tutorial' => $tutorial, 'toko' => $toko, 'subscribe' => $subs, 'user' => $user, 'notif' => $notif, 'count' =>$count, 'KomentarArtikel' => $KomentarArtikel, 'KomentarTutorial' => $KomentarTutorial]);
    }

    //delete Artikel
    public function hapusArtikel ($No){
        $user = Auth::user();
        $delete = DB::table('artikel')->where('No', $No)->delete();

        return Redirect::to('/admin');
    }

    public function hapusKomentarTutorial ($No){
        $user = Auth::user();
        $delete = DB::table('komentar_tutorial')->where('No', $No)->delete();

        return Redirect::to('/admin');
    }

    public function hapusKomentarArtikel ($No){
        $user = Auth::user();
        $delete = DB::table('komentar_artikel')->where('No', $No)->delete();

        return Redirect::to('/admin');
    }

    public function hapusAllKomentarTutorial ($user_id){
        $user = Auth::user();
        $delete = DB::table('komentar_tutorial')->where('user_id', $user_id)->delete();

        return Redirect::to('/admin');
    }

    public function hapusAllKomentarArtikel ($user_id){
        $user = Auth::user();
        $delete = DB::table('komentar_artikel')->where('user_id', $user_id)->delete();

        return Redirect::to('/admin');
    }

    //delete Tutorial
    public function hapusTutorial ($No){
        $user = Auth::user();
        $delete = DB::table('tutorial')->where('No', $No)->delete();

        return Redirect::to('/admin');
    }

    //delete Toko
    public function hapusToko ($idToko){
        $user = Auth::user();
        $delete = DB::table('toko')->where('idToko', $idToko)->delete();

        return Redirect::to('/admin');
    }

    //hapus Subscribe
    public function hapusSubscribe ($No){
        $user = Auth::user();
        $delete = DB::table('subscribe')->where('Id', $No)->delete();

        return Redirect::to('/admin');
    }
}
