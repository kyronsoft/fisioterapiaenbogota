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

Route::get('/', 'TextosEsController@index');
Route::get('/acerca', 'AcercaController@index');
Route::get('/nace', 'NaceController@index');

Route::get('/contacto', 'ContactoController@index');
Route::get('/contactanos', 'ContactanosController@index');

Route::get('/init', 'TextosEnController@index');
Route::get('/about', 'AcercaEnController@index');
Route::get('/born', 'NaceEnController@index');

Route::get('/contact', 'ContactoEnController@index');
Route::get('/contact_us', 'ContactanosEnController@index');

Route::get('/ks-admin', 'KSAdminController@showmain');
Route::get('/barrasup', 'BarraSupController@index');
Route::resource('/ks-admin/barrasup', 'BarraSupController');
Route::resource('/ks-admin/menu', 'MenuController');
Route::resource('/ks-admin/sliders', 'SlidersController');
Route::resource('/ks-admin/inicio/seccion1', 'Seccion1Controller');
Route::resource('/ks-admin/inicio/seccion2', 'Seccion2Controller');
Route::resource('/ks-admin/inicio/seccion3', 'Seccion3Controller');
Route::resource('/ks-admin/inicio/seccion4', 'Seccion4Controller');
Route::resource('/ks-admin/inicio/seccion5', 'Seccion5Controller');
Route::resource('/ks-admin/inicio/seccion6', 'Seccion6Controller');

Route::resource('/ks-admin/inicio/seccion7', 'Seccion7Controller');
Route::resource('/ks-admin/inicio/seccion8', 'Seccion8Controller');
Route::resource('/ks-admin/inicio/seccion9', 'Seccion9Controller');
Route::resource('/ks-admin/inicio/seccion10', 'Seccion10Controller');
Route::resource('/ks-admin/inicio/seccion11', 'Seccion11Controller');
Route::resource('/ks-admin/inicio/seccion12', 'Seccion12Controller');

Route::resource('/ks-admin/nace', 'KSNaceController');
Route::resource('/ks-admin/acerca', 'KSAcercaController');
Route::resource('/ks-admin/inicio/footer', 'FooterController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ckeditor', function () {
    return view('blog.ckeditor');
});
Route::resource('/blog', 'BlogController');