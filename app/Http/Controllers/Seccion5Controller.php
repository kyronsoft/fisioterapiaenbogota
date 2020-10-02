<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Seccion5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = DB::table('textos')->where('seccion', '=', 'seccion5')->get();

        return view('ksadmin.paginas.inicioseccion5', array('textos' => $textos));
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
        if ($id == 14 && $request->input("parrafo_es") != "") {
            $datos = array(
                "spanish" => $request->input("parrafo_es")
            );
        }

        if ($id == 14 && $request->input("parrafo_en") != "") {
            $datos = array(
                "english" => $request->input("parrafo_en")
            );
        }

        DB::table('textos')->where("id", $id)->where("seccion", "=", "seccion5")->update($datos);
        $textos = DB::table('textos')->where('seccion', '=', 'seccion5')->get();

        return view('ksadmin.paginas.inicioseccion5', array('textos' => $textos));
    }
}
