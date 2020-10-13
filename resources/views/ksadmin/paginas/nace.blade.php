@extends('ksadmin.plantilla')
@section('contents')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Cómo Nace Fysiopuntura</h1>
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
                    <form action="{{ url('/') }}/ks-admin/nace/68" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo1_es"
                            rows="10">{{ $textos[0]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/nace/68" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo1_en"
                            rows="10">{{ $textos[0]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/nace/69" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo2_es"
                            rows="10">{{ $textos[1]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/nace/69" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo2_en"
                            rows="10">{{ $textos[1]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/nace/70" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo3_es"
                            rows="10">{{ $textos[2]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/nace/70" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo3_en"
                            rows="10">{{ $textos[2]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/nace/71" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo4_es"
                            rows="10">{{ $textos[3]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/nace/71" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo4_en"
                            rows="10">{{ $textos[3]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/nace/72" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo5_es"
                            rows="10">{{ $textos[4]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/nace/72" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo5_en"
                            rows="10">{{ $textos[4]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
