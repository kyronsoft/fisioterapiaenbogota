<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Articulos;

class EntradaBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = DB::table('categorias')->get();

        return view("ksadmin.blog.entrada", array(
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
        $p_claves = explode(",", $request->input("p_claves_articulo"));


        $datos = array(
            "id_cat" => $request->input("categoria"),
            "titulo_articulo" => $request->input("titulo_articulo"),
            "descripcion_articulo" => $request->input("descripcion_articulo"),
            "p_claves_articulo" => json_encode($p_claves),
            "imagen_temporal" => $request->file("portada_articulo"),
            "contenido_articulo" => $request->input("editor_content")
        );


        $validar = \Validator::make($datos, [
            "titulo_articulo" => "required|regex:/^[0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i",
            "descripcion_articulo" => 'required|regex:/^[(\\)\\=\\&\\$\\;\\-\\_\\*\\"\\<\\>\\?\\¿\\!\\¡\\:\\,\\.\\0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i',
            "imagen_temporal" => "required|image|mimes:jpg,jpeg,png|max:2000000",
        ]);

        if (!$datos["imagen_temporal"] || $validar->fails()) {
            $url = "ks-admin/blog/lista_entradas";

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
            $detalle->titulo_articulo = $datos["titulo_articulo"];
            $detalle->descripcion_articulo = $datos["descripcion_articulo"];
            $detalle->portada_articulo = $ruta;
            $detalle->p_claves_articulo = $datos["p_claves_articulo"];
            $detalle->contenido_articulo = $datos["contenido_articulo"];

            $detalle->save();
            $url = "ks-admin/blog/lista_entradas";
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
        $entrada = DB::table('Articulos')->where('id_articulo', '=', $id)->get();
        $categorias = DB::table('Categorias')->get();

        return view('ksadmin.blog.detalle', array("entrada" => $entrada, "categorias" => $categorias));
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
        $detalle = new Articulos();
        $p_claves = explode(",", $request->input("p_claves_articulo"));


        $datos = array(
            "id_cat" => $request->input("categoria"),
            "titulo_articulo" => $request->input("titulo_articulo"),
            "descripcion_articulo" => $request->input("descripcion_articulo"),
            "p_claves_articulo" => json_encode($p_claves),
            "imagen_temporal" => $request->file("portada_articulo"),
            "contenido_articulo" => $request->input("editor_content")
        );


        $validar = \Validator::make($datos, [
            "titulo_articulo" => "required|regex:/^[0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i",
            "descripcion_articulo" => 'required|regex:/^[(\\)\\=\\&\\$\\;\\-\\_\\*\\"\\<\\>\\?\\¿\\!\\¡\\:\\,\\.\\0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i',
            "imagen_temporal" => "required|image|mimes:jpg,jpeg,png|max:2000000",
        ]);

        if (!$datos["imagen_temporal"] || $validar->fails()) {
            $url = "ks-admin/blog/lista_entradas";

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
            $detalle->titulo_articulo = $datos["titulo_articulo"];
            $detalle->descripcion_articulo = $datos["descripcion_articulo"];
            $detalle->portada_articulo = $ruta;
            $detalle->p_claves_articulo = $datos["p_claves_articulo"];
            $detalle->contenido_articulo = $datos["contenido_articulo"];

            $detalle->save();
            $url = "ks-admin/blog/lista_entradas";
        }


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

            // capturamos los archivos para eliminarlos uno por uno
            // $origen = glob('images/blog/' . $validar[0]["ruta_articulo"] . '/*');

            // foreach ($origen as $fichero) {

            //     unlink($fichero);
            // }

            // //Eliminamos directorio

            // rmdir('img/articulos/' . $validar[0]["ruta_articulo"]);


            $articulo = Articulos::where("id_articulo", $validar[0]["id_articulo"])->delete();

            //Responder al AJAX de JS
            return "ok";
        } else {

            return redirect("ks-admin/blog/lista_entradas")->with("no-borrar", "");
        }
    }
}
