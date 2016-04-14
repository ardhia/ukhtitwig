<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Tutorial;
use App\Toko;
use App\Http\Requests;

class SearchController extends Controller
{
	public function searchAll (Request $request){
        $keywords= $request->get('keywords');
        $artikel = Artikel::select('Judul')->where('Judul',  'LIKE', '%' . $keywords . '%');
        $toko = Toko::select('Judul')->where('Judul',  'LIKE', '%' . $keywords . '%');
        $tutorial = Tutorial::select('Judul')->where('Judul',  'LIKE', '%' . $keywords . '%');
        $table = $tutorial->union($artikel)->union($toko)->paginate(11);

        return view('searchAll', ['keywords' => $table]);

	}
}
