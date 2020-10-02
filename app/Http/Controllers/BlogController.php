<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Textos;

class BlogController extends Controller
{
    public function index()
    {
        $textoses = Textos::all();

        $articulos = DB::table('articulos')->get();

        $blog = DB::table('blog')->get();

        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $blinfo = DB::table('website_info')->get();
        $servicios = DB::table('website_servicios')->get();
        $footer = DB::table('website_footer')->get();

        return view("blog.portada", array(
            "textos" => $textoses,
            "blog" => $blog,
            "articulos" => $articulos,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "inicioseccion8" => $blinfo,
            "inicioseccion9" => $servicios,
            "footer" => $footer,
        ));
    }

    public function show($id)
    {

        $articulos = DB::table('articulos')->join('opiniones.id_art', '=', 'articulos.id_articulo')
            ->where('articulos.id_articulo', $id)->select(DB::raw('count(*) as num_opiniones'))->first();
        return $articulos;
    }
}
