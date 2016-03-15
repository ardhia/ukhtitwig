<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Routes File Get Halaman Pengunjung
|--------------------------------------------------------------------------
*/

//Home About Profil
Route::get('/', 'PagesController@home')->name('/');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/profilU', 'PagesController@profilU')->name('profilU');

//Toko
Route::get('/toko', 'TokoController@tampilToko')->name('toko');
Route::get('/toko/pakaian', 'TokoController@tampilPakaian')->name('toko.pakaian');
Route::get('/toko/makanan', 'TokoController@tampilMakanan')->name('toko.makanan');
Route::get('/toko/sepatu', 'TokoController@tampilSepatu')->name('toko.sepatu');
Route::get('/toko/kerudung', 'TokoController@tampilKerudung')->name('toko.kerudung');
Route::get('/toko/tas', 'TokoController@tampilTas')->name('toko.tas');
Route::get('/toko/aksesoris', 'TokoController@tampilAksesoris')->name('toko.aksesoris');
Route::get('/toko/dll', 'TokoController@tampilDll')->name('toko.dll');

//Hadits
Route::get('/hadits', 'PagesController@hadits')->name('hadits');

//Artikel
Route::get('/artikel', 'ArtikelController@tampilArtikel')->name('artikel');
Route::get('/artikel/isi-artikel', 'ArtikelController@tampilIsiArtikel')->name('artikel.isi-artikel');


//Tutorial
Route::get('/tutorial', 'TutorialController@tutorial')->name('tutorial');
Route::get('/tutorial/isi-tutorial', 'TutorialController@isi_tutorial')->name('tutorial.isi-tutorial');
/*
|--------------------------------------------------------------------------
| END YOOOOOOOOOOO!!! >o<
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
|
|
|
|
|
|
|
|
|
|
|
|
|
|
|--------------------------------------------------------------------------
| Routes File Get Halaman User
|--------------------------------------------------------------------------
*/


//Home About Profil
Route::get('auth', 'PagesController@homeUser')->name('homeUser');
Route::get('auth/about', 'PagesController@aboutUser')->name('aboutUser');
Route::get('auth/profilU', 'PagesController@profilUser')->name('profilUser');

//Toko
Route::get('auth/toko', 'TokoController@tampilTokoUser')->name('tokoUser');
Route::get('auth/toko/pakaian', 'TokoController@tampilPakaianUser')->name('toko.pakaianUser');
Route::get('auth/toko/makanan', 'TokoController@tampilMakananUser')->name('toko.makananUser');
Route::get('auth/toko/sepatu', 'TokoController@tampilSepatuUser')->name('toko.sepatuUser');
Route::get('auth/toko/kerudung', 'TokoController@tampilKerudungUser')->name('toko.kerudungUser');
Route::get('auth/toko/tas', 'TokoController@tampilTasUser')->name('toko.tasUser');
Route::get('auth/toko/aksesoris', 'TokoController@tampilAksesorisUser')->name('toko.aksesorisUser');
Route::get('auth/toko/dll', 'TokoController@tampilDllUser')->name('toko.dllUser');
Route::get('auth/user_profilU/user_insertToko', 'TokoController@user_insertToko')->name('user_profilU.user_insertToko');

//Hadits
Route::get('auth/hadits', 'PagesController@haditsUser')->name('haditsUser');

//Artikel
Route::get('auth/artikel', 'ArtikelController@tampilArtikelUser')->name('artikelUser');
Route::get('auth/artikel/isi-artikel', 'ArtikelController@tampilIsiArtikelUser')->name('artikel.isi-artikelUser');
Route::get('auth/user_profilU/user_insertArtikel', 'ArtikelController@tampilUser_insertArtikel')->name('user_profilU.user_insertArtikel');


//Tutorial
Route::get('auth/tutorial', 'TutorialController@tutorialUser')->name('tutorialUser');
Route::get('auth/tutorial/isi-tutorial', 'TutorialController@isi_tutorialUser')->name('tutorial.isi-tutorialUser');
Route::get('auth/user_profilU/user_insertTutorial', 'TutorialController@user_insertTutorial')->name('user_profilU.user_insertTutorial');
/*
|--------------------------------------------------------------------------
| END YOOOOOOOOOOO!!! >o<
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
|
|
|
|
|
|
|
|
|
|
|
|
|
|
|--------------------------------------------------------------------------
| Routes File Get Halaman Admin
|--------------------------------------------------------------------------
*/

//Home About Profil
Route::get('admin', 'PagesController@homeAdmin')->name('/homeAdmin');
Route::get('admin/about', 'PagesController@aboutAdmin')->name('aboutAdmin');
Route::get('admin/profilU', 'PagesController@profilAdmin')->name('profilAdmin');
Route::get('admin/admin_form', 'PagesController@admin_form')->name('admin_form');

//Toko
Route::get('admin/toko', 'TokoController@tampilTokoAdmin')->name('tokoAdmin');
Route::get('admin/toko/pakaian', 'TokoController@tampilPakaianAdmin')->name('toko.pakaianAdmin');
Route::get('admin/toko/makanan', 'TokoController@tampilMakananAdmin')->name('toko.makananAdmin');
Route::get('admin/toko/sepatu', 'TokoController@tampilSepatuAdmin')->name('toko.sepatuAdmin');
Route::get('admin/toko/kerudung', 'TokoController@tampilKerudungAdmin')->name('toko.kerudungAdmin');
Route::get('admin/toko/tas', 'TokoController@tampilTasAdmin')->name('toko.tasAdmin');
Route::get('admin/toko/aksesoris', 'TokoController@tampilAksesorisAdmin')->name('toko.aksesorisAdmin');
Route::get('admin/toko/dll', 'TokoController@tampilDllAdmin')->name('toko.dllAdmin');

//Hadits
Route::get('admin/hadits', 'PagesController@haditsAdmin')->name('haditsAdmin');

//Artikel
Route::get('admin/artikel', 'ArtikelController@tampilArtikelAdmin')->name('artikelAdmin');
Route::get('admin/artikel/isi-artikel', 'ArtikelController@tampilIsiArtikelAdmin')->name('artikel.isi-artikelAdmin');

//Tutorial
Route::get('admin/tutorial', 'TutorialController@tutorialAdmin')->name('tutorialAdmin');
Route::get('admin/tutorial/isi-tutorial', 'TutorialController@isi_tutorialAdmin')->name('tutorial.isi-tutorialAdmin');
/*
|--------------------------------------------------------------------------
| END YOOOOOOOOOOO!!! >o<
|--------------------------------------------------------------------------
*/
/*
|
|
|
|
|
|
|
|
|
|
|
|
|--------------------------------------------------------------------------
| Routes File POST Halaman User
|--------------------------------------------------------------------------
*/
Route::post('auth/user_profilU/user_insertArtikel', 'ArtikelController@prosesUser_insertArtikel')->name('prosesArtikel');

/*
|
|
|
|
|
|
|
|
|
|
|
|
|--------------------------------------------------------------------------
| Routes File POST Halaman Admin
|--------------------------------------------------------------------------
*/
//isian disini
/*
|--------------------------------------------------------------------------
| END YOOOOOOOOOOO!!! >o<
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Authentication routes & Registration routes
|--------------------------------------------------------------------------
*/


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin')->name('tampilkanSignIn');
Route::post('auth/login', 'Auth\AuthController@postLogin')->name('memprosesSignIn');
Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('logoutUser');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister')->name('tampilkanSignUp');
Route::post('auth/register', 'Auth\AuthController@postRegister')->name('memprosesSignUp');

/*
|--------------------------------------------------------------------------
| END Authentication routes & Registration routes
|--------------------------------------------------------------------------
*/


Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'ProfileController@show'
]);


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
