<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEs;

class NaceController extends Controller
{
    public function mostrar(){
        $textos = TextosEs::all();

        return view("paginas.nace",array("textos"=>$textos));
    }
}
