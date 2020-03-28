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

// Rutas ESTADO CIVIL
Route::get('estadocivil/buscar', 'estadocivilController@index');
Route::post('estadocivil/buscar', 'estadocivilController@show');
Route::get('estadocivil/nuevo', 'estadocivilController@create');
Route::post('estadocivil/nuevo', 'estadocivilController@store');
Route::get('estadocivil/editar/{id}', 'estadocivilController@edit');
Route::post('estadocivil/actualizar', 'estadocivilController@update');
Route::get('estadocivil/confirma/{id}', 'estadocivilController@confirm');
Route::post('estadocivil/eliminar', 'estadocivilController@destroy');

// Rutas AFP
Route::get('afp/buscar', 'afpController@index');
Route::post('afp/buscar', 'afpController@show');
Route::get('afp/nuevo', 'afpController@create');
Route::post('afp/nuevo', 'afpController@store');
Route::get('afp/editar/{id}', 'afpController@edit');
Route::post('afp/actualizar', 'afpController@update');
Route::get('afp/confirma/{id}', 'afpController@confirm');
Route::post('afp/eliminar', 'afpController@destroy');

// Rutas CENTRO DE SALUD
Route::get('centrosalud/buscar', 'centrosaludController@index');
Route::post('centrosalud/buscar', 'centrosaludController@show');
Route::get('centrosalud/nuevo', 'centrosaludController@create');
Route::post('centrosalud/nuevo', 'centrosaludController@store');
Route::get('centrosalud/editar/{id}', 'centrosaludController@edit');
Route::post('centrosalud/actualizar', 'centrosaludController@update');
Route::get('centrosalud/confirma/{id}', 'centrosaludController@confirm');
Route::post('centrosalud/eliminar', 'centrosaludController@destroy');