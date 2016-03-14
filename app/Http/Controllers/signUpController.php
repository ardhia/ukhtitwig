<?php

namespace App\Http\Controllers;

use App\SignUp;
use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;


class SignUpController extends Controller
{

    public function tampilSignUp () {

        $siswa_siswa = [
            [
                'nama' => 'ardhia',
                'alamat' => 'Padalarang'
            ],
            [
                'nama' => 'ardhia 1',
                'alamat' => 'Padalarang'
            ],
            [
                'nama' => 'RINA',
                'alamat' => 'Padalarang'
            ]
        ];


        return view('signUp', ['siswa_siswa' => $siswa_siswa]);
    }

    public function prosesSignUp (Request $request) {
        $signUp = new SignUp;
        $signUp->nama_lengkap = $request->input('nama_lengkap');
        $signUp->username = $request->input('username');
        $signUp->tempat_lahir = $request->input('tempat_lahir');
        $signUp->tanggal_lahir = $request->input('tanggal_lahir');
        $signUp->jenis_kelamin = $request->input('jenis_kelamin');
        $signUp->status = $request->input('status');
        $signUp->email = $request->input('email');
        $signUp->al_email = $request->input('al_email');
        $signUp->password = $request->input('password');
        $signUp->save();

        return Redirect::to('signUp');
    }
}
