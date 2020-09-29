<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEs;

class FisioController extends Controller
{
    public function mostrar(){
        $textos = TextosEs::all();

        return view("paginas.fisioterapia",array("textos"=>$textos));
    }
}
