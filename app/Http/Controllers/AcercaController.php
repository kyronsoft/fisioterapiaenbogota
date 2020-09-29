<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEs;

class AcercaController extends Controller
{
    public function mostrar(){
        $textos = TextosEs::all();

        return view("paginas.acerca",array("textos"=>$textos));
    }
}
