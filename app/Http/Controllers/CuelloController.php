<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEs;

class CuelloController extends Controller
{
    public function mostrar(){
        $textos = TextosEs::all();

        return view("paginas.cuello",array("textos"=>$textos));
    }
}
