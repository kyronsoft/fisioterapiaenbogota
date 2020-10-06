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
Route::get('/telerehabilitacion', 'TelerController@index');
Route::get('/fisioterapia', 'FisioController@index');
Route::get('/cuello', 'CuelloController@index');
Route::get('/espalda', 'EspaldaController@index');
Route::get('/rodilla', 'RodillaController@index');
Route::get('/deportivas', 'DeportivasController@index');
Route::get('/descargar_cuello', 'DescargarCuelloController@index');
Route::get('/contacto', 'ContactoController@index');
Route::get('/contactanos', 'ContactanosController@index');

Route::get('/init', 'TextosEnController@index');
Route::get('/about', 'AcercaEnController@index');
Route::get('/born', 'NaceEnController@index');
Route::get('/telerehabilitation', 'TelerEnController@index');
Route::get('/physiotherapy', 'FisioEnController@index');
Route::get('/neck', 'CuelloEnController@index');
Route::get('/back', 'EspaldaEnController@index');
Route::get('/knee', 'RodillaEnController@index');
Route::get('/sports_injuries', 'DeportivasEnController@index');

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
Route::resource('/ks-admin/telerehabilitacion', 'KSTelerController');
Route::resource('/ks-admin/fisioterapia', 'KSFisioController');
Route::resource('/ks-admin/cuello', 'KSCuelloController');
Route::resource('/ks-admin/espalda', 'KSEspaldaController');
Route::resource('/ks-admin/rodilla', 'KSRodillaController');
Route::resource('/ks-admin/deportivas', 'KSDeportivasController');
Route::resource('/ks-admin/inicio/footer', 'FooterController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ckeditor', function () {
    return view('blog.ckeditor');
});
Route::get('/blog', 'BlogController@index');
Route::get('/blog/entrada', 'EntradaBlogController@index');
Route::get('/articulo/{id}', 'BlogController@show');
Route::post('/articulo', 'BlogController@store');
