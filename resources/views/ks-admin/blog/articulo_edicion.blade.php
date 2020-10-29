@extends('ksadmin')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Blog</li>
                <li class="breadcrumb-item active" aria-current="page">Editar Artículo</li>
            </ol>
        </nav>
        <form class="mb-5" action="/ksadmin/blog/articulos/{{ $articulo[0]->id_articulo }}/actualizar" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="col d-flex justify-content-end mt-3">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
            <div class="col">
                <div class="row mt-5">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <select class="form-control" name="categoria" id="categoria">
                                <option value="0">--- Seleccionar ---</option>
                                @foreach ($categorias as $item)
                                    @if ($item->id_categoria == $articulo[0]->id_cat)
                                        <option value="{{ $item->id_categoria }}" selected>
                                            {{ $item->titulo_categoria }}
                                        </option>
                                    @else
                                        <option value="{{ $item->id_categoria }}">
                                            {{ $item->titulo_categoria }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="portada">Portada</label>
                                    <input class="form-control" id="portada" type="file" name="image"
                                        value={{ $articulo[0]->portada_articulo }}>
                                </div>
                            </div>
                            <div class="col-4">
                                <img src="{{ $articulo[0]->portada_articulo }}" alt="imagen_articulo_blog"
                                    style="width: 50%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" class="form-control" id="titulo" name="titulo"
                                value="{{ $articulo[0]->titulo_articulo }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion"
                                value="{{ $articulo[0]->descripcion_articulo }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="p_claves">Palabras Clave</label>
                            <input type="text" class="form-control" id="p_claves" name="p_claves"
                                value="{{ $articulo[0]->p_claves_articulo }}">
                        </div>
                    </div>
                    <div class="col-6"></div>
                </div>
            </div>
            <div class="form-group">
                <label for="editor">Contenido</label>
                <textarea name="content_spanish" class="editor_blog">{{ $articulo[0]->contenido_articulo }}</textarea>
            </div>
        </form>
    </div>
@endsection
