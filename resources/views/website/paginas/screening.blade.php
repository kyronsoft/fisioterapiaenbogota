<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="title" content="Fisioterapia en Bogotá ✅ Telerehabilitación en Bogotá 🧿">
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta name="description"
        content="Fisioterapia Online Bogotá y Telerehabilitación en Bogotá ✅ Adriana Lucia Ramirez Bonilla ✅ Especialista en Tele Rehabilitacion en Bogotá">
    <meta name="keyword" content="Fisioterapia, Telerehabilitacion, Dolor, Consulta, Dolor de Cuello, Dolor de Espalda, Dolor de Hombro, Dolor de Cadera, 
            Dolor de Rodilla, Acondicionamiento Fisico, Estiramientos, Tobillos, Lesiones Deportivas">
    <meta property="og:url" content="https://fisioterapiaenbogota.com/" />
    <meta property="og:site_name" content="Fisioterapia en Bogotá 🧿 Telerehabilitación ✅" />
    <meta property="og:image:width" content="621" />
    <meta property="og:image:height" content="603" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="robots" content="index, follow" />

    <meta property="og:title" content="Screening">
    <meta property="og:url" content="http://fisioterapiaenbogota/screening">
    <meta property="og:description"
        content="Screening de movimiento funcional online pues nos interesa prevenir aún más que tratar lesiones.">
    <meta property="og:image" content="http://fisioterapiaenbogota.com/images/running-screening.jpg">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Screening">
    <meta property="og:locale" content="es_CO">


    <meta itemprop="name" content="screening">
    <meta itemprop="url" content="http://fisioterapiaenbogota/screening">
    <meta itemprop="description"
        content="Screening de movimiento funcional online pues nos interesa prevenir aún más que tratar lesiones.">
    <meta itemprop="image" content="http://fisioterapiaenbogota.com/images/running-screening.jpg">


    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="telerehabilitacion">
    <meta name="twitter:url" content="http://fisioterapiaenbogota/telerehabilitacion">
    <meta name="twitter:description"
        content="Screening de movimiento funcional online pues nos interesa prevenir aún más que tratar lesiones.">
    <meta name="twitter:image" content="http://fisioterapiaenbogota.com/images/running-screening.jpg">
    <meta name="twitter:site" content="@fysiopuntura">

    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="https://fisioterapiaenbogota.com/" />

    <link rel="stylesheet" href="{{ url('/') }}/css/normalize.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/') }}/css/main.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/responsive.css">
    <script src="js/fontawesome/fontawesome.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/plugins/notiejs/notie.min.css" />
    <link rel="stylesheet" href="{{ url('/') }}/css/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/textslider/textslider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet"
        href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
</head>

<body>
    <div id="app">
        @include('website.modulos.header')
        @include('website.modulos.menu')


        <section class="container-fluid d-flex justify-content-end screening-uno">
            <div class="col-xs-6 col-md-5 align-self-center bg-white columna1">
                <div class="text-justify">@php echo $textos[0]->spanish; @endphp</div>
            </div>
        </section>

        <section class="container-fluid d-flex justify-content-center screening-dos">
            <div class="col-xs-6 col-md-5 align-self-center bg-white columna2">
                <div class="text-justify">@php echo $textos[1]->spanish; @endphp</div>
            </div>
        </section>

        <section class="container-fluid d-flex justify-content-end screening-tres">
            <div class="col-xs-6 col-md-5 align-self-center bg-white columna3">
                <div class="text-left py-5">@php echo $textos[2]->spanish; @endphp</div>
            </div>
        </section>

        <section class="container-fluid d-flex justify-content-center screening-cuatro">
            <div class="col-xs-6 col-md-5 align-self-center bg-white columna4">
                <div class="text-left py-5">@php echo $textos[3]->spanish; @endphp</div>
            </div>
        </section>

        <section class="container-fluid d-flex justify-content-end screening-cinco">
            <div class="col-xs-6 col-md-5 align-self-center bg-white columna5">
                <div class="text-left py-5">@php echo $textos[4]->spanish; @endphp</div>
            </div>
        </section>

        <section class="container-fluid d-flex justify-content-center">
            <div class="col-xs-6 col-md-5 align-self-center bg-white my-5">
                <form action="{{ url('/') }}/agenda_gratis" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nombres">Nombres y Apellidos</label>
                        <input type="text" class="form-control" name="nombres" id="nombres" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" required>
                    </div>
                    <div class="form-group">
                        <label for="hora">Mejor hora para contactarte</label>
                        <input type="text" class="form-control" name="hora" id="hora" required>
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Comentarios</label>
                        <textarea class="form-control" name="mensaje" id="mensaje" required></textarea>
                    </div>
                    <button class="btn btn-primary float-right" type="submit">Agendar Consulta
                        Gratis</button>
                </form>
            </div>
        </section>
    </div>

    @include('website.paginas.seccion9')

    @include('website.modulos.footer')


    <div id="WAButton"></div>
    <span class="ir-arriba"><i class="fa fa-arrow-up" aria-hidden="true"></i></span>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{ url('/') }}/js/textslider/textslider.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/plugins/notiejs/notie.min.js"></script>
    <script src="{{ url('/') }}/js/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/js/main.js"></script>
    <script type="text/javascript"
        src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js">
    </script>
    <script type="text/javascript" src="{{ url('/') }}/js/botonws.js"></script>

    @if (Session::has('respuesta'))
        <script>
            notie.alert({
                type: 1,
                text: '¡El mensaje ha sido enviado exitosamente!',
                time: 5
            })

        </script>
    @endif

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169704393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-169704393-1');

    </script>
</body>

</html>
