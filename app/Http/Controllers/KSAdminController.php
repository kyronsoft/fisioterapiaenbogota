<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KSAdminController extends Controller
{
    public function showmain()
    {
        return view("ksadmin.plantilla");
    }
}
