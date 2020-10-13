@extends('ksadmin.plantilla')
@section('contents')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dolor de Rodilla</h1>
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
                    <form action="{{ url('/') }}/ks-admin/rodilla/96" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo1_es"
                            rows="10">{{ $textos[0]->spanish }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ url('/') }}/ks-admin/rodilla/96" method="POST">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control summernote-sm" name="parrafo1_en"
                            rows="10">{{ $textos[0]->english }}</textarea>
                        <hr>
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
