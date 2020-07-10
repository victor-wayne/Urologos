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

Route::get('/', [
    'as' => 'home',
    'uses' => 'UrologosController@index'
]);


Route::get('/nosotros', [
    'as' => 'nosotros',
    'uses' => 'NosotrosController@index'
]);

Route::get('/staff-medico', [
    'as' => 'staff',
    'uses' => 'StaffController@index'
]);

Route::get('/nuestros-servicios', [
    'as' => 'servicios',
    'uses' => 'ServiciosController@index'
]);