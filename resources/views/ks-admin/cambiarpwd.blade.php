@extends('ksadmin')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Cambiar Contraseña</li>
                <li class="breadcrumb-item active" aria-current="page">Usuario Administrador</li>
            </ol>
        </nav>
        <form class="mb-5" action="/ksadmin/cambiarpwd/{{ \Auth::user()->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-6">
                    <div class="form-group">
                        <label for="password">Nueva contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" minlength="8">
                    </div>
                    <div class="form-group">
                        <label for="password">Confirmar nueva contraseña</label>
                        <input type="password" class="form-control" id="confpassword" name="confpassword" minlength="8">
                    </div>
                    <button type="submit" class="btn btn-info">Cambiar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
