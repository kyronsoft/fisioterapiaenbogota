<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Textos;

class TextosEsController extends Controller
{
    public function index()
    {
        $textoses = Textos::all();
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $sliders = DB::table('website_sliders')->get();
        $seccion1 = DB::table('textos')->where('seccion', '=', 'seccion1')->get();
        $seccion2 = DB::table('textos')->where('seccion', '=', 'seccion2')->get();
        $seccion3 = DB::table('textos')->where('seccion', '=', 'seccion3')->get();
        $video_yt = DB::table('website_youtube')->get();
        $seccion5 = DB::table('textos')->where('seccion', '=', 'seccion5')->get();
        $blayuda = DB::table('website_ayuda')->get();
        $blinfo = DB::table('website_info')->get();
        $servicios = DB::table('website_servicios')->get();
        $contadores = DB::table('textos')->where('seccion', '=', 'Contadores')->get();
        $testimonios = DB::table('textos')->where('seccion', '=', 'Testimonios')->get();
        $faq = DB::table('textos')->where('seccion', '=', 'faq')->get();
        $footer = DB::table('website_footer')->get();

        return view("website.inicio", array(
            "textos" => $textoses,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "websitesliders" => $sliders,
            "inicioseccion1" => $seccion1,
            "inicioseccion2" => $seccion2,
            "inicioseccion3" => $seccion3,
            "videoyt" => $video_yt,
            "inicioseccion5" => $seccion5,
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
