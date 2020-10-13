<section class="container-fluid dolores">
    <div class="row">
        <div class="col-12 align-self-center">
            <h3 class="text-center titulo">Fisioterapia en Bogotá</h3>
            <h2 class="text-center text-primary subtitulo">Adriana Lucia Ramírez Bonilla</h2>
        </div>
    </div>
    <hr class="my-5">
    <div class="row d-flex justify-content-around">
        <div class="col-xs-12 col-md-8">
            <ul class="nav nav-tabs text-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#cuello" role="tab"
                        aria-controls="home" aria-selected="true">Dolor De Cuello y Hombro</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#espalda" role="tab"
                        aria-controls="profile" aria-selected="false">Dolor De Espalda</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#rodilla" role="tab"
                        aria-controls="contact" aria-selected="false">Dolor De Cadera Y Rodilla</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#deportivas" role="tab"
                        aria-controls="contact" aria-selected="false">Lesiones Deportivas</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="cuello" role="tabpanel" aria-labelledby="home-tab">
                    <div class="mt-5">@php echo $textos[78]->spanish; @endphp</div>
                    <div class="text-center mt-5">
                        <a href="#" class="btn btn-primary">Mas Información</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="espalda" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="mt-5">@php echo $textos[79]->spanish; @endphp</div>
                    <div class="text-center mt-5">
                        <a href="#" class="btn btn-primary">Mas Información</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="rodilla" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="mt-5">@php echo $textos[80]->spanish; @endphp</div>
                    <div class="text-center mt-5">
                        <a href="#" class="btn btn-primary">Mas Información</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="deportivas" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="mt-5">@php echo $textos[81]->spanish; @endphp</div>
                    <div class="text-center mt-5">
                        <a href="#" class="btn btn-primary">Mas Información</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-md-block col-md-4 align-self-center">
            <img src="images/problemas-de-espalda-.png" class="img-fluid" alt="">
        </div>
    </div>
</section>
