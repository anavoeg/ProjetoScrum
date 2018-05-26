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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','PagesController@home');

Route::get('/faleconosco', 'PagesController@faleconosco');

Route::get('/form_usuario', 'PagesController@form_usuario');

Route::get('/feminino', 'PagesController@feminino');

Route::get('/masculino', 'PagesController@masculino');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
