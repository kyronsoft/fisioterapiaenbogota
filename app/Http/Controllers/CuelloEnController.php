<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CuelloEnController extends Controller
{
    public function index()
    {
        $textos = DB::table('textos')->get();
        $cuello = DB::table('textos')->where('pagina', '=', 'Cuello')->get();
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $blinfo = DB::table('website_info')->get();
        $contadores = DB::table('textos')->where('seccion', '=', 'Contadores')->get();
        $servicios = DB::table('website_servicios')->get();
        $testimonios = DB::table('textos')->where('seccion', '=', 'Testimonios')->get();
        $faq = DB::table('textos')->where('seccion', '=', 'faq')->get();
        $footer = DB::table('website_footer')->get();

        return view("website.paginas.cuello_en", array(
            "textos" => $textos,
            "cuello" => $cuello,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "inicioseccion8" => $blinfo,
            "inicioseccion9" => $servicios,
            "inicioseccion10" => $contadores,
            "inicioseccion11" => $testimonios,
            "inicioseccion12" => $faq,
            "footer" => $footer,
        ));
    }
}