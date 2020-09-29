<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEn;

class BackController extends Controller
{
    public function mostrar(){
        $textos = TextosEn::all();

        return view("paginas.espalda_en",array("textos"=>$textos));
    }
}
