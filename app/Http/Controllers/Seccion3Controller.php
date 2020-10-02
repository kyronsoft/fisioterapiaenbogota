<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Seccion3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = DB::table('textos')->where('seccion', '=', 'seccion3')->get();

        return view('ksadmin.paginas.inicioseccion3', array('textos' => $textos));
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
        if ($id == 8 && $request->input("titulo_es") != "") {
            $datos = array(
                "spanish" => $request->input("titulo_es")
            );
        }

        if ($id == 8 && $request->input("titulo_en") != "") {
            $datos = array(
                "english" => $request->input("titulo_en")
            );
        }

        if ($id == 9 && $request->input("parrafo1_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo1_es")
            );
        }

        if ($id == 9 && $request->input("parrafo1_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo1_en")
            );
        }

        if ($id == 10 && $request->input("parrafo2_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo2_es")
            );
        }

        if ($id == 10 && $request->input("parrafo2_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo2_en")
            );
        }

        if ($id == 11 && $request->input("parrafo3_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo3_es")
            );
        }

        if ($id == 11 && $request->input("parrafo3_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo3_en")
            );
        }

        DB::table('textos')->where("id", $id)->where("seccion", "=", "seccion3")->update($datos);
        $textos = DB::table('textos')->where('seccion', '=', 'seccion3')->get();

        return view('ksadmin.paginas.inicioseccion3', array('textos' => $textos));
    }
}
