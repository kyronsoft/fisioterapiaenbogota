<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Textos;
use App\WebsiteMenu;
use App\WebsiteHeader;
use App\WebsiteYoutube;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = Textos::all();
        $websiteheader = WebsiteHeader::all();
        $menu = WebsiteMenu::select('website_menu.spanish')->get();
        $youtube = WebsiteYoutube::select('website_youtube.spanish')->get();

        $idioma = 'ES';

        return view('welcome', array('textos' => $textos, 'menu' => $menu, 'websiteheader' => $websiteheader, 'youtube' => $youtube, 'idioma' => $idioma));
    }

    public function index_en()
    {
        $textos = Textos::all();
        $websiteheader = WebsiteHeader::all();
        $menu = WebsiteMenu::select('website_menu.english')->get();
        $youtube = WebsiteYoutube::select('website_youtube.english')->get();

        $idioma = 'EN';

        return view('welcome', array('textos' => $textos, 'menu' => $menu, 'websiteheader' => $websiteheader, 'youtube' => $youtube, 'idioma' => $idioma));
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
