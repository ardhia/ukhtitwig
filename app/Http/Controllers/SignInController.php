<?php

namespace App\Http\Controllers;

use App\signIn;
use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;

class SignInController extends Controller
{
    public function tampilSignIn () {
    	return view('signIn');
    }

    public function prosesSignIn (Request $request) {
        $signIn = new SignIn;
        $signIn->email = $request->input('email');
        $signIn->password = $request->input('password');
        $signIn->save();

        return Redirect::to('signIn');
    }
}
