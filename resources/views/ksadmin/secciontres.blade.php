@extends('ksadmin.panel')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="form group">
                    <label for="">Título</label>
                    <input type="text" class="form-control" value="{{$textos[33]['spanish']}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form group">
                    <label for="">Subtítulo</label>
                    <input type="text" class="form-control" value="{{$textos[34]['spanish']}}">
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="form-group">
                <label for="">Item Uno</label>
                <textarea id="summernote">{{$textos[35]['spanish']}}</textarea>
            </div>
            <div class="form-group">
                <label for="">Item Dos</label>
                <textarea id="summernote1">{{$textos[36]['spanish']}}</textarea>
            </div>
            <div class="form-group">
                <label for="">Item Tres</label>
                <textarea id="summernote2">{{$textos[37]['spanish']}}</textarea>
            </div>
            <div class="form-group">
                <label for="">Item Cuatro</label>
                <textarea id="summernote3">{{$textos[38]['spanish']}}</textarea>
            </div>
            <div class="form-group">
                <label for="">Item Cinco</label>
                <textarea id="summernote4">{{$textos[39]['spanish']}}</textarea>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <button class="btn btn-primary">Actualizar</button>
        </div>
    </div>
@endsection