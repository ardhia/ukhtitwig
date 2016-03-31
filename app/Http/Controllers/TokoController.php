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
        $toko =  DB::table('toko')->select('idToko', 'email', 'judulToko', 'photoToko', 'harga', 'jb', 'ketToko')->get();

		return view('auth\user_insertToko', ['toko' => $toko]);
	}

    //post
    public function prosesUser_insertToko (Request $request){
        $this->validate($request, [
        'judulToko' => 'required',
        'photoToko' => 'required|unique:artikel|max:255',
        'harga' => 'required',
        'jb' => 'required',
        'ketToko' => 'required',
        ]);
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

    //edit 
    public function tampilEditToko ($No) {
        $toko = DB::table('toko')->select('idToko', 'judulToko', 'photoToko', 'harga', 'jb', 'ketToko')->where('idToko', $No)->first();
        return view('admin/editAdminToko', ['toko' => $toko]);
    }

    //END




    //image
}
