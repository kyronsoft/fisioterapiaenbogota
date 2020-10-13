<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Opiniones;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opiniones = DB::table('opiniones')->join('articulos', 'opiniones.id_art', '=', 'articulos.id_articulo')->select('opiniones.*', 'articulos.titulo_articulo')->paginate(10);

        return view('ksadmin.blog.autorizacion', array('opiniones' => $opiniones));
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
        //
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
        $estado = DB::table('opiniones')->where('id_opinion', '=', $id)->select('aprobacion_opinion')->get();

        if ($estado[0]->aprobacion_opinion == 1)
            $datos = array("aprobacion_opinion" => 0);
        else
            $datos = array("aprobacion_opinion" => 1);

        $opinion = Opiniones::where('id_opinion', $id)->update($datos);
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
