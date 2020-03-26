<?php

use Illuminate\Support\Facades\Route;

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

// Rutas DEPARTAMENTO
Route::get('departamento/buscar', 'departamentoController@index');
Route::post('departamento/buscar', 'departamentoController@show');
Route::get('departamento/nuevo', 'departamentoController@create');
Route::post('departamento/nuevo', 'departamentoController@store');
Route::get('departamento/editar/{id}', 'departamentoController@edit');
Route::post('departamento/actualizar', 'departamentoController@update');
Route::get('departamento/confirma/{id}', 'departamentoController@confirm');
Route::post('departamento/eliminar', 'departamentoController@destroy');
