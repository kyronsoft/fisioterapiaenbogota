<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEs;

class RodillaController extends Controller
{
    public function mostrar(){
        $textos = TextosEs::all();

        return view("paginas.rodilla",array("textos"=>$textos));
    }
}
