<section class="container-fluid d-flex seccion-once">
    <div class="row justify-content-around text-center mt-5 fila">
        <div class="col-xs-12 col-lg-3">
            <img src="{{ url('/') }}/images/telerehabilitacion-pose-bogota-colombia.jpg" alt=""
                class="img-thumbnail rounded-circle">
            <h3>@php echo $inicioseccion9[0]->english; @endphp</h3>
            <div class="texto-sec11">@php echo $inicioseccion9[1]->english; @endphp</div>
            <a href="{{ url('/') }}/telerehabilitacion" class="btn btn-primary">More information</a>
        </div>
        <div class="col-xs-12 col-lg-3">
            <img src="{{ url('/') }}/images/fisioterapia-en-bogota-colombia.jpg" alt=""
                class="img-thumbnail rounded-circle">
            <h3>@php echo $inicioseccion9[2]->english; @endphp</h3>
            <div class="texto-sec11">@php echo $inicioseccion9[3]->english; @endphp
            </div>
            <a href="{{ url('/') }}/fisioterapia" class="btn btn-primary">More information</a>
        </div>
        <div class="col-xs-12 col-lg-3">
            <img src="{{ url('/') }}/images/acupuntura-en-bogota-copia.jpg" alt="" class="img-thumbnail rounded-circle">
            <h3>@php echo $inicioseccion9[4]->english; @endphp</h3>
            <div class="texto-sec11">@php echo $inicioseccion9[5]->english; @endphp</div>
            <a href="#" class="btn btn-primary">Coming soon</a>
        </div>
    </div>
</section>
