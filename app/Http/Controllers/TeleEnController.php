<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEn;

class TeleEnController extends Controller
{
    public function mostrar(){
        $textos = TextosEn::all();

        return view("paginas.telerehab_en",array("textos"=>$textos));
    }
}
