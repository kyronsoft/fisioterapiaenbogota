<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEs;

class TeleController extends Controller
{
    public function mostrar(){
        $textos = TextosEs::all();

        return view("paginas.telerehabilitacion",array("textos"=>$textos));
    }
}
