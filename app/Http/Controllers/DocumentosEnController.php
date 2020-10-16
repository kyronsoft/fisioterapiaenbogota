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
        $valor_actual = DB::table('clave_docs')->where('id', '=', 1)->select('clave_docs.password')->get();
        $comprobar = '[{"password":"' . md5($clave) . '"}]';

        if ($comprobar == $valor_actual) {
            $websiteheader = DB::table('website_header')->get();
            $websitemenu = DB::table('website_menu')->get();
            $footer = DB::table('website_footer')->get();

            return view("website.paginas.requisitos_en", array(
                "websiteheader" => $websiteheader,
                "websitemenu" => $websitemenu,
                "footer" => $footer,
            ));
        } else {
            $url = "/documents";
            return redirect($url)->with("no-password", "");
        }
    }
}
