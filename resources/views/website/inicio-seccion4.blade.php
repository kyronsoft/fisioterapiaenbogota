@if ($idioma == 'ES')
    <section class="container-fluid d-flex justify-content-end seccion-cuatro">
        <div class="col-xs-6 col-md-7 align-self-center bg-white columna">
            <div>@php echo $youtube[0]->spanish; @endphp</div>
            <div class="row">
                <div class="col-xs-6 col-md-12 align-self-center text-center">
                    <div class="videoWrapper">
                        @php
                        echo $youtube[1]->spanish
                        @endphp
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-11 align-self-center">
                    <div class="texto-seccion4 mt-5">@php echo $youtube[2]->spanish; @endphp</div>
                    <a href="{{ url('/') }}/contactanos" class="btn btn-info btn-block enlace-video">Solicita más
                        información</a>
                </div>
            </div>
        </div>
    </section>
@elseif ($idioma == 'EN')
    <section class="container-fluid d-flex justify-content-end seccion-cuatro">
        <div class="col-xs-6 col-md-7 align-self-center bg-white columna">
            <div>@php echo $youtube[0]->english; @endphp</div>
            <div class="row">
                <div class="col-xs-6 col-md-12 align-self-center text-center">
                    <div class="videoWrapper">
                        @php
                        echo $youtube[1]->english
                        @endphp
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-11 align-self-center">
                    <div class="texto-seccion4 mt-5">@php echo $youtube[2]->english; @endphp</div>
                    <a href="{{ url('/') }}/contactanos" class="btn btn-info btn-block enlace-video">Request more
                        Information</a>
                </div>
            </div>
        </div>
    </section>
@endif


