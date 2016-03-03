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
    return view('ukhti');
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

Route::get('/signIn', function () {
	return view('signIn');
});

Route::get('/signUp', function () {
	return view('signUp');
});

Route::get('/profilU', function () {
	return view('profilU');
});

Route::get('/tutorial/isi-tutorial', function () {
	return view('tutorial/isi-tutorial');
});

Route::get('/artikel/isi-artikel', function () {
	return view('artikel/isi-artikel');
});

Route::get('/toko/pakaian', function () {
	return view('toko/pakaian');
});

Route::get('/toko/makanan', function () {
	return view('toko/makanan');
});

Route::get('/toko/sepatu', function () {
	return view('toko/sepatu');
});

Route::get('/toko/kerudung', function () {
	return view('toko/kerudung');
});

Route::get('/toko/tas', function () {
	return view('toko/tas');
});

Route::get('/toko/aksesoris', function () {
	return view('toko/aksesoris');
});

Route::get('/toko/dll', function () {
	return view('toko/dll');
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
