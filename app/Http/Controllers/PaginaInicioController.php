<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Textos;

class PaginaInicioController extends Controller
{
    public function mostrar_es(){
        $textos = Textos::where('pagina','Inicio')->get();

        return view("plantilla",array("textos"=>$textos));
    }

    public function mostrar_en(){
        $textos = Textos::where('pagina','Inicio')->get();

        return view("plantilla_en",array("textos"=>$textos));
    }
}
