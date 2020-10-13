<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DescargarEspaldaController extends Controller
{
    public function index()
    {
        $textos = DB::table('textos')->get();
        $tipo = 'espalda';
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $footer = DB::table('website_footer')->get();

        $folleto = "images\port-1-spa.png";


        return view("website.paginas.descargar", array(
            "textos" => $textos,
            "folleto" => $folleto,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "footer" => $footer,
            "tipo" => $tipo
        ));
    }
}
