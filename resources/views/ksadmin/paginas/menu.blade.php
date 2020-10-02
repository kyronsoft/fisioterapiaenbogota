@extends('ksadmin.plantilla')
@section('contents')

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <form action="{{ url('/') }}/menu/1" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="inicio_es" value="{{ $textos[0]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="inicio_en" value="{{ $textos[0]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ url('/') }}/menu/2" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="quien_es" value="{{ $textos[1]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="quien_en" value="{{ $textos[1]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <form action="{{ url('/') }}/menu/3" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="acerca_es" value="{{ $textos[2]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="acerca_en" value="{{ $textos[2]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ url('/') }}/menu/4" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="nace_es" value="{{ $textos[3]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="nace_en" value="{{ $textos[3]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <form action="{{ url('/') }}/menu/5" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="servicios_es" value="{{ $textos[4]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="servicios_en" value="{{ $textos[4]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ url('/') }}/menu/6" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="teler_es" value="{{ $textos[5]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="teler_en" value="{{ $textos[5]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <form action="{{ url('/') }}/menu/7" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="fisio_es" value="{{ $textos[6]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="fisio_en" value="{{ $textos[6]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ url('/') }}/menu/8" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="cuello_es" value="{{ $textos[7]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="cuello_en" value="{{ $textos[7]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <form action="{{ url('/') }}/menu/9" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="espalda_es" value="{{ $textos[8]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="espalda_en" value="{{ $textos[8]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ url('/') }}/menu/10" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="rodilla_es" value="{{ $textos[9]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="rodilla_en" value="{{ $textos[9]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <form action="{{ url('/') }}/menu/11" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="deportivas_es" value="{{ $textos[10]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="deportivas_en" value="{{ $textos[10]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ url('/') }}/menu/12" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="blog_es" value="{{ $textos[11]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="blog_en" value="{{ $textos[11]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <form action="{{ url('/') }}/menu/13" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="contacto_es" value="{{ $textos[12]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="contacto_en" value="{{ $textos[12]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ url('/') }}/menu/14" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="idioma_es" value="{{ $textos[13]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="idioma_en" value="{{ $textos[13]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <form action="{{ url('/') }}/menu/15" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="english_es" value="{{ $textos[14]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="english_en" value="{{ $textos[14]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ url('/') }}/menu/16" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ES</span>
                    </div>
                    <input type="text" class="form-control" name="spanish_es" value="{{ $textos[15]->spanish }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">US</span>
                    </div>
                    <input type="text" class="form-control" name="spanish_en" value="{{ $textos[15]->english }}">
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
</div>

@endsection
