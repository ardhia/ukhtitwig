<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('layout');
});

Route::get('/about', function () {
	return view('about');
});

Route::get('/toko', function () {
	return view('toko');
});

Route::get('/hadits', function () {
	return view('hadits');
});

Route::get('/artikel', function () {
	return view('artikel');
});

Route::get('/tutorial', function () {
	return view('tutorial');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
