<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Articulos;

class EntradaEnBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = DB::table('categorias')->get();

        return view("ksadmin.blog.entrada_en", array(
            "categorias" => $categorias
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
        $detalle = new Articulos();
        $p_claves = explode(",", $request->input("p_claves_en"));


        $datos = array(
            "id_cat" => $request->input("categoria"),
            "titulo_en" => $request->input("titulo_en"),
            "descripcion_en" => $request->input("descripcion_en"),
            "p_claves_en" => json_encode($p_claves),
            "imagen_temporal" => $request->file("portada"),
            "contenido_en" => $request->input("editor_content")
        );


        $validar = \Validator::make($datos, [
            "titulo_en" => "required|regex:/^[0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i",
            "descripcion_en" => 'required|regex:/^[(\\)\\=\\&\\$\\;\\-\\_\\*\\"\\<\\>\\?\\¿\\!\\¡\\:\\,\\.\\0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i',
            "imagen_temporal" => "required|image|mimes:jpg,jpeg,png|max:2000000",
        ]);

        if (!$datos["imagen_temporal"] || $validar->fails()) {
            $url = "ks-admin/blog/lista_entradas_en";

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

            // Mover todos los ficheros temporales al destino final
            // $origen = glob('img/temp/articulos/*');

            // foreach ($origen as $fichero) {

            //     copy($fichero, $directorio . "/" . substr($fichero, 19));
            //     unlink($fichero);
            // }

            $detalle->id_cat = $datos["id_cat"];
            $detalle->titulo_en = $datos["titulo_en"];
            $detalle->descripcion_en = $datos["descripcion_en"];
            $detalle->portada = $ruta;
            $detalle->p_claves_en = $datos["p_claves_en"];
            $detalle->contenido_en = $datos["contenido_en"];

            $detalle->save();
            $url = "ks-admin/blog/lista_entradas_en";
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
        $entrada = DB::table('Articulos')->where('id_articulo', '=', $id)->get();
        $categorias = DB::table('Categorias')->get();

        return view('ksadmin.blog.detalle_en', array("entrada" => $entrada, "categorias" => $categorias));
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
        $detalle = new Articulos();
        $p_claves = explode(",", $request->input("p_claves_en"));

        $datos = array(
            "id_cat" => $request->input("categoria"),
            "titulo_en" => $request->input("titulo_en"),
            "descripcion_en" => $request->input("descripcion_en"),
            "p_claves_en" => json_encode($p_claves),
            "contenido_en" => $request->input("editor_content")
        );

        $detalle->id_cat = $datos["id_cat"];
        $detalle->titulo_en = $datos["titulo_en"];
        $detalle->descripcion_en = $datos["descripcion_en"];
        $detalle->p_claves_en = $datos["p_claves_en"];
        $detalle->contenido_en = $datos["editor_content"];

        $detalle->save();
        $url = "ks-admin/blog/lista_entradas_en";


        return redirect($url)->with("status", "Datos guardados!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $validar = Articulos::where("id_articulo", $id)->get();

        if (!empty($validar)) {

            $articulo = Articulos::where("id_articulo", $validar[0]["id_articulo"])->delete();

            //Responder al AJAX de JS
            return "ok";
        } else {

            return redirect("ks-admin/blog/lista_entradas_en")->with("no-borrar", "");
        }
    }
}
