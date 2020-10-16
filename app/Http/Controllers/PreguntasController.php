<?php

namespace App\Http\Controllers;

use App\Mensajes;
use App\Mensajes_Preguntas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Entro!';
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
            "nombres" => $request->input("cliente.nombres"),
            "telefono" => $request->input("cliente.telefono"),
            "email" => $request->input("cliente.email"),
            "mensaje" => $request->input("cliente.mensaje")
        );

        $data_preguntas = $request->input("preguntas");

        $mensajes = new Mensajes();
        $mensajes->nombres = $datos["nombres"];
        $mensajes->telefono = $datos["telefono"];
        $mensajes->email = $datos["email"];
        $mensajes->mensaje = $datos["mensaje"];

        $mensajes->save();
        $last_id = $mensajes->id_mensaje;

        foreach ($data_preguntas as $key => $value) {
            $preguntas = new Mensajes_Preguntas();
            $preguntas->id_mensaje = $last_id;
            $preguntas->id_pregunta = $value;
            $preguntas->idioma = 'ES';
            $preguntas->save();
        }
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
