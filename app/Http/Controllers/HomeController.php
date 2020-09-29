<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEn;

class HomeController extends Controller
{
    public function mostrar(){
        $textos = TextosEn::all();

        return view("plantilla_en",array("textos"=>$textos));
    }
}
