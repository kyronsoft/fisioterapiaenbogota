<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEn;

class NeckController extends Controller
{
    public function mostrar(){
        $textos = TextosEn::all();

        return view("paginas.cuello_en",array("textos"=>$textos));
    }
}
