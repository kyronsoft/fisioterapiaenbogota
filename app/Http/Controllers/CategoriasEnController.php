<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Categorias;

class CategoriasEnController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(Categorias::all())
                ->addColumn('p_claves_en', function ($data) {

                    $tags = json_decode($data->p_claves_en, true);

                    $p_claves_en = '<h5>';

                    foreach ($tags as $key => $value) {

                        $p_claves_en .= '<span class="badge badge-secondary mx-1">' . $value . '</span>';
                    }

                    $p_claves_en .= '</h5>';

                    return $p_claves_en;
                })
                ->addColumn('acciones', function ($data) {

                    $acciones = '<a href="' . url()->current() . '/' . $data->id_categoria . '/edit" class="btn btn-warning btn-sm">
									<i class="fas fa-pencil-alt text-white"></i>
								</a>';

                    return $acciones;
                })
                ->rawColumns(['p_claves_en', 'acciones'])
                ->make(true);
        }

        $blog = Blog::all();

        return view("ksadmin.blog.categorias_en", array("blog" => $blog));
    }

    /*=============================================
    Crear un registro
    =============================================*/

    public function store(Request $request)
    {

        // Regocer datos
        $datos = array(
            "titulo_en" => $request->input("titulo_en"),
            "descripcion_en" => $request->input("descripcion_en"),
            "p_claves_en" => $request->input("p_claves_en"),
            "imagen_temporal" => $request->file("img_categoria")
        );

        // Validar datos
        if (!empty($datos)) {

            // $validar = \Validator::make($datos, [

            //     "titulo_en" => "required|regex:/^[0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i",
            //     "descripcion_en" => "required|regex:/^[0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i",
            //     "p_claves_en" => 'required|regex:/^[,\\0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i',
            //     "imagen_temporal" => "required|image|mimes:jpg,jpeg,png|max:2000000"

            // ]);

            //Guardar categoría
            if (!$datos["imagen_temporal"]) {

                return redirect("/ks-admin/blog/categorias_en")->with("no-validacion", "");
            } else {

                $aleatorio = mt_rand(100, 999);

                $ruta = "images/categorias/" . $aleatorio . "." . $datos["imagen_temporal"]->guessExtension();

                //Redimensionar Imágen

                list($ancho, $alto) = getimagesize($datos["imagen_temporal"]);

                $nuevoAncho = 1024;
                $nuevoAlto = 576;

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

                $categoria = new Categorias();
                $categoria->titulo_en = $datos["titulo_en"];
                $categoria->descripcion_en = $datos["descripcion_en"];
                $categoria->p_claves_en = json_encode(explode(",", $datos["p_claves_en"]));
                $categoria->img_categoria = $ruta;

                $categoria->save();

                return redirect("/ks-admin/blog/categorias_en")->with("ok-crear", "");
            }
        } else {

            return redirect("/ks-admin/blog/categorias_en")->with("error", "");
        }
    }

    /*=============================================
    Mostrar un solo registro
    =============================================*/

    public function show($id)
    {

        $categoria = Categorias::where('id_categoria', $id)->get();
        $blog = Blog::all();

        if (count($categoria) != 0) {

            return view("ksadmin.blog.categorias_en", array("status" => 200, "categoria" => $categoria, "blog" => $blog));
        } else {

            return view("ksadmin.blog.categorias_en", array("status" => 404, "blog" => $blog));
        }
    }

    /*=============================================
    Editar un registro
    =============================================*/

    public function update($id, Request $request)
    {
        // Recoger los datos

        $datos = array(
            "titulo_en" => $request->input("titulo_en"),
            "descripcion_en" => $request->input("descripcion_en"),
            "p_claves_en" => $request->input("p_claves_en"),
            "ruta_categoria" => $request->input("ruta_categoria"),
            "imagen_actual" => $request->input("imagen_actual")
        );

        // Recoger Imagen

        $imagen = array("imagen_temporal" => $request->file("img_categoria"));

        // Validar los datos

        if (!empty($datos)) {

            $validar = \Validator::make($datos, [

                "titulo_en" => "required|regex:/^[0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i",
                "descripcion_en" => "required|regex:/^[0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i",
                "p_claves_en" => 'required|regex:/^[,\\0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i',
                "ruta_categoria" => "required|regex:/^[a-z0-9-]+$/i",
                "imagen_actual" => "required"

            ]);

            if ($imagen["imagen_temporal"] != "") {

                $validarImagen = \Validator::make($imagen, [

                    "imagen_temporal" => "required|image|mimes:jpg,jpeg,png|max:2000000"

                ]);

                if ($validarImagen->fails()) {

                    return redirect("/ks-admin/blog/categorias_en")->with("no-validacion", "");
                }
            }

            if ($validar->fails()) {

                return redirect("/ks-admin/blog/categorias_en")->with("no-validacion", "");
            } else {

                if ($imagen["imagen_temporal"] != "") {

                    unlink($datos["imagen_actual"]);

                    $aleatorio = mt_rand(100, 999);

                    $ruta = "images/categorias/" . $aleatorio . "." . $imagen["imagen_temporal"]->guessExtension();

                    //Redimensionar Imágen

                    list($ancho, $alto) = getimagesize($imagen["imagen_temporal"]);

                    $nuevoAncho = 1024;
                    $nuevoAlto = 576;

                    if ($imagen["imagen_temporal"]->guessExtension() == "jpeg") {

                        $origen = imagecreatefromjpeg($imagen["imagen_temporal"]);
                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                        imagejpeg($destino, $ruta);
                    }

                    if ($imagen["imagen_temporal"]->guessExtension() == "png") {

                        $origen = imagecreatefrompng($imagen["imagen_temporal"]);
                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                        imagealphablending($destino, FALSE);
                        imagesavealpha($destino, TRUE);
                        imagecopyresampled($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                        imagepng($destino, $ruta);
                    }
                } else {

                    $ruta = $datos["imagen_actual"];
                }

                $datos = array(
                    "titulo_en" => $datos["titulo_en"],
                    "descripcion_en" => $datos["descripcion_en"],
                    "p_claves_en" => json_encode(explode(",", $datos["p_claves_en"])),
                    "ruta_categoria" => $datos["ruta_categoria"],
                    "img_categoria" => $ruta
                );

                $categoria = Categorias::where('id_categoria', $id)->update($datos);

                return redirect("/ks-admin/blog/categorias_en")->with("ok-editar", "");
            }
        } else {

            return redirect("/ks-admin/blog/categorias_en")->with("error", "");
        }
    }

    /*=============================================
    Eliminar un registro
    =============================================*/

    public function destroy($id, Request $request)
    {
        echo 'Entro!';
        return;
        $validar = Categorias::where("id_categoria", $id)->get();

        if (!empty($validar)) {

            if (!empty($validar[0]["img_categoria"])) {

                unlink($validar[0]["img_categoria"]);
            }

            $categoria = Categorias::where("id_categoria", $validar[0]["id_categoria"])->delete();

            //Responder al AJAX de JS
            return "ok";
        } else {

            return redirect("categorias")->with("no-borrar", "");
        }
    }
}
