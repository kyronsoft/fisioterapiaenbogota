<section class="container-fluid carrusel-top">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="img1-carousel">
                </div>
                <div class="carousel-caption">
                    <h1 class="text-primary">{{ $websitesliders[0]->spanish }}</h1>
                    <h3 class="text-primary">{{ $websitesliders[1]->spanish }}</h3>
                    <a href="#" class="btn btn-primary">Más información sobre Fisioterapia</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="img2-carousel"></div>
                <div class="carousel-caption">
                    <h1 class="text-primary">{{ $websitesliders[2]->spanish }}</h1>
                    <div class="row d-flex justify-content-around">
                        <div class="col-xs-12 col-md-4 d-flex align-items-center">
                            <img src="images/slider-icon2.png" alt="">
                            <h3 class="text-primary">{{ $websitesliders[3]->spanish }}</h3>
                        </div>
                        <div class="col-xs-12 col-md-4 d-flex align-items-center"><img src="images/slider-icon2.png"
                                alt="">
                            <h3 class="text-primary">{{ $websitesliders[4]->spanish }}</h3>
                        </div>
                        <div class="col-xs-12 col-md-4 d-flex align-items-center"><img src="images/slider-icon2.png"
                                alt="">
                            <h3 class="text-primary">{{ $websitesliders[5]->spanish }}</h3>
                        </div>
                        <a href="{{ url('/') }}/telerehab" class="btn btn-primary">Más información sobre Telerehabilitación</a>
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
