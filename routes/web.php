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

//Quando acessar a home "/" vai acessar a action index
Route::get('/', 'ClientController@index');
//Quando acessar /create_client acessa a action create
Route::get('/create_client', 'ClientController@create');
//Quando salvar o formulário de criar cliente
Route::post('/create_client', 'ClientController@store');
//
Route::get('/edit_client/{id}', 'ClientController@edit');
//Put é o metodo de edição do laravel
Route::put('/edit_client/{id}', 'ClientController@update');
//Deletar
Route::delete('/delete_client/{id}', 'ClientController@destroy');

