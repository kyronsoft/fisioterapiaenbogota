$(document).ready(function () {
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
    const element = document.querySelector('.img-counter');
    const element1 = document.querySelector('.img-counter1');
    const element2 = document.querySelector('.img-counter2');
    $(".fila-counter img").mouseenter(function () {
        element.classList.add('animate__animated', 'animate__flip');
        element1.classList.add('animate__animated', 'animate__flip');
        element2.classList.add('animate__animated', 'animate__flip');
    });
    $(".fila-counter img").mouseleave(function () {
        element.classList.remove('animate__animated', 'animate__flip');
        element1.classList.remove('animate__animated', 'animate__flip');
        element2.classList.remove('animate__animated', 'animate__flip');
    });
    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
    irArriba();
    function irArriba() {
        $('.ir-arriba').click(function () { $('body,html').animate({ scrollTop: '0px' }, 1000); });
        $(window).scroll(function () {
            if ($(this).scrollTop() > 0) { $('.ir-arriba').slideDown(600); } else { $('.ir-arriba').slideUp(600); }
        });
        $('.ir-abajo').click(function () { $('body,html').animate({ scrollTop: '1000px' }, 1000); });
    }
    $(".img-services").hover(function () {
        $(this).addClass("animate__animated animate__backInDown");
    });
    $(".img-item").hover(function () {
        $(this).addClass("animate__animated animate__fadeInLeft");
    });
    $(".img-sec3").hover(function () {
        $(this).addClass("animate__animated animate__flip");
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

    $('.punto-partida').waypoint(function (direction) {
        if (direction == 'down') {
            $(".navbar").removeClass('sticky');
            $(".navbar").addClass('animate__animated animate__fadeInDown');
            $(".barra-superior").addClass('animate__animated animate__fadeOutUp');
            $(".navbar").addClass('sticky-top');
        } else {
            $(".navbar").addClass('sticky');
            $(".navbar").removeClass('animate__animated animate__fadeInDown');
            $(".barra-superior").removeClass('animate__animated animate__fadeOutUp');
            $(".navbar").removeClass('sticky-top');
        }
    });
});