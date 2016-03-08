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


/*User Route*/

Route::get('/user_profilU', function () {
    return view('user_profilU');
})->name('user_profilU');

Route::get('/user_profilU/user_insertArtikel', function () {
    return view('user_insertArtikel');
})->name('user_profilU.user_insertArtikel');

Route::get('/user_profilU/user_insertToko', function () {
    return view('user_insertToko');
})->name('user_profilU.user_insertToko');

Route::get('/user_profilU/user_insertTutorial', function () {
    return view('user_insertTutorial');
})->name('user_profilU.user_insertTutorial');



/*Admin Route*/

Route::get('/admin_form', function () {
    return view('admin_form');
})->name('admin_form');

/*route get pengunjung*/
Route::get('/', 'PagesController@home')->name('/');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/toko', 'PagesController@toko')->name('toko');
Route::get('/hadits', 'PagesController@hadits')->name('hadits');
Route::get('/artikel', 'PagesController@artikel')->name('artikel');
Route::get('/tutorial', 'PagesController@tutorial')->name('tutorial');
Route::get('/signIn', 'PagesController@signIn')->name('signIn');
Route::get('/signUp', 'PagesController@signUp')->name('signUp');
Route::get('/profilU', 'PagesController@profilU')->name('profilU');
/*route get pengunjung END*/


/*route get sub artikel pengunjung*/
Route::get('/artikel/isi-artikel', 'PagesController@isi_artikel')->name('artikel.isi-artikel');
/*route get sub artikel pengunjung END*/


/*route get sub tutorial pengunjung*/
Route::get('/tutorial/isi-tutorial', 'PagesController@isi_tutorial')->name('tutorial.isi-tutorial');
/*route get sub tutorial pengunjung END*/


/*route get sub toko pengunjung*/
Route::get('/toko/pakaian', 'PagesController@pakaian')->name('toko.pakaian');
Route::get('/toko/makanan', 'PagesController@makanan')->name('toko.makanan');
Route::get('/toko/sepatu', 'PagesController@sepatu')->name('toko.sepatu');
Route::get('/toko/kerudung', 'PagesController@kerudung')->name('toko.kerudung');
Route::get('/toko/tas', 'PagesController@tas')->name('toko.tas');
Route::get('/toko/aksesoris', 'PagesController@aksesoris')->name('toko.aksesoris');
Route::get('/toko/dll', 'PagesController@dll')->name('toko.dll');
/*route get sub toko pengunjung END*/

/*User get Route*/
Route::get('/user_profilU', 'PagesController@user_profilU')->name('user_profilU');
Route::get('/user_profilU/user_insertArtikel', 'PagesController@user_insertArtikel')->name('user_profilU.user_insertArtikel');
Route::get('/user_profilU/user_insertToko', 'PagesController@user_insertToko')->name('user_profilU.user_insertToko');
Route::get('/user_profilU/user_insertTutorial', 'PagesController@user_insertTutorial')->name('user_profilU.user_insertTutorial');
/*User get Route END*/


/*Admin get Route*/
Route::get('/admin_form', 'PagesController@admin_form')->name('admin_form');
/*Admin get Route END*/

/*pesan*/
Route::get('/pesan', 'PagesController@pesan')->name('pesan');
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
