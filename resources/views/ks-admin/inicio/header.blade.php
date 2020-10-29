@extends('ksadmin')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Página Inicio</li>
                <li class="breadcrumb-item active" aria-current="page">Encabezado</li>
            </ol>
        </nav>
        <form class="mb-5" action="/ksadmin/inicio/header" method="POST">
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
                    <div class="row">
                        <div class="col-xs-12 col-md-6 mt-5">
                            <div class="form-group">
                                <label for="titulo_pagina" class="font-weight-bold">Título</label>
                                <input type="text" class="form-control" id="titulo_pagina" name="titulo"
                                    value="{{ $textos[0]->spanish }}">
                            </div>
                            <div class="form-group">
                                <label for="telefono" class="font-weight-bold">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono"
                                    value="{{ $textos[1]->spanish }}">
                            </div>
                            <div class="form-group">
                                <label for="email" class="font-weight-bold">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $textos[2]->spanish }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 mt-5">
                            <div class="form-group">
                                <label for="linkedin" class="font-weight-bold">LinkedIn</label>
                                <input type="text" class="form-control" id="linkedin" name="linkedin"
                                    value="{{ $textos[3]->spanish }}">
                            </div>
                            <div class="form-group">
                                <label for="facebook" class="font-weight-bold">Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook"
                                    value="{{ $textos[4]->spanish }}">
                            </div>
                            <div class="form-group">
                                <label for="instagram" class="font-weight-bold">Instagram</label>
                                <input type="text" class="form-control" id="instagram" name="instagram"
                                    value="{{ $textos[5]->spanish }}">
                            </div>
                            <div class="form-group">
                                <label for="youtube" class="font-weight-bold">Youtube</label>
                                <input type="text" class="form-control" id="youtube" name="youtube"
                                    value="{{ $textos[6]->spanish }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 mt-5">
                            <div class="form-group">
                                <label for="titulo_pagina" class="font-weight-bold">Título</label>
                                <input type="text" class="form-control" id="titulo_pagina" name="titulo_en"
                                    value="{{ $textos[0]->english }}">
                            </div>
                            <div class="form-group">
                                <label for="telefono" class="font-weight-bold">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono_en"
                                    value="{{ $textos[1]->english }}">
                            </div>
                            <div class="form-group">
                                <label for="email" class="font-weight-bold">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email_en"
                                    value="{{ $textos[2]->english }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 mt-5">
                            <div class="form-group">
                                <label for="linkedin" class="font-weight-bold">LinkedIn</label>
                                <input type="text" class="form-control" id="linkedin" name="linkedin_en"
                                    value="{{ $textos[3]->english }}">
                            </div>
                            <div class="form-group">
                                <label for="facebook" class="font-weight-bold">Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook_en"
                                    value="{{ $textos[4]->english }}">
                            </div>
                            <div class="form-group">
                                <label for="instagram" class="font-weight-bold">Instagram</label>
                                <input type="text" class="form-control" id="instagram" name="instagram_en"
                                    value="{{ $textos[5]->english }}">
                            </div>
                            <div class="form-group">
                                <label for="youtube" class="font-weight-bold">Youtube</label>
                                <input type="text" class="form-control" id="youtube" name="youtube_en"
                                    value="{{ $textos[6]->english }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>
    </div>
@endsection
