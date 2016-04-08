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

class TutorialController extends Controller
{

 //PUBLIK
	public function tutorial () {
        $user = Auth::user();

     	$tutorial = DB::table('tutorial')->select('No', 'Judul_Tutorial', 'Isi_Tutorial', 'Photo')->Paginate(3);

	    //Arsip
        $tahun = DB::table('tutorial')
                        ->select (DB::raw("YEAR(created_at) as tahun"), DB::raw("count(*) as total "))
                        ->groupBy(DB::raw("YEAR(created_at)"))
                        //->groupBy MONTH('created_at');
                        ->get();

        foreach($tahun as $item){
            $bulan = DB::table('tutorial')
                ->select(DB::raw('MONTH(created_at) as bulan'), DB::raw('count(*) as jumlah'))
                ->groupBy(DB::raw('MONTH(created_at)'))
                ->where(DB::raw('YEAR(created_at)'), $item->tahun)->get();
            $item->bulan = $bulan;
            //dd($item);
        }
        //dd($tahun);
        //exit;

     return view('tutorial', ['tutorial' => $tutorial, 'tahun' => $tahun, 'user' => $user]);
    }

    public function isi_tutorial ($No) {
        $user = Auth::user();

    	$dataTutorial = Tutorial::where('No', $No)->first();
        //dd($dataTutorial);
        $komentar_tutorial= DB::table('komentar_tutorial')
                            ->select('nama', 'isi_komentar')
                            ->where('no_tutorial', $No)
                            ->get();


        //Arsip
        $tahun = DB::table('tutorial')
                        ->select (DB::raw("YEAR(created_at) as tahun"), DB::raw("count(*) as total "))
                        ->groupBy(DB::raw("YEAR(created_at)"))
                        //->groupBy MONTH('created_at');
                        ->get();

        foreach($tahun as $item){
            $bulan = DB::table('tutorial')
                ->select(DB::raw('MONTH(created_at) as bulan'), DB::raw('count(*) as jumlah'))
                ->groupBy(DB::raw('MONTH(created_at)'))
                ->where(DB::raw('YEAR(created_at)'), $item->tahun)->get();
            $item->bulan = $bulan;
            //dd($item);
        }
        //dd($tahun);
        //exit;

        return view('isi-tutorial', ['dataTutorial' => $dataTutorial, 'komentar_tutorial' => $komentar_tutorial, 'No' => $No, 'tahun' => $tahun, 'user' => $user]);
    }

    public function search (Request $request) {
        $user = Auth::user();

        $keywords= $request->get('keywords');
        $table = DB::table('tutorial')->select('Judul_Tutorial')->where('Judul_Tutorial',  'LIKE', '%' . $keywords . '%')->get();

        //Arsip
        $tahun = DB::table('tutorial')
                        ->select (DB::raw("YEAR(created_at) as tahun"), DB::raw("count(*) as total "))
                        ->groupBy(DB::raw("YEAR(created_at)"))
                        //->groupBy MONTH('created_at');
                        ->get();

        foreach($tahun as $item){
            $bulan = DB::table('tutorial')
                ->select(DB::raw('MONTH(created_at) as bulan'), DB::raw('count(*) as jumlah'))
                ->groupBy(DB::raw('MONTH(created_at)'))
                ->where(DB::raw('YEAR(created_at)'), $item->tahun)->get();
            $item->bulan = $bulan;
            //dd($item);
        }
        //dd($tahun);
        //exit;

        
        return view('searchtutorial', ['keywords' => $table, 'tahun' => $tahun, 'user' => $user]);
    }
     //END

    //USER

	public function user_insertTutorial (){
        $user = Auth::user();
        $tutorial = DB::table('tutorial');
        //dd($user);exit;
        return view('auth/user_insertTutorial', ['user' => $user, 'tutorial' => $tutorial]);
	}

    public function user_editTutorial ($No){
        $user = Auth::user();

        $isiTutorial = Tutorial::where('No', $No)->where('user_id', $user->id)->firstOrFail();
        //dd($isiTutorial, $user);
        //exit;
        return view('auth/user_editTutorial', ['user' => $user, 'isiTutorial' => $isiTutorial]);
    }

    public function prosesUser_editTutorial (Request $request, $No) {
        /*$this->validate($request, [
        'Judul_Tutorial' => 'required',
        'Isi_Tutorial' => 'required',
        'Photo' => 'required|unique:tutorial|max:255',
        ]);*/
        //$editTutorial= new User_insertTutorial;
        if($request->hasFile('Photo')) {
                                    $file = Input::file('Photo');
                                    $name = $file->getClientOriginalName();
                                    $file->move(public_path().'/uploadPhoto/tutorial/', $name);
        $editTutorial = DB::table('tutorial')
                        ->select('Judul_Tutorial', 'Isi_Tutorial', 'Photo', 'No')
                        ->where('No', $No)
                        ->update(['Judul_Tutorial' => $request->input('Judul_Tutorial'),
                        'Isi_Tutorial' =>  $request->input('Isi_Tutorial'),
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
        'Judul_Tutorial' => 'required',
        'Isi_Tutorial' => 'required',
        'Photo' => 'required|unique:tutorial|max:255',
        ]);
        $user_insertTutorial= new Tutorial;
		$user_insertTutorial->Judul_Tutorial = $request->input('Judul_Tutorial');
		$user_insertTutorial->Isi_Tutorial = $request->input('Isi_Tutorial');
        if($request->hasFile('Photo')) {
	            $file = Input::file('Photo');
	            $name = $file->getClientOriginalName();
	            $user_insertTutorial->Photo = $name;
	            $file->move(public_path().'/uploadPhoto/tutorial/', $name);
	        }
        $user_insertTutorial->user_id = $user->id;
        $user_insertTutorial->save();
        //dd($user_insertTutorial);exit;
		return Redirect::to('auth/profilU');
    }

    public function deleteTutorial ($No){
        $user = Auth::user();
        $delete = DB::table('tutorial')->where('No', $No)->where('user_id', $user->id)->delete();

        return Redirect::to('/auth/profilU');
    }

   

 //END

 //ADMIN

	 public function tutorialAdmin (){
	  return view('admin/tutorial');
	 }

	 public function isi_tutorialAdmin (){
	  return view('admin/isi-tutorial');
	 }

	 public function uploadPhoto (Request $request){
    	$file = $request->file('photo');
    }

 //END

}
