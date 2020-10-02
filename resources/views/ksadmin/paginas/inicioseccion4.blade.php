@extends('ksadmin.plantilla')
@section('contents')

<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <form action="{{ url('/') }}/ks-admin/inicio/seccion4/1" method="POST">
                @method('PUT')
                @csrf
                <textarea class="form-control summernote-sm" name="titulo_es"
                    rows="10">{{ $textos[0]->spanish }}</textarea>
                <hr>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ url('/') }}/ks-admin/inicio/seccion4/1" method="POST">
                @method('PUT')
                @csrf
                <textarea class="form-control summernote-sm" name="titulo_en"
                    rows="10">{{ $textos[0]->english }}</textarea>
                <hr>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <iframe width="400" height="250" src="{{ $textos[1]->spanish }}" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="col-6">
            <form action="{{ url('/') }}/ks-admin/inicio/seccion4/2" method="POST">
                @method('PUT')
                @csrf
                <input type="text" class="form-control" name="videoyt" value="{{$textos[1]->spanish}}">
                <hr>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <form action="{{ url('/') }}/ks-admin/inicio/seccion4/3" method="POST">
                @method('PUT')
                @csrf
                <textarea class="form-control summernote-sm" name="parrafo_es"
                    rows="10">{{ $textos[2]->spanish }}</textarea>
                <hr>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ url('/') }}/ks-admin/inicio/seccion4/3" method="POST">
                @method('PUT')
                @csrf
                <textarea class="form-control summernote-sm" name="parrafo_en"
                    rows="10">{{ $textos[2]->english }}</textarea>
                <hr>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
</div>

@endsection
