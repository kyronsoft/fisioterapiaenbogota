<section class="container-fluid d-flex justify-content-end seccion-cinco">
    <div class="col-xs-6 col-md-6 align-self-center bg-white columna">
        <div>@php echo $videoyt[0]->spanish; @endphp</div>
        <div class="row">
            <div class="col-xs-6 col-md-12 align-self-center text-center">
                <iframe src="{{ $videoyt[1]->spanish }}" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-11 align-self-center">
                <div class="texto-sec5">@php echo $videoyt[2]->spanish; @endphp</div>
                <a href="{{ url('/') }}/contactanos" class="btn btn-primary btn-block enlace-video">Solicita más información</a>
            </div>
        </div>
    </div>
</section>
