<?php

namespace App\Http\Controllers;

use App\Textos;
use Illuminate\Http\Request;

class InicioSeccion8Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = Textos::where('seccion', 'Info')->get();

        return view('ks-admin.inicio.seccion8', array('textos' => $textos));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array(
            "id" => $id,
            "spanish" => $request->input("content_spanish"),
            "english" => $request->input("content_english")
        );

        $textos = Textos::find($id);
        $textos->spanish = $data["spanish"];
        $textos->english = $data["english"];
        $textos->save();

        return redirect('/ksadmin/inicio/seccion8')->with('status', 'Texto actualizado exitosamente!');
    }
}
