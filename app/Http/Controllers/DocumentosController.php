<?php

namespace App\Http\Controllers;

use App\Textos;
use App\WebsiteMenu;
use App\WebsiteHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = Textos::all();
        $websiteheader = WebsiteHeader::all();
        $menu = WebsiteMenu::select('website_menu.spanish')->get();

        $idioma = 'ES';

        return view('website.documentos', array('textos' => $textos, 'menu' => $menu, 'websiteheader' => $websiteheader, 'idioma' => $idioma));
    }

    public function index_en()
    {
        $textos = Textos::all();
        $websiteheader = WebsiteHeader::all();
        $menu = WebsiteMenu::select('website_menu.english')->get();

        $idioma = 'EN';

        return view('website.documentos', array('textos' => $textos, 'menu' => $menu, 'websiteheader' => $websiteheader, 'idioma' => $idioma));
    }

    public function verificar(Request $request)
    {
        $idioma = 'ES';
        $clave = $request->input("password");
        $menu = DB::table('website_menu')->get();
        $valor_actual = DB::table('clave_docs')->where('id', '=', 1)->select('clave_docs.password')->get();
        $comprobar = '[{"password":"' . md5($clave) . '"}]';

        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $footer = DB::table('website_footer')->get();

        if ($comprobar == $valor_actual) {
            return view("website.requisitos", array(
                "websiteheader" => $websiteheader,
                "websitemenu" => $websitemenu,
                "footer" => $footer,
                "idioma" => $idioma,
                "menu" => $menu
            ));
        } else {
            return view('website.documentos', array(
                "websiteheader" => $websiteheader,
                "websitemenu" => $websitemenu,
                "footer" => $footer,
                "idioma" => $idioma,
                "menu" => $menu,
                "nopassword" => 'no-password'
            ));
        }
    }
}
