<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KSFisioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = DB::table('textos')->where('pagina', '=', 'Fisioterapia')->get();
        return view('ksadmin.paginas.fisioterapia', array('textos' => $textos));
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
        if ($id == 83 && $request->input("parrafo1_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo1_es")
            );
        }

        if ($id == 83 && $request->input("parrafo1_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo1_en")
            );
        }

        if ($id == 84 && $request->input("parrafo2_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo2_es")
            );
        }

        if ($id == 84 && $request->input("parrafo2_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo2_en")
            );
        }

        if ($id == 85 && $request->input("parrafo3_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo3_es")
            );
        }

        if ($id == 85 && $request->input("parrafo3_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo3_en")
            );
        }

        if ($id == 86 && $request->input("parrafo4_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo4_es")
            );
        }

        if ($id == 86 && $request->input("parrafo4_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo4_en")
            );
        }

        if ($id == 87 && $request->input("parrafo5_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo5_es")
            );
        }

        if ($id == 87 && $request->input("parrafo5_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo5_en")
            );
        }

        if ($id == 88 && $request->input("parrafo6_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo6_es")
            );
        }

        if ($id == 88 && $request->input("parrafo6_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo6_en")
            );
        }

        if ($id == 89 && $request->input("parrafo7_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo7_es")
            );
        }

        if ($id == 89 && $request->input("parrafo7_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo7_en")
            );
        }

        if ($id == 90 && $request->input("parrafo8_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo8_es")
            );
        }

        if ($id == 90 && $request->input("parrafo8_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo8_en")
            );
        }

        if ($id == 91 && $request->input("parrafo9_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo9_es")
            );
        }

        if ($id == 91 && $request->input("parrafo9_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo9_en")
            );
        }

        if ($id == 92 && $request->input("parrafo10_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo10_es")
            );
        }

        if ($id == 92 && $request->input("parrafo10_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo10_en")
            );
        }

        if ($id == 93 && $request->input("parrafo11_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo11_es")
            );
        }

        if ($id == 93 && $request->input("parrafo11_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo11_en")
            );
        }

        DB::table('textos')->where("id", $id)->update($datos);
        $textos = DB::table('textos')->where('pagina', '=', 'Fisioterapia')->get();

        return view('ksadmin.paginas.fisioterapia', array('textos' => $textos));
    }
}
