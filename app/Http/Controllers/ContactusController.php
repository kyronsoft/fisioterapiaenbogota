<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextosEn;

class ContactusController extends Controller
{
    public function mostrar(){
        $textos = TextosEn::all();

        return view("paginas.contactanos_en",array("textos"=>$textos));
    }
}
