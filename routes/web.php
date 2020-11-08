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

Route::get('/', 'WebsiteController@index');
Route::get('/en', 'WebsiteController@index_en');
Route::get('/acerca', 'AcercaController@index');
Route::get('/about', 'AcercaController@index_en');
Route::get('/nace', 'NaceController@index');
Route::get('/born', 'NaceController@index_en');

Route::get('/telerehab', 'TelerehabController@index');
Route::get('/telerehabilitation', 'TelerehabController@index_en');
Route::get('/fisio', 'FisioteraController@index');
Route::get('/physio', 'FisioteraController@index_en');
Route::get('/cuello', 'CuelloController@index');
Route::get('/neck', 'CuelloController@index_en');
Route::get('/espalda', 'EspaldaController@index');
Route::get('/back', 'EspaldaController@index_en');
Route::get('/rodilla', 'RodillaController@index');
Route::get('/knee', 'RodillaController@index_en');
Route::get('/deportivas', 'DeportivasController@index');
Route::get('/sports', 'DeportivasController@index_en');
Route::get('/screening_es', 'ScreeningController@index');
Route::get('/screening', 'ScreeningController@index_en');
Route::get('/documentos', 'DocumentosController@index');
Route::get('/documents', 'DocumentosController@index_en');
Route::get('/contacto', 'ContactoController@index');
Route::get('/contact', 'ContactoController@index_en');
Route::get('/contactanos', 'ContactanosController@index');
Route::get('/contact_us', 'ContactanosController@index_en');

Route::post('/requisitos', 'DocumentosController@verificar');
Route::post('/request', 'DocumentosController@verificar_en');

Route::get('/descargar_cuello', 'DescargarFolletoController@cuello');
Route::get('/descargar_espalda', 'DescargarFolletoController@espalda');
Route::get('/descargar_rodilla', 'DescargarFolletoController@rodilla');
Route::get('/descargar_deportivas', 'DescargarFolletoController@deportivas');
Route::get('/download_neck', 'DescargarFolletoController@cuello_en');
Route::get('/download_back', 'DescargarFolletoController@espalda_en');
Route::get('/download_knee', 'DescargarFolletoController@rodilla_en');
Route::get('/download_sports', 'DescargarFolletoController@deportivas_en');

Route::post('/preguntas', 'PreguntasController@preguntas');
Route::post('/questions', 'PreguntasController@preguntas_en');

Route::post('sendbasicemail', 'MailController@basic_email');
Route::post('sendbasicemail_en', 'MailController@basic_email_en');

Auth::routes();

Route::get('/ksadmin', 'HomeController@index')->name('ksadmin');
Route::resource('/ksadmin/inicio/header', 'HeaderController');
Route::resource('/ksadmin/inicio/seccion1', 'InicioSeccion1Controller');
Route::resource('/ksadmin/inicio/seccion2', 'InicioSeccion2Controller');
Route::resource('/ksadmin/inicio/seccion3', 'InicioSeccion3Controller');
Route::resource('/ksadmin/inicio/seccion4', 'InicioSeccion4Controller');
Route::resource('/ksadmin/inicio/seccion5', 'InicioSeccion5Controller');
Route::resource('/ksadmin/inicio/seccion6', 'InicioSeccion6Controller');
Route::resource('/ksadmin/inicio/seccion8', 'InicioSeccion8Controller');
Route::resource('/ksadmin/inicio/seccion9', 'InicioSeccion9Controller');
Route::resource('/ksadmin/inicio/seccion10', 'InicioSeccion10Controller');

Route::resource('/ksadmin/acerca', 'KSAcercaController');
Route::resource('/ksadmin/nace', 'KSNaceController');

Route::resource('/ksadmin/telerehab', 'KSTelerehabController');
Route::resource('/ksadmin/fisio', 'KSFisioController');
Route::resource('/ksadmin/cuello', 'KSCuelloController');
Route::resource('/ksadmin/espalda', 'KSEspaldaController');
Route::resource('/ksadmin/rodilla', 'KSRodillaController');
Route::resource('/ksadmin/deportivas', 'KSDeportivasController');
Route::resource('/ksadmin/screening', 'KSScreeningController');

Route::get('/ksadmin/blog/categorias', 'CategoriasController@index');
Route::get('/ksadmin/blog/categorias/tabla', 'CategoriasController@cargar');
Route::post('/ksadmin/blog/categorias', 'CategoriasController@store');
Route::post('/ksadmin/blog/categorias/{id}/edit', 'CategoriasController@edit');
Route::post('/ksadmin/blog/categorias/{id}', 'CategoriasController@destroy');
Route::get('/ksadmin/capacitacion', function () {
    return view('/ksadmin.capacitacion');
});
Route::resource('/ksadmin/cambiarpwd', 'UtilidadesController');

Route::get('/ksadmin/blog/articulos', 'ArticulosController@index');
Route::get('/ksadmin/blog/articulos/{id}/editar', 'ArticulosController@mostrar_articulo');
Route::get('/ksadmin/blog/articulos/editar/{id}', 'ArticulosController@show');
Route::get('/ksadmin/blog/articulos/nuevo', 'ArticulosController@nuevo');
Route::post('/ksadmin/blog/articulos', 'ArticulosController@store');
Route::post('/ksadmin/blog/articulos/{id}/edit', 'ArticulosController@edit');
Route::post('/ksadmin/blog/articulos/{id}/actualizar', 'ArticulosController@update');
Route::get('/ksadmin/blog/articulos/tabla', 'ArticulosController@cargar');
Route::post('/ksadmin/blog/articulos/{id}', 'ArticulosController@destroy');

Route::get('/ksadmin/blog/articulos_en', 'ArticulosController@index_en');
Route::get('/ksadmin/blog/articulos_en/{id}/editar', 'ArticulosController@mostrar_articulo');
Route::get('/ksadmin/blog/articulos_en/editar/{id}', 'ArticulosController@show_en');
Route::get('/ksadmin/blog/articulos_en/nuevo', 'ArticulosController@nuevo_en');
Route::post('/ksadmin/blog/articulos_en', 'ArticulosController@store_en');
Route::post('/ksadmin/blog/articulos_en/{id}/edit', 'ArticulosController@edit_en');
Route::post('/ksadmin/blog/articulos_en/{id}/actualizar', 'ArticulosController@update_en');
Route::get('/ksadmin/blog/articulos_en/tabla', 'ArticulosController@cargar_en');
Route::post('/ksadmin/blog/articulos_en/{id}', 'ArticulosController@destroy_en');

Route::get('/ksadmin/blog/opiniones', 'OpinionesController@index');
Route::get('/ksadmin/blog/opiniones/tabla', 'OpinionesController@cargar');
Route::post('/ksadmin/blog/opiniones/autorizar/{id}', 'OpinionesController@autorizar');
Route::post('/ksadmin/blog/opiniones/respuesta/{id}/edit', 'OpinionesController@update');

Route::get('/ksadmin/blog/opiniones_en', 'OpinionesController@index_en');
Route::get('/ksadmin/blog/opiniones_en/tabla', 'OpinionesController@cargar_en');
Route::post('/ksadmin/blog/opiniones_en/autorizar/{id}', 'OpinionesController@autorizar_en');
Route::post('/ksadmin/blog/opiniones_en/respuesta/{id}/edit', 'OpinionesController@update_en');

Route::resource('/blog', 'BlogController');
Route::get('/blog_en', 'BlogController@index_en');
Route::get('/blog/articulo/comentarios/{id}', 'BlogController@comentarios');
Route::post('/blog/articulo/comentario/{id}', 'BlogController@store');
Route::get('/blog/articulo/categoria', 'BlogController@categoria');
Route::get('/blog/articulo/buscar', 'BlogController@busqueda');
Route::get('/blog/articulo/{id}', 'BlogController@show');
Route::get('/blog/articulo_en/{id}', 'BlogController@show_en');

Route::post('agenda_gratis', 'MailController@basic_email_agenda');
Route::post('summer-uploads','CargarImagen@summerUploads');

Route::get('viewmail', function () {
    return view('templatemail');
});
