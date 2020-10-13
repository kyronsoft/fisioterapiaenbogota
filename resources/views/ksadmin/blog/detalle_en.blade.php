@extends('ksadmin.plantilla')
@section('contents')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Blog Entry</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/ks-admin') }}/ks-admin">Home</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="container-fluid">
            <div class="row d-flex justify-content-around">
                <div class="col-xs-6 col-md-12">
                    <form action="{{ url('/') }}/ks-admin/blog/detalle_en/{{ $entrada[0]->id_articulo }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="categoria">Category</label>
                                    <select class="form-control" name="categoria" id="categoria" required>
                                        <option value="0">-- Choose --</option>
                                        @foreach ($categorias as $key => $value)
                                            @php if ($value->id_categoria == $entrada[0]->id_cat ) { @endphp
                                            <option value="{{ $entrada[0]->id_cat }}" selected>
                                                {{ $value->titulo_categoria }}
                                            </option>
                                            @php } else { @endphp
                                            <option value="{{ $value->id_categoria }}">{{ $value->titulo_categoria }}
                                            </option>
                                            @php } @endphp
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="descripcion_en">Description</label>
                                    <input type="text" class="form-control" name="descripcion_en" id="descripcion_en"
                                        value="{{ $entrada[0]->descripcion_en }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="p_claves_en">Keywords</label>
                                    @php
                                    $tags = json_decode($entrada[0]->p_claves_en, true);
                                    $palabras_clave = "";
                                    foreach ($tags as $key => $value) {
                                    $palabras_clave .= $value.",";
                                    }
                                    @endphp
                                    <input type="text" class="form-control" name="p_claves_en" id="p_claves_en"
                                        value="{{ $palabras_clave }}" data-role="tagsinput" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="titulo_en">Title</label>
                                    <input type="text" class="form-control" name="titulo_en" id="titulo_en"
                                        value="{{ $entrada[0]->titulo_en }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="portada_articulo">Cover</label>
                                    <input type="file" class="form-control" name="portada_articulo" id="portada_articulo">
                                    <input type="hidden" name="img_exist"
                                        value="{{ url('/') }}/{{ $entrada[0]->portada_articulo }}">
                                </div>
                                <div class="form-group">
                                    <div class="text-center">
                                        <img src="{{ url('/') }}/{{ $entrada[0]->portada_articulo }}" alt=""
                                            style="width: 200px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-primary float-right mb-3">Save</button>
                            </div>
                        </div>
                        <input type="hidden" name="id_articulo" value="{{ $entrada[0]->id_articulo }}">
                        <textarea name="editor_content" id="myEditor">{{ $entrada[0]->contenido_en }}</textarea>
                    </form>
                </div>
            </div>
            <div class="row d-flex justify-content-around my-3">
                <div class="sharethis-inline-share-buttons"></div>
            </div>
        </div>
    </div>
    @if (session('no-validacion'))
        <script>
            notie.alert({
                type: 3,
                text: 'Se generó un error, intente nuevamente!',
                time: 10
            })

        </script>
    @endif

@endsection
