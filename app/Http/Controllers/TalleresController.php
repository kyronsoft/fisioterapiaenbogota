<?php

namespace App\Http\Controllers;

use App\Talleres;
use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TalleresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talleres = DB::table('talleres')->select('talleres.*')->get();
        $contaller = DB::table('blog')->select('blog.talleres')->get();

        return view('ksadmin.adicionales.talleres', array("talleres" => $talleres, "contaller" => $contaller));
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
        $datos = array(
            "talleres" => $request->input("taller") == 'on' ? 1 : 0,
        );


        if ($request->hasFile("img_taller")) {
            $file = $request->img_taller;
            $output = 'images/talleres.jpg';
            file_put_contents($output, file_get_contents($file));

        }

        Blog::where('id', 1)->update($datos);
        $url = "/ks-admin/talleres";

        return redirect($url)->with("ok-talleres", "");
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
