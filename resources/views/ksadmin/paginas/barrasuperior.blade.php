@extends('ksadmin.plantilla')
@section('contents')

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <form action="{{ url('/') }}/barrasup/1" method="POST">
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
        <div class="col-6">
            <form action="{{ url('/') }}/barrasup/2" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="telefono_es" value="{{ $textos[1]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="telefono_en" value="{{ $textos[1]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <form action="{{ url('/') }}/barrasup/3" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="email_es" value="{{ $textos[2]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="email_en" value="{{ $textos[2]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ url('/') }}/barrasup/4" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="linkedin_es" value="{{ $textos[3]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="linkedin_en" value="{{ $textos[3]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <form action="{{ url('/') }}/barrasup/5" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="facebook_es" value="{{ $textos[4]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="facebook_en" value="{{ $textos[4]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ url('/') }}/barrasup/6" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="instagram_es" value="{{ $textos[5]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="instagram_en" value="{{ $textos[5]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <form action="{{ url('/') }}/barrasup/7" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="youtube_es" value="{{ $textos[6]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="youtube_en" value="{{ $textos[6]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
</div>

@endsection
