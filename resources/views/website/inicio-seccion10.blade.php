    @if ($idioma == 'ES')
        <section class="container-fluid text-white seccion-diez">
            <div class="row d-flex justify-content-around fila-counter">
                <div class="col-xs-12 col-md-4 text-center col-counter">
                    <img src="{{url('/')}}/storage/counter-img-2.png" alt class="img-fluid img-counter" />
                    <div class="row d-flex justify-content-center mt-2">
                        <h2 class="counter-count">@php echo $textos[28]->spanish; @endphp</h2>
                        <h2>+</h2>
                    </div>
                    <h3>@php echo $textos[29]->spanish; @endphp</h3>
                </div>
                <div class="col-xs-12 col-md-4 text-center col-counter">
                    <img src="{{url('/')}}/storage/counter-img-1.png" alt class="img-fluid img-counter1" />
                    <div class="row d-flex justify-content-center mt-2">
                        <h2 class="counter-count">@php echo $textos[30]->spanish; @endphp</h2>
                        <h2>+</h2>
                    </div>
                    <h3>@php echo $textos[31]->spanish; @endphp</h3>
                </div>
                <div class="col-xs-12 col-md-4 text-center col-counter">
                    <img src="{{url('/')}}/storage/counter-img-3.png" alt class="img-fluid img-counter2" />
                    <div class="row d-flex justify-content-center mt-2">
                        <h2 class="counter-count">@php echo $textos[32]->spanish; @endphp</h2>
                        <h2>+</h2>
                    </div>
                    <h3>@php echo $textos[33]->spanish; @endphp</h3>
                </div>
            </div>
        </section>
    @elseif ($idioma == 'EN')
        <section class="container-fluid text-white seccion-diez">
            <div class="row d-flex justify-content-around fila-counter">
                <div class="col-xs-12 col-md-4 text-center col-counter">
                    <img src="{{url('/')}}/storage/counter-img-2.png" alt class="img-fluid img-counter" />
                    <div class="row d-flex justify-content-center mt-2">
                        <h2 class="counter-count">@php echo $textos[28]->english; @endphp</h2>
                        <h2>+</h2>
                    </div>
                    <h3>@php echo $textos[29]->english; @endphp</h3>
                </div>
                <div class="col-xs-12 col-md-4 text-center col-counter">
                    <img src="{{url('/')}}/storage/counter-img-1.png" alt class="img-fluid img-counter1" />
                    <div class="row d-flex justify-content-center mt-2">
                        <h2 class="counter-count">@php echo $textos[30]->english; @endphp</h2>
                        <h2>+</h2>
                    </div>
                    <h3>@php echo $textos[31]->english; @endphp</h3>
                </div>
                <div class="col-xs-12 col-md-4 text-center col-counter">
                    <img src="{{url('/')}}/storage/counter-img-3.png" alt class="img-fluid img-counter2" />
                    <div class="row d-flex justify-content-center mt-2">
                        <h2 class="counter-count">@php echo $textos[32]->english; @endphp</h2>
                        <h2>+</h2>
                    </div>
                    <h3>@php echo $textos[33]->english; @endphp</h3>
                </div>
            </div>
        </section>

    @endif
