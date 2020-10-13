$(document).ready(function () {
    $('.slider-faq').slick({
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
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
});