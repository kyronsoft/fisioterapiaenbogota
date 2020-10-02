<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactanosEnController extends Controller
{
    public function index()
    {
        $textos = DB::table('textos')->where('pagina', '=', 'Contacto')->get();
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $footer = DB::table('website_footer')->get();

        return view("website.paginas.contact_us", array(
            "textos" => $textos,
            "websiteheader" => $websiteheader,
            "websitemenu" => $websitemenu,
            "footer" => $footer,
        ));
    }
}
