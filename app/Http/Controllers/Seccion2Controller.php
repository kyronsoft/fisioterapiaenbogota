<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Seccion2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = DB::table('textos')->where('seccion', '=', 'seccion2')->get();

        return view('ksadmin.paginas.inicioseccion2', array('textos' => $textos));
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
        if ($id == 2 && $request->input("parrafo1_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo1_es")
            );
        }

        if ($id == 2 && $request->input("parrafo1_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo1_en")
            );
        }

        if ($id == 3 && $request->input("parrafo2_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo2_es")
            );
        }

        if ($id == 3 && $request->input("parrafo2_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo2_en")
            );
        }

        if ($id == 4 && $request->input("parrafo3_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo3_es")
            );
        }

        if ($id == 4 && $request->input("parrafo3_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo3_en")
            );
        }

        if ($id == 5 && $request->input("parrafo4_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo4_es")
            );
        }

        if ($id == 5 && $request->input("parrafo4_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo4_en")
            );
        }

        if ($id == 6 && $request->input("parrafo5_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo5_es")
            );
        }

        if ($id == 6 && $request->input("parrafo5_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo5_en")
            );
        }

        if ($id == 7 && $request->input("parrafo6_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo6_es")
            );
        }

        if ($id == 7 && $request->input("parrafo6_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo6_en")
            );
        }

        DB::table('textos')->where("id", $id)->where("seccion","=","seccion2")->update($datos);
        $textos = DB::table('textos')->where('seccion', '=', 'seccion2')->get();

        return view('ksadmin.paginas.inicioseccion2', array('textos' => $textos));
    }
}
