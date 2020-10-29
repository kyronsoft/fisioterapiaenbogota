<?php

namespace App\Http\Controllers;

use App\Articulos;
use App\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulos::all();

        return view('ks-admin.blog.articulos', array("articulos" => $articulos));
    }

    public function index_en()
    {
        $articulos = Articulos::all();

        return view('ks-admin.blog.articulos', array("articulos" => $articulos));
    }

    public function cargar()
    {
        $articulos = Articulos::where('idioma', '=', 'ES')->get();

        return json_encode($articulos, true);
    }

    public function cargar_en()
    {
        $articulos = Articulos::where('idioma', '=', 'EN')->get();

        return json_encode($articulos, true);
    }

    public function nuevo()
    {
        $categorias = Categorias::where('idioma', '=', 'ES')->get();

        return view('ks-admin.blog.articulo', array("categorias" => $categorias));
    }

    public function nuevo_en()
    {
        $categorias = Categorias::where('idioma', '=', 'EN')->get();

        return view('ks-admin.blog.articulo', array("categorias" => $categorias));
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
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('image')) {
            $imagePath = $request->file('image');
            $imageName = $imagePath->getClientOriginalName();

            $path = $request->file('image')->storeAs('blog', $imageName, 'public');
        }

        $data = array(
            "id_cat" => $request->input('categoria'),
            "portada_articulo" => "/storage/" . $path,
            "titulo_articulo" => $request->input("titulo"),
            "descripcion_articulo" => $request->input("descripcion"),
            "p_claves_articulo" => $request->input("p_claves"),
            "ruta_articulo" => str_replace(' ', '-', $request->input("titulo")),
            "contenido_articulo" => $request->input("content_spanish")
        );

        $articulo = new Articulos();
        $articulo->id_cat = $data["id_cat"];
        $articulo->titulo_articulo = $data["titulo_articulo"];
        $articulo->portada_articulo = $data["portada_articulo"];
        $articulo->descripcion_articulo = $data["descripcion_articulo"];
        $articulo->p_claves_articulo = $data["p_claves_articulo"];
        $articulo->ruta_articulo = $data["ruta_articulo"];
        $articulo->contenido_articulo = $data["contenido_articulo"];
        $articulo->save();

        return redirect('ksadmin/blog/articulos')->with('articulo-insert', 'articulo insertado!');
    }

    public function store_en(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('image')) {
            $imagePath = $request->file('image');
            $imageName = $imagePath->getClientOriginalName();

            $path = $request->file('image')->storeAs('blog', $imageName, 'public');
        }

        $data = array(
            "id_cat" => $request->input('categoria'),
            "portada_articulo" => "/storage/" . $path,
            "titulo_articulo" => $request->input("titulo"),
            "descripcion_articulo" => $request->input("descripcion"),
            "p_claves_articulo" => $request->input("p_claves"),
            "ruta_articulo" => str_replace(' ', '-', $request->input("titulo")),
            "contenido_articulo" => $request->input("content_english")
        );

        $articulo = new Articulos();
        $articulo->id_cat = $data["id_cat"];
        $articulo->titulo_en = $data["titulo_articulo"];
        $articulo->portada_articulo = $data["portada_articulo"];
        $articulo->descripcion_en = $data["descripcion_articulo"];
        $articulo->p_claves_en = $data["p_claves_articulo"];
        $articulo->ruta_articulo = $data["ruta_articulo"];
        $articulo->contenido_en = $data["contenido_articulo"];
        $articulo->idioma = 'EN';
        $articulo->save();

        return redirect('ksadmin/blog/articulos_en')->with('articulo-insert', 'articulo insertado!');
    }

    public function mostrar_articulo()
    {
        return 'Cargando';
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articulo = DB::table('articulos')->join('categorias', 'articulos.id_cat', '=', 'categorias.id_categoria')
            ->where([['articulos.id_articulo', '=', $id], ['articulos.idioma', '=', 'ES']])->select('articulos.*', 'categorias.titulo_categoria')
            ->get();
        $categorias = Categorias::all();

        return view('ks-admin.blog.articulo_edicion', array('articulo' => $articulo, 'categorias' => $categorias));
    }

    public function show_en($id)
    {
        $articulo = DB::table('articulos')->join('categorias', 'articulos.id_cat', '=', 'categorias.id_categoria')
            ->where([['articulos.id_articulo', '=', $id], ['articulos.idioma', '=', 'EN']])->select('articulos.*', 'categorias.titulo_categoria')
            ->get();
        $categorias = Categorias::all();

        return view('ks-admin.blog.articulo_edicion_en', array('articulo' => $articulo, 'categorias' => $categorias));
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
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($request->file('image')) {
                $imagePath = $request->file('image');
                $imageName = $imagePath->getClientOriginalName();

                $path = $request->file('image')->storeAs('blog', $imageName, 'public');
            }

            $data = array(
                "id_cat" => $request->input('categoria'),
                "portada_articulo" => "/storage/" . $path,
                "titulo_articulo" => $request->input("titulo"),
                "descripcion_articulo" => $request->input("descripcion"),
                "p_claves_articulo" => $request->input("p_claves"),
                "ruta_articulo" => str_replace(' ', '-', $request->input("titulo")),
                "contenido_articulo" => $request->input("content_spanish")
            );

            $articulo = Articulos::find($id);
            $articulo->id_cat = $data["id_cat"];
            $articulo->titulo_articulo = $data["titulo_articulo"];
            $articulo->portada_articulo = $data["portada_articulo"];
            $articulo->descripcion_articulo = $data["descripcion_articulo"];
            $articulo->p_claves_articulo = $data["p_claves_articulo"];
            $articulo->ruta_articulo = $data["ruta_articulo"];
            $articulo->contenido_articulo = $data["contenido_articulo"];
            $articulo->update();
        } else {
            $data = array(
                "id_cat" => $request->input('categoria'),
                "titulo_articulo" => $request->input("titulo"),
                "descripcion_articulo" => $request->input("descripcion"),
                "p_claves_articulo" => $request->input("p_claves"),
                "ruta_articulo" => str_replace(' ', '-', $request->input("titulo")),
                "contenido_articulo" => $request->input("content_spanish")
            );

            $articulo = Articulos::find($id);
            $articulo->id_cat = $data["id_cat"];
            $articulo->titulo_articulo = $data["titulo_articulo"];
            $articulo->descripcion_articulo = $data["descripcion_articulo"];
            $articulo->p_claves_articulo = $data["p_claves_articulo"];
            $articulo->ruta_articulo = $data["ruta_articulo"];
            $articulo->contenido_articulo = $data["contenido_articulo"];
            $articulo->update();
        }

        return redirect('ksadmin/blog/articulos')->with('articulo-update', 'articulo actualizado!');
    }

    public function update_en(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($request->file('image')) {
                $imagePath = $request->file('image');
                $imageName = $imagePath->getClientOriginalName();

                $path = $request->file('image')->storeAs('blog', $imageName, 'public');
            }

            $data = array(
                "id_cat" => $request->input('categoria'),
                "portada_articulo" => "/storage/" . $path,
                "titulo_articulo" => $request->input("titulo"),
                "descripcion_articulo" => $request->input("descripcion"),
                "p_claves_articulo" => $request->input("p_claves"),
                "ruta_articulo" => str_replace(' ', '-', $request->input("titulo")),
                "contenido_articulo" => $request->input("content_english")
            );

            $articulo = Articulos::find($id);
            $articulo->id_cat = $data["id_cat"];
            $articulo->titulo_en = $data["titulo_articulo"];
            $articulo->portada_articulo = $data["portada_articulo"];
            $articulo->descripcion_en = $data["descripcion_articulo"];
            $articulo->p_claves_en = $data["p_claves_articulo"];
            $articulo->ruta_articulo = $data["ruta_articulo"];
            $articulo->contenido_en = $data["contenido_articulo"];
            $articulo->update();
        } else {
            $data = array(
                "id_cat" => $request->input('categoria'),
                "titulo_articulo" => $request->input("titulo"),
                "descripcion_articulo" => $request->input("descripcion"),
                "p_claves_articulo" => $request->input("p_claves"),
                "ruta_articulo" => str_replace(' ', '-', $request->input("titulo")),
                "contenido_articulo" => $request->input("content_english")
            );

            $articulo = Articulos::find($id);
            $articulo->id_cat = $data["id_cat"];
            $articulo->titulo_en = $data["titulo_articulo"];
            $articulo->descripcion_en = $data["descripcion_articulo"];
            $articulo->p_claves_en = $data["p_claves_articulo"];
            $articulo->ruta_articulo = $data["ruta_articulo"];
            $articulo->contenido_en = $data["contenido_articulo"];
            $articulo->update();
        }

        return redirect('ksadmin/blog/articulos_en')->with('articulo-update', 'articulo actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar = Articulos::find($id);
        $eliminar->delete();

        return 'Articulo eliminado!';
    }

    public function destroy_en($id)
    {
        $eliminar = Articulos::find($id);
        $eliminar->delete();

        return 'Articulo eliminado!';
    }
}
