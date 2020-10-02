<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Textos;

class AcercaEnController extends Controller
{
    public function index()
    {
        $textoses = Textos::all();
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $blinfo = DB::table('website_info')->get();
        $servicios = DB::table('website_servicios')->get();
        $footer = DB::table('website_footer')->get();

        return view("website.paginas.acerca_en", array(
            "textos" => $textoses,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "inicioseccion8" => $blinfo,
            "inicioseccion9" => $servicios,
            "footer" => $footer,
        ));
    }
}
