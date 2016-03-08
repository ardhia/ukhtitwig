<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class signUpController extends Controller
{
    public function signUp () {
    	$signup = new signUp;
    	$signup->nama_lengkap    = Input::get('nama_lengkap');
    	$signup->username    = Input::get('username');
    	$signup->tempat_lahir    = Input::get('tempat_lahir');
    	$signup->tanggal_lahir    = Input::get('tanggal_lahir');
    	$signup->jenis_kelamin    = Input::get('jenis_kelamin');
    	$signup->status    = Input::get('status');
    	$signup->email    = Input::get('email');
    	$signup->al_email    = Input::get('al_email');
    	$signup->password = Hash::make(Input::get('password'));
    	$signup->save();

    	return Redirect::to('signUp');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
