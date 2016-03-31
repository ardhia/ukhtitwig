<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Hadits;

class HaditsController extends Controller
{
    //Publik

    public function hadits () {
    	//$hadits =  DB::table('hadits')->select('Sumber_HR', 'Isi_Hadits')->Paginate(5);
        $hadits = Hadits::paginate(5);

        //Arsip
        $Riwayat = DB::table('hadits')
                        ->select (DB::raw("Riwayat"), DB::raw("count(*) as total "))
                        ->groupBy(DB::raw("Riwayat"))
                        ->get();
        foreach ($Riwayat as $item) {
            $link = DB::table('hadits')
                ->select(DB::raw('Sumber_HR'), DB::raw('count(*) as jumlah'))
                ->groupBy(DB::raw('Sumber_HR'))
                ->where(DB::raw('Riwayat'), $item->Riwayat)->get();
            $item->Sumber_HR = $link;
        }

        //dd($Riwayat);
        //exit;
        return view('hadits', ['hadits' => $hadits, 'Riwayat' => $Riwayat ]);
    }
    
    public function search (Requests $request) {
        $keywords = $request->get('keywords');
        $table = DB::table('hadits')->select('Isi_Hadits')->where('Isi_Hadits', 'LIKE', '%' .$keywords. '%')->get();

        return view('searchhadits', ['keywords' => $table]);

    }

    public function haditsUser () {
        return view('auth/hadits');
    }

    public function haditsAdmin () {
        return view('admint/hadits');
    }

}