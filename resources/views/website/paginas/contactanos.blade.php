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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <div id="app">
        @include('website.modulos.header')
        @include('website.modulos.menu')


        <section class="container-fluid contactanos">
            <div class="row d-flex justify-content-center">
                <div class="col-xs-12 col-md-6 align-self-center">
                    <h3 class="text-center text-white cabecera">¿Estás soportando el dolor? No tienes por que sufrir
                        innecesariamente. Yo te puedo ayudar ...</h3>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-xs-12 col-md-6 align-self-center">
                    <h4 class="text-center text-white mb-5">Describe tu problema para poder ayudarte mejor
                    </h4>
                </div>
            </div>
            <form action="{{ url('/') }}/email_form.php?do=send" method="POST">
                <div class="row d-flex justify-content-around">
                    <div class="col-xs-12 col-md-4"><input type="text" class="form-control text-white" name="nombre"
                            id="nombre" placeholder="Nombres y Apellidos *"></div>
                    <div class="col-xs-12 col-md-4">
                        <select class="form-control" name="" id="area_dolorosa">
                            <option value="A">Área dolorosa/parte del cuerpo afectada</option>
                            <option value="1">Dolor de cuello y hombro</option>
                            <option value="2">Dolor de espalda/lumbar</option>
                            <option value="3">Dolor de cadera</option>
                            <option value="4">Dolor de rodilla</option>
                            <option value="5">Dolor de tobillo y pie</option>
                            <option value="6">No sé de donde viene el dolor</option>
                            <option value="7">Lesión muscular deportiva o por ejercicio</option>
                            <option value="8">Pérdida de balance y equilibrio</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <select class="form-control" name="" id="preocupacion">
                            <option value="B">Cuál es tu principal preocupación debido a este problema?</option>
                            <option value="9">Dependencia de analgésicos</option>
                            <option value="10">No saber que es lo que está pasando con mi cuerpo</option>
                            <option value="11">Miedo a perder movilidad e independencia</option>
                            <option value="12">Riesgo de tener que someterme a cirugia</option>
                        </select>
                    </div>
                </div>
                <div class="row">&nbsp;</div>
                <div class="row d-flex justify-content-around">
                    <div class="col-xs-12 col-md-4"><input type="text" class="form-control" name="telefono"
                            id="telefono" placeholder="Teléfono *"></div>
                    <div class="col-xs-12 col-md-4">
                        <select class="form-control" name="" id="actividades">
                            <option value="C">Que actividades no puedes realizar o están limitadas por este problema
                            </option>
                            <option value="13">Dormir</option>
                            <option value="14">Permanecer sentado</option>
                            <option value="15">Permanecer de pie</option>
                            <option value="16">Levantar objetos</option>
                            <option value="17">Caminar</option>
                            <option value="18">Trotar</option>
                            <option value="19">Jugar Tenis</option>
                            <option value="20">Subir escaleras</option>
                            <option value="21">Viajar</option>
                            <option value="22">Disfrutar con familia y amigos</option>
                            <option value="23">Otra</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <select class="form-control" name="" id="actividades">
                            <option value="D">Cuanto tiempo llevas sufriendo por este problema?</option>
                            <option value="24">Unos pocos días</option>
                            <option value="25">1-2 semanas</option>
                            <option value="26">2-4 semanas</option>
                            <option value="27">1-3 meses</option>
                            <option value="28">6-12 meses</option>
                            <option value="29">Varios años</option>
                        </select>
                    </div>
                </div>
                <div class="row">&nbsp;</div>
                <div class="row d-flex justify-content-start">
                    <div class="col-xs-12 col-md-4"><input type="email" class="form-control" name="email" id="email"
                            placeholder="Email *"></div>
                    <div class="col-xs-12 col-md-4">
                        <select class="form-control" name="metas" id="metas">
                            <option value="E">La meta principal que te gustaría que te ayudara a lograr es:</option>
                            <option value="30">Reducir el dolor</option>
                            <option value="31">Reducir rigidez y mejorar movilidad</option>
                            <option value="32">Empezar actividad física</option>
                            <option value="33">Mantener mi nivel de actividad física</option>
                            <option value="34">Evitar dependencia a analgésicos</option>
                            <option value="35">Entender mi patología</option>
                            <option value="36">Aprender a manejar mi patología</option>
                            <option value="37">Mantenerme activo y resolver mi dolor antes de que empeore</option>
                            <option value="38">Mejorar mi balance y equilibrio</option>
                            <option value="39">Aprender la forma correcta de hacer ejercicios y progresarlos</option>
                            <option value="40">Evitar o posponer cirugía</option>
                        </select>
                    </div>
                </div>
                <div class="row">&nbsp;</div>
                <div class="row d-flex justify-content-start">
                    <div class="col-xs-6 col-md-6">
                        <div class="form-group">
                            <label class="text-white" for="mensaje">Mensaje</label>
                            <textarea class="form-control" name="mensaje" id="mensaje" cols="50" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">&nbsp;</div>
                <div class="row">
                    <div class="col-xs-12 col-md-4 d-flex justify-content-around">
                        <div class="align-self-center">
                            <input type="checkbox" id="politicadedatos">
                        </div>
                        <div class="align-self-center">
                            <h2 class="text-center text-white poldatos">Acepto las Políticas de Tratamiento de Datos
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btnpoldatos">Enviar</button>
                </div>
            </form>
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
