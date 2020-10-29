<?php

namespace App\Http\Controllers;

use App\WebsiteMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DescargarFolletoController extends Controller
{
    public function cuello()
    {
        $idioma = 'ES';
        $menu = WebsiteMenu::all();
        $textos = DB::table('textos')->get();
        $tipo = 'cuello';
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $footer = DB::table('website_footer')->get();

        $folleto = "storage\port-3-spa.png";


        return view("website.descargar", array(
            "textos" => $textos,
            "folleto" => $folleto,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "footer" => $footer,
            "tipo" => $tipo,
            "idioma" => $idioma,
            "menu" => $menu
        ));
    }

    public function cuello_en()
    {
        $idioma = 'EN';
        $menu = WebsiteMenu::all();
        $textos = DB::table('textos')->get();
        $tipo = 'cuello';
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $footer = DB::table('website_footer')->get();

        $folleto = "storage\port-3-spa.png";


        return view("website.descargar", array(
            "textos" => $textos,
            "folleto" => $folleto,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "footer" => $footer,
            "tipo" => $tipo,
            "idioma" => $idioma,
            "menu" => $menu
        ));
    }

    public function espalda()
    {
        $idioma = 'ES';
        $menu = WebsiteMenu::all();
        $textos = DB::table('textos')->get();
        $tipo = 'espalda';
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $footer = DB::table('website_footer')->get();

        $folleto = "storage\port-3-spa.png";


        return view("website.descargar", array(
            "textos" => $textos,
            "folleto" => $folleto,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "footer" => $footer,
            "tipo" => $tipo,
            "idioma" => $idioma,
            "menu" => $menu
        ));
    }

    public function espalda_en()
    {
        $idioma = 'EN';
        $menu = WebsiteMenu::all();
        $textos = DB::table('textos')->get();
        $tipo = 'espalda';
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $footer = DB::table('website_footer')->get();

        $folleto = "storage\port-3-spa.png";


        return view("website.descargar", array(
            "textos" => $textos,
            "folleto" => $folleto,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "footer" => $footer,
            "tipo" => $tipo,
            "idioma" => $idioma,
            "menu" => $menu
        ));
    }

    public function rodilla()
    {
        $idioma = 'ES';
        $menu = WebsiteMenu::all();
        $textos = DB::table('textos')->get();
        $tipo = 'rodilla';
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $footer = DB::table('website_footer')->get();

        $folleto = "storage\port-3-spa.png";


        return view("website.descargar", array(
            "textos" => $textos,
            "folleto" => $folleto,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "footer" => $footer,
            "tipo" => $tipo,
            "idioma" => $idioma,
            "menu" => $menu
        ));
    }

    public function rodilla_en()
    {
        $idioma = 'EN';
        $menu = WebsiteMenu::all();
        $textos = DB::table('textos')->get();
        $tipo = 'rodilla';
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $footer = DB::table('website_footer')->get();

        $folleto = "storage\port-3-spa.png";


        return view("website.descargar", array(
            "textos" => $textos,
            "folleto" => $folleto,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "footer" => $footer,
            "tipo" => $tipo,
            "idioma" => $idioma,
            "menu" => $menu
        ));
    }

    public function deportivas()
    {
        $idioma = 'ES';
        $menu = WebsiteMenu::all();
        $textos = DB::table('textos')->get();
        $tipo = 'deportivas';
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $footer = DB::table('website_footer')->get();

        $folleto = "storage\port-3-spa.png";


        return view("website.descargar", array(
            "textos" => $textos,
            "folleto" => $folleto,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "footer" => $footer,
            "tipo" => $tipo,
            "idioma" => $idioma,
            "menu" => $menu
        ));
    }

    public function deportivas_en()
    {
        $idioma = 'EN';
        $menu = WebsiteMenu::all();
        $textos = DB::table('textos')->get();
        $tipo = 'deportivas';
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $footer = DB::table('website_footer')->get();

        $folleto = "storage\port-3-spa.png";


        return view("website.descargar", array(
            "textos" => $textos,
            "folleto" => $folleto,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "footer" => $footer,
            "tipo" => $tipo,
            "idioma" => $idioma,
            "menu" => $menu
        ));
    }
}
