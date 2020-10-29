@if ($route->uri == '/')
    <section class="container-fluid my-5 bg-white seccion-cinco">
        <div class="row">
            <div class="d-none d-md-block col-md-6 align-self-center">
                <img src="{{ url('/') }}/storage/problemas-de-espalda-.png" class="img-fluid"
                    alt="problemas-de-espalda">
            </div>
            <div class="col-xs-12 col-md-6 columna">
                <div class="texto-seccion5">@php echo $textos[13]->spanish; @endphp</div>
            </div>
        </div>
    </section>
@elseif ($route->uri == 'en')
    <section class="container-fluid bg-white seccion-cinco">
        <div class="row">
            <div class="d-none d-md-block col-md-6 align-self-center">
                <img src="{{ url('/') }}/storage/problemas-de-espalda-.png" class="img-fluid"
                    alt="problemas-de-espalda">
            </div>
            <div class="col-xs-12 col-md-6 columna">
                <div class="texto-seccion5">@php echo $textos[13]->english; @endphp</div>
            </div>
        </div>
    </section>
@endif
