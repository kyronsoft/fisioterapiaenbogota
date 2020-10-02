<?php

namespace App\Http\Controllers;

use App\BarraSup;
use Illuminate\Http\Request;

class BarraSupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = BarraSup::all();

        return view('ksadmin.paginas.barrasuperior', array('textos' => $textos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                "spanish" => $request->input("telefono_es"),
                "english" => $request->input("telefono_en")
            );
        }

        if ($id == 3) {
            $datos = array(
                "spanish" => $request->input("email_es"),
                "english" => $request->input("email_en")
            );
        }

        if ($id == 4) {
            $datos = array(
                "spanish" => $request->input("linkedin_es"),
                "english" => $request->input("linkedin_en")
            );
        }

        if ($id == 5) {
            $datos = array(
                "spanish" => $request->input("facebook_es"),
                "english" => $request->input("facebook_en")
            );
        }

        if ($id == 6) {
            $datos = array(
                "spanish" => $request->input("instagram_es"),
                "english" => $request->input("instagram_en")
            );
        }

        if ($id == 7) {
            $datos = array(
                "spanish" => $request->input("youtube_es"),
                "english" => $request->input("youtube_en")
            );
        }


        BarraSup::where("id", $id)->update($datos);
        $textos = BarraSup::all();

        return view('ksadmin.paginas.barrasuperior', array('textos' => $textos));
    }
}
