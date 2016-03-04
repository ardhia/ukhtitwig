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
})->name('/');

Route::get('/user_profilU', function () {
    return view('user_profilU');
})->name('user_profilU');

Route::get('/about', function () {
	return view('about');
})->name('about');

Route::get('/toko', function () {
	return view('toko');
})->name('toko');

Route::get('/hadits', function () {
	return view('hadits');
})->name('hadits');

Route::get('/artikel', function () {
	return view('artikel');
})->name('artikel');

Route::get('/tutorial', function () {
	return view('tutorial');
})->name('tutorial');

Route::get('/signIn', function () {
	return view('signIn');
})->name('signIn');

Route::post('/signIn', function()
{
    var_dump($_POST);
});

Route::get('/signUp', function () {
	return view('signUp');
})->name('signUp');

Route::get('/profilU', function () {
	return view('profilU');
})->name('profilU');

Route::get('/tutorial/isi-tutorial', function () {
	return view('isi-tutorial');
})->name('tutorial.isi-tutorial');

Route::get('/artikel/isi-artikel', function () {
	return view('isi-artikel');
})->name('artikel.isi-artikel');

Route::get('/toko/pakaian', function () {
	return view('pakaian');
})->name('toko.pakaian');

Route::get('/toko/makanan', function () {
	return view('makanan');
})->name('toko.makanan');

Route::get('/toko/sepatu', function () {
	return view('sepatu');
})->name('toko.sepatu');

Route::get('/toko/kerudung', function () {
	return view('kerudung');
})->name('toko.kerudung');

Route::get('/toko/tas', function () {
	return view('tas');
})->name('toko.tas');

Route::get('/toko/aksesoris', function () {
	return view('aksesoris');
})->name('toko.aksesoris');

Route::get('/toko/dll', function () {
	return view('dll');
})->name('toko.dll');


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
