<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEs;

class DeportivasController extends Controller
{
    public function mostrar(){
        $textos = TextosEs::all();

        return view("paginas.deportivas",array("textos"=>$textos));
    }
}
