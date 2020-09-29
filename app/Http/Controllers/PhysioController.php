<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEn;

class PhysioController extends Controller
{
    public function mostrar(){
        $textos = TextosEn::all();

        return view("paginas.fisioterapia_en",array("textos"=>$textos));
    }
}
