<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentosEnController extends Controller
{
    public function index()
    {
        $textos = DB::table('textos')->where('pagina', '=', 'Contacto')->get();
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $footer = DB::table('website_footer')->get();

        return view("website.paginas.documentos_en", array(
            "textos" => $textos,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "footer" => $footer,
        ));
    }

    public function verificar(Request $request)
    {
        $clave = $request->input("password");

        if ($clave == 'AdriLuchi11!') {
            $websiteheader = DB::table('website_header')->get();
            $websitemenu = DB::table('website_menu')->get();
            $footer = DB::table('website_footer')->get();

            return view("website.paginas.requisitos_en", array(
                "websiteheader" => $websiteheader,
                "websitemenu" => $websitemenu,
                "footer" => $footer,
            ));
        } else {
            $url = "/documentos";
            return redirect($url)->with("status", "Contraseña no válida!");
        }
    }
}
