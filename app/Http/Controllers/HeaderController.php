<?php

namespace App\Http\Controllers;

use App\WebsiteHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = WebsiteHeader::all();

        return view('ks-admin.inicio.header', array('textos' => $textos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $header = WebsiteHeader::find(1);
        $header->spanish = $request->input('titulo');
        $header->english = $request->input('titulo_en');
        $header->save();

        $header = WebsiteHeader::find(2);
        $header->spanish = $request->input('telefono');
        $header->english = $request->input('telefono_en');
        $header->save();

        $header = WebsiteHeader::find(3);
        $header->spanish = $request->input('email');
        $header->english = $request->input('email_en');
        $header->save();

        $header = WebsiteHeader::find(4);
        $header->spanish = $request->input('linkedin');
        $header->english = $request->input('linkedin_en');
        $header->save();

        $header = WebsiteHeader::find(5);
        $header->spanish = $request->input('facebook');
        $header->english = $request->input('facebook_en');
        $header->save();

        $header = WebsiteHeader::find(6);
        $header->spanish = $request->input('instagram');
        $header->english = $request->input('instagram_en');
        $header->save();

        $header = WebsiteHeader::find(7);
        $header->spanish = $request->input('youtube');
        $header->english = $request->input('youtube_en');
        $header->save();

        return redirect('/ksadmin/inicio/header')->with('status', 'Texto actualizado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
