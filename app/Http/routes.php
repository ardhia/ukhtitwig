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
Route::get('/toko', 'PagesController@toko')->name('toko');
Route::get('/hadits', 'PagesController@hadits')->name('hadits');
Route::get('/artikel', 'PagesController@artikel')->name('artikel');
Route::get('/tutorial', 'TutorialController@tampilTutorial')->name('tutorial');
Route::get('/artikel', 'ArtikelController@tampilArtikel')->name('artikel');
Route::get('/tutorial', 'PagesController@tutorial')->name('tutorial');
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


/*route get sub tutorial pengunjung*/
Route::get('/tutorial/isi-tutorial', 'TutorialController@tampilIsiTutorial')->name('tutorial.isi-tutorial');

/*route get sub tutorial pengunjung END*/

//Tutorial
Route::get('/tutorial', 'PagesController@tutorial')->name('tutorial');
Route::get('/tutorial/isi-tutorial', 'PagesController@isi_tutorial')->name('tutorial.isi-tutorial');


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
//Home About Profil
Route::get('auth', 'PagesController@homeUser')->name('homeUser');
Route::get('/about', 'PagesController@aboutUser')->name('aboutUser');
Route::get('/profilU', 'PagesController@profilUser')->name('profilUser');

//Toko
Route::get('/toko', 'TokoController@tampilTokoUser')->name('tokoUser');
Route::get('/toko/pakaian', 'TokoController@tampilPakaianUser')->name('toko.pakaianUser');
Route::get('/toko/makanan', 'TokoController@tampilMakananUser')->name('toko.makananUser');
Route::get('/toko/sepatu', 'TokoController@tampilSepatuUser')->name('toko.sepatuUser');
Route::get('/toko/kerudung', 'TokoController@tampilKerudungUser')->name('toko.kerudungUser');
Route::get('/toko/tas', 'TokoController@tampilTasUser')->name('toko.tasUser');
Route::get('/toko/aksesoris', 'TokoController@tampilAksesorisUser')->name('toko.aksesorisUser');
Route::get('/toko/dll', 'TokoController@tampilDllUser')->name('toko.dllUser');
Route::get('/user_profilU/user_insertToko', 'TokoController@user_insertToko')->name('user_profilU.user_insertToko');

//Hadits
Route::get('/hadits', 'PagesController@haditsUser')->name('haditsUser');

//Artikel
Route::get('/artikel', 'ArtikelController@tampilArtikelUser')->name('artikelUser');
Route::get('/artikel/isi-artikel', 'ArtikelController@tampilIsiArtikelUser')->name('artikel.isi-artikelUser');
Route::get('/user_profilU/user_insertArtikel', 'ArtikelController@tampilUser_insertArtikel')->name('user_profilU.user_insertArtikel');

/*Admin get Route*/
Route::get('/admin_form', 'PagesController@admin_form')->name('admin_form');
/*Admin get Route END*/
Route::post('/SignUp','signUpController@signUp');

//Tutorial
Route::get('/tutorial', 'PagesController@tutorialUser')->name('tutorialUser');
Route::get('/tutorial/isi-tutorial', 'PagesController@isi_tutorialUser')->name('tutorial.isi-tutorialUser');
Route::get('/user_profilU/user_insertTutorial', 'PagesController@user_insertTutorial')->name('user_profilU.user_insertTutorial');


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
Route::get('admin/tutorial', 'PagesController@tutorialAdmin')->name('tutorialAdmin');
Route::get('admin/tutorial/isi-tutorial', 'PagesController@isi_tutorialAdmin')->name('tutorial.isi-tutorialAdmin');

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

Route::post('/user_profilU/user_insertArtikel', 'ArtikelController@prosesUser_insertArtikel')->name('prosesArtikel');

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



//Route POST
Route::post('/signUp', 'signUpController@prosesSignUp')->name('signUpPost');
Route::post('/signIn', 'SignInController@prosesSignIn')->name('signInPost');
Route::post('/user_profilU/user_insertTutorial', 'TutorialController@prosesUser_insertTutorial')->name('prosesTutorial');
Route::post('/user_profilU/user_insertArtikel', 'ArtikelController@prosesUser_insertArtikel')->name('prosesArtikel');


/*nyobain collaps*/
Route::get('coba', function(){
	return view('coba');
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
