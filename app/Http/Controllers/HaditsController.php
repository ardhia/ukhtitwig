<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Hadits;
use Illuminate\Support\Facades\Auth;
use App\Notifikasi;

class HaditsController extends Controller
{
    //Publik

    public function hadits () {
        $user = Auth::user();
        $notif = NULL;
        $count = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
            $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        }
    	//$hadits =  DB::table('hadits')->select('Sumber_HR', 'Isi_Hadits')->Paginate(5);
        $hadits = Hadits::paginate(5);


        //Arsip
        $Riwayat = DB::table('hadits')
                        ->select (DB::raw("Riwayat"), DB::raw("count(*) as total "))
                        ->groupBy(DB::raw("Riwayat"))
                        //->groupBy MONTH('created_at');
                        ->get();

        foreach($Riwayat as $item){
            $judul = DB::table('hadits')
                ->select(DB::raw('judul'))
                ->groupBy(DB::raw('judul'))
                ->where(DB::raw('Riwayat'), $item->Riwayat)->get();
            $item->judul = $judul;
            //dd($item);
        }
        //dd($Riwayat);

        return view('hadits', ['hadits' => $hadits, 'Riwayat' => $Riwayat, 'user' => $user, 'notif' => $notif, 'count' => $count]);
    }

    public function search (Request $request) {
        $user = Auth::user();
        $notif = NULL;
        $count = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
            $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        }
        $keywords = $request->get('keywords');
        $table = DB::table('hadits')->select('Isi_Hadits')->where('Isi_Hadits', 'LIKE', '%' .$keywords. '%')->paginate(7);

        return view('searchhadits', ['keywords' => $table, 'user' => $user, 'notif' => $notif, 'count' => $count]);

    }

}