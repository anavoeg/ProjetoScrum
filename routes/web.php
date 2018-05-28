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

//navbar header
Route::get('/','PagesController@home');

Route::get('/feminino', 'PagesController@feminino');

Route::get('/masculino', 'PagesController@masculino');

Route::get('/infantil', 'PagesController@infantil');

Route::get('/calcados', 'PagesController@calcados');

Route::get('/login', 'PagesController@login');

Route::get('/cadastro', 'PagesController@cadastro');

Route::get('/downtown', 'PagesController@downtown');

//navbar footer
//-------institucional------------
Route::get('/identidade', 'PagesController@identidade');

//-----------atendimento----------
Route::get('/faleconosco', 'PagesController@faleconosco');

//----------projetos sociais-----------
Route::get('/social', 'PagesController@social');

//----------troco likes--------------------


Route::get('/test', 'PagesController@test');

