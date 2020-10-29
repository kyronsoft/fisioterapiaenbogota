<?php

namespace App\Http\Controllers;

use App\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categorias::all();

        return view('ks-admin.blog.categorias', array("categorias" => $categorias));
    }

    public function cargar()
    {
        $categorias = Categorias::where('idioma', '=', 'ES')->get();

        return json_encode($categorias, true);
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
        $data = array(
            "titulo" => $request->input('titulo_categoria'),
            "descripcion" => $request->input('descripcion'),
            "p_claves" => $request->input("palabras_clave")
        );

        $categoria = new Categorias();
        $categoria->titulo_categoria = $data["titulo"];
        $categoria->descripcion_categoria = $data["descripcion"];
        $categoria->p_claves_categoria = $data["p_claves"];
        $categoria->save();

        return 'Categoria insertada!';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = array(
            "titulo" => $request->input('titulo_categoria'),
            "descripcion" => $request->input('descripcion'),
            "p_claves" => $request->input("palabras_clave")
        );

        $actualizar = Categorias::find($id);
        $actualizar->titulo_categoria = $data["titulo"];
        $actualizar->descripcion_categoria = $data["descripcion"];
        $actualizar->p_claves_categoria = $data["p_claves"];
        $actualizar->update();

        return 'Categoria actualizada!';
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
        $categoria = new Categorias;
        $eliminar = Categorias::find($id);
        $eliminar->delete();

        return 'Categoria eliminada!';
    }
}
