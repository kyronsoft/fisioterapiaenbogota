<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEn;

class BornController extends Controller
{
    public function mostrar(){
        $textos = TextosEn::all();

        return view("paginas.nace_en",array("textos"=>$textos));
    }
}
