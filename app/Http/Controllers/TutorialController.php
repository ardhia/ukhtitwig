<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Tutorial;
use App\Notifikasi;

class TutorialController extends Controller
{

 //PUBLIK
	public function tutorial () {
        $user = Auth::user();

     	$tutorial = Tutorial::orderBy('created_at', 'desc')->Paginate(3);
        $notif = NULL;
        $count = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
            $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        }

        //Arsip
        $tahun = DB::table('tutorial')
                        ->select (DB::raw("YEAR(created_at) as tahun"), DB::raw("count(*) as total "))
                        ->groupBy(DB::raw("YEAR(created_at)"))
                        ->orderBy('created_at', 'desc')
                        //->groupBy MONTH('created_at');
                        ->get();

        foreach($tahun as $item){
            $bulan = DB::table('tutorial')
                ->select(DB::raw('MONTH(created_at) as bulan'), DB::raw('count(*) as jumlah'))
                ->groupBy(DB::raw('MONTH(created_at)'))
                ->orderBy('created_at', 'desc')
                ->where(DB::raw('YEAR(created_at)'), $item->tahun)->get();
            foreach ($bulan as $itemdua) {
                $link = Tutorial::select('Judul', 'No')
                        ->groupBy(DB::raw('Judul'))
                        ->orderBy('created_at', 'desc')
                        ->where(DB::raw('YEAR(created_at)'), $item->tahun)
                        ->where(DB::raw('MONTH(created_at)'), $itemdua->bulan)
                        ->get();
            $itemdua->link = $link;
            }
            $item->bulan = $bulan;
            //dd($item);
        }
        //dd($tahun);
        //exit;

     return view('tutorial', ['tutorial' => $tutorial, 'tahun' => $tahun, 'user' => $user, 'notif' => $notif, 'count' => $count]);
    }

    public function isi_tutorial ($No) {
        $user = Auth::user();

    	$dataTutorial = Tutorial::where('No', $No)->first();
        $notif = NULL;
        $count = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
            $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        }
        //dd($dataTutorial);
        $komentar_tutorial= DB::table('komentar_tutorial')
                            ->select('nama', 'isi_komentar')
                            ->where('no_tutorial', $No)
                            ->get();


        //Arsip
        $tahun = DB::table('tutorial')
                        ->select (DB::raw("YEAR(created_at) as tahun"), DB::raw("count(*) as total "))
                        ->groupBy(DB::raw("YEAR(created_at)"))
                        ->orderBy('created_at', 'desc')
                        //->groupBy MONTH('created_at');
                        ->get();

        foreach($tahun as $item){
            $bulan = DB::table('tutorial')
                ->select(DB::raw('MONTH(created_at) as bulan'), DB::raw('count(*) as jumlah'))
                ->groupBy(DB::raw('MONTH(created_at)'))
                ->orderBy('created_at', 'desc')
                ->where(DB::raw('YEAR(created_at)'), $item->tahun)->get();
            foreach ($bulan as $itemdua) {
                $link = Tutorial::select('Judul', 'No')
                        ->groupBy(DB::raw('Judul'))
                        ->orderBy('created_at', 'desc')
                        ->where(DB::raw('YEAR(created_at)'), $item->tahun)
                        ->where(DB::raw('MONTH(created_at)'), $itemdua->bulan)
                        ->get();
            $itemdua->link = $link;
            }
            $item->bulan = $bulan;
            //dd($item);
        }
        //dd($tahun);
        //exit;

        return view('isi-tutorial', ['dataTutorial' => $dataTutorial, 'komentar_tutorial' => $komentar_tutorial, 'No' => $No, 'tahun' => $tahun, 'user' => $user, 'notif' => $notif, 'count' => $count]);
    }

    public function search (Request $request) {
        $user = Auth::user();
        $notif = NULL;
        $count = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
            $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        }

        $keywords= $request->get('keywords');
        $table = DB::table('tutorial')->select('Judul')->where('Judul',  'LIKE', '%' . $keywords . '%')->get();

        
        //Arsip
        $tahun = DB::table('tutorial')
                        ->select (DB::raw("YEAR(created_at) as tahun"), DB::raw("count(*) as total "))
                        ->groupBy(DB::raw("YEAR(created_at)"))
                        ->orderBy('created_at', 'desc')
                        //->groupBy MONTH('created_at');
                        ->get();

        foreach($tahun as $item){
            $bulan = DB::table('tutorial')
                ->select(DB::raw('MONTH(created_at) as bulan'), DB::raw('count(*) as jumlah'))
                ->groupBy(DB::raw('MONTH(created_at)'))
                ->orderBy('created_at', 'desc')
                ->where(DB::raw('YEAR(created_at)'), $item->tahun)->get();
            foreach ($bulan as $itemdua) {
                $link = Tutorial::select('Judul', 'No')
                        ->groupBy(DB::raw('Judul'))
                        ->orderBy('created_at', 'desc')
                        ->where(DB::raw('YEAR(created_at)'), $item->tahun)
                        ->where(DB::raw('MONTH(created_at)'), $itemdua->bulan)
                        ->get();
            $itemdua->link = $link;
            }
            $item->bulan = $bulan;
            //dd($item);
        }
        //dd($tahun);
        //exit;

        
        return view('searchtutorial', ['keywords' => $table, 'tahun' => $tahun, 'user' => $user, 'notif' => $notif, 'count' => $count]);
    }
     //END

    //USER

	public function user_insertTutorial (){
        $user = Auth::user();
        $tutorial = DB::table('tutorial');
        $notif = NULL;
        $count = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
            $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        }
        //dd($user);exit;
        return view('auth/user_insertTutorial', ['user' => $user, 'tutorial' => $tutorial, 'notif' => $notif, 'count' => $count]);
	}

    public function user_editTutorial ($No){
        $user = Auth::user();
        $notif = NULL;
        $count = NULL;
        if (Auth::check()) {
            $notif = Notifikasi::where('user_id', $user->id)->Paginate(5);
            $count= Notifikasi::select( DB::raw("count(*) as total "))->where('user_id', $user->id)->where('status', false)->first();
        }

        $isiTutorial = Tutorial::where('No', $No)->where('user_id', $user->id)->firstOrFail();
        //dd($isiTutorial, $user);
        //exit;
        return view('auth/user_editTutorial', ['user' => $user, 'isiTutorial' => $isiTutorial, 'notif' => $notif, 'count' => $count]);
    }

    public function prosesUser_editTutorial (Request $request, $No) {
        /*$this->validate($request, [
        'Judul' => 'required',
        'Isi' => 'required',
        'Photo' => 'required|unique:tutorial|max:255',
        ]);*/
        //$editTutorial= new User_insertTutorial;
        if($request->hasFile('Photo')) {
                                    $file = Input::file('Photo');
                                    $name = $file->getClientOriginalName();
                                    $file->move(public_path().'/uploadPhoto/tutorial/', $name);
        $editTutorial = DB::table('tutorial')
                        ->select('Judul', 'Isi', 'Photo', 'No')
                        ->where('No', $No)
                        ->update(['Judul' => $request->input('Judul'),
                        'Isi' =>  $request->input('Isi'),
                        'Photo' => $name]);
        }
        //$editTutorial->save();
        //dd($editTutorial);
        //exit;

        return Redirect::to('/auth/profilU');
    }

	public function prosesUser_insertTutorial (Request $request) {
        $user = Auth::user();
        $this->validate($request, [
        'Judul' => 'required',
        'Isi' => 'required',
        'Photo' => 'required|unique:tutorial|max:255',
        ]);
        $user_insertTutorial= new Tutorial;
		$user_insertTutorial->Judul = $request->input('Judul');
		$user_insertTutorial->Isi = $request->input('Isi');
        if($request->hasFile('Photo')) {
	            $file = Input::file('Photo');
	            $name = $file->getClientOriginalName();
	            $user_insertTutorial->Photo = $name;
	            $file->move(public_path().'/uploadPhoto/tutorial/', $name);
	        }
        $user_insertTutorial->user_id = $user->id;
        $user_insertTutorial->user_name = $user->username;
        $user_insertTutorial->save();
        //dd($user_insertTutorial);exit;
		return Redirect::to('auth/profilU');
    }

    public function deleteTutorial ($No){
        $user = Auth::user();
        $delete = DB::table('tutorial')->where('No', $No)->where('user_id', $user->id)->delete();

        return Redirect::to('/auth/profilU');
    }

}
