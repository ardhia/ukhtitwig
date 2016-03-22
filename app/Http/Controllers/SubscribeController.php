<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SubscribeController extends Controller
{
	public function simpanLangganan (Requests $request){

		$this->validate($request, [
			'Email' => 'required|unique:posts|max:255',
		]);

	}
}
