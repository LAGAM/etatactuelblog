<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','IndexController@index');

/* debut des routes pour la pages static_ */

Route::view('numerisation', 'static_pages/numerisation');
Route::view('formation', 'static_pages.formation');
Route::view('oaw', 'static_pages.oaw');
Route::view('bibliotheque', 'static_pages.bibliotheque');
Route::view('espace_membre', 'static_pages.espace_membre');
Route::view('be', 'static_pages.be');
Route::view('contact', 'static_pages.contact');
Route::view('details', 'full_article');
Route::get('sandra{id}', 'sandraController@lagama')->name('sandra');
Route::view('index', 'IndexController@index');

/* fin des routes pour la pages static_ */

Route::group(['prefix'=>'admin'],function(){
    
    Route::get('/dashboard', 'Admin\DashboardController@dashboard')->name("admin.dashboard")->middleware('auth');
    Route::get('/categorie', 'Admin\CategorieController@getFormCategorie')->name('admin.categorie')->middleware('auth');
    Route::post('/categorie', 'Admin\CategorieController@postFormCategorie')->name('admin.categorie')->middleware('auth');
    Route::get('/article', 'Admin\ArticleController@getFormArticle')->name('admin.article')->middleware('auth');
    Route::post('/article', 'Admin\ArticleController@postFormArticle')->name('admin.article')->middleware('auth');
    Route::get('/welcome' , function () { return view('welcome');})->name('welcome');
    

});

Auth::routes();


