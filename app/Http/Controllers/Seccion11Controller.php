<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Seccion11Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = DB::table('textos')->where('seccion', '=', 'Testimonios')->get();

        return view('ksadmin.paginas.inicioseccion11', array('textos' => $textos));
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
        if ($id == 36 && $request->input("parrafo1_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo1_es")
            );
        }

        if ($id == 36 && $request->input("parrafo1_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo1_en")
            );
        }

        if ($id == 37 && $request->input("parrafo2_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo2_es")
            );
        }

        if ($id == 37 && $request->input("parrafo2_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo2_en")
            );
        }

        if ($id == 38 && $request->input("parrafo3_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo3_es")
            );
        }

        if ($id == 38 && $request->input("parrafo3_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo3_en")
            );
        }

        if ($id == 39 && $request->input("parrafo4_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo4_es")
            );
        }

        if ($id == 39 && $request->input("parrafo4_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo4_en")
            );
        }

        if ($id == 40 && $request->input("parrafo5_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo5_es")
            );
        }

        if ($id == 40 && $request->input("parrafo5_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo5_en")
            );
        }

        if ($id == 41 && $request->input("parrafo6_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo6_es")
            );
        }

        if ($id == 41 && $request->input("parrafo6_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo6_en")
            );
        }

        if ($id == 42 && $request->input("parrafo7_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo7_es")
            );
        }

        if ($id == 42 && $request->input("parrafo7_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo7_en")
            );
        }

        if ($id == 43 && $request->input("parrafo8_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo8_es")
            );
        }

        if ($id == 43 && $request->input("parrafo8_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo8_en")
            );
        }

        if ($id == 44 && $request->input("parrafo9_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo9_es")
            );
        }

        if ($id == 44 && $request->input("parrafo9_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo9_en")
            );
        }


        DB::table('textos')->where("id", $id)->update($datos);
        $textos = DB::table('textos')->where("seccion","=","Testimonios")->get();

        return view('ksadmin.paginas.inicioseccion11', array('textos' => $textos));
    }
}
