<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Articulos;

class ListaEntradasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = DB::table('articulos')->join('categorias', 'articulos.id_cat', '=', 'categorias.id_categoria')->where('idioma', '=', 'ES')
            ->select('articulos.*', 'categorias.titulo_categoria')->orderBy('fecha_articulo', 'desc')->paginate(10);

        return view("ksadmin.blog.listaentradas", array(
            "articulos" => $articulos
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
    public function store(Request $request)
    {

        $detalle = Articulos::find($request->input("id_articulo"));
        $p_claves = explode(",", $request->input("p_claves_articulo"));


        $datos = array(
            "id_articulo" => $request->input("id_articulo"),
            "id_cat" => $request->input("categoria"),
            "titulo_articulo" => $request->input("titulo_articulo"),
            "descripcion_articulo" => $request->input("descripcion_articulo"),
            "p_claves_articulo" => json_encode($p_claves),
            "imagen_temporal" => $request->file("portada_articulo"),
            "img_exist" => $request->file("img_exist"),
            "contenido_articulo" => $request->input("editor_content")
        );

        $validar = \Validator::make($datos, [
            // "titulo_articulo" => "required|regex:/^[0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i",
            // "descripcion_articulo" => 'required|regex:/^[(\\)\\=\\&\\$\\;\\-\\_\\*\\"\\<\\>\\?\\¿\\!\\¡\\:\\,\\.\\0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i',
            "imagen_temporal" => "required|image|mimes:jpg,jpeg,png|max:2000000",
        ]);

        if (!$datos["imagen_temporal"]) {
            $url = "ks-admin/blog/entrada/" . $datos["id_articulo"];

            return redirect($url)->with("no-validacion", "no-validacion");
        } else {
            //Creamos el directorio donde guardaremos las imágenes del artículo

            $directorio = "images/blog/";

            if (!file_exists($directorio)) {

                mkdir($directorio, 0755);
            }

            $aleatorio = mt_rand(100, 999);

            $ruta = $directorio . "/" . $aleatorio . "." . $datos["imagen_temporal"]->guessExtension();

            //Redimensionar Imágen
            list($ancho, $alto) = getimagesize($datos["imagen_temporal"]);

            $nuevoAncho = 680;
            $nuevoAlto = 400;

            if ($datos["imagen_temporal"]->guessExtension() == "jpeg") {

                $origen = imagecreatefromjpeg($datos["imagen_temporal"]);
                $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                imagejpeg($destino, $ruta);
            }

            if ($datos["imagen_temporal"]->guessExtension() == "png") {

                $origen = imagecreatefrompng($datos["imagen_temporal"]);
                $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                imagealphablending($destino, FALSE);
                imagesavealpha($destino, TRUE);
                imagecopyresampled($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                imagepng($destino, $ruta);
            }

            $detalle->id_articulo = $datos["id_articulo"];
            $detalle->id_cat = $datos["id_cat"];
            $detalle->titulo_articulo = $datos["titulo_articulo"];
            $detalle->descripcion_articulo = $datos["descripcion_articulo"];
            $detalle->portada_articulo = $ruta;
            $detalle->p_claves_articulo = $datos["p_claves_articulo"];
            $detalle->contenido_articulo = $datos["contenido_articulo"];

            $detalle->save();
            $url = "/ks-admin/blog/lista_entradas";
        }


        return redirect($url)->with("status", "Datos guardados!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entrada = DB::table('articulos')->where('id_articulo', '=', $id)->get();
        $categorias = DB::table('categorias')->get();

        return view('ksadmin.blog.detalle', array('entrada' => $entrada, 'categorias' => $categorias));
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
