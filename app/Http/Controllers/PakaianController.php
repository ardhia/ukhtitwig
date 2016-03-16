<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Request;
use Redirect;
use App\User_insertToko;
use App\Http\Requests;
use DB;

class PakaianController extends Controller
{
	//get
	public function tampilPakaian (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'jb')->get();
    	
    	return view('toko', ['toko' => $daftartoko]);
	}

	public function tampilPakaianUser (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'jb')->get();
    	
    	return view('auth/toko', ['auth/toko' => $daftartoko]);
	}

	public function tampilPakaianAdmin (){
    	$daftartoko =  DB::table('toko')->select('photoToko', 'jb')->get();
    	
    	return view('admin/toko', ['admin/toko' => $daftartoko]);
	}


    public function upload(){
		return view('imageupload');
   	}

	/**
	 * Store a newly uploaded resource in storage.
	 *
	 * @return Response
	 */
	public function store(){
		// Store records process
   	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function show(){
		// Show lists of the images
    }
}
