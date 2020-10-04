<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KSNaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = DB::table('textos')->where('pagina', '=', 'Nace')->get();

        return view('ksadmin.paginas.nace', array('textos' => $textos));
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
        if ($id == 68 && $request->input("parrafo1_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo1_es")
            );
        }

        if ($id == 68 && $request->input("parrafo1_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo1_en")
            );
        }

        if ($id == 69 && $request->input("parrafo2_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo2_es")
            );
        }

        if ($id == 69 && $request->input("parrafo2_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo2_en")
            );
        }

        if ($id == 70 && $request->input("parrafo3_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo3_es")
            );
        }

        if ($id == 70 && $request->input("parrafo3_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo3_en")
            );
        }

        if ($id == 71 && $request->input("parrafo4_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo4_es")
            );
        }

        if ($id == 71 && $request->input("parrafo4_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo4_en")
            );
        }

        if ($id == 72 && $request->input("parrafo5_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo5_es")
            );
        }

        if ($id == 72 && $request->input("parrafo5_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo5_en")
            );
        }

        DB::table('textos')->where("id", $id)->update($datos);
        $textos = DB::table('textos')->where('pagina', '=', 'Nace')->get();

        return view('ksadmin.paginas.nace', array('textos' => $textos));
    }
}