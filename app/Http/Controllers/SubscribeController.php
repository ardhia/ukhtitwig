<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Subscribe;
use Redirect;
use App\Http\Requests;

class SubscribeController extends Controller
{
	public function prosesSimpanLangganan (Request $request){
		$this->validate($request, [
        'email' => 'required|unique:subscribe|max:255',
    	]);
        $subscribe = new Subscribe;
        $subscribe->email = $request->input('email');
        $subscribe->save();

        return Redirect::to('/');
    }
}