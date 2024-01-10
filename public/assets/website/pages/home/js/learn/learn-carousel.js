$(document).ready(function () {
    $("#learn-carousel").owlCarousel({
        items: 3,
        loop: false,
        nav: true,
        dots: false,
        responsiveClass: true,
        rtl: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
            },
            400: {
                items: 1,
            },
            500: {
                items: 2,
            },
            800: {
                items: 3,
                nav: true,
            },

            1000: {
                items: 2,
                nav: true,
            },
            1100: {
                items: 2,
                nav: true,
            },
            1300: {
                items: 3,
                nav: true,
            },
        },
    });
});
