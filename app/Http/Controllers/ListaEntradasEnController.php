<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Articulos;

class ListaEntradasEnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = DB::table('articulos')->join('categorias', 'articulos.id_cat', '=', 'categorias.id_categoria')->where('idioma', '=', 'EN')
            ->select('articulos.*', 'categorias.titulo_categoria')->orderBy('fecha_articulo', 'desc')->paginate(10);

        return view("ksadmin.blog.listaentradas_en", array(
            "articulos" => $articulos
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
        $detalle = Articulos::find($request->input("id_articulo"));
        $p_claves = explode(",", $request->input("p_claves_en"));


        $datos = array(
            "id_articulo" => $request->input("id_articulo"),
            "id_cat" => $request->input("categoria"),
            "titulo_en" => $request->input("titulo_en"),
            "descripcion_en" => $request->input("descripcion_en"),
            "p_claves_en" => json_encode($p_claves),
            "contenido_en" => $request->input("editor_content")
        );


        $detalle->id_cat = $datos["id_cat"];
        $detalle->titulo_en = $datos["titulo_en"];
        $detalle->descripcion_en = $datos["descripcion_en"];
        $detalle->p_claves_en = $datos["p_claves_en"];
        $detalle->contenido_en = $datos["contenido_en"];

        $detalle->save();
        $url = "/ks-admin/blog/lista_entradas_en";

        
        return redirect($url)->with("status", "Datos guardados!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entrada = DB::table('articulos')->where('id_articulo', '=', $id)->get();
        $categorias = DB::table('categorias')->get();

        return view('ksadmin.blog.detalle_en', array('entrada' => $entrada, 'categorias' => $categorias));
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
        //
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
}
