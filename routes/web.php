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
    return view('plantilla');
});
Route::get('/acerca', function () {
    return view('paginas.acerca');
});
Route::get('/nace', function () {
    return view('paginas.nace');
});
Route::get('/telerehab', function () {
    return view('paginas.telerehabilitacion');
});
Route::get('/cuello', function () {
    return view('paginas.cuello');
});
Route::get('/espalda', function () {
    return view('paginas.espalda');
});
Route::get('/rodilla', function () {
    return view('paginas.rodilla');
});
Route::get('/deportivas', function () {
    return view('paginas.deportivas');
});
Route::get('/contacto', function () {
    return view('paginas.contacto');
});
Route::get('/contactanos', function () {
    return view('paginas.contactanos');
});

Route::get('/ks-admin', function () {
    return view('ksadmin.panel');
});

Route::get('/tiendaonline', function () {
    return view('tiendaonline.inicio');
});
