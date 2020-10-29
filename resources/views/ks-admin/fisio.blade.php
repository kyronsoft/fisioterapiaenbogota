@extends('ksadmin')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Página Fisioterapia</li>
                <li class="breadcrumb-item active" aria-current="page">Secciones (3)</li>
            </ol>
        </nav>
        <form class="mb-5" action="/ksadmin/fisio/{{ $textos[0]->id }}" method="POST">
            @method('PUT')
            @csrf
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home0" role="tab"
                        aria-controls="pills-home" aria-selected="true">Español</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile0" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Inglés</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home0" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="col">
                        <textarea name="content_spanish" class="editor">{{ $textos[0]->spanish }}</textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile0" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="col">
                        <textarea name="content_english" class="editor">{{ $textos[0]->english }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>
        <hr>
        <form class="mb-5" action="/ksadmin/fisio/{{ $textos[1]->id }}" method="POST">
            @method('PUT')
            @csrf
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home1" role="tab"
                        aria-controls="pills-home" aria-selected="true">Español</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile1" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Inglés</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home1" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="col">
                        <textarea name="content_spanish" class="editor">{{ $textos[1]->spanish }}</textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="col">
                        <textarea name="content_english" class="editor">{{ $textos[1]->english }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>
        <hr>
        <form class="mb-5" action="/ksadmin/fisio/{{ $textos[2]->id }}" method="POST">
            @method('PUT')
            @csrf
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home2" role="tab"
                        aria-controls="pills-home" aria-selected="true">Español</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile2" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Inglés</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home2" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="col">
                        <textarea name="content_spanish" class="editor">{{ $textos[2]->spanish }}</textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="col">
                        <textarea name="content_english" class="editor">{{ $textos[2]->english }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>
        <hr>
        <form class="mb-5" action="/ksadmin/fisio/{{ $textos[3]->id }}" method="POST">
            @method('PUT')
            @csrf
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home3" role="tab"
                        aria-controls="pills-home" aria-selected="true">Español</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile3" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Inglés</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home3" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="col">
                        <textarea name="content_spanish" class="editor">{{ $textos[3]->spanish }}</textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile3" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="col">
                        <textarea name="content_english" class="editor">{{ $textos[3]->english }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>
        <hr>
        <form class="mb-5" action="/ksadmin/fisio/{{ $textos[4]->id }}" method="POST">
            @method('PUT')
            @csrf
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home4" role="tab"
                        aria-controls="pills-home" aria-selected="true">Español</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile4" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Inglés</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home4" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="col">
                        <textarea name="content_spanish" class="editor">{{ $textos[4]->spanish }}</textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile4" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="col">
                        <textarea name="content_english" class="editor">{{ $textos[4]->english }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>
        <hr>
        <form class="mb-5" action="/ksadmin/fisio/{{ $textos[5]->id }}" method="POST">
            @method('PUT')
            @csrf
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home5" role="tab"
                        aria-controls="pills-home" aria-selected="true">Español</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile5" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Inglés</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home5" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="col">
                        <textarea name="content_spanish" class="editor">{{ $textos[5]->spanish }}</textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile5" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="col">
                        <textarea name="content_english" class="editor">{{ $textos[5]->english }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>
        <hr>
        <form class="mb-5" action="/ksadmin/fisio/{{ $textos[6]->id }}" method="POST">
            @method('PUT')
            @csrf
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home6" role="tab"
                        aria-controls="pills-home" aria-selected="true">Español</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile6" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Inglés</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home6" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="col">
                        <textarea name="content_spanish" class="editor">{{ $textos[6]->spanish }}</textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile6" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="col">
                        <textarea name="content_english" class="editor">{{ $textos[6]->english }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>
        <hr>
        <form class="mb-5" action="/ksadmin/fisio/{{ $textos[7]->id }}" method="POST">
            @method('PUT')
            @csrf
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home7" role="tab"
                        aria-controls="pills-home" aria-selected="true">Español</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile7" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Inglés</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home7" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="col">
                        <textarea name="content_spanish" class="editor">{{ $textos[7]->spanish }}</textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile7" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="col">
                        <textarea name="content_english" class="editor">{{ $textos[7]->english }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>
        <hr>
        <form class="mb-5" action="/ksadmin/fisio/{{ $textos[8]->id }}" method="POST">
            @method('PUT')
            @csrf
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home8" role="tab"
                        aria-controls="pills-home" aria-selected="true">Español</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile8" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Inglés</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home8" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="col">
                        <textarea name="content_spanish" class="editor">{{ $textos[8]->spanish }}</textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile8" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="col">
                        <textarea name="content_english" class="editor">{{ $textos[8]->english }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>
        <hr>
        <form class="mb-5" action="/ksadmin/fisio/{{ $textos[9]->id }}" method="POST">
            @method('PUT')
            @csrf
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home9" role="tab"
                        aria-controls="pills-home" aria-selected="true">Español</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile9" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Inglés</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home9" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="col">
                        <textarea name="content_spanish" class="editor">{{ $textos[9]->spanish }}</textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile9" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="col">
                        <textarea name="content_english" class="editor">{{ $textos[9]->english }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>
        <hr>
        <form class="mb-5" action="/ksadmin/fisio/{{ $textos[10]->id }}" method="POST">
            @method('PUT')
            @csrf
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home10" role="tab"
                        aria-controls="pills-home" aria-selected="true">Español</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile10" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Inglés</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home10" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="col">
                        <textarea name="content_spanish" class="editor">{{ $textos[10]->spanish }}</textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile10" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="col">
                        <textarea name="content_english" class="editor">{{ $textos[10]->english }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>
    </div>
@endsection
