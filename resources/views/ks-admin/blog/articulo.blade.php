@extends('ksadmin')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Blog</li>
                <li class="breadcrumb-item active" aria-current="page">Nuevo Artículo</li>
            </ol>
        </nav>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Español</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">Inglés</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <form class="mb-5" action="/ksadmin/blog/articulos" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-success">Agregar</button>
                    </div>
                    <div class="col">
                        <div class="row mt-5">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="categoria">Categoria</label>
                                    <select class="form-control" name="categoria" id="categoria">
                                        <option value="0">--- Seleccionar ---</option>
                                        @foreach ($categorias as $item)
                                            <option value="{{ $item->id_categoria }}">{{ $item->titulo_categoria }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="portada">Portada</label>
                                            <input class="form-control" id="portada" type="file" name="image">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <img src="{{ url('/') }}/storage/sin_foto.jpg" alt="articulo_sin_imagen">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="titulo">Título</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="descripcion">Descripción</label>
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="p_claves">Palabras Clave</label>
                                    <input type="text" class="form-control" id="p_claves" name="p_claves" required>
                                </div>
                            </div>
                            <div class="col-6"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="editor">Contenido</label>
                        <textarea name="content_spanish" class="editor_blog"></textarea>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <form class="mb-5" action="/ksadmin/blog/articulos_en" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-success">Agregar</button>
                    </div>
                    <div class="col">
                        <div class="row mt-5">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="categoria">Categoria</label>
                                    <select class="form-control" name="categoria" id="categoria">
                                        <option value="0">--- Seleccionar ---</option>
                                        @foreach ($categorias as $item)
                                            <option value="{{ $item->id_categoria }}">{{ $item->titulo_categoria }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="portada">Portada</label>
                                            <input class="form-control" id="portada" type="file" name="image">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <img src="{{ url('/') }}/storage/sin_foto.jpg" alt="articulo_sin_imagen">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="titulo">Título</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="descripcion">Descripción</label>
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="p_claves">Palabras Clave</label>
                                    <input type="text" class="form-control" id="p_claves" name="p_claves" required>
                                </div>
                            </div>
                            <div class="col-6"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="editor">Contenido</label>
                            <textarea name="content_english" class="editor_blog"></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
