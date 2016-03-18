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
Route::get('/toko/pakaian', 'PakaianController@tampilPakaian')->name('toko.pakaian');
Route::get('/toko/makanan', 'MakananController@tampilMakanan')->name('toko.makanan');
Route::get('/toko/sepatu', 'SepatuController@tampilSepatu')->name('toko.sepatu');
Route::get('/toko/kerudung', 'KerudungController@tampilKerudung')->name('toko.kerudung');
Route::get('/toko/tas', 'TasController@tampilTas')->name('toko.tas');
Route::get('/toko/aksesoris', 'AksesorisController@tampilAksesoris')->name('toko.aksesoris');
Route::get('/toko/dll', 'LainnyaController@tampilDll')->name('toko.dll');

//Hadits
Route::get('/hadits', 'HaditsController@hadits')->name('hadits');
Route::get('/hadits', 'HaditsController@tampilPagination')->name('hadits');

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
Route::get('auth/toko/pakaian', 'PakaianController@tampilPakaianUser')->name('toko.pakaianUser');
Route::get('auth/toko/makanan', 'MakananController@tampilMakananUser')->name('toko.makananUser');
Route::get('auth/toko/sepatu', 'SepatuController@tampilSepatuUser')->name('toko.sepatuUser');
Route::get('auth/toko/kerudung', 'KerudungController@tampilKerudungUser')->name('toko.kerudungUser');
Route::get('auth/toko/tas', 'TasController@tampilTasUser')->name('toko.tasUser');
Route::get('auth/toko/aksesoris', 'AksesorisController@tampilAksesorisUser')->name('toko.aksesorisUser');
Route::get('auth/toko/dll', 'LainnyaController@tampilDllUser')->name('toko.dllUser');
Route::get('auth/profilU/user_insertToko', 'TokoController@user_insertToko')->name('profilU.user_insertToko');

//Hadits
Route::get('auth/hadits', 'HaditsController@haditsUser')->name('haditsUser');

//Artikel
Route::get('auth/artikel', 'ArtikelController@tampilArtikelUser')->name('artikelUser');
Route::get('auth/artikel/isi-artikel', 'ArtikelController@tampilIsiArtikelUser')->name('artikel.isi-artikelUser');
Route::get('auth/profilU/user_insertArtikel', 'ArtikelController@tampilUser_insertArtikel')->name('profilU.user_insertArtikel');

//Tutorial
Route::get('auth/tutorial', 'TutorialController@tutorialUser')->name('tutorialUser');
Route::get('auth/tutorial/isi-tutorial', 'TutorialController@isi_tutorialUser')->name('tutorial.isi-tutorialUser');
Route::get('auth/profilU/user_insertTutorial', 'TutorialController@user_insertTutorial')->name('profilU.user_insertTutorial');
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
Route::get('admin', 'PagesController@homeAdmin')->name('homeAdmin');
Route::get('admin/about', 'PagesController@aboutAdmin')->name('aboutAdmin');
Route::get('admin/profilU', 'PagesController@profilAdmin')->name('profilAdmin');
Route::get('admin/admin_form', 'PagesController@admin_form')->name('admin_form');

//Toko
Route::get('admin/toko', 'TokoController@tampilTokoAdmin')->name('tokoAdmin');
Route::get('admin/toko/pakaian', 'PakaianController@tampilPakaianAdmin')->name('toko.pakaianAdmin');
Route::get('admin/toko/makanan', 'MakananController@tampilMakananAdmin')->name('toko.makananAdmin');
Route::get('admin/toko/sepatu', 'SepatuController@tampilSepatuAdmin')->name('toko.sepatuAdmin');
Route::get('admin/toko/kerudung', 'KerudungController@tampilKerudungAdmin')->name('toko.kerudungAdmin');
Route::get('admin/toko/tas', 'TasController@tampilTasAdmin')->name('toko.tasAdmin');
Route::get('admin/toko/aksesoris', 'AksesorisController@tampilAksesorisAdmin')->name('toko.aksesorisAdmin');
Route::get('admin/toko/dll', 'LainnyaController@tampilDllAdmin')->name('toko.dllAdmin');

//Hadits
Route::get('admin/hadits', 'HaditsController@haditsAdmin')->name('haditsAdmin');

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
Route::post('auth/profilU/user_insertArtikel', 'ArtikelController@prosesUser_insertArtikel')->name('prosesArtikel');
Route::post('auth/profilU/user_insertTutorial', 'TutorialController@prosesUser_insertTutorial')->name('prosesTutorial');
Route::post('auth/profilU/user_insertToko', 'TokoController@prosesUser_insertToko')->name('prosesToko');
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


Route::get('imageUploadForm', 'ImageController@upload' );
Route::post('imageUploadForm', 'ImageController@store' );
Route::get('showLists', 'ImageController@show' );

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
