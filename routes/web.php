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
Route::get('/','PagesController@home')->name("home");

Route::get('/feminino', 'PagesController@feminino')->name("feminino");

Route::get('/masculino', 'PagesController@masculino')->name("masculino");

Route::get('/infantil', 'PagesController@infantil')->name("infantil");

Route::get('/calcados', 'PagesController@calcados')->name("calcados");

Route::get('/outlet', 'PagesController@oulet')->name("outlet");



Route::get('/downtown', 'PagesController@downtown')->name("downtown");

//navbar footer
//-------institucional------------
Route::get('/identidade', 'PagesController@identidade')->name("identidade");

//-----------atendimento----------
Route::get('/faleconosco', 'PagesController@faleconosco')->name("faleconosco");

//----------projetos sociais-----------
Route::get('/social', 'PagesController@social')->name("social");

//----------troco likes--------------------


Route::get('/test', 'PagesController@test');

//===========================================================================

//Rotas relacionadas ao usuário.

//mostra o form login.
Route::get('/login', 'UserController@index')->name("login");


//usuario - login (verificar se dados recebidos corretamente).
    Route::post('/executar_login', 'UserController@executarLoginUsuarios');

//formulario de cadastro de usuario
Route::get('/cadastro', 'UserController@cadastro')->name("cadastro");

//verificar se dados recebidos corretamente
Route::post('/executar_cadastro', 'UserController@executarCadastroUsuarios');

//formulario para recuperação de senha
Route::get('/recuperar', 'UserController@recuperar')->name("recuperar");

//verificar se dados recebidos corretamente
Route::post('/executar_recuperar', 'UserController@executarRecuperarSenha');



