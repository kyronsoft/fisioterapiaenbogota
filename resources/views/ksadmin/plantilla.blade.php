<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kyronsoft Administrador Sitios Web - Fisioterapia En Bogotá</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/responsive.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('/') }}/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('/') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('/') }}/plugins/summernote/summernote-lite.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="{{ url('/') }}/froala/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/froala/css/froala_style.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/plugins/tagsinput/tagsinput.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/plugins/notiejs/notie.min.css" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=5f831873a599fe0011b8b9dd&product=inline-share-buttons"
        async="async"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
        <div class="wrapper">

            @include('ksadmin.modulos.header')
            @include('ksadmin.modulos.menu')

            @yield('contents')

        </div>
    </div>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="{{ url('/') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ url('/') }}/plugins/jquery-ui/jquery-ui.min.js"></script> --}}
    <!-- Summernote -->
    <script src="{{ url('/') }}/plugins/summernote/summernote-lite.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('/') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ url('/') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('/') }}/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="{{ url('/') }}/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="{{ url('/') }}/js/adminlte.min.js"></script>
    <script src="{{ url('/') }}/plugins/notiejs/notie.min.js"></script>
    <script src="{{ url('/') }}/js/codigo.js"></script>
    <script src="{{ url('/') }}/froala/js/froala_editor.pkgd.min.js"></script>
    <script src="{{ url('/') }}/froala/js/plugins/files_manager.min.js"></script>
    <script src="{{ url('/') }}/froala/js/languages/es.js"></script>
    <script src="{{ url('/') }}/froala/js/plugins/paragraph_style.min.js"></script>
    <script src="{{ url('/') }}/froala/js/plugins/image.min.js"></script>
    <script src="{{ url('/') }}/froala/js/plugins/image_manager.min.js"></script>
    <script src="{{ url('/') }}/froala/js/plugins/video.min.js"></script>
    <script src="{{ url('/') }}/froala/js/plugins/special_characters.min.js"></script>
    <script src="{{ url('/') }}/plugins/tagsinput/tagsinput.js"></script>
    <script src="{{ url('/') }}/js/categorias.js"></script>
    <script src="{{ url('/') }}/js/categorias_en.js"></script>
    <script>
        var editor = new FroalaEditor('#myEditor', {
            height: 600,
            language: 'es',
            imageUploadURL: '/upload_image.php',

            imageUploadParams: {
                id: 'my_editor'
            },
            videoUploadURL: '/upload_video.php',
            videoUploadParams: {
                id: 'my_editor'
            }
        });

    </script>

    @if (Session::has('ok-password'))

        <script>
            notie.alert({
                type: 1,
                text: '¡La contraseña se cambió correctamente!',
                time: 10,
                position: 'bottom'
            })

        </script>

    @endif
</body>

</html>
