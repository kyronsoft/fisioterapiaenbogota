@extends('ksadmin.panel')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <h3>Slider Uno</h3>
                <hr>
                <div class="form-group">
                    <label for="telefono">Titulo</label>
                    <input type="hidden" value="{{$textos[23]->id}}">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">ES</span>
                        </div>
                        <input type="text" class="form-control" name="titulo" value="{{$textos[23]->spanish}}">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">US</span>
                        </div>
                        <input type="text" class="form-control" name="titulo" value="{{$textos[23]->english}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefono">Subtitulo</label>
                    <input type="hidden" value="{{$textos[24]->id}}">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">ES</span>
                        </div>
                        <input type="text" class="form-control" name="subtitulo" value="{{$textos[24]->spanish}}">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">US</span>
                        </div>
                        <input type="text" class="form-control" name="subtitulo" value="{{$textos[24]->english}}">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h3>Slider Dos</h3>
                <hr>
                <div class="form-group">
                    <label for="telefono">Titulo</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">ES</span>
                        </div>
                        <input type="text" class="form-control" name="titulo1" value="{{$textos[26]->spanish}}">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">US</span>
                        </div>
                        <input type="text" class="form-control" name="titulo1" value="{{$textos[26]->english}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefono">Subtitulo Uno</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">ES</span>
                        </div>
                        <input type="text" class="form-control" name="subtitulo1" value="{{$textos[27]->spanish}}">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">US</span>
                        </div>
                        <input type="text" class="form-control" name="subtitulo1" value="{{$textos[27]->english}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefono">Subtitulo Dos</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">ES</span>
                        </div>
                        <input type="text" class="form-control" name="subtitulo2" value="{{$textos[28]->spanish}}">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">US</span>
                        </div>
                        <input type="text" class="form-control" name="subtitulo2" value="{{$textos[28]->english}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefono">Subtitulo Tres</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">ES</span>
                        </div>
                        <input type="text" class="form-control" name="subtitulo3" value="{{$textos[29]->spanish}}">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">US</span>
                        </div>
                        <input type="text" class="form-control" name="subtitulo3" value="{{$textos[29]->english}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6"><h3>Imagen</h3>
                <hr>
                <input type="file" class="form-control @error('imagen') is-invalid @enderror" name="imagen1" id="imagen1">
                <div class="text-center">
                    <img src="../../images/beneficios-telerehabilitacion.jpg" alt="" style="width: 400px">
                </div>
            </div>
            <div class="col-6"><h3>Imagen</h3>
                <hr>
                <input type="file" class="form-control @error('imagen') is-invalid @enderror" name="imagen2" id="imagen2">
                <div class="text-center">
                    <img src="../../images/Fisioterapia-y-fisioterapeuta-en-bogota.jpg" alt="" style="width: 400px">
                </div>
            </div>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </div>
@endsection