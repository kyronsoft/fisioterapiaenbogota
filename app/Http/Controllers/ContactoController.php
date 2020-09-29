<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEs;

class ContactoController extends Controller
{
    public function mostrar(){
        $textos = TextosEs::all();

        return view("paginas.contacto",array("textos"=>$textos));
    }
}
