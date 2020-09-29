<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEn;

class AboutController extends Controller
{
    public function mostrar(){
        $textos = TextosEn::all();

        return view("paginas.acerca_en",array("textos"=>$textos));
    }
}
