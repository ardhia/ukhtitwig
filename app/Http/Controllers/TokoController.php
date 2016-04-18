<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Toko;
use App\Notifikasi;



class TokoController extends Controller
{

	//PUBLIK

	public function tampilToko (){
        $user = Auth::user();
        $notif = NULL;
        $count = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->orderBy('No', 'desc')->Paginate(5);
            $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        }

        $daftartoko =  Toko::get();

		return view('toko', ['toko' => $daftartoko, 'user' => $user, 'notif' => $notif, 'count' => $count]);
	}

	//END

	//USER

	public function user_insertToko (){
        $user = Auth::user();
        $notif = NULL;
        $count = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->orderBy('No', 'desc')->Paginate(5);
            $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        }
        
        $toko =  DB::table('toko')->select('idToko', 'user_id', 'Judul', 'photoToko', 'harga', 'jb', 'ketToko')->get();

		return view('auth\user_insertToko', ['toko' => $toko, 'user' => $user, 'notif' => $notif, 'count' => $count]);
	}

    public function user_editToko ($idToko){
        $user = Auth::user();
        $notif = NULL;
        $count = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->orderBy('No', 'desc')->Paginate(5);
            $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        }

        $isiToko = Toko::where('idToko', $idToko)->where('user_id', $user->id)->firstOrFail();
        //dd($isiToko, $user);
        //exit;
        return view('auth/user_editToko', ['user' => $user, 'isiToko' => $isiToko, 'notif' => $notif, 'count' => $count]);
    }


    //post
    public function prosesUser_insertToko (Request $request){
        $user = Auth::user();
        $this->validate($request, [
        'Judul' => 'required',
        'photoToko' => 'required|unique:toko|max:255',
        'harga' => 'required',
        'jb' => 'required',
        'ketToko' => 'required',
        ]);
        $toko = new Toko;
        $toko->Judul = $request->input('Judul');
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
        $toko->user_id = $user->id;
        $toko->user_name = $user->username;
        $toko->save();
        return Redirect::to('auth/profilU');
//        $file = Request::file('photo');
//        $toko->Judul = $request->input('Judul');
//        $toko->photoToko = $request->input('photoToko');
//        $toko->harga = $request->input('harga');
//        $toko->jb = $request->input('jb');
//        $toko->ketToko = $request->input('ketToko');
//        $toko->save();

//        return Redirect::to('auth/profilU/user_insertArtikel');
    }

    public function prosesUser_editToko (Request $request, $idToko) {
        /* $user = Auth::user();
        $this->validate($request, [
        'Judul' => 'required',
        'photoToko' => 'required|unique:toko|max:255',
        'harga' => 'required',
        'jb' => 'required',
        'ketToko' => 'required',
        ]);
        $toko = new User_insertToko;*/
        if($request->hasFile('photoToko')) {
                        $file = Input::file('photoToko');
                        $name = $file->getClientOriginalName();
                        $file->move(public_path().'/uploadPhoto/toko/', $name);
        $editToko = Toko::where('idToko', $idToko)
                        ->update(['Judul' => $request->input('Judul'), 'harga' => $request->input('harga'), 'jb' => $request->input('jb'), 'ketToko' => $request->input('ketToko'), 'photoToko' => $name]);
        }
        //$editToko>save();
        //dd($editToko);
        //exit;

        return Redirect::to('/auth/profilU');
    }

    public function deleteToko ($idToko){
        $user = Auth::user();
        $delete = DB::table('toko')->where('idToko', $idToko)->where('user_id', $user->id)->delete();

        return Redirect::to('/auth/profilU');
    }

    public function tampilSearch (Request $request) {
        $user = Auth::user();
        $notif = NULL;
        $count = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->orderBy('No', 'desc')->Paginate(5);
            $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        }

        $katagori= $request->get('jb');
        $keywords= $request->get('keywords');
        $toko = Toko::where('jb', $katagori)->where('Judul',  'LIKE', '%' . $keywords . '%')->Paginate(9);


        return view('searchToko', ['keywords' => $toko, 'user' => $user, 'notif' => $notif, 'count' => $count]);
    }

}
