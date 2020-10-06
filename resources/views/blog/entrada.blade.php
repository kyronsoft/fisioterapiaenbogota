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
    {{-- <script src="{{ asset('ckeditor5/ckeditor.js') }}"></script>
    --}}
</head>

<body>
    <div id="app">
        @include('website.modulos.header')
        @include('website.modulos.menu')

        <section class="container-fluid">
            <hr>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <select class="form-control" name="categorias">
                            @foreach ($categorias as $item)
                                <option value="{{ $item->id_categoria }}">{{ $item->titulo_categoria }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Palabras Claves <small>(Separadas por Comas)</small></label>
                        <input type="text" class="form-control" name="claves">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="titulo_articulo">Titulo</label>
                        <input type="text" class="form-control" name="titulo_articulo">
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="editor">
                    <p>Here goes the initial content of the editor.</p>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="button btn btn-primary mb-5" id="guardar">Guardar</div>
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
    <script type="text/javascript" src="{{ url('/') }}/js/prueba.js"></script>
</body>

</html>
