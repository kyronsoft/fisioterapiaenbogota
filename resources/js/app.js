/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import 'owl.carousel';
import 'jquery.cookie';

require('./bootstrap');
require('summernote');
require('summernote/dist/summernote-bs4.css');
require('summernote/dist/summernote-bs4.js');

window.notie = require('notie');
window.Vue = require('vue');
window.Swal = require('sweetalert2');

jQuery(document).ready(function () {
    jQuery('.owl-carousel').owlCarousel({
        dots: false,
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        items: 1
    });
    var url = window.location.href;
    url = url.substr(url.lastIndexOf("/") + 1);
    $('#navbarNavDropdown li').each(function () {
        var href = $(this).find('a').attr('href');

        href = href.substr(href.lastIndexOf("/") + 1);
        if (href == url) {
            $(this).children().addClass('active');
        }
    });
    $('.counter-count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

    var url = window.location.href;
    url = url.substr(url.lastIndexOf("/") + 1);
    $('#navbarSupportedContent li').each(function () {
        var href = $(this).find('a').attr('href');

        href = href.substr(href.lastIndexOf("/") + 1);
        if (href == url) {
            $(this).children().addClass('active');
        }
    });

    irArriba();

    function irArriba() {
        $('.ir-arriba').click(function () {
            $('body,html').animate({
                scrollTop: '0px'
            }, 1000);
        });
        $(window).scroll(function () {
            if ($(this).scrollTop() > 0) {
                $('.ir-arriba').slideDown(600);
            } else {
                $('.ir-arriba').slideUp(600);
            }
        });
        $('.ir-abajo').click(function () {
            $('body,html').animate({
                scrollTop: '1000px'
            }, 1000);
        });
    }

    $('.editor').summernote({
        height: 100,
        focus: true,
        callbacks: {
            onImageUpload: function (image) {
                uploadImage(image[0]);
            }
        }
    });

    $('.editor_blog').summernote({
        height: ($(window).height() - 300),
        focus: true,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color', 'forecolor', 'backcolor']],
            ['para', ['ul', 'ol', 'paragraph', 'height', 'style']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['codeview', 'undo', 'redo', 'help']],
        ],
        callbacks: {
            onImageUpload: function (files) {
                url = '/summer-uploads';
                sendFile(files[0], url, $(this));
            }
        }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function sendFile(file, url, editor) {
        var data = new FormData();
        data.append("file", file);

        $.ajax({
            data: data,
            type: "POST",
            url: url,
            cache: false,
            contentType: false,
            processData: false,
            success: function (url) {
                editor.summernote('editor.insertImage', url);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
            }
        });
    }

    $("iframe").wrap("<div class='wrapper'></div>");
    $("img").addClass('img-fluid');

});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('descargar-folleto', require('./components/DescargarFolletoComponent.vue').default);
Vue.component('descargar-folleto-en', require('./components/DescargarFolletoEnComponent.vue').default);
Vue.component('comentarios-component', require('./components/ComentariosComponent.vue').default);
Vue.component('megusta-component', require('./components/MeGustaComponent.vue').default);
Vue.component('vistas-component', require('./components/VistasComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});




