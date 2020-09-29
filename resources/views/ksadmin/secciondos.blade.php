@extends('ksadmin.panel')

    @section('content')
    <div class="containder-fluid">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="titulo">Título</label>
                <input type="text" class="form-control" name="titulo" value="{{$textos[31]['spanish']}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
            <textarea id="summernote" name="editordata">{{$textos[32]['spanish']}}</textarea>
            </div>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row d-flex justify-content-center">
            <button class="btn btn-primary">Actualizar</button>
        </div>
    </div>
    @endsection
