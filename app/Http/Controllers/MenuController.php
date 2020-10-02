<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = Menu::all();

        return view('ksadmin.paginas.menu', array('textos' => $textos));
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
                "spanish" => $request->input("inicio_es"),
                "english" => $request->input("inicio_en")
            );
        }

        if ($id == 2) {
            $datos = array(
                "spanish" => $request->input("quien_es"),
                "english" => $request->input("quien_en")
            );
        }

        if ($id == 3) {
            $datos = array(
                "spanish" => $request->input("acerca_es"),
                "english" => $request->input("acerca_en")
            );
        }

        if ($id == 4) {
            $datos = array(
                "spanish" => $request->input("nace_es"),
                "english" => $request->input("nace_en")
            );
        }

        if ($id == 5) {
            $datos = array(
                "spanish" => $request->input("servicios_es"),
                "english" => $request->input("servicios_en")
            );
        }

        if ($id == 6) {
            $datos = array(
                "spanish" => $request->input("teler_es"),
                "english" => $request->input("teler_en")
            );
        }

        if ($id == 7) {
            $datos = array(
                "spanish" => $request->input("fisio_es"),
                "english" => $request->input("fisio_en")
            );
        }

        
        if ($id == 8) {
            $datos = array(
                "spanish" => $request->input("cuello_es"),
                "english" => $request->input("cuello_en")
            );
        }
        
    
        if ($id == 9) {
            $datos = array(
                "spanish" => $request->input("espalda_es"),
                "english" => $request->input("espalda_en")
            );
        }

        if ($id == 10) {
            $datos = array(
                "spanish" => $request->input("rodilla_es"),
                "english" => $request->input("rodilla_en")
            );
        }

        if ($id == 11) {
            $datos = array(
                "spanish" => $request->input("deportivas_es"),
                "english" => $request->input("deportivas_en")
            );
        }

        if ($id == 12) {
            $datos = array(
                "spanish" => $request->input("blog_es"),
                "english" => $request->input("blog_en")
            );
        }

        if ($id == 13) {
            $datos = array(
                "spanish" => $request->input("contacto_es"),
                "english" => $request->input("contacto_en")
            );
        }

        if ($id == 14) {
            $datos = array(
                "spanish" => $request->input("idioma_es"),
                "english" => $request->input("idioma_en")
            );
        }

        if ($id == 15) {
            $datos = array(
                "spanish" => $request->input("english_es"),
                "english" => $request->input("english_en")
            );
        }

        if ($id == 16) {
            $datos = array(
                "spanish" => $request->input("spanish_es"),
                "english" => $request->input("spanish_en")
            );
        }

        Menu::where("id", $id)->update($datos);
        $textos = Menu::all();

        return view('ksadmin.paginas.menu', array('textos' => $textos));
    }
}
