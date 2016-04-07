<?php

/*
|--------------------------------------------------------------------------
| Routes File
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
   
	// Authentication routes...
	Route::get('auth/login', 'Auth\AuthController@getLogin')->name('tampilkanSignIn');
	Route::post('auth/login', 'Auth\AuthController@postLogin')->name('memprosesSignIn');
	Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('logoutUser');

	// Registration routes...
	Route::get('auth/register', 'Auth\AuthController@getRegister')->name('tampilkanSignUp');
	Route::post('auth/register', 'Auth\AuthController@postRegister')->name('memprosesSignUp');

	//Home About Profil
    Route::get('auth/', ['middleware' => 'auth.basic', 'uses' => 'PagesController@homeUser'])->name('homeUser');
    Route::get('auth/about', ['middleware' => 'auth.basic', 'uses' => 'PagesController@aboutUser'])->name('aboutUser');
	Route::get('auth/profilU', ['middleware' => 'auth.basic', 'uses' => 'ProfilUserController@profilUser'])->name('profilUser');
    
    //Toko
    Route::get('auth/toko', ['middleware' => 'auth.basic', 'TokoController@tampilTokoUser'])->name('tokoUser');
    Route::get('auth/toko/pakaian', ['middleware' => 'auth.basic', 'uses' => 'PakaianController@tampilPakaianUser'])->name('toko.pakaianUser');
    Route::get('auth/toko/makanan', ['middleware' => 'auth.basic', 'uses' => 'MakananController@tampilMakananUser'])->name('toko.makananUser');
    Route::get('auth/toko/sepatu', ['middleware' => 'auth.basic', 'uses' => 'SepatuController@tampilSepatuUser'])->name('toko.sepatuUser');
    Route::get('auth/toko/kerudung', ['middleware' => 'auth.basic', 'uses' => 'KerudungController@tampilKerudungUser'])->name('toko.kerudungUser');
    Route::get('auth/toko/tas', ['middleware' => 'auth.basic', 'uses' => 'TasController@tampilTasUser'])->name('toko.tasUser');
    Route::get('auth/toko/aksesoris', ['middleware' => 'auth.basic', 'uses' => 'AksesorisController@tampilAksesorisUser'])->name('toko.aksesorisUser');
    Route::get('auth/toko/dll', ['middleware' => 'auth.basic', 'LainnyaController@tampilDllUser'])->name('toko.dllUser');
    Route::get('auth/profilU/user_insertToko', ['middleware' => 'auth.basic', 'uses' => 'TokoController@user_insertToko'])->name('profilU.user_insertToko');
    Route::get('auth/profilU/{idToko}/user_editToko', ['middleware' => 'auth.basic', 'uses' => 'TokoController@user_editToko'])->name('profilU.user_editToko');
    Route::get('auth/profilU/{idToko}/user_deleteToko', 'TokoController@deleteToko')->name('deleteToko');

    //Hadits
    Route::get('auth/hadits', ['middleware' => 'auth.basic', 'uses' => 'HaditsController@haditsUser'])->name('haditsUser');

    //Artikel
    Route::get('auth/artikel', ['middleware' => 'auth.basic', 'uses' => 'ArtikelController@tampilArtikelUser'])->name('artikelUser');
    Route::get('auth/artikel/isi-artikel', ['middleware' => 'auth.basic', 'uses' => 'ArtikelController@tampilIsiArtikelUser'])->name('artikel.isi-artikelUser');
    Route::get('auth/profilU/user_insertArtikel', ['middleware' => 'auth.basic', 'uses' => 'ArtikelController@tampilUser_insertArtikel'])->name('profilU.user_insertArtikel');
    Route::get('auth/profilU/{No}/user_editArtikel', ['middleware' => 'auth.basic', 'uses' => 'ArtikelController@user_editArtikel'])->name('profilU.user_editArtikel');
    Route::get('auth/profilU/{No}/user_deleteArtikel', 'ArtikelController@deleteArtikel')->name('deleteArtikel');

    //Tutorial
    Route::get('auth/tutorial', ['middleware' => 'auth.basic', 'uses' => 'TutorialController@tutorialUser'])->name('tutorialUser');
    Route::get('auth/tutorial/isi-tutorial', ['middleware' => 'auth.basic', 'uses' => 'TutorialController@isi_tutorialUser'])->name('tutorial.isi-tutorialUser');
    Route::get('auth/profilU/user_insertTutorial', ['middleware' => 'auth.basic', 'uses' => 'TutorialController@user_insertTutorial'])->name('profilU.user_insertTutorial');
    Route::get('auth/profilU/{No}/user_editTutorial', ['middleware' => 'auth.basic', 'uses' => 'TutorialController@user_editTutorial'])->name('profilU.user_editTutorial');
    Route::get('auth/profilU/{No}/user_deleteTutorial', 'TutorialController@deleteTutorial')->name('deleteTutorial');


    //Testimoni
    Route::post('auth/profilU/Testimoni/{id}', 'TestimoniController@prosesTestimoni')->name('prosesTestimoni');
    Route::get('auth/profilU/{No}/user_deleteTestimoni', 'TestimoniController@deleteTestimoni')->name('deleteTestimoni');


	/*
    |--------------------------------------------------------------------------
    | Routes File POST Halaman User
    |--------------------------------------------------------------------------
    */
    Route::get('auth/profilU/{id}/editPP', ['middleware' => 'auth.basic', 'uses' => 'ProfilUserController@getPhotoProfil'])->name('getPhotoProfil');
    Route::post('auth/profilU/{id}', ['middleware' => 'auth.basic', 'uses' => 'ProfilUserController@changePhotoProfil'])->name('changePhotoProfil');
    Route::post('auth/profilUBio/{id}', ['middleware' => 'auth.basic', 'uses' => 'ProfilUserController@changeBio'])->name('changeBio');

    Route::post('auth/profilU/user_insertArtikel/artikel', ['middleware' => 'auth.basic', 'uses' => 'ArtikelController@prosesUser_insertArtikel'])->name('prosesArtikel');
    Route::post('auth/profilU/{No}/user_editArtikel', ['middleware' => 'auth.basic', 'uses' => 'ArtikelController@prosesUser_editArtikel'])->name('prosesEditArtikel');

    Route::post('auth/profilU/user_insertTutorial/tutorial', ['middleware' => 'auth.basic', 'uses' => 'TutorialController@prosesUser_insertTutorial'])->name('prosesTutorial');
    Route::post('auth/profilU/{No}/user_editTutorial', ['middleware' => 'auth.basic', 'uses' => 'TutorialController@prosesUser_editTutorial'])->name('prosesEditTutorial');
    
    Route::post('auth/profilU/user_insertToko/toko', ['middleware' => 'auth.basic', 'uses' => 'TokoController@prosesUser_insertToko'])->name('prosesToko');
    Route::post('auth/profilU/{idToko}/user_editToko', ['middleware' => 'auth.basic', 'uses' => 'TokoController@prosesUser_editToko'])->name('prosesEditToko');
    /*
	|--------------------------------------------------------------------------
	| END YOOOOOOOOOOO!!! >o<
	|--------------------------------------------------------------------------
	|
    |
    |
    |
    |
    /*
    |--------------------------------------------------------------------------
    | Routes File Get Halaman Pengunjung
    |--------------------------------------------------------------------------
    */

    //Home About Profil
    Route::get('/', 'PagesController@home')->name('/');
    
    Route::get('/about', 'PagesController@about')->name('about');
    Route::get('/about/helpArtikel','HelpartikelController@menampilkan_HelpArtikel')->name('about.help-artikel');
    Route::get('/about/helpToko', 'HelptokoController@menampilkan_HelpToko')->name('about.help-toko');
    Route::get('/about/helpTutorial', 'HelptutorialController@menampilkan_HelpTutorial')->name('about.help-tutorial');
    Route::get('/about/helpSignUp', 'HelpsignupController@menampilkan_HelpSignUp')->name('about.help-signup');

    Route::get('/profilU/{id}', 'PagesController@profilU')->name('profilU');
    Route::post('/subs', 'SubscribeController@prosesSimpanLangganan')->name('simpanLangganan');

    //Toko
    Route::get('/toko', 'TokoController@tampilToko')->name('toko');
    Route::get('/toko/pakaian', 'PakaianController@tampilPakaian')->name('toko.pakaian');
    Route::get('/toko/makanan', 'MakananController@tampilMakanan')->name('toko.makanan');
    Route::get('/toko/sepatu', 'SepatuController@tampilSepatu')->name('toko.sepatu');
    Route::get('/toko/kerudung', 'KerudungController@tampilKerudung')->name('toko.kerudung');
    Route::get('/toko/tas', 'TasController@tampilTas')->name('toko.tas');
    
    Route::get('/toko/aksesoris', 'AksesorisController@tampilAksesoris')->name('toko.aksesoris');
    Route::get('/toko/aksesoris/searchaksesoris', 'AksesorisController@search')->name('toko.aksesoris-search');
    
    Route::get('/toko/dll', 'LainnyaController@tampilDll')->name('toko.dll');

    //Hadits
    Route::get('/hadits', 'HaditsController@hadits')->name('hadits');
    Route::get('/hadits/searchhadits', 'HaditsController@search')->name('hadits.search');

    //Artikel
    Route::get('/artikel', 'ArtikelController@tampilArtikel')->name('artikel');
    Route::get('/artikel/content/{No}', 'ArtikelController@tampilIsiArtikel')->name('artikel.isi-artikel');
    Route::get('/artikel/searchartikel', 'ArtikelController@search')->name('artikel.search');


    //Tutorial
    Route::get('/tutorial', 'TutorialController@tutorial')->name('tutorial');
    Route::get('/tutorial/content/{No}', 'TutorialController@isi_tutorial')->name('tutorial.isi-tutorial');
    Route::get('/tutorial/searchtutorial', 'TutorialController@search')->name('tutorial.search');

    //post komentar tutorial
    Route::post('/tutorial/komentar/{No}', 'KomentarController@prosesKomentarTutorial')->name('prosesKomentarTutorial');
    Route::post('/artikel/komentar/{No}', 'KomentarController@prosesKomentarArtikel')->name('prosesKomentarArtikel');

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
    Route::get('admin/profilA', 'ProfilAdminController@tampilProfilAdmin')->name('profilAdmin');

    //delete artikel
    Route::get('admin/artikel/{No}', 'ProfilAdminController@hapusArtikel')->name('hapusArtikel');
    //delete tutorial
    Route::get('admin/tutorial/{No}', 'ProfilAdminController@hapusTutorial')->name('hapusTutorial');
    //delete toko
    Route::get('admin/toko/{No}', 'ProfilAdminController@hapusToko')->name('hapusToko');
    //delete subscribe
    Route::get('admin/subscribe/{No}', 'ProfilAdminController@hapusSubscribe')->name('hapusSubscribe');

    //table Artikel
    Route::get('admin/tableArtikel', 'TableArtikelController@tampilTableArtikel')->name('tableArtikel');
    //table Tutorial
    Route::get('admin/tableTutorial', 'TableTutorialController@tampilTableTutorial')->name('tableTutorial');
    //tableToko
    Route::get('admin/tableToko', 'TableTokoController@tampilTableToko')->name('tableToko');
    //tableUser
    Route::get('admin/tableUser', 'TableUserController@tampilTableUser')->name('tableUser');
    //tableSubscribe
    Route::get('admin/tableSubscribe', 'TableSubscribeController@tampilTableSubscribe')->name('tableSubscribe');

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

});
