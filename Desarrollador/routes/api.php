<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

///categorias
Route::get('/categoria', 'App\Http\Controllers\CategoriaController@index');

Route::put('/categoria/actualizar', 'App\Http\Controllers\CategoriaController@update');

Route::post('/categoria/guardar', 'App\Http\Controllers\CategoriaController@store');

Route::delete('/categoria/borrar/{id}', 'App\Http\Controllers\CategoriaController@destroy');

Route::get('/categoria/buscar', 'App\Http\Controllers\CategoriaController@show');

//departamentos
Route::get('/departamento', 'App\Http\Controllers\DepartamentoController@index');

Route::put('/departamento/actualizar', 'App\Http\Controllers\DepartamentoController@update');

Route::post('/departamento/guardar', 'App\Http\Controllers\DepartamentoController@store');

Route::delete('/departamento/borrar/{id}', 'App\Http\Controllers\DepartamentoController@destroy');

Route::get('/departamento/buscar', 'App\Http\Controllers\DepartamentoController@show');
//trabajadores


Route::get('/trabajador', 'App\Http\Controllers\TrabajadorController@index');

Route::put('/trabajador/actualizar', 'App\Http\Controllers\TrabajadorController@update');

Route::post('/trabajador/guardar', 'App\Http\Controllers\TrabajadorController@store');

Route::delete('/trabajador/borrar/{id}', 'App\Http\Controllers\TrabajadorController@destroy');

Route::get('/trabajador/buscar', 'App\Http\Controllers\TrabajadorController@show');