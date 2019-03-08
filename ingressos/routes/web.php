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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','EventosController@index');

Route::get('/eventos/{id}', ['uses' => 'EventosController@showDetails']);

Route::get('/ingressos/comprar/{id_evento}', ['uses' => 'IngressosController@comprar']);


Route::post('/ingressos/confirmarCompra','IngressosController@confirmarCompra');
