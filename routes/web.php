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

Route::get('/','PaginaInicioController@mostrar_es');
Route::get('/home','PaginaInicioController@mostrar_en');


Route::get('/ks-admin',function () {
    return view('ksadmin.panel');
});
Route::get('/ks-admin/superior','KSAdminController@GetSuperior');
Route::get('/ks-admin/sliders','KSAdminController@GetSliders');
Route::get('/ks-admin/secciondos','KSAdminController@GetSeccionDos');
Route::get('/ks-admin/secciontres','KSAdminController@GetSeccionTres');

