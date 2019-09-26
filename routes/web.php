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



Route::get('/','HomeController@index');
Route::post('/','HomeController@savemessage');

/*Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();

});*/

Route::get('/language/{lang}','HomeController@lan');

Route::get('detail/{id}','HomeController@tempdetail');
Route::get('gallery/{id}','HomeController@gallery');




Route::get('admin','AdminController@indexx');
Route::get('admin/templates','AdminController@list');



Route::get('/admin/models', 'AdminController@index' ) ;
Route::get('/admin/prod/add', 'AdminController@create' ) ;
Route::get('/admin/model/add', 'AdminController@createmodel' ) ;

Route::post('/admin/prod/save', 'AdminController@store' ) ;
Route::get('/admin/prod/show/{id}', 'AdminController@show' ) ;
Route::get('/admin/prod/edit/{id}', 'AdminController@edit' ) ;
Route::post('/admin/prod/update/{id}', 'AdminController@update' ) ;
Route::get('/admin/prod/delete/{id}', 'AdminController@destroy' ) ;

Route::get('/admin/prod/gallery/{id}', 'AdminController@galleryform' ) ;
Route::post('/admin/prod/gallery/{id}', 'AdminController@galleryadd' ) ;
Route::get('/admin/prod/gallerydel/{id}', 'AdminController@gallerydelete' ) ;



Route::get('/admin/login', 'LoginController@index' )->name('admin.login');
Route::post('/admin/login', 'LoginController@login' )->name('admin.login');
Route::get('/admin/logout', 'LoginController@logout' )->name('admin.logout');
Route::get('/admin/register', 'LoginController@register_form' )->name('admin.register');
Route::post('/admin/register', 'LoginController@register_save' )->name('admin.register');



Route::get('/admin/messages', 'AdminController@message' ) ;
Route::get('/admin/messag/edit/{id}', 'AdminController@messageedit' ) ;
Route::post('/admin/messag/edit/{id}', 'AdminController@messageupdate' ) ;
Route::get('/admin/messag/delete/{id}', 'AdminController@messagedel' ) ;