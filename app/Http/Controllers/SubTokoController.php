<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Toko;
use App\Notifikasi;
use DB;

class SubTokoController extends Controller
{
	public function tampilAksesoris (){
		$user = Auth::user();
        $notif = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
        }

    	$daftartoko =  Toko::orderBy('created_at', 'desc')->where('jb', 'Aksesoris')->Paginate(12);
    	
		return view('aksesoris', ['toko' => $daftartoko, 'user' => $user, 'notif' => $notif]);
	}


	public function tampilKerudung (){
		$user = Auth::user();
        $notif = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
        }

    	$daftartoko =  Toko::orderBy('created_at', 'desc')->where('jb', 'Kerudung')->Paginate(12);
    	
    	return view('kerudung', ['toko' => $daftartoko, 'user' => $user, 'notif' => $notif]);
	}


	public function tampilDll (){
		$user = Auth::user();
        $notif = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
        }

    	$daftartoko =  Toko::orderBy('created_at', 'desc')->where('jb', 'Lainnya')->Paginate(12);
    	
		return view('dll', ['toko' => $daftartoko, 'user' => $user, 'notif' => $notif]);
	}


	public function tampilMakanan (){
		$user = Auth::user();
        $notif = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
        }

    	$daftartoko =  Toko::orderBy('created_at', 'desc')->where('jb', 'Makanan')->Paginate(12);

		return view('makanan', ['toko' => $daftartoko, 'user' => $user, 'notif' => $notif]);
	}


	public function tampilPakaian (){
        $user = Auth::user();
        $notif = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
        }

    	$daftartoko =  Toko::orderBy('created_at', 'desc')->where('jb', 'Pakaian')->Paginate(12);
    	
    	return view('pakaian', ['toko' => $daftartoko, 'user' => $user, 'notif' => $notif]);
	}


	public function tampilSepatu (){
		$user = Auth::user();
        $notif = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
        }

    	$daftartoko =  Toko::orderBy('created_at', 'desc')->where('jb', 'Sepatu')->Paginate(12);
    	
		return view('sepatu', ['toko' => $daftartoko, 'user' => $user, 'notif' => $notif]);
	}


	public function tampilTas (){
		$user = Auth::user();
        $notif = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
        }

    	$daftartoko =  Toko::orderBy('created_at', 'desc')->where('jb', 'Tas')->Paginate(12);
    	
		return view('tas', ['toko' => $daftartoko, 'user' => $user, 'notif' => $notif]);
	}

    /*search*/

    public function searchDll (Request $request) {
        $user = Auth::user();
        $notif = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
        }

        $keywords= $request->get('keywords');
        $table = DB::table('toko')->where('jb',  'Lainnya')->where('judulToko',  'LIKE', '%' . $keywords . '%')->get();

        return view('searchdll', ['keywords' => $table, 'user'=> $user, 'notif'=> $notif]);
    }

    public function searchAksesoris (Request $request) {
        $user = Auth::user();
        $notif = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
        }

        $keywords= $request->get('keywords');
        $table = DB::table('toko')->where('jb', 'Aksesoris')->where('judulToko', 'LIKE', '%' . $keywords . '%')->get();

        return view('searchaksesoris', ['keywords' => $table, 'user'=> $user, 'notif'=>$notif]);
    }

    public function searchKerudung (Request $request) {
        $user = Auth::user();
        $notif = Null;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
        }

        $keywords= $request->get('keywords');
        $table = DB::table('toko')->where('jb', 'Kerudung')->where('judulToko', 'LIKE', '%' . $keywords . '%')->get();

        return view('searchkerudung', ['keywords'=> $table, 'user'=> $user, 'notif'=> $notif]);
    }

    public function searchSepatu (Request $request) {
        $user = Auth::user();
        $notif = Null;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
        }

        $keywords= $request->get('keywords');
        $table = DB::table('toko')->where('jb', 'Sepatu')->where('judulToko', 'LIKE', '%' . $keywords . '%')->get();

        return view('searchsepatu', ['keywords'=> $table, 'user'=> $user, 'notif'=> $notif]);
    }

    public function searchMakanan (Request $request) {
        $user = Auth::user();
        $notif = Null;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
        }

        $keywords= $request->get('keywords');
        $table = DB::table('toko')->where('jb', 'Makanan')->where('judulToko', 'LIKE', '%' . $keywords . '%')->get();

        return view('searchmakanan', ['keywords'=> $table, 'user'=> $user, 'notif'=> $notif]);
    }

    public function searchTas (Request $request) {
        $user = Auth::user();
        $notif = Null;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
        }

        $keywords= $request->get('keywords');
        $table = DB::table('toko')->where('jb', 'Makanan')->where('judulToko', 'LIKE', '%' . $keywords . '%')->get();

        return view('searchtas', ['keywords'=> $table, 'user'=> $user, 'notif'=> $notif]);
    }

    public function searchPakaian (Request $request) {
        $user = Auth::user();
        $notif = Null;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
        }

        $keywords= $request->get('keywords');
        $table= DB::table('toko')->where('jb', 'Pakaian')->where('judulToko', 'LIKE', '%' . $keywords . '%')->get();

        return view('searchpakaian',['keywords'=> $table, 'user'=> $user, 'notif'=>$notif]);
    }


}