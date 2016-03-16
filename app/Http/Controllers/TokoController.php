<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;
use App\User_insertToko;
use Illuminate\Support\Facades\Input;
use DB;




class TokoController extends Controller
{

	//PUBLIK

	public function tampilToko (){
		return view('toko');
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
		return view('auth/user_insertToko');
	}

    //post
    public function prosesUser_insertToko (Request $request){
        $toko = new User_insertToko;
        $file = Request::file('photo');
        $toko->judulToko = $request->input('judulToko');
        $toko->photoToko = $request->input('photoToko');
        $toko->harga = $request->input('harga');
        $toko->jb = $request->input('jb');
        $toko->ketToko = $request->input('ketToko');
        $toko->save();

        return Redirect::to('auth/profilU/user_insertArtikel');
    }
	//END

	//ADMIN
	public function tampilTokoAdmin (){
		return view('admin\toko');
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




    //image
}
