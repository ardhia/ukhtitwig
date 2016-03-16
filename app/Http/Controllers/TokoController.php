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
		return view('pakaian');
	}

	public function tampilMakanan (){
		return view('makanan');
	}

	public function tampilSepatu (){
		return view('sepatu');
	}

	public function tampilKerudung (){
		return view('kerudung');
	}

	public function tampilTas (){
		return view('tas');
	}

	public function tampilAksesoris (){
		return view('aksesoris');
	}

	public function tampilDll (){
		return view('dll');
	}
	//END

	//USER
	public function tampilTokoUser (){
		return view('auth\toko');
	}

	public function tampilPakaianUser (){
		return view('auth\pakaian');
	}

	public function tampilMakananUser (){
		return view('auth\makanan');
	}

	public function tampilSepatuUser (){
		return view('auth\sepatu');
	}

	public function tampilKerudungUser (){
		return view('auth\kerudung');
	}

	public function tampilTasUser (){
		return view('auth\tas');
	}

	public function tampilAksesorisUser (){
		return view('auth\aksesoris');
	}

	public function tampilDllUser (){
		return view('auth\dll');
	}

	public function user_insertToko (){
		return view('auth/user_pr\user_insertToko');
	}
	//END

	//ADMIN
	public function tampilTokoAdmin (){
		return view('admin\toko');
	}

	public function tampilPakaianAdmin (){
		return view('admin\pakainan');
	}

	public function tampilMakananAdmin (){
		return view('admin\makanan');
	}

	public function tampilSepatuAdmin (){
		return view('admin\sepatu');
	}

	public function tampilKerudungAdmin (){
		return view('admin\kerudung');
	}

	public function tampilTasAdmin (){
		return view('admin\tas');
	}

	public function tampilAksesorisAdmin (){
		return view('admin\aksesoris');
	}

	public function tampilDllAdmin (){
		return view('admin\dll');
	}

    public function uploadPhoto (Request $request){
    	$file = $request->file('photo');
    }
    //END
}
