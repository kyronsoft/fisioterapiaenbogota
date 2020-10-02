<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Seccion1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = DB::table('textos')->where('seccion', '=', 'seccion1')->get();

        return view('ksadmin.paginas.inicioseccion1', array('textos' => $textos));
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
        if ($id == 1 && $request->input("html_es") != "") {
            $datos = array(
                "spanish" => $request->input("html_es")
            );
        }

        if ($id == 1 && $request->input("html_en") != "") {
            $datos = array(
                "english" => $request->input("html_en")
            );
        }

        DB::table('textos')->where("id", $id)->update($datos);
        $textos = DB::table('textos')->where('seccion', '=', 'seccion1')->get();

        return view('ksadmin.paginas.inicioseccion1', array('textos' => $textos));
    }
}
