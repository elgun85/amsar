<?php

use Illuminate\Support\Facades\Route;

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

/*
|--------------------------------------------------------------------------
| backend Routes
|--------------------------------------------------------------------------
|

*/
route::get('aktiv-deyil',function(){
    return view('front.offline');
});


Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function ()
{
    Route::get('giris','Back\AuthController@login')->name('login');
    Route::post('giris','Back\AuthController@loginPost')->name('login.post');
});
//  Route::get('admin/giris','Back\AuthController@login')->name('admin.login');
// Route::post('admin/giris','Back\AuthController@loginPost')->name('admin.login.post');

Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function ()
{
    Route::get('panel','Back\Dashboard@index')->name('dashboard');
    //article route
    Route::resource('meqale','Back\ArticleController');
    Route::get('/switch_a','Back\ArticleController@switch')->name('switch_a');
    Route::get('/deletearticle/{id}','Back\ArticleController@delete')->name('delete.article');
    Route::get('/hard_delete/{id}','Back\ArticleController@hardDelete')->name('harddelete.article');
    Route::get('/recovery_article/{id}','Back\ArticleController@recovery_delete')->name('recovery.article');
    Route::get('/article/trashed','Back\ArticleController@trashed')->name('trashed.article');

    // Kateqoriya route
    Route::get('category', 'Back\CategoryController@index')->name('category.index');
    Route::post('category/create', 'Back\CategoryController@create')->name('category.create');
    Route::post('category/update', 'Back\CategoryController@update')->name('category.update');
    Route::post('category/delete', 'Back\CategoryController@delete')->name('category.delete');




    Route::get('category/status', 'Back\CategoryController@switch')->name('category.switch');
    Route::get('category/getData', 'Back\CategoryController@getData')->name('category.getdata');

//pages route
    Route::get('page', 'Back\PageController@index')->name('page.index');
    Route::get('/switch','Back\PageController@switch')->name('switch');
    Route::get('page/create', 'Back\PageController@create')->name('page.create');
    Route::post('page/create', 'Back\PageController@createMenu')->name('page.create.menu');
    Route::get('page/edit/{id}', 'Back\PageController@edit')->name('page.edit');
    Route::post('page/edit/{id}', 'Back\PageController@editPage')->name('page.edit.page');
    Route::get('page/delete/{id}', 'Back\PageController@delete')->name('page.delete');
    Route::get('page/siralama', 'Back\PageController@orders')->name('page.orders');

    //AYARLAR ROOT
    Route::get('config', 'Back\ConfigController@index')->name('config.index');
    Route::post('/config/update', 'Back\ConfigController@update')->name('config.update');


    Route::get('cixis','Back\AuthController@logout')->name('logout');
});



/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
|

*/


Route::get('/','Front\Homepage@index')->name('homepage');
Route::get('/contact','Front\Homepage@contact')->name('contact');
Route::post('/contact','Front\Homepage@contact_post')->name('contact.post');
Route::get('/{sayfalar}','Front\Homepage@page')->name('page');
Route::get('/story/{Slug}','Front\Homepage@category')->name('category');
Route::get('/{category}/{slug}','Front\Homepage@single')->name('single');




