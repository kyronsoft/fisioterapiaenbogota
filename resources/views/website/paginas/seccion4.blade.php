<section class="container-fluid d-flex justify-content-end seccion-cinco">
    <div class="col-xs-6 col-md-6 align-self-center bg-white columna">
        <div class="text-center">@php echo $videoyt[0]->spanish; @endphp</div>
        <div class="row">
            <div class="col-xs-6 col-md-12 align-self-center text-center">
                <iframe src="{{ $videoyt[1]->spanish }}" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <p class="text-justify">@php echo $videoyt[2]->spanish; @endphp</p>
            <a href="#" class="btn btn-primary btn-block">Solicita más información</a>
        </div>
    </div>
</section>
