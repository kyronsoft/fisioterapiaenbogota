@extends('ksadmin.plantilla')
@section('contents')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Contraseña para Documentos</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}/ks-admin">Inicio</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <hr>
        <div class="container-fluid mt-5">
            <div class="row d-flex justify-content-around">
                <div class="col-xs-12 col-md-8">
                    <form action="{{ url('/') }}/ks-admin/clave_documentos/{{ $clave[0]->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="clave">Contraseña</label>
                            <input type="text" class="form-control" id="clave" name="password"
                                value="{{ $clave[0]->password }}">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
