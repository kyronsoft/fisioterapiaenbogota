$(function () {
    $('#WAButton').floatingWhatsApp({
        phone: '573106951073'
    });
});

window.onscroll = function () {
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

window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'UA-169704393-1');

$(".imgA1").mouseenter(function () {
    setTimeout(function () {
        $(".imgB1").css("display", "initial");
        $(".imgA1").css("display", "none");
        $(".imgB1").css("border", "1px dashed #12A1BD");
    }, 500);
});

$(".imgA1").mouseleave(function () {
    setTimeout(function () {
        $(".imgB1").css("display", "none");
        $(".imgA1").css("display", "initial");
        $(".imgA1").css("border", "1px dashed #0063BF");
    }, 1000);
});

$(".imgA2").mouseenter(function () {
    setTimeout(function () {
        $(".imgB2").css("display", "initial");
        $(".imgA2").css("display", "none");
        $(".imgB2").css("border", "1px dashed #12A1BD");
    }, 500);
});

$(".imgA2").mouseleave(function () {
    setTimeout(function () {
        $(".imgB2").css("display", "none");
        $(".imgA2").css("display", "initial");
        $(".imgA2").css("border", "1px dashed #0063BF");
    }, 1000);
});

$(".imgA3").mouseenter(function () {
    setTimeout(function () {
        $(".imgB3").css("display", "initial");
        $(".imgA3").css("display", "none");
        $(".imgB3").css("border", "1px dashed #12A1BD");
    }, 500);
});

$(".imgA3").mouseleave(function () {
    setTimeout(function () {
        $(".imgB3").css("display", "none");
        $(".imgA3").css("display", "initial");
        $(".imgA3").css("border", "1px dashed #0063BF");
    }, 1000);
});