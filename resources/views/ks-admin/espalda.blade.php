@extends('ksadmin')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Página Dolores</li>
                <li class="breadcrumb-item active" aria-current="page">Dolor Espalda</li>
            </ol>
        </nav>
        <small>* Esta es la segunda parte del texto de este dolor. La primera parte está en Telerehabilitación.</small>
        <form class="mt-4" action="/ksadmin/espalda/{{ $textos[0]->id }}" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" name="id" value="{{ $textos[0]->id }}">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true">Español</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Inglés</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="col">
                        <textarea name="content_spanish" class="editor">{{ $textos[0]->spanish }}</textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="col">
                        <textarea name="content_english" class="editor">{{ $textos[0]->english }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>
    </div>
@endsection
