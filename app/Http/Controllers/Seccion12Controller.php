<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Seccion12Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = DB::table('textos')->where('seccion', '=', 'faq')->get();

        return view('ksadmin.paginas.inicioseccion12', array('textos' => $textos));
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
        if ($id == 45 && $request->input("parrafo1_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo1_es")
            );
        }

        if ($id == 45 && $request->input("parrafo1_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo1_en")
            );
        }

        if ($id == 46 && $request->input("parrafo2_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo2_es")
            );
        }

        if ($id == 46 && $request->input("parrafo2_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo2_en")
            );
        }

        if ($id == 47 && $request->input("parrafo3_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo3_es")
            );
        }

        if ($id == 47 && $request->input("parrafo3_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo3_en")
            );
        }

        if ($id == 48 && $request->input("parrafo4_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo4_es")
            );
        }

        if ($id == 48 && $request->input("parrafo4_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo4_en")
            );
        }

        if ($id == 49 && $request->input("parrafo5_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo5_es")
            );
        }

        if ($id == 49 && $request->input("parrafo5_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo5_en")
            );
        }

        if ($id == 50 && $request->input("parrafo6_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo6_es")
            );
        }

        if ($id == 50 && $request->input("parrafo6_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo6_en")
            );
        }

        if ($id == 51 && $request->input("parrafo7_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo7_es")
            );
        }

        if ($id == 51 && $request->input("parrafo7_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo7_en")
            );
        }

        if ($id == 52 && $request->input("parrafo8_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo8_es")
            );
        }

        if ($id == 52 && $request->input("parrafo8_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo8_en")
            );
        }

        if ($id == 53 && $request->input("parrafo9_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo9_es")
            );
        }

        if ($id == 53 && $request->input("parrafo9_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo9_en")
            );
        }

        if ($id == 54 && $request->input("parrafo10_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo10_es")
            );
        }

        if ($id == 54 && $request->input("parrafo10_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo10_en")
            );
        }

        if ($id == 55 && $request->input("parrafo11_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo11_es")
            );
        }

        if ($id == 55 && $request->input("parrafo11_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo11_en")
            );
        }

        if ($id == 56 && $request->input("parrafo12_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo12_es")
            );
        }

        if ($id == 56 && $request->input("parrafo12_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo12_en")
            );
        }

        if ($id == 57 && $request->input("parrafo13_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo13_es")
            );
        }

        if ($id == 57 && $request->input("parrafo13_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo13_en")
            );
        }

        if ($id == 58 && $request->input("parrafo14_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo14_es")
            );
        }

        if ($id == 58 && $request->input("parrafo14_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo14_en")
            );
        }

        if ($id == 59 && $request->input("parrafo15_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo15_es")
            );
        }

        if ($id == 59 && $request->input("parrafo15_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo15_en")
            );
        }

        if ($id == 60 && $request->input("parrafo16_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo16_es")
            );
        }

        if ($id == 60 && $request->input("parrafo16_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo16_en")
            );
        }

        if ($id == 61 && $request->input("parrafo17_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo17_es")
            );
        }

        if ($id == 61 && $request->input("parrafo17_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo17_en")
            );
        }

        if ($id == 62 && $request->input("parrafo18_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo18_es")
            );
        }

        if ($id == 62 && $request->input("parrafo18_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo18_en")
            );
        }

        DB::table('textos')->where("id", $id)->update($datos);
        $textos = DB::table('textos')->where("seccion","=","faq")->get();

        return view('ksadmin.paginas.inicioseccion12', array('textos' => $textos));
    }
}
