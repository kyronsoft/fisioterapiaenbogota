@extends('ksadmin.plantilla')
@section('contents')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row d-flex justify-content-around">
                <div class="col-sm-6 col-md-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}/ks-admin">Home</a></li>
                        <li class="breadcrumb-item active">Article Blog</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
        <div class="row d-flex justify-content-around">
            <div class="col-2"></div>
            <div class="col-10">
                <form action="{{ url('/') }}/ks-admin/blog/entrada_en" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="categoria">Category</label>
                                <select class="form-control" name="categoria" id="categoria" required>
                                    <option value="0">-- Choose --</option>
                                    @foreach ($categorias as $key => $value)
                                        <option value="{{ $value->id_categoria }}">{{ $value->titulo_categoria }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="descripcion_en">Description</label>
                                <input type="text" class="form-control" name="descripcion_en"
                                    id="descripcion_en" required>
                            </div>
                            <div class="form-group">
                                <label for="p_claves_en">Keywords</label>
                                <input type="text" class="form-control" name="p_claves_en" id="p_claves_en"
                                    data-role="tagsinput" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="titulo_en">Title</label>
                                <input type="text" class="form-control" name="titulo_en" id="titulo_en"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="portada_articulo">Cover</label>
                                <input type="file" class="form-control" name="portada_articulo" id="portada_articulo">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-primary float-right mb-3">Save</button>
                        </div>
                    </div>
                    <textarea name="editor_content" id="myEditor"></textarea>
                </form>
            </div>
        </div>
    </div>

@endsection
