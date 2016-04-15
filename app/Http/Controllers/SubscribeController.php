<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Subscribe;
use Redirect;
use App\Http\Requests;
use Mail;

class SubscribeController extends Controller
{
	public function prosesSimpanLangganan (Request $request){
		$this->validate($request, [
        'email' => 'required|unique:subscribe|max:255',
    	]);
        $subscribe = new Subscribe;
        $subscribe->email = $request->input('email');
        $subscribe->save();

        Mail::send('emails.reminder', ['subscribe' => $subscribe], function ($m) use ($subscribe) {
            $m->from('ukhti19f16@gmail.com', 'Ukhti');

            $m->to($subscribe->email)->subject('Your Reminder!');

        return Redirect::to('/');
    		});
	}
}
