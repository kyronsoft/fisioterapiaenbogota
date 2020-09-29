<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEs;

class ContactanosController extends Controller
{
    public function mostrar(){
        $textos = TextosEs::all();

        return view("paginas.contactanos",array("textos"=>$textos));
    }
}
