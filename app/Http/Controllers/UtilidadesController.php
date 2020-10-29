<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UtilidadesController extends Controller
{
    public function index()
    {
        return view('ks-admin.cambiarpwd');
    }

    public function update(Request $request, $id)
    {
        $usuario = User::find($id);

        $newpass = $request->input("password");
        $renewpass = $request->input("confpassword");

        if ($newpass != $renewpass) {
            return redirect('/ksadmin/cambiarpwd')->with('not-pwd', 'Las contraseñas no coinciden!');
        } else {
            $usuario->password = Hash::make($newpass);
            $usuario->update();

            return redirect('/ksadmin/cambiarpwd')->with('change-pwd', 'Contraseña cambiada!');
        }
    }
}
