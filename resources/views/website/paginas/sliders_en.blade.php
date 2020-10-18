<section class="container-fluid carrusel-top punto-partida">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="img1-carousel">
                </div>
                <div class="carousel-caption">
                    <h1 class="text-primary titulo-slide1 animate__animated animate__backInUp">{{ $websitesliders[0]->english }}</h1>
                    <h3 class="text-primary subtitulo-slide1">{{ $websitesliders[1]->english }}</h3>
                    <a href="{{ url('/') }}/fisioterapia" class="btn btn-primary">Más información sobre Fisioterapia</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="img2-carousel"></div>
                <div class="carousel-caption">
                    <h1 class="text-primary titulo-slide2 animate__animated animate__backInUp">{{ $websitesliders[2]->english }}</h1>
                    <div class="row d-flex justify-content-around">
                        <div class="col-xs-12 col-md-4 d-flex align-items-center">
                            <img src="images/slider-icon2.png" alt="">
                            <h3 class="text-primary subtitulo1">{{ $websitesliders[3]->english }}</h3>
                        </div>
                        <div class="col-xs-12 col-md-4 d-flex align-items-center"><img src="images/slider-icon2.png"
                                alt="" class="img-subtitulo2">
                            <h3 class="text-primary subtitulo2">{{ $websitesliders[4]->english }}</h3>
                        </div>
                        <div class="col-xs-12 col-md-4 d-flex align-items-center"><img src="images/slider-icon2.png"
                                alt="">
                            <h3 class="text-primary subtitulo3">{{ $websitesliders[5]->english }}</h3>
                        </div>
                        <a href="{{ url('/') }}/telerehabilitation" class="btn btn-primary enlace-slide2">Más información sobre
                            Telerehabilitación</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
