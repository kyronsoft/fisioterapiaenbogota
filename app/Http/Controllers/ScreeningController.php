<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Textos;

class ScreeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = DB::table('textos')->where('pagina', '=', 'Screening')->get();
        $appointlet = DB::table('blog')->select('blog.url_agenda')->get();
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $footer = DB::table('website_footer')->get();
        $servicios = DB::table('website_servicios')->get();

        return view('website.paginas.screening', array('textos' => $textos, 'websiteheader' => $websiteheader, 'websitemenu' => $websitemenu, 'footer' => $footer, 'inicioseccion9' => $servicios, 'agenda' => $appointlet));
    }

    public function busqueda(Request $request)
    {
        $textos = DB::table('textos')->where('pagina', '=', 'Screening')->get();
        $appointlet = DB::table('blog')->select('blog.url_agenda')->get();
        $websiteheader = DB::table('website_header')->get();
        $websitemenu = DB::table('website_menu')->get();
        $footer = DB::table('website_footer')->get();
        $servicios = DB::table('website_servicios')->get();

        return view('website.paginas.screening_en', array('textos' => $textos, 'websiteheader' => $websiteheader, 'websitemenu' => $websitemenu, 'footer' => $footer, 'inicioseccion9' => $servicios, 'agenda' => $appointlet));
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
        //
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
