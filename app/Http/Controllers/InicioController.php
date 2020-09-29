<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEs;

class InicioController extends Controller
{
    public function mostrar(){
        $textos = TextosEs::all();

        return view("plantilla",array("textos"=>$textos));
    }
}
