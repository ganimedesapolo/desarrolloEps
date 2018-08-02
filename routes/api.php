<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//list
Route::get('users','UserController@indexApi');

//show
Route::get('user/{id}','UserController@showApi');

//create 
Route::post('user','UserController@storeApi');

//update
Route::put('user','UserController@storeApi');

//delete
Route::delete('user/{id}','UserController@destroyApi');


////ofertas 
Route::get('ofertaLinea/{id}','OfertaController@ofertaLineaApi');

//productos
Route::get('productoLinea/{id}','ProductoController@ProductoLineaApi');

//login
Route::post('loginViaApi','UserController@loginViaApi');
