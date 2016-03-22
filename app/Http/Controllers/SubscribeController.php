<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Subscribe;
use Redirect;
use App\Http\Requests;

class SubscribeController extends Controller
{
   /* 
	protected $redirectTo = '/';
	protected $redirectPath = '/subs';
	protected $subscribePath = '/';

/*	protected function simpanLangganan(array $request)
    {
    	 return Validator::make($request, [
            'email' => 'required|email|unique:subscribe|max:255',
        ]);

    }
*/
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