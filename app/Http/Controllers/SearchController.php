<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Artikel;
use App\Tutorial;
use App\Toko;
use App\Notifikasi;
use App\Http\Requests;

class SearchController extends Controller
{
	public function searchAll (Request $request){
		$user = Auth::user();
        $notif = NULL;
        $count = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
            $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        }
        $keywords= $request->get('keywords');
        $artikel = Artikel::select('Judul')->where('Judul',  'LIKE', '%' . $keywords . '%');
        $toko = Toko::select('Judul')->where('Judul',  'LIKE', '%' . $keywords . '%');
        $tutorial = Tutorial::select('Judul')->where('Judul',  'LIKE', '%' . $keywords . '%');
        $table = $tutorial->union($artikel)->union($toko)->paginate(11);

        return view('searchAll', ['keywords' => $table, 'user' => $user, 'notif' => $notif, 'count' => $count]);

	}
}
