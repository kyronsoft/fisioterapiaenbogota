<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEn;

class ContactController extends Controller
{
    public function mostrar(){
        $textos = TextosEn::all();

        return view("paginas.contacto_en",array("textos"=>$textos));
    }
}
