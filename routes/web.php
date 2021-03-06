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

Route::redirect('/', '/login');
Auth::routes();

Route::get('/home', "HomeController@index")->name('home');
Route::resource('carreteras',"CarreteraController");
Route::resource('comunidades',"ComunidadesController");
Route::resource('tramos',"TramoController");
Route::resource('tramo_comunidades',"TramoComunidadController");