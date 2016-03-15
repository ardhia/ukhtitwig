<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;




class TokoController extends Controller
{

	//PUBLIK

	public function tampilToko (){
		return view('toko');
	}

	public function tampilPakaian (){
		return view('toko/pakaian');
	}

	public function tampilMakanan (){
		return view('toko/makanan');
	}

	public function tampilSepatu (){
		return view('toko/sepatu');
	}

	public function tampilKerudung (){
		return view('toko/kerudung');
	}

	public function tampilTas (){
		return view('toko/tas');
	}

	public function tampilAksesoris (){
		return view('toko/aksesoris');
	}

	public function tampilDll (){
		return view('toko/dll');
	}
	//END

	//USER
	public function tampilTokoUser (){
		return view('auth/toko/');
	}

	public function tampilPakaianUser (){
		return view('auth/toko/pakaian');
	}

	public function tampilMakananUser (){
		return view('auth/toko/makanan');
	}

	public function tampilSepatuUser (){
		return view('auth/toko/sepatu');
	}

	public function tampilKerudungUser (){
		return view('auth/toko/kerudung');
	}

	public function tampilTasUser (){
		return view('auth/toko/tas');
	}

	public function tampilAksesorisUser (){
		return view('auth/toko/aksesoris');
	}

	public function tampilDllUser (){
		return view('auth/toko/dll');
	}

	public function user_insertToko (){
		return view('auth/user_profilU/user_insertToko');
	}
	//END

	//ADMIN
	public function tampilTokoAdmin (){
		return view('admin/toko');
	}

	public function tampilPakaianAdmin (){
		return view('admin/toko/pakainan');
	}

	public function tampilMakananAdmin (){
		return view('admin/toko/makanan');
	}

	public function tampilSepatuAdmin (){
		return view('admin/toko/sepatu');
	}

	public function tampilKerudungAdmin (){
		return view('admin/toko/kerudung');
	}

	public function tampilTasAdmin (){
		return view('admin/toko/tas');
	}

	public function tampilAksesorisAdmin (){
		return view('admin/toko/aksesoris');
	}

	public function tampilDllAdmin (){
		return view('admin/toko/dll');
	}

    public function uploadPhoto (Request $request){
    	$file = $request->file('photo');
    }
    //END
}
