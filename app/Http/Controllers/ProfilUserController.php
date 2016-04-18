<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Tutorial;
use App\Toko;
use App\Artikel;
use App\Testimoni;
use App\Notifikasi;
use App\KomentarArtikel;
use App\KomentarTutorial;
use Redirect;

class ProfilUserController extends Controller
{
    public function profilUser (Request $request) {
        $user = Auth::user();

        //Untuk menampilkan table
    	$daftarartikel =  Artikel::where('user_id', $user->id)->get();
    	$tutorial = Tutorial::where('user_id', $user->id)->get();
    	$toko =  Toko::where('user_id', $user->id)->get();
        $testimoni = Testimoni::where('user_id', $user->id)->get();
        $KomentarTutorial = KomentarTutorial::where('user_id', $user->id)->get();
        $KomentarArtikel = KomentarArtikel::where('user_id', $user->id)->get();
        $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
        $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        //dd($notif);exit;

        return view('auth/profilU', ['user' => $user, 'artikel' => $daftarartikel, 'tutorial' => $tutorial, 'toko' => $toko, 'testimoni' => $testimoni, 'notif' => $notif, 'count' => $count, 'KomentarArtikel' => $KomentarArtikel, 'KomentarTutorial' => $KomentarTutorial]);
    }

    public function getPhotoProfil ($id) {
        $user = Auth::user();
        view('auth/changePhotoProfil', ['user' => $user]);
    }

    public function changePhotoProfil (Request $request, $id) {

        if($request->hasFile('photoProfil')) {
            $file = Input::file('photoProfil');
            $name = $file->getClientOriginalName();
            $file->move(public_path().'/uploadPhoto/photoProfil/', $name);

        $user = DB::table('users')
                ->where('id', $id)
                ->update(['photoProfil' => $name]);
        }

        //dd($user);exit;
        return Redirect::to('/auth/profilU');

    }

    public function changeBio (Request $request, $id) {
    $user = DB::table('users')
            ->where('id', $id)
            ->update(['alamat' => $request->input('alamat'), 'noHP' => $request->input('noHP'), 'kesukaan' => $request->input('kesukaan'), 'kutipanHadits' => $request->input('kutipanHadits')]);

        //dd($user);exit;
        return Redirect::to('/auth/profilU');

    }

    public function tampilNotifikasi (Request $request) {
        $user = Auth::user();
        $notif = Notifikasi::where('user_id', $user->id)
                        ->orderBy('created_at', 'desc')->get();
        $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        //dd($notif);exit;

        return view('auth/notifikasi', ['notif' => $notif, 'user' => $user, 'count' => $count]);
    }

    public function prosesNotifikasi (Request $request, $No) {
        $user = Auth::user();
        $notif = Notifikasi::where('user_id', $user->id)
                            ->where('No', $No)->first(); 
        $status = Notifikasi::where('user_id', $user->id)
                            ->where('No', $No)
                            ->update(['status' => true]);
        //dd($status->link);exit;
        //return Redirect::to([$redirect]);
        //return redirect()->select([$redirect]);
        return redirect()->to($notif->link);
    }

}