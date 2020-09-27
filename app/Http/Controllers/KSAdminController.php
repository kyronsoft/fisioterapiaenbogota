<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Textos;

class KSAdminController extends Controller
{
    public function GetSuperior(){
    $textos = Textos::where('pagina','Inicio')->get();

        return view("ksadmin.superior",array("textos"=>$textos));
    }

    public function GetSliders(){
        $textos = Textos::where('pagina','Inicio')->get();
    
            return view("ksadmin.sliders",array("textos"=>$textos));
        }

        public function GetSeccionDos(){
            $textos = Textos::where('pagina','Inicio')->get();
        
                return view("ksadmin.secciondos",array("textos"=>$textos));
            }
            public function GetSeccionTres(){
                $textos = Textos::where('pagina','Inicio')->get();
            
                    return view("ksadmin.secciontres",array("textos"=>$textos));
                }
}
