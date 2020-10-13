<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Opiniones;
use App\Articulos;

class BlogEnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = DB::table('articulos')->where('idioma', '=', 'EN')->orderBy('id_articulo', 'desc')->paginate(5);
        $destacados = DB::table('articulos')->where('idioma', '=', 'EN')->orderBy('vistas_articulo', 'desc')
            ->select('articulos.id_articulo', 'articulos.portada_articulo', 'articulos.titulo_en', 'articulos.descripcion_en')->get();
        $blog = DB::table('blog')->get();

        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $blinfo = DB::table('website_info')->get();
        $servicios = DB::table('website_servicios')->get();
        $footer = DB::table('website_footer')->get();

        return view("blog.portada_en", array(
            "blog" => $blog,
            "articulos" => $articulos,
            "destacados" => $destacados,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "inicioseccion8" => $blinfo,
            "inicioseccion9" => $servicios,
            "footer" => $footer,
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = array(
            "id_art" => $request->input("id_comentario"),
            "nombre_en" => $request->input("nombre_en"),
            "correo_en" => $request->input("correo_en"),
            "contenido_en" => $request->input("contenido_en")
        );

        $comentario = new Opiniones();
        $comentario->nombre_en = $datos["nombre_en"];
        $comentario->correo_en = $datos["correo_en"];
        $comentario->contenido_en = $datos["contenido_en"];
        $comentario->id_art = $datos["id_art"];

        $comentario->save();
        $url = "/articulo/" . $datos["id_art"];

        return redirect($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articulo = DB::table('articulos')->where('id_articulo', '=', $id)->get();

        $categoria = DB::table('categorias')->join('articulos', 'categorias.id_categoria', '=', 'articulos.id_cat')->select('categorias.*')->get();
        $opiniones = DB::table('opiniones')->join('articulos', 'opiniones.id_art', '=', 'articulos.id_articulo')->select('opiniones.*')->where('opiniones.id_art', '=', $id)->get();
        $administrador = DB::table('users')->join('opiniones', 'opiniones.id_adm', '=', 'users.id')->where([['opiniones.aprobacion_en', '=', 1], ['opiniones.id_art', '=', $id]])->select('opiniones.*', 'users.*')->get();
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $footer = DB::table('website_footer')->get();

        return view('blog.articulo_en', array(
            'articulo' => $articulo,
            "id_articulo" => $id,
            "categoria" => $categoria,
            "opiniones" => $opiniones,
            "administrador" => $administrador,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "footer" => $footer
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $megusta = DB::table('articulos')->where('id_articulo', '=', $id)->select('megusta_en')->get();

        $cantidad = $megusta[0]->megusta;
        $cantidad++;
        $datos = array("megusta_en" => $cantidad);

        Articulos::where('id_articulo', $id)->update($datos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function megusta($id)
    {
        $cantidad = DB::table('articulos')->where('id_articulo', '=', $id)->select('megusta_en')->get();

        return $cantidad[0]->megusta;
    }

    public function vistas($id)
    {
        $cantidad = DB::table('articulos')->where('id_articulo', '=', $id)->select('vistas_en')->get();

        return $cantidad[0]->vistas_articulo;
    }

    public function addvista($id)
    {
        $vista = DB::table('articulos')->where('id_articulo', '=', $id)->select('vistas_en')->get();

        $cantidad = $vista[0]->vistas_articulo;
        $cantidad++;
        $datos = array("vistas_en" => $cantidad);

        Articulos::where('id_articulo', $id)->update($datos);
    }
}
