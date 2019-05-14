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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',['as'=>'login','uses'=>'LoginController@index']);
Route::get('/logout',['as'=>'logout','uses'=>'LoginController@sair']);
Route::post('/login/entrar',['as'=>'login.entrar','uses'=>'LoginController@entrar']);
