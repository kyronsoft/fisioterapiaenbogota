<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEn;

class SportsController extends Controller
{
    public function mostrar(){
        $textos = TextosEn::all();

        return view("paginas.deportivas_en",array("textos"=>$textos));
    }
}
