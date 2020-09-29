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

Route::get('/','InicioController@mostrar');
Route::get('/acerca','AcercaController@mostrar');
Route::get('/telerehab','TeleController@mostrar');
Route::get('/fisioterapia','FisioController@mostrar');
Route::get('/cuello','CuelloController@mostrar');
Route::get('/espalda','EspaldaController@mostrar');
Route::get('/rodilla','RodillaController@mostrar');
Route::get('/deportivas','DeportivasController@mostrar');
Route::get('/contacto','ContactoController@mostrar');
Route::get('/contactanos','ContactanosController@mostrar');

Route::get('/home','HomeController@mostrar');
Route::get('/about','AboutController@mostrar');
Route::get('/nace','NaceController@mostrar');
Route::get('/born','BornController@mostrar');
Route::get('/tele','TeleEnController@mostrar');
Route::get('/physio','PhysioController@mostrar');
Route::get('/neck','NeckController@mostrar');
Route::get('/back','BackController@mostrar');
Route::get('/knee','KneeController@mostrar');
Route::get('/sports','SportsController@mostrar');
Route::get('/contact','ContactController@mostrar');
Route::get('/contact_us','ContactusController@mostrar');


Route::get('/ks-admin',function () {
    return view('ksadmin.panel');
});
Route::get('/ks-admin/superior','KSAdminController@GetSuperior');
Route::get('/ks-admin/sliders','KSAdminController@GetSliders');
Route::get('/ks-admin/secciondos','KSAdminController@GetSeccionDos');
Route::get('/ks-admin/secciontres','KSAdminController@GetSeccionTres');
Route::get('/ks-admin/seccioncuatro','KSAdminController@GetSeccionCuatro');

