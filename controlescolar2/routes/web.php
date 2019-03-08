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

Route::get('/contact.html', function () {
    return view('contact.html');
});


Route::group(['prefix' => 'Usuarios'], function() {
    Route::get('/', 'UsuariosController@index');
    Route::match(['get', 'post'], 'create', 'UsuariosController@create');
    Route::match(['get', 'put'], 'update/{email}', 'UsuariosController@update');
    Route::get('show/{email}', 'UsuariosController@show');
    Route::delete('delete/{id}', 'UsuariosController@destroy');
});
