<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Seccion10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = DB::table('textos')->where('seccion','=','Contadores')->get();

        return view('ksadmin.paginas.inicioseccion10', array('textos' => $textos));
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
        if ($id == 29 && $request->input("titulo_es") != "") {
            $datos = array(
                "spanish" => $request->input("titulo_es")
            );
        }

        if ($id == 29 && $request->input("titulo_en") != "") {
            $datos = array(
                "english" => $request->input("titulo_en")
            );
        }

        if ($id == 30 && $request->input("parrafo_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo_es")
            );
        }

        if ($id == 30 && $request->input("parrafo_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo_en")
            );
        }

        if ($id == 31 && $request->input("titulo2_es") != "") {
            $datos = array(
                "spanish" => $request->input("titulo2_es")
            );
        }

        if ($id == 31 && $request->input("titulo2_en") != "") {
            $datos = array(
                "english" => $request->input("titulo2_en")
            );
        }

        if ($id == 32 && $request->input("parrafo2_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo2_es")
            );
        }

        if ($id == 32 && $request->input("parrafo2_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo2_en")
            );
        }

        if ($id == 33 && $request->input("titulo3_es") != "") {
            $datos = array(
                "spanish" => $request->input("titulo3_es")
            );
        }

        if ($id == 33 && $request->input("titulo3_en") != "") {
            $datos = array(
                "english" => $request->input("titulo3_en")
            );
        }

        if ($id == 34 && $request->input("parrafo3_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo3_es")
            );
        }

        if ($id == 34 && $request->input("parrafo3_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo3_en")
            );
        }


        DB::table('textos')->where("id", $id)->update($datos);
        $textos = DB::table('textos')->get();

        return view('ksadmin.paginas.inicioseccion10', array('textos' => $textos));
    }
}
