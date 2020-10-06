<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FisioEnController extends Controller
{
    public function index()
    {
        $textos = DB::table('textos')->get();
        $fisio = DB::table('textos')->where('pagina', '=', 'Fisioterapia')->get();
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $video_yt = DB::table('website_youtube')->get();
        $blayuda = DB::table('website_ayuda')->get();
        $blinfo = DB::table('website_info')->get();
        $servicios = DB::table('website_servicios')->get();
        $contadores = DB::table('textos')->where('seccion', '=', 'Contadores')->get();
        $testimonios = DB::table('textos')->where('seccion', '=', 'Testimonios')->get();
        $faq = DB::table('textos')->where('seccion', '=', 'faq')->get();
        $footer = DB::table('website_footer')->get();

        return view("website.paginas.fisio_en", array(
            "textos" => $textos,
            "fisio" => $fisio,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "videoyt" => $video_yt,
            "inicioseccion6" => $blayuda,
            "inicioseccion8" => $blinfo,
            "inicioseccion9" => $servicios,
            "inicioseccion10" => $contadores,
            "inicioseccion11" => $testimonios,
            "inicioseccion12" => $faq,
            "footer" => $footer,
        ));
    }
}
