$(document).ready(function () {
    $("#blog-carousel").owlCarousel({
        items: 4,
        loop: true,
        nav: true,
        dots: false,
        responsiveClass: true,
        rtl: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
            },
            700: {
                items: 2,
                nav: false,
            },

            1000: {
                items: 3,
                nav: true,
                loop: true,
            },
            1300: {
                items: 4,
                nav: true,
            },
        },
    });
});
