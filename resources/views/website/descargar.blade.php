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

    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('/') }}/storage/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('/') }}/storage/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('/') }}/storage/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/') }}/storage/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('/') }}/storage/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('/') }}/storage/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('/') }}/storage/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('/') }}/storage/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/') }}/storage/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url('/') }}/storage/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/') }}/storage/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('/') }}/storage/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/') }}/storage/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ url('/') }}/storage/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ url('/') }}/storage/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/style.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/floating-wpp.min.css">
</head>

<body>
    <div id="app">
        @php
        $route = Route::current();
        @endphp

        @include('website.header')
        @include('website.menu')

        @if ($idioma == 'ES')
            <section class="contacto d-flex justify-content-center other-background">
                <div class="row d-flex justify-content-center align-self-center">
                    <div class="align-self-center">
                        <img src="{{ url('/') }}/storage/flower-decor.png" alt="" style="width: 60px;">
                    </div>
                    <div class="col-12 align-self-center">
                        @if ($tipo == 'cuello')
                            <h1 class="text-center mt-2">Reporte Gratis De Cuello</h1>
                        @endif
                        @if ($tipo == 'espalda')
                            <h1 class="text-center mt-2">Reporte Gratis De Espalda</h1>
                        @endif
                        @if ($tipo == 'rodilla')
                            <h1 class="text-center mt-2">Reporte Gratis De Rodilla</h1>
                        @endif
                        @if ($tipo == 'deportivas')
                            <h1 class="text-center mt-2">Reporte Gratis<br>Lesiones Deportivas</h1>
                        @endif
                    </div>
                </div>
            </section>

            <section class="container-fluid bg-white">
                <div class="row d-flex justify-content-around">
                    <div class="col-3 align-self-center">
                        <img src="{{ $folleto }}" alt="" class="mt-5" style="width: 90%;">
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-xs-12 col-md-6 align-self-center">
                        <h4 class="text-center text-white mb-5">Describe tu problema para poder ayudarte mejor
                            </h3>
                    </div>
                </div>
                <descargar-folleto tipo="{{ $tipo }}" url="{{ url('/') }}"></descargar-folleto>
            </section>
        @elseif ($idioma == 'EN')
            <section class="contacto d-flex justify-content-center punto-partida">
                <div class="row d-flex justify-content-center align-self-center">
                    <div class="align-self-center">
                        <img src="images/flower-decor.png" alt="" style="width: 60px;">
                    </div>
                    <div class="col-12 align-self-center">
                        @if ($tipo == 'neck')
                            <h1 class="text-center mt-2">Neck Free Report</h1>
                        @endif
                        @if ($tipo == 'espalda')
                            <h1 class="text-center mt-2">Low Back Free Report</h1>
                        @endif
                        @if ($tipo == 'rodilla')
                            <h1 class="text-center mt-2">Knee Free Report</h1>
                        @endif
                        @if ($tipo == 'deportivas')
                            <h1 class="text-center mt-2">Sport Injuries<br>Free Report</h1>
                        @endif
                    </div>
                </div>
            </section>

            <section class="container-fluid bg-white">
                <div class="row d-flex justify-content-around">
                    <div class="col-3 align-self-center">
                        <img src="{{ $folleto }}" alt="" class="mt-5" style="width: 90%;">
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-xs-12 col-md-6 align-self-center">
                        <h4 class="text-center text-white mb-5">Describe your problem to help you better
                            </h3>
                    </div>
                </div>
                <descargar-folleto-en tipo="{{ $tipo }}" url="{{ url('/') }}"></descargar-folleto-en>
            </section>
        @endif

    </div>


    <div id="WAButton"></div>
    <span class="ir-arriba"><i class="fa fa-arrow-up" aria-hidden="true"></i></span>

    @include('website.footer')


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ url('/') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ url('/') }}/js/floating-wpp.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#WAButton').floatingWhatsApp({
                phone: '573106951073'
            });
        });

    </script>
    <script>
        window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>

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
