<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEn;

class KneeController extends Controller
{
    public function mostrar(){
        $textos = TextosEn::all();

        return view("paginas.rodilla_en",array("textos"=>$textos));
    }
}
