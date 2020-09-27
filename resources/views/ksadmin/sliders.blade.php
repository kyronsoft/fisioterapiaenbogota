@extends('ksadmin.panel')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <h3>Slider Uno</h3>
                <hr>
                <div class="form-group">
                    <label for="telefono">Titulo</label>
                  <input type="text" class="form-control" name="telefono" value="{{$textos[6]['spanish']}}">
                </div>
                <div class="form-group">
                    <label for="telefono">Subtitulo</label>
                  <input type="text" class="form-control" name="telefono" value="{{$textos[7]['spanish']}}">
                </div>
            </div>
            <div class="col-6">
                <h3>Slider Dos</h3>
                <hr>
                <div class="form-group">
                    <label for="telefono">Titulo</label>
                  <input type="text" class="form-control" name="telefono" value="{{$textos[8]['spanish']}}">
                </div>
                <div class="form-group">
                    <label for="telefono">Subtitulo Uno</label>
                  <input type="text" class="form-control" name="telefono" value="{{$textos[9]['spanish']}}">
                </div>
                <div class="form-group">
                    <label for="telefono">Subtitulo Dos</label>
                  <input type="text" class="form-control" name="telefono" value="{{$textos[10]['spanish']}}">
                </div>
                <div class="form-group">
                    <label for="telefono">Subtitulo Tres</label>
                  <input type="text" class="form-control" name="telefono" value="{{$textos[11]['spanish']}}">
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