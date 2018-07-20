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
    return view('auth.login');
});



//icono home pagina principal
Route::get('/home', 'HomeController@index')->name('home');


///ruta defecto laravel logueo
Auth::routes();

///recurso api controlador User
Route::resource('users', 'UserController');
Route::resource('ofertas', 'OfertaController');

//tasa de cambio
Route::get('/tasaCambios', 'TasaCambioController@index')->name('tasaCambios');
Route::get('/tasaCambios/{tasaCambio}/edit', 'TasaCambioController@edit')->name('tasaCambios.edit');
Route::put('/tasaCambios/{tasaCambio}', 'TasaCambioController@update')->name('tasaCambios.update');

//tipo de vendedores
Route::resource('tipovendedores', 'TipovendedoresController');

//tipo de vendedores
Route::resource('productos', 'ProductoController');