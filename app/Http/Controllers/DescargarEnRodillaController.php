<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DescargarEnRodillaController extends Controller
{
    public function index()
    {
        $textos = DB::table('textos')->get();
        $tipo = 'rodilla';
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $footer = DB::table('website_footer')->get();

        $folleto = "images\port-4-eng.png";


        return view("website.paginas.descargar_en", array(
            "textos" => $textos,
            "folleto" => $folleto,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "footer" => $footer,
            "tipo" => $tipo
        ));
    }
}
