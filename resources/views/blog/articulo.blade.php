<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fisioterapia en Bogotá ✅ Telerehabilitación en Bogotá 🧿</title>
    <meta name="description"
        content="Fisioterapia Online Bogotá y Telerehabilitación en Bogotá ✅ Adriana Lucia Ramirez Bonilla ✅ Especialista en Tele Rehabilitacion en Bogotá">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="game, reciclapp, gaming, business, ps4, xbox, steam, android">

    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="https://fisioterapiaenbogota.com/" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Fisioterapia en Bogotá ✅ Telerehabilitación en Bogotá 🧿" />
    <meta property="og:description"
        content="Fisioterapia Online Bogotá y Telerehabilitación en Bogotá ✅ Adriana Lucia Ramirez Bonilla ✅ Especialista en Tele Rehabilitacion en Bogotá" />
    <meta property="og:url" content="https://fisioterapiaenbogota.com/" />
    <meta property="og:site_name" content="Fisioterapia en Bogotá 🧿 Telerehabilitación ✅" />
    <meta property="og:image:width" content="621" />
    <meta property="og:image:height" content="603" />
    <meta name="twitter:card" content="summary_large_image" />

    <link
        href="https://fonts.googleapis.com/css2?family=Courgette&family=Quicksand:wght@500;700&family=Raleway:ital,wght@0,200;0,400;1,200;1,400&display=swap"
        rel="stylesheet">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('/') }}/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('/') }}/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('/') }}/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/') }}/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('/') }}/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('/') }}/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('/') }}/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('/') }}/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/') }}/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url('/') }}/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/') }}/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('/') }}/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/') }}/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ url('/') }}/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ url('/') }}/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ url('/') }}/css/normalize.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/') }}/css/main.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/responsive.css">
    <script src="{{ url('/') }}/js/fontawesome/fontawesome.js"></script>
    <link rel="stylesheet" href="{{ url('/') }}/css/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <div id="app">
        @include('website.modulos.header')
        @include('website.modulos.menu')

        <section class="container-fluid">
            <hr>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}/blog">Artículos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $articulo[0]->titulo_articulo }}</li>
                </ol>
            </nav>
            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-10 align-self-center">
                    <h3>Categoría: <u>{{ $categoria[0]->titulo_categoria }}</u></h3>
                    <h4><span class="font-weight-bold">Título:</span> {{ $articulo[0]->titulo_articulo }}</h4>
                    <hr>
                    <div class="text-justify mt-5">@php echo $articulo[0]->contenido_articulo @endphp</div>
                </div>
            </div>
            <div class="row d-flex justify-content-end">
                <div class="align-self-center">
                    <small
                        class="btn btn-info btn-sm">{{ date_format(date_create($articulo[0]->fecha_articulo), 'd-m-Y') }}</small>
                    <small class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                        {{ $articulo[0]->vistas_articulo }}</small>
                    <cant-comentarios></cant-comentarios>
                </div>
                <div class="align-self-center">
                    <articulo-likes></articulo-likes>
                </div>
            </div>
            <hr>
            <h3 class="font-weight-bold mb-3">Comentarios: </h3>
            <div class="row d-flex justify-content-center">
                <div class="col-10 align-self-center">
                    @php
                    if ($opiniones) {
                    foreach ($opiniones as $key => $value) {
                    if ($value->aprobacion_opinion == 1) {
                    @endphp
                    <h4 class="font-weight-bold"><i class="fa fa-commenting-o" aria-hidden="true"></i>@php echo ' '.
                        $value->nombre_opinion; @endphp<small class="ml-5"><i class="fa fa-calendar-check-o"
                                aria-hidden="true"></i>@php echo ' ',
                            date_format(date_create($value->fecha_opinion),'Y-m-d'); @endphp </small></h4>
                    <h5 class="font-italic pl-5">@php echo $value->contenido_opinion; @endphp</h5>
                    <h4 class="font-weight-bold"><i class="fa fa-comments-o" aria-hidden="true"></i> Adriana Ramírez
                        <small class="ml-5"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>@php echo ' ',
                            date_format(date_create($value->fecha_respuesta),'Y-m-d'); @endphp</small></h4>
                    <h5 class="font-italic pl-5">@php echo $value->respuesta_opinion; @endphp</h5>
                    @php
                    }
                    }
                    }
                    @endphp
                    <hr>
                    <form action="{{ url('/') }}/articulo" method="POST" class="mb-5">
                        @csrf
                        <div class="col-5">
                            <input type="hidden" name="id_comentario" value="{{ $id_articulo }}">
                            <div class="form-group">
                                <label for="nombre_opinion">Nombre</label>
                                <input type="text" class="form-control" id="nombre_opinion" name="nombre_opinion">
                            </div>
                            <div class="form-group">
                                <label for="correo_opinion">Correo Electrónico</label>
                                <input type="email" class="form-control" id="correo_opinion" name="correo_opinion">
                            </div>
                            <div class="form-group">
                                <label for="contenido_opinion">Comentario</label>
                                <input type="text" class="form-control" id="contenido_opinion" name="contenido_opinion">
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    @include('website.modulos.footer')

    <span class="ir-arriba"><i class="fa fa-arrow-up" aria-hidden="true"></i></span>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/js/slick/slick.min.js"></script>
    <script src="{{ url('/') }}/js/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/js/main.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/js/botonws.js"></script>
</body>

</html>
