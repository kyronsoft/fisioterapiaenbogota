@extends('ksadmin.plantilla')
@section('contents')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row d-flex justify-content-around">
                <div class="col-sm-6 col-md-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}/ks-admin">Inicio</a></li>
                        <li class="breadcrumb-item active">Entrada Blog</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
        <div class="row d-flex justify-content-around">
            <div class="col-2"></div>
            <div class="col-10">
                <form action="{{ url('/') }}/ks-admin/blog/entrada" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="categoria">Categoría</label>
                                <select class="form-control" name="categoria" id="categoria" required>
                                    <option value="0">-- Seleccionar --</option>
                                    @foreach ($categorias as $key => $value)
                                        <option value="{{ $value->id_categoria }}">{{ $value->titulo_categoria }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="descripcion_articulo">Descripción</label>
                                <input type="text" class="form-control" name="descripcion_articulo"
                                    id="descripcion_articulo" required>
                            </div>
                            <div class="form-group">
                                <label for="p_claves_articulo">Palabras Clave</label>
                                <input type="text" class="form-control" name="p_claves_articulo" id="p_claves_articulo"
                                    data-role="tagsinput" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="titulo_articulo">Título</label>
                                <input type="text" class="form-control" name="titulo_articulo" id="titulo_articulo"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="portada_articulo">Portada</label>
                                <input type="file" class="form-control" name="portada_articulo" id="portada_articulo">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-primary float-right mb-3">Guardar</button>
                        </div>
                    </div>
                    <textarea name="editor_content" id="myEditor"></textarea>
                </form>
            </div>
        </div>
    </div>

@endsection
