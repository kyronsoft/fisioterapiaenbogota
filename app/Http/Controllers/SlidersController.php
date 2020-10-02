<?php

namespace App\Http\Controllers;

use App\Sliders;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = Sliders::all();

        return view('ksadmin.paginas.carousel', array('textos' => $textos));
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
        if ($id == 1) {
            $datos = array(
                "spanish" => $request->input("titulo_es"),
                "english" => $request->input("titulo_en")
            );
        }

        if ($id == 2) {
            $datos = array(
                "spanish" => $request->input("subtitulo_es"),
                "english" => $request->input("subtitulo_en")
            );
        }

        if ($id == 3) {
            $datos = array(
                "spanish" => $request->input("titulo1_es"),
                "english" => $request->input("titulo1_en")
            );
        }

        if ($id == 4) {
            $datos = array(
                "spanish" => $request->input("subtitulo1_es"),
                "english" => $request->input("subtitulo1_en")
            );
        }

        if ($id == 5) {
            $datos = array(
                "spanish" => $request->input("subtitulo2_es"),
                "english" => $request->input("subtitulo2_en")
            );
        }

        if ($id == 6) {
            $datos = array(
                "spanish" => $request->input("subtitulo3_es"),
                "english" => $request->input("subtitulo3_en")
            );
        }


        Sliders::where("id", $id)->update($datos);
        $textos = Sliders::all();

        return view('ksadmin.paginas.carousel', array('textos' => $textos));
    }
}
