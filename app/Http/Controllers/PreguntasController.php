<?php

namespace App\Http\Controllers;

use App\Mensajes;
use App\Mensajes_Preguntas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MailController;

class PreguntasController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function preguntas(Request $request)
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

        $email = new MailController;
        $resp = $email->basic_email_docs($datos, $data_preguntas);
    }

    public function preguntas_en(Request $request)
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

        $email = new MailController;
        $resp = $email->basic_email_docs($datos, $data_preguntas);
    }
}
