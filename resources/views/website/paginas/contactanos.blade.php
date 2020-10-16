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

    <meta property="og:title" content="Fisioterapia">
    <meta property="og:url" content="http://fisioterapiaenbogota/fisioterapia">
    <meta property="og:description" content="Fisioterapia en Bogotá Fysiopuntura ayuda a personas que son físicamente activas y las empodera a manejar su dolor sin analgésicos y a 
        restaurar o mantener su movilidad e independencia para poder continuar siendo activas en sus actividades laborales, familiares y recreativas y 
        viviendo un estilo de vida saludable">
    <meta property="og:image" content="http://fisioterapiaenbogota.com/images/fisioterapia-en-bogota-colombia-1.jpg">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Fysiopuntura">
    <meta property="og:locale" content="es_CO">


    <meta itemprop="name" content="Fisioterapia">
    <meta itemprop="url" content="http://fisioterapiaenbogota/fisioterapia">
    <meta itemprop="description" content="Fisioterapia en Bogotá Fysiopuntura ayuda a personas que son físicamente activas y las empodera a manejar su dolor sin analgésicos y a 
    restaurar o mantener su movilidad e independencia para poder continuar siendo activas en sus actividades laborales, familiares y recreativas y 
    viviendo un estilo de vida saludable">
    <meta itemprop="image" content="http://fisioterapiaenbogota.com/images/fisioterapia-en-bogota-colombia-1.jpg">


    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Fisioterapia">
    <meta name="twitter:url" content="http://fisioterapiaenbogota/fisioterapia">
    <meta name="twitter:description" content="Fisioterapia en Bogotá Fysiopuntura ayuda a personas que son físicamente activas y las empodera a manejar su dolor sin analgésicos y a 
    restaurar o mantener su movilidad e independencia para poder continuar siendo activas en sus actividades laborales, familiares y recreativas y 
    viviendo un estilo de vida saludable">
    <meta name="twitter:image" content="http://fisioterapiaenbogota.com/images/fisioterapia-en-bogota-colombia-1.jpg">
    <meta name="twitter:site" content="@fysiopuntura">

    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="https://fisioterapiaenbogota.com/" />

    <link rel="stylesheet" href="{{ url('/') }}/css/normalize.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/') }}/css/main.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/responsive.css">
    <script src="js/fontawesome/fontawesome.js"></script>
    <link rel="stylesheet" href="{{ url('/') }}/css/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/plugins/notiejs/notie.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet"
        href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
</head>

<body>
    <div id="app">
        @include('website.modulos.header')
        @include('website.modulos.menu')


        <section class="container-fluid contactanos">
            <div class="row d-flex justify-content-center">
                <div class="col-xs-12 col-md-6 align-self-center">
                    <h3 class="text-center text-white cabecera mb-5">¿Estás soportando el dolor? No tienes por que sufrir
                        innecesariamente. Yo te puedo ayudar ...</h3>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-xs-12 col-md-6 align-self-center">
                    <h4 class="text-center text-white mb-5">Describe tu problema para poder ayudarte mejor
                    </h4>
                </div>
            </div>
            <form action="{{ url('/') }}/sendbasicemail" method="POST">
                @csrf
                <div class="row d-flex justify-content-around">
                    <div class="col-xs-12 col-md-4"><input type="text" class="form-control text-white" name="nombre"
                            id="nombre" placeholder="Nombres y Apellidos *" required></div>
                    <div class="col-xs-12 col-md-4">
                        <select class="form-control" name="pregunta1" id="area_dolorosa">
                            <option value="A">Área dolorosa/parte del cuerpo afectada</option>
                            <option value="Dolor de cuello y hombro">Dolor de cuello y hombro</option>
                            <option value="Dolor de espalda/lumbar">Dolor de espalda/lumbar</option>
                            <option value="Dolor de cadera">Dolor de cadera</option>
                            <option value="Dolor de rodilla">Dolor de rodilla</option>
                            <option value="Dolor de tobillo y pie">Dolor de tobillo y pie</option>
                            <option value="No sé de donde viene el dolor">No sé de donde viene el dolor</option>
                            <option value="Lesión muscular deportiva o por ejercicio">Lesión muscular deportiva o por
                                ejercicio</option>
                            <option value="Pérdida de balance y equilibrio">Pérdida de balance y equilibrio</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <select class="form-control" name="pregunta2" id="preocupacion">
                            <option value="B">Cuál es tu principal preocupación debido a este problema?</option>
                            <option value="Dependencia de analgésicos">Dependencia de analgésicos</option>
                            <option value="No saber que es lo que está pasando con mi cuerpo">No saber que es lo que
                                está pasando con mi cuerpo</option>
                            <option value="Miedo a perder movilidad e independencia">Miedo a perder movilidad e
                                independencia</option>
                            <option value="Riesgo de tener que someterme a cirugia">Riesgo de tener que someterme a
                                cirugia</option>
                        </select>
                    </div>
                </div>
                <div class="row">&nbsp;</div>
                <div class="row d-flex justify-content-around">
                    <div class="col-xs-12 col-md-4"><input type="text" class="form-control" name="telefono"
                            id="telefono" placeholder="Teléfono *" required></div>
                    <div class="col-xs-12 col-md-4">
                        <select class="form-control" name="pregunta3" id="actividades1">
                            <option value="C">Que actividades no puedes realizar o están limitadas por este problema
                            </option>
                            <option value="Dormir">Dormir</option>
                            <option value="Permanecer sentado">Permanecer sentado</option>
                            <option value="Permanecer de pie">Permanecer de pie</option>
                            <option value="Levantar objetos">Levantar objetos</option>
                            <option value="Caminar">Caminar</option>
                            <option value="Trotar">Trotar</option>
                            <option value="Jugar Tenis">Jugar Tenis</option>
                            <option value="Subir escaleras">Subir escaleras</option>
                            <option value="Viajar">Viajar</option>
                            <option value="Disfrutar con familia y amigos">Disfrutar con familia y amigos</option>
                            <option value="Otra">Otra</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <select class="form-control" name="pregunta4" id="actividades">
                            <option value="D">Cuanto tiempo llevas sufriendo por este problema?</option>
                            <option value="Unos pocos días">Unos pocos días</option>
                            <option value="1-2 semanas">1-2 semanas</option>
                            <option value="2-4 semanas">2-4 semanas</option>
                            <option value="1-3 meses">1-3 meses</option>
                            <option value="6-12 meses">6-12 meses</option>
                            <option value="Varios años">Varios años</option>
                        </select>
                    </div>
                </div>
                <div class="row">&nbsp;</div>
                <div class="row d-flex justify-content-start">
                    <div class="col-xs-12 col-md-4"><input type="email" class="form-control" name="email" id="email"
                            placeholder="Email *"></div>
                    <div class="col-xs-12 col-md-4">
                        <select class="form-control" name="pregunta5" id="metas">
                            <option value="E">La meta principal que te gustaría que te ayudara a lograr es:</option>
                            <option value="Reducir el dolor">Reducir el dolor</option>
                            <option value="Reducir rigidez y mejorar movilidad">Reducir rigidez y mejorar movilidad
                            </option>
                            <option value="Empezar actividad física">Empezar actividad física</option>
                            <option value="Mantener mi nivel de actividad física">Mantener mi nivel de actividad física
                            </option>
                            <option value="Evitar dependencia a analgésicos">Evitar dependencia a analgésicos</option>
                            <option value="Entender mi patología">Entender mi patología</option>
                            <option value="Aprender a manejar mi patología">Aprender a manejar mi patología</option>
                            <option value="Mantenerme activo y resolver mi dolor antes de que empeore">Mantenerme activo
                                y resolver mi dolor antes de que empeore</option>
                            <option value="Mejorar mi balance y equilibrio">Mejorar mi balance y equilibrio</option>
                            <option value="Aprender la forma correcta de hacer ejercicios y progresarlos">Aprender la
                                forma correcta de hacer ejercicios y progresarlos</option>
                            <option value="Evitar o posponer cirugía">Evitar o posponer cirugía</option>
                        </select>
                    </div>
                </div>
                <div class="row">&nbsp;</div>
                <div class="row d-flex justify-content-start">
                    <div class="col-xs-6 col-md-6">
                        <div class="form-group">
                            <label class="text-white" for="mensaje">Mensaje</label>
                            <textarea class="form-control" name="mensaje" id="mensaje" cols="50" rows="5"
                                required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">&nbsp;</div>
                <div class="row">
                    <div class="col-xs-12 col-md-5 d-flex justify-content-around">
                        <div class="align-self-center">
                            <input type="checkbox" id="politicadedatos">
                        </div>
                        <div class="align-self-center">
                            <h4 class="text-center"><a
                                    href="{{ url('/') }}/descargas/Politica de protección y tratamiento de datos ALRB.pdf"
                                    class="text-white">Acepto
                                    las Políticas de Tratamiento de Datos
                                </a></h4>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btnpoldatos" disabled>Enviar</button>
                </div>
            </form>
        </section>

    </div>


    @include('website.modulos.footer')


    <div id="WAButton"></div>
    <span class="ir-arriba"><i class="fa fa-arrow-up" aria-hidden="true"></i></span>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/js/slick/slick.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/plugins/notiejs/notie.min.js"></script>
    <script src="{{ url('/') }}/js/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript"
        src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js">
        < script type = "text/javascript"
        src = "{{ url('/') }}/js/main.js" >

    </script>
    <script type="text/javascript" src="{{ url('/') }}/js/botonws.js"></script>
    <script>
        $("#politicadedatos").on('click', function() {
            $(".btnpoldatos").prop("disabled", false);
        });

    </script>

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
