<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Subscribe;
use App\Http\Requests;

class SubscribeController extends Controller
{
    
	protected $redirectTo = '/';
	protected $redirectPath = '/subs';
	protected $subscribePath = '/';

	protected function simpanLangganan(array $request)
    {
    	 return Validator::make($request, [
            'email' => 'required|email|unique:subscribe|max:255',
        ]);

    }

  protected function create(array $request)
  {

  	return Subscribe::create([
  		'email' => $request['email'],
  		]);
  }
}