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

Route::get('/','IndexController@index')->name('index');

/* debut des routes pour la pages static_ */

Route::view('numerisation', 'static_pages/numerisation')->name('numerisation');
Route::view('formation', 'static_pages.formation')->name('formation');
Route::view('oaw', 'static_pages.oaw')->name('oaw');
Route::view('bibliotheque', 'static_pages.bibliotheque')->name('bibliotheque');
Route::view('espace_membre', 'static_pages.espace_membre')->name('espace_membre');
Route::view('be', 'static_pages.be')->name('be');
Route::view('contact', 'static_pages.contact')->name('contact');
Route::view('details', 'full_article')->name('detail');

/* fin des routes pour la pages static_ */


Route::get('voireplus{id}', 'voireplusController@voireplus')->name('voireplus');
Route::get('index', 'IndexController@index')->name('index');
Route::post('comment', 'CommentController@postComment')->name('comment'); 
Route::get('articleListeTag{tag}','IndexController@indexTag')->name('tagArticleListe');
Route::get('articleListeCategorie{id}','IndexController@indexCategorie')->name('categorieListeArticle');



Route::group(['prefix'=>'admin'],function(){

    Route::get('/dashboard', 'Admin\DashboardController@dashboard')->name("admin.dashboard")->middleware('auth');//dashbord

    //parametre

    Route::get('/setting', 'Admin\SettingController@showSetting')->name('admin.setting')->middleware('auth');
    Route::post('/setting', 'Admin\SettingController@updateSetting')->name('admin.setting')->middleware('auth');

    // les articles
    Route::get('/article', 'Admin\ArticleController@getFormArticle')->name('admin.article')->middleware('auth');
    Route::post('/article', 'Admin\ArticleController@postFormArticle')->name('admin.article')->middleware('auth');
    Route::get('/article/{id}/editArticle', 'Admin\ArticleController@editArticleForm')->name('admin.editArticle')->middleware('auth');
    Route::get('/article/allArticle', 'Admin\ArticleController@showAllArticle')->name('admin.allArticle')->middleware('auth');

    //categories
    Route::get('/categorie', 'Admin\CategorieController@getFormCategorie')->name('admin.categorie')->middleware('auth');
    Route::post('/categorie', 'Admin\CategorieController@postFormCategorie')->name('admin.categorie')->middleware('auth');

    //commentaires
    Route::get('/comment', 'Admin\CommentController@showComment')->name('admin.comment')->middleware('auth');
    
    
    Route::get('/welcome' , function () { return view('welcome');})->name('welcome');
    

});

Auth::routes();


