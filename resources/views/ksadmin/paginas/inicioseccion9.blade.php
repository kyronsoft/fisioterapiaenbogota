@extends('ksadmin.plantilla')
@section('contents')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Seccion 9 - Pagina Inicio</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}/ks-admin">Inicio</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion9/1" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">ES</span>
                            </div>
                            <input type="text" class="form-control" name="titulo_es" value="{{ $textos[0]->spanish }}">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">US</span>
                            </div>
                            <input type="text" class="form-control" name="titulo_en" value="{{ $textos[0]->english }}">
                        </div>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion9/2" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo1_es"
                            rows="10">{{ $textos[1]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion9/2" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo1_en"
                            rows="10">{{ $textos[1]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion9/3" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">ES</span>
                            </div>
                            <input type="text" class="form-control" name="titulo2_es" value="{{ $textos[2]->spanish }}">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">US</span>
                            </div>
                            <input type="text" class="form-control" name="titulo2_en" value="{{ $textos[2]->english }}">
                        </div>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion9/4" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo2_es"
                            rows="10">{{ $textos[3]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion9/4" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo2_en"
                            rows="10">{{ $textos[3]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion9/5" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">ES</span>
                            </div>
                            <input type="text" class="form-control" name="titulo3_es" value="{{ $textos[4]->spanish }}">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">US</span>
                            </div>
                            <input type="text" class="form-control" name="titulo3_en" value="{{ $textos[4]->english }}">
                        </div>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion9/6" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo3_es"
                            rows="10">{{ $textos[5]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/inicio/seccion9/6" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo3_en"
                            rows="10">{{ $textos[5]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
