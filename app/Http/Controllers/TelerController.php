<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TelerController extends Controller
{
    public function index()
    {
        $textos = DB::table('textos')->get();
        $teler = DB::table('textos')->where('pagina', '=', 'Telerehabilitacion')->get();
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $blinfo = DB::table('website_info')->get();
        $servicios = DB::table('website_servicios')->get();
        $testimonios = DB::table('textos')->where('seccion', '=', 'Testimonios')->get();
        $faq = DB::table('textos')->where('seccion', '=', 'faq')->get();
        $footer = DB::table('website_footer')->get();

        return view("website.paginas.telerehab", array(
            "textos" => $textos,
            "teler" => $teler,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "inicioseccion8" => $blinfo,
            "inicioseccion9" => $servicios,
            "inicioseccion11" => $testimonios,
            "inicioseccion12" => $faq,
            "footer" => $footer,
        ));
    }
}
