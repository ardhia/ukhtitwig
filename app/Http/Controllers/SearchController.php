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
        $artikel = Artikel::where('Judul',  'LIKE', '%' . $keywords . '%');
        $toko = Toko::where('Judul',  'LIKE', '%' . $keywords . '%');
        $tutorial = Tutorial::where('Judul',  'LIKE', '%' . $keywords . '%');
        $table = $tutorial->union($artikel)->paginate(11);

        return view('searchAll', ['keywords' => $table]);

	}
}
