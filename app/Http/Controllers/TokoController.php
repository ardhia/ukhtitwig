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

	//END

	//USER
	public function tampilTokoUser (){
		return view('auth\toko');
	}

	public function user_insertToko (){
		return view('auth\user_insertToko');
	}

    //post
    public function prosesUser_insertToko (Request $request){
        $toko = new User_insertToko;
        $toko->judulToko = $request->input('judulToko');
        $toko->harga = $request->input('harga');
        $toko->jb = $request->input('jb');
        $toko->ketToko = $request->input('ketToko');
		if($request->hasFile('photoToko')) {
            $file = Input::file('photoToko');
            //getting timestamp
            
            $name = $file->getClientOriginalName();
            
            $toko->photoToko = $name;

            $file->move(public_path().'/uploadPhoto/toko/', $name);
        }
        $toko->save();
        return Redirect::to('auth/profilU/user_insertToko');
//        $file = Request::file('photo');
//        $toko->judulToko = $request->input('judulToko');
//        $toko->photoToko = $request->input('photoToko');
//        $toko->harga = $request->input('harga');
//        $toko->jb = $request->input('jb');
//        $toko->ketToko = $request->input('ketToko');
//        $toko->save();

//        return Redirect::to('auth/profilU/user_insertArtikel');
    }
	//END

	//ADMIN
	public function tampilTokoAdmin (){
		return view('admin\toko');
	}

    public function uploadPhoto (Request $request){
    	$file = $request->file('photo');
    }
    //END




    //image
}
