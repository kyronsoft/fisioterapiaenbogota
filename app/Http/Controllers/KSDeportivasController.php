<?php

namespace App\Http\Controllers;

use App\Textos;
use Illuminate\Http\Request;

class KSDeportivasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = Textos::where('pagina', 'Deportivas')->get();

        return view('ks-admin.deportivas', array('textos' => $textos));
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

        return redirect('/ksadmin/deportivas')->with('status', 'Texto actualizado exitosamente!');
    }
}
