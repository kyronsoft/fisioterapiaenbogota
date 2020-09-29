<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TextosEs;

class KSAdminController extends Controller
{
    public function GetTextos() {
        $textos = DB::table('textos_es')
        ->join('textos_en','textos_es.id','=','textos_en.id')
        ->select('textos_es.id','textos_es.spanish','textos_en.english')->get();

        return $textos;
    }

    public function GetSuperior()
    {

        return view("ksadmin.superior", array("textos" => self::GetTextos()));
    }

    public function GetSliders()
    {
        return view("ksadmin.sliders", array("textos" => self::GetTextos()));
    }

    public function GetSeccionDos()
    {
        $textos = TextosEs::where('pagina', 'Inicio')->get();

        return view("ksadmin.secciondos", array("textos" => $textos));
    }

    public function GetSeccionTres()
    {
        $textos = TextosEs::where('pagina', 'Inicio')->get();

        return view("ksadmin.secciontres", array("textos" => $textos));
    }

    public function GetSeccionCuatro()
    {
        $textos = TextosEs::where('pagina', 'Inicio')->get();

        return view("ksadmin.seccioncuatro", array("textos" => $textos));
    }
}
