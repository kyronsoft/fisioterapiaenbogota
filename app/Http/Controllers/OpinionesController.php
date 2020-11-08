<?php

namespace App\Http\Controllers;

use App\Opiniones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OpinionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opiniones = DB::table('opiniones')
            ->join('articulos', 'articulos.id_articulo', '=', 'opiniones.id_art')
            ->where('articulos.idioma', '=', 'ES')
            ->select('opiniones.*', 'articulos.titulo_articulo')->get();

        return view('ks-admin.blog.opiniones', array("opiniones" => $opiniones));
    }

    public function index_en()
    {
        $opiniones = DB::table('opiniones')
            ->join('articulos', 'articulos.id_articulo', '=', 'opiniones.id_art')
            ->where('articulos.idioma', '=', 'EN')
            ->select('opiniones.*', 'articulos.titulo_articulo')->get();

        return view('ks-admin.blog.opiniones', array("opiniones" => $opiniones));
    }

    public function cargar()
    {
        $opiniones = DB::table('opiniones')
            ->join('articulos', 'articulos.id_articulo', '=', 'opiniones.id_art')
            ->where('articulos.idioma', '=', 'ES')
            ->select('opiniones.*', 'articulos.titulo_articulo')->get();

        return json_encode($opiniones, true);
    }

    public function cargar_en()
    {
        $opiniones = DB::table('opiniones')
            ->join('articulos', 'articulos.id_articulo', '=', 'opiniones.id_art')
            ->where('articulos.idioma', '=', 'EN')
            ->select('opiniones.*', 'articulos.titulo_articulo')->get();

        return json_encode($opiniones, true);
    }

    public function autorizar(Request $request, $id)
    {
        $opinion = Opiniones::find($id);

        if ($request->input('aprobacion') == 0)
            $opinion->aprobacion_opinion = 1;
        else
            $opinion->aprobacion_opinion = 0;

        $opinion->update();

        return 'Autorizado';
    }

    public function autorizar_en(Request $request, $id)
    {
        $opinion = Opiniones::find($id);

        if ($request->input('aprobacion') == 0)
            $opinion->aprobacion_opinion = 1;
        else
            $opinion->aprobacion_opinion = 0;

        $opinion->update();

        return 'Autorizado';
    }

    public function update(Request $request, $id)
    {
        $opinion = Opiniones::find($id);

        $opinion->respuesta_opinion = $request->input('respuesta_opinion');
        $opinion->update();

        return redirect('/ksadmin/blog/opiniones')->with('respuesta-opinion', 'Respuesta realizada!');
    }

    public function update_en(Request $request, $id)
    {
        $opinion = Opiniones::find($id);

        $opinion->respuesta_opinion = $request->input('respuesta_opinion');
        $opinion->update();

        return redirect('/ksadmin/blog/opiniones')->with('respuesta-opinion', 'Respuesta realizada!');
    }
}
