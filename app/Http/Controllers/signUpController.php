<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;


class signUpController extends Controller
{
    public function signUp () {
        $signUp = new App\signUp;
        $signUp->nama_lengkap   = Input::get('nama_lengkap');
        $signUp->username       = Input::get('username');
        $signUp->tempat_lahir   = Input::get('tempat_lahir');
        $signUp->tanggal_lahir  = Input::get('tanggal_lahir');
        $signUp->jenis_kelamin  = Input::get('jenis_kelamin');
        $signUp->status         = Input::get('status');
        $signUp->email          = Input::get('email');
        $signUp->al_email       = Input::get('al_email');
        $signUp->password       = Hash::make(Input::get('password'));
        $signUp->save();

    return Redirect::to('signUp');
    }
}
