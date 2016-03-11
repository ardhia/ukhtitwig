<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
/*route get pengunjung*/
Route::get('/', 'PagesController@home')->name('/');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/toko', 'PagesController@toko')->name('toko');
Route::get('/hadits', 'PagesController@hadits')->name('hadits');
Route::get('/artikel', 'PagesController@artikel')->name('artikel');
Route::get('/tutorial', 'PagesController@tutorial')->name('tutorial');
Route::get('/signIn', 'SignInController@tampilSignIn')->name('signIn');
Route::get('/signUp', 'SignUpController@tampilSignUp')->name('signUp');
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
Route::get('/user_profilU/user_insertArtikel', 'ArtikelController@tampilUser_insertArtikel')->name('user_profilU.user_insertArtikel');
Route::get('/user_profilU/user_insertToko', 'PagesController@user_insertToko')->name('user_profilU.user_insertToko');
/*User get Route END*/


/*Admin get Route*/
Route::get('/admin_form', 'PagesController@admin_form')->name('admin_form');
/*Admin get Route END*/
Route::post('/signUp', 'signUpController@signUp');




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
