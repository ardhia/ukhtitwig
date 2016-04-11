<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Toko;
use App\Notifikasi;

class SubTokoController extends Controller
{
	public function tampilAksesoris (){
		$user = Auth::user();
        $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);

    	$daftartoko =  Toko::where('jb', 'Aksesoris')->Paginate(12);
    	
		return view('aksesoris', ['toko' => $daftartoko, 'user' => $user, 'notif' => $notif]);
	}


	public function tampilKerudung (){
		$user = Auth::user();
        $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);

    	$daftartoko =  Toko::where('jb', 'Kerudung')->Paginate(12);
    	
    	return view('pakaian', ['toko' => $daftartoko, 'user' => $user, 'notif' => $notif]);
	}


	public function tampilDll (){
		$user = Auth::user();
        $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);

    	$daftartoko =  Toko::where('jb', 'Lainnya')->Paginate(12);
    	
		return view('dll', ['toko' => $daftartoko, 'user' => $user, 'notif' => $notif]);
	}


	public function tampilMakanan (){
		$user = Auth::user();
        $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);

    	$daftartoko =  Toko::where('jb', 'Makanan')->Paginate(12);

		return view('makanan', ['toko' => $daftartoko, 'user' => $user, 'notif' => $notif]);
	}


	public function tampilPakaian (){
        $user = Auth::user();
        $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);

    	$daftartoko =  Toko::where('jb', 'Pakaian')->Paginate(12);
    	
    	return view('pakaian', ['toko' => $daftartoko, 'user' => $user, 'notif' => $notif]);
	}


	public function tampilSepatu (){
		$user = Auth::user();
        $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);

    	$daftartoko =  Toko::where('jb', 'Sepatu')->Paginate(12);
    	
		return view('sepatu', ['toko' => $daftartoko, 'user' => $user, 'notif' => $notif]);
	}


	public function tampilTas (){
		$user = Auth::user();
        $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);

    	$daftartoko =  Toko::where('jb', 'Tas')->Paginate(12);
    	
		return view('tas', ['toko' => $daftartoko, 'user' => $user, 'notif' => $notif]);
	}
}
