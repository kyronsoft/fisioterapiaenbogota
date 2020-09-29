<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEs;

class EspaldaController extends Controller
{
    public function mostrar(){
        $textos = TextosEs::all();

        return view("paginas.espalda",array("textos"=>$textos));
    }
}
