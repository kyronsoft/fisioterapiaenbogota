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

/* Rutas para el website en Español */

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
Route::get('/descargar_espalda', 'DescargarEspaldaController@index');
Route::get('/descargar_rodilla', 'DescargarRodillaController@index');
Route::get('/descargar_deportivas', 'DescargarDeportivasController@index');
Route::get('/contacto', 'ContactoController@index');
Route::get('/contactanos', 'ContactanosController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/blog/busqueda', 'BlogController@busqueda');
Route::get('/blog/megusta/{id}', 'BlogController@megusta');
Route::get('/blog/vistas/{id}', 'BlogController@addvista');
Route::get('/blog/vervistas/{id}', 'BlogController@vistas');
Route::get('/articulo/{id}', 'BlogController@show');
Route::put('/articulo/{id}', 'BlogController@update');
Route::post('/articulo', 'BlogController@store');
Route::post('/folletos', 'FolletosController@store');
Route::get('/documentos', 'DocumentosController@index');
Route::post('/requisitos', 'DocumentosController@verificar');
Route::post('/preguntas', 'PreguntasController@store');
Route::get('/screening', 'ScreeningController@index');
Route::get('/screening_en', 'ScreeningController@busqueda');
Route::get('/tiendavirtual', function () {
    return view('website.paginas.proximamente');
});


/* Rutas para el website en Inglés */
Route::get('/init', 'TextosEnController@index');
Route::get('/about', 'AcercaEnController@index');
Route::get('/born', 'NaceEnController@index');
Route::get('/telerehabilitation', 'TelerEnController@index');
Route::get('/physiotherapy', 'FisioEnController@index');
Route::get('/neck', 'CuelloEnController@index');
Route::get('/back', 'EspaldaEnController@index');
Route::get('/knee', 'RodillaEnController@index');
Route::get('/sports_injuries', 'DeportivasEnController@index');
Route::get('/download_neck', 'DescargarEnCuelloController@index');
Route::get('/download_back', 'DescargarEnEspaldaController@index');
Route::get('/download_knee', 'DescargarEnRodillaController@index');
Route::get('/download_sports', 'DescargarEnDeportivasController@index');
Route::get('/contact', 'ContactoEnController@index');
Route::get('/contact_us', 'ContactanosEnController@index');
Route::get('/blog_en', 'BlogEnController@index');
Route::get('/blog_en/likeit/{id}', 'BlogEnController@megusta');
Route::get('/blog_en/views/{id}', 'BlogEnController@addvista');
Route::get('/articulo_en/{id}', 'BlogEnController@show');
Route::put('/articulo_en/{id}', 'BlogEnController@update');
Route::post('/articulo_en', 'BlogEnController@store');
Route::get('/documents', 'DocumentosEnController@index');
Route::post('/requeriments', 'DocumentosEnController@verificar');
Route::post('/questions', 'PreguntasEnController@store');
Route::get('/shoponline', function () {
    return view('website.paginas.comingsoon');
});


/* Rutas para el Administrador del website y Blog */
Route::get('/ks-admin', 'KSAdminController@showmain');
Route::get('/ks-admin/barrasup', 'BarraSupController@index');
Route::put('/ks-admin/barrasup/{id}', 'BarraSupController@update');
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
Route::resource('/ks-admin/clientes', 'ClientesController');
Route::get('/ks-admin/clave_documentos', 'ClaveDocsController@index');
Route::put('/ks-admin/clave_documentos/{id}', 'ClaveDocsController@update');
Route::get('/ks-admin/talleres', 'TalleresController@index');
Route::put('/ks-admin/talleres/{id}', 'TalleresController@update');
Route::resource('/ks-admin/inicio/footer', 'FooterController');
Route::resource('/ks-admin/screening', 'KSScreeningController');

Route::resource('/ks-admin/blog/entrada', 'EntradaBlogController');
Route::resource('/ks-admin/blog/entrada_en', 'EntradaEnBlogController');

Route::post('/ks-admin/blog/detalle/{id}', 'ListaEntradasController@store');
Route::get('/ks-admin/blog/lista_entradas', 'ListaEntradasController@index');
Route::get('/ks-admin/blog/comentarios', 'ComentariosController@index');
Route::put('/ks-admin/blog/comentarios/{id}', 'ComentariosController@update');
Route::get('/ks-admin/blog/categorias', 'CategoriasController@index');
Route::get('/ks-admin/blog/categorias/{id}/edit', 'CategoriasController@show');
Route::put('/ks-admin/blog/categorias/{id}', 'CategoriasController@update');
Route::post('/ks-admin/blog/categorias', 'CategoriasController@store');
Route::delete('/ks-admin/blog/categorias/{id}', 'CategoriasController@destroy');

Route::get('/ks-admin/blog/categorias_en', 'CategoriasEnController@index');
Route::get('/ks-admin/blog/categorias_en/{id}/edit', 'CategoriasEnController@show');
Route::put('/ks-admin/blog/categorias_en/{id}', 'CategoriasEnController@update');
Route::post('/ks-admin/blog/categorias_en', 'CategoriasEnController@store');
Route::delete('/ks-admin/blog/categorias_en/{id}', 'CategoriasEnController@destroy');

Route::post('/ks-admin/blog/detalle_en/{id}', 'ListaEntradasEnController@store');
Route::get('/ks-admin/blog/lista_entradas_en', 'ListaEntradasEnController@index');
Route::get('/ks-admin/blog/comentarios_en', 'ComentariosEnController@index');
Route::put('/ks-admin/blog/comentarios_en/{id}', 'ComentariosEnController@update');
Route::resource('/ks-admin/blog/categorias_en', 'CategoriasEnController');

Route::post('sendbasicemail', 'MailController@basic_email');
Route::post('sendbasicemail_en', 'MailController@basic_email_en');
Route::post('agenda_gratis', 'MailController@basic_email_agenda');
Route::post('book_free', 'MailController@basic_email_agenda_en');

Auth::routes();
