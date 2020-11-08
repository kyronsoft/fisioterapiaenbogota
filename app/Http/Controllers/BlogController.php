<?php

namespace App\Http\Controllers;

use App\Textos;
use App\Articulos;
use App\Opiniones;
use App\WebsiteMenu;
use App\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idioma = 'ES';
        $textos = Textos::all();
        $articulos = Articulos::where('idioma', '=', 'ES')->paginate(8);
        $mas_vistos = DB::table('articulos')->where('idioma', '=', 'ES')->select('articulos.*')->orderBy('vistas_articulo', 'desc')->limit(5)->get();
        $menu = WebsiteMenu::select('website_menu.spanish')->get();
        $categorias = DB::select("select t1.titulo_categoria, count(t1.titulo_categoria) cantidad from categorias t1, articulos t2 where t2.idioma = ?
                                    and t1.id_categoria = t2.id_cat group by t1.titulo_categoria", [$idioma]);
        $websiteheader = DB::table('website_header')->get();

        return view('blog.blog', array(
            'websiteheader' => $websiteheader,
            'textos' => $textos,
            'menu' => $menu,
            'idioma' => $idioma,
            'articulos' => $articulos,
            'mas_vistos' => $mas_vistos,
            'categorias' => $categorias
        ));
    }

    public function index_en()
    {
        $idioma = 'EN';
        $textos = Textos::all();
        $articulos = Articulos::where('idioma', '=', 'EN')->paginate(8);
        $mas_vistos = DB::table('articulos')->where('idioma', '=', 'EN')->select('articulos.*')->orderBy('vistas_articulo', 'desc')->limit(5)->get();
        $menu = WebsiteMenu::select('website_menu.english')->get();
        $categorias = DB::select("select t1.titulo_categoria, count(t1.titulo_categoria) cantidad from categorias t1, articulos t2 where t2.idioma = ?
                                    and t1.id_categoria = t2.id_cat group by t1.titulo_categoria", [$idioma]);
        $websiteheader = DB::table('website_header')->get();

        return view('blog.blog', array(
            'websiteheader' => $websiteheader,
            'textos' => $textos,
            'menu' => $menu,
            'idioma' => $idioma,
            'articulos' => $articulos,
            'mas_vistos' => $mas_vistos,
            'categorias' => $categorias
        ));
    }

    public function comentarios($id)
    {
        $comentarios = DB::table('opiniones')->where('id_art', '=', $id)->count();

        return $comentarios;
    }

    public function megusta($id)
    {
        $megusta = DB::table('articulos')->where('id_articulo', '=', $id)->select('articulos.megusta')->get();

        return $megusta;
    }


    public function vistas($id)
    {
        $vistas = DB::table('articulos')->where('id_articulo', '=', $id)->select('articulos.vistas_articulo')->get();

        return $vistas;
    }

    public function categoria(Request $request)
    {
        $criterio = $request->input("search");
        $idioma = 'ES';
        $textos = Textos::all();
        $articulos = DB::table('articulos')
            ->join('categorias', 'articulos.id_cat', '=', 'categorias.id_categoria')
            ->where([['articulos.idioma', '=', 'ES'], ['categorias.titulo_categoria', 'like', '%' . $criterio . '%']])->paginate(8);
        $mas_vistos = DB::table('articulos')->where('idioma', '=', 'ES')->select('articulos.*')->orderBy('vistas_articulo', 'desc')->limit(5)->get();
        $menu = WebsiteMenu::select('website_menu.spanish')->get();
        $categorias = DB::select("select t1.titulo_categoria, count(t1.titulo_categoria) cantidad from categorias t1, articulos t2 where t2.idioma = ?
                                    and t1.id_categoria = t2.id_cat group by t1.titulo_categoria", [$idioma]);

        return view('blog.blog', array('textos' => $textos, 'menu' => $menu, 'idioma' => $idioma, 'articulos' => $articulos, 'mas_vistos' => $mas_vistos, 'categorias' => $categorias));
    }

    public function busqueda(Request $request)
    {
        $criterio = $request->input("search");
        $idioma = 'ES';
        $textos = Textos::all();
        $websiteheader = DB::table('website_header')->get();
        $articulos = DB::table('articulos')
            ->where('articulos.idioma', '=', 'ES')
            ->where(function ($query) use ($criterio) {
                $query->orWhere('articulos.p_claves_articulo', 'like', '%' . $criterio . '%')
                    ->orWhere('articulos.titulo_articulo', 'like', '%' . $criterio . '%');
            })->paginate(8);

        $mas_vistos = DB::table('articulos')->where('idioma', '=', 'ES')->select('articulos.*')->orderBy('vistas_articulo', 'desc')->limit(5)->get();
        $menu = WebsiteMenu::select('website_menu.spanish')->get();
        $categorias = DB::select("select t1.titulo_categoria, count(t1.titulo_categoria) cantidad from categorias t1, articulos t2 where t2.idioma = ?
                                    and t1.id_categoria = t2.id_cat group by t1.titulo_categoria", [$idioma]);

        return view('blog.blog', array(
            'websiteheader' => $websiteheader,
            'textos' => $textos,
            'menu' => $menu,
            'idioma' => $idioma,
            'articulos' => $articulos,
            'mas_vistos' => $mas_vistos,
            'categorias' => $categorias
        ));
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
    public function store(Request $request, $id)
    {
        $data = array(
            "nombre_opinion" => $request->input("username"),
            "correo_opinion" => $request->input("email"),
            "contenido_opinion" => $request->input("usercomment")
        );

        $opinion = new Opiniones();
        $opinion->id_art = $id;
        $opinion->nombre_opinion = $data["nombre_opinion"];
        $opinion->correo_opinion = $data["correo_opinion"];
        $opinion->contenido_opinion = $data["contenido_opinion"];
        $opinion->save();

        $url = '/blog/articulo/' . $id;
        return redirect($url)->with('opinion-ok', 'Opinion Agregada!');
    }

    public function store_en(Request $request, $id)
    {
        $data = array(
            "nombre_opinion" => $request->input("username"),
            "correo_opinion" => $request->input("email"),
            "contenido_opinion" => $request->input("usercomment")
        );

        $opinion = new Opiniones();
        $opinion->id_art = $id;
        $opinion->nombre_en = $data["nombre_opinion"];
        $opinion->correo_en = $data["correo_opinion"];
        $opinion->contenido_en = $data["contenido_opinion"];
        $opinion->save();

        $url = '/blog/articulo_en/' . $id;
        return redirect($url)->with('opinion-ok', 'Opinion Agregada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $idioma = 'ES';
        $textos = Textos::all();
        $articulo = DB::table('articulos')->where('ruta_articulo', '=', $id)->select('articulos.*')->get();
        $mas_vistos = DB::table('articulos')->where('idioma', '=', 'ES')->select('articulos.*')->orderBy('vistas_articulo', 'desc')->limit(5)->get();
        $menu = WebsiteMenu::select('website_menu.spanish')->get();
        $categorias = DB::select("select t1.titulo_categoria, count(t1.titulo_categoria) cantidad from categorias t1, articulos t2 where t2.idioma = ?
                                    and t1.id_categoria = t2.id_cat group by t1.titulo_categoria", [$idioma]);
        $websiteheader = DB::table('website_header')->get();
        $opiniones = DB::table('opiniones')->join('articulos', 'opiniones.id_art', '=', 'articulos.id_articulo')->where('articulos.ruta_articulo', '=', $id)->get();

        $vistas = $articulo[0]->vistas_articulo;
        $id_upd = $articulo[0]->id_articulo;
        $vistas++;
        $articulo_upd = Articulos::find($id_upd);
        $articulo_upd->vistas_articulo = $vistas;
        $articulo_upd->update();
        
        return view('blog.post', array(
            'textos' => $textos,
            'websiteheader' => $websiteheader,
            'menu' => $menu,
            'idioma' => $idioma,
            'articulo' => $articulo,
            'mas_vistos' => $mas_vistos,
            'categorias' => $categorias,
            'opiniones' => $opiniones
        ));
    }

    public function show_en($id)
    {
        $idioma = 'EN';
        $textos = Textos::all();
        $articulo = DB::table('articulos')->where('ruta_articulo', '=', $id)->select('articulos.*')->get();
        $mas_vistos = DB::table('articulos')->where('idioma', '=', 'EN')->select('articulos.*')->orderBy('vistas_articulo', 'desc')->limit(5)->get();
        $menu = WebsiteMenu::select('website_menu.english')->get();
        $categorias = DB::select("select t1.titulo_categoria, count(t1.titulo_categoria) cantidad from categorias t1, articulos t2 where t2.idioma = ?
                                    and t1.id_categoria = t2.id_cat group by t1.titulo_categoria", [$idioma]);
        $websiteheader = DB::table('website_header')->get();
        $opiniones = DB::table('opiniones')->join('articulos', 'opiniones.id_art', '=', 'articulos.id_articulo')->where('articulos.ruta_articulo', '=', $id)->get();

        $vistas = $articulo[0]->vistas_articulo;
        $id_upd = $articulo[0]->id_articulo;
        $vistas++;
        $articulo_upd = Articulos::find($id_upd);
        $articulo_upd->vistas_articulo = $vistas;
        $articulo_upd->update();        
        
        return view('blog.post', array(
            'textos' => $textos,
            'websiteheader' => $websiteheader,
            'menu' => $menu,
            'idioma' => $idioma,
            'articulo' => $articulo,
            'mas_vistos' => $mas_vistos,
            'categorias' => $categorias,
            'opiniones' => $opiniones
        ));
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
