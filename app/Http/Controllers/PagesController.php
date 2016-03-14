<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
	// class pengunjung
    public function home () {
    	return view('ukhti');
    }

    public function about () {
    	return view('about');
    }

    public function toko () {
    	return view('toko');
    }

    public function hadits () {
    	return view('hadits');
    }

    public function artikel () {
    	return view('artikel');
    }


    public function profilU () {
    	return view('profilU');
    }


    //class sub pengunjung artikel
    public function isi_artikel () {
    	return view('isi-artikel');
    }

    //class sub pengunjung tutorial
    public function isi_tutorial () {
    	return view('isi-tutorial');
    }

    //class sub pengunjung toko
    public function listket_toko () {
        return view('listket_toko');
    }

    public function pakaian () {
    	return view('pakaian');
    }

    public function makanan () {
    	return view('makanan');
    }

    public function kerudung () {
    	return view('kerudung');
    }

    public function tas () {
    	return view('tas');
    }

    public function sepatu () {
    	return view('sepatu');
    }

    public function aksesoris () {
    	return view('aksesoris');
    }

    public function dll () {
    	return view('dll');
    }


    //class user
    public function user_profilU () {
    	return view('user_profilU');
    }

    
    public function user_insertToko () {
    	return view('user_insertToko');
    }
    
    public function user_insertTutorial () {
    	return view('user_insertTutorial');
    }


    //class admin
    public function admin_form () {
    	return view('admin_form');
    }

    //pesan
    public function pesan() {
        return view('pesan');
    }

}
