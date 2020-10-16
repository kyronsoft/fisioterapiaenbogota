<section class="container-fluid dolores">
    <div class="row">
        <div class="col-12 align-self-center">
            <h3 class="text-center titulo">Fisioterapia en Bogotá</h3>
            <h2 class="text-center text-primary subtitulo">Adriana Lucia Ramírez Bonilla</h2>
        </div>
    </div>
    <hr class="my-5">
    <div class="row d-flex justify-content-around">
        <div class="col-xs-12 col-md-7">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <ul class="nav nav-pills nav-pill-bordered nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" id="active-pill1" data-toggle="pill" href="#cuello"
                                    aria-expanded="true">Dolor De Cuello y Hombro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="link-pill1" data-toggle="pill" href="#espalda"
                                    aria-expanded="false">Dolor De Espalda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="link-pill1" data-toggle="pill" href="#rodilla"
                                    aria-expanded="false">Dolor De Cadera Y Rodilla</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="link-pill1" data-toggle="pill" href="#deportivas"
                                    aria-expanded="false">Lesiones Deportivas</a>
                            </li>
                        </ul>
                        <div class="tab-content px-1 pt-1">
                            <div role="tabpanel" class="tab-pane active" id="cuello" aria-labelledby="active-pill1"
                                aria-expanded="true">
                                <div class="mt-5">@php echo $textos[78]->spanish; @endphp</div>
                                <div class="text-center mt-5">
                                <a href="{{url('/')}}/cuello" class="btn btn-primary">Mas Información</a>
                                </div>
                            </div>
                            <div class="tab-pane" id="espalda" role="tabpanel" aria-labelledby="link-pill1"
                                aria-expanded="false">
                                <div class="mt-5">@php echo $textos[79]->spanish; @endphp</div>
                                <div class="text-center mt-5">
                                    <a href="{{url('/')}}/espalda" class="btn btn-primary">Mas Información</a>
                                </div>
                            </div>
                            <div class="tab-pane" id="rodilla" role="tabpanel" aria-labelledby="dropdownOpt2-pill1"
                                aria-expanded="false">
                                <div class="mt-5">@php echo $textos[80]->spanish; @endphp</div>
                                <div class="text-center mt-5">
                                    <a href="{{url('/')}}/rodilla" class="btn btn-primary">Mas Información</a>
                                </div>
                            </div>
                            <div class="tab-pane" id="deportivas" role="tabpanel" aria-labelledby="dropdownOpt2-pill2"
                                aria-expanded="false">
                                <div class="mt-5">@php echo $textos[81]->spanish; @endphp</div>
                                <div class="text-center mt-5">
                                    <a href="{{url('/')}}/deportivas" class="btn btn-primary btn-lg">Mas Información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-md-block col-md-5 align-self-center">
            <img src="images/problemas-de-espalda-.png" class="img-fluid" alt="">
        </div>
    </div>
</section>
