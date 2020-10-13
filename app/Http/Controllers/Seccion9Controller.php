<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Seccion9Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = DB::table('website_servicios')->get();

        return view('ksadmin.paginas.inicioseccion9', array('textos' => $textos));
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

        if ($id == 3 && $request->input("titulo2_es") != "") {
            $datos = array(
                "spanish" => $request->input("titulo2_es")
            );
        }

        if ($id == 3 && $request->input("titulo2_en") != "") {
            $datos = array(
                "english" => $request->input("titulo2_en")
            );
        }

        if ($id == 4 && $request->input("parrafo2_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo2_es")
            );
        }

        if ($id == 4 && $request->input("parrafo2_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo2_en")
            );
        }

        if ($id == 5 && $request->input("titulo3_es") != "") {
            $datos = array(
                "spanish" => $request->input("titulo3_es")
            );
        }

        if ($id == 5 && $request->input("titulo3_en") != "") {
            $datos = array(
                "english" => $request->input("titulo3_en")
            );
        }

        if ($id == 6 && $request->input("parrafo3_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo3_es")
            );
        }

        if ($id == 6 && $request->input("parrafo3_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo3_en")
            );
        }

        DB::table('website_servicios')->where("id", $id)->update($datos);
        $textos = DB::table('website_servicios')->get();

        return view('ksadmin.paginas.inicioseccion9', array('textos' => $textos));
    }
}
