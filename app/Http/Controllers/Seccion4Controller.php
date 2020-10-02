<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Seccion4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = DB::table('website_youtube')->get();

        return view('ksadmin.paginas.inicioseccion4', array('textos' => $textos));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BarraSup  $barraSup
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        if ($id == 1 && $request->input("titulo_es") != "") {
            $datos = array(
                "spanish" => $request->input("titulo_es")
            );
        }

        if ($id == 1 && $request->input("titulo_en") != "") {
            $datos = array(
                "english" => $request->input("titulo_en")
            );
        }

        if ($id == 2) {
            $datos = array(
                "spanish" => $request->input("videoyt"),
                "english" => $request->input("videoyt")
            );
        }

        if ($id == 3 && $request->input("parrafo_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo_es")
            );
        }

        if ($id == 3 && $request->input("parrafo_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo_en")
            );
        }

        DB::table('website_youtube')->where("id", $id)->update($datos);
        $textos = DB::table('website_youtube')->get();

        return view('ksadmin.paginas.inicioseccion4', array('textos' => $textos));
    }
}