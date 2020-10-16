<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KSScreeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = DB::table('textos')->where('pagina', '=', 'Screening')->get();
        return view('ksadmin.paginas.screening', array('textos' => $textos));
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
        if ($id == 98 && $request->input("parrafo1_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo1_es")
            );
        }

        if ($id == 98 && $request->input("parrafo1_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo1_en")
            );
        }

        if ($id == 99 && $request->input("parrafo2_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo2_es")
            );
        }

        if ($id == 99 && $request->input("parrafo2_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo2_en")
            );
        }

        if ($id == 100 && $request->input("parrafo3_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo3_es")
            );
        }

        if ($id == 100 && $request->input("parrafo3_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo3_en")
            );
        }

        if ($id == 101 && $request->input("parrafo4_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo4_es")
            );
        }

        if ($id == 101 && $request->input("parrafo4_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo4_en")
            );
        }

        if ($id == 102 && $request->input("parrafo5_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo5_es")
            );
        }

        if ($id == 102 && $request->input("parrafo5_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo5_en")
            );
        }

        DB::table('textos')->where("id", $id)->update($datos);
        $textos = DB::table('textos')->where('pagina', '=', 'Screening')->get();

        return view('ksadmin.paginas.screening', array('textos' => $textos));
    }
}
