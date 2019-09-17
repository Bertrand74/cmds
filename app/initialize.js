var app = {

    init: function () {

        $('.carousel').slick({
            dots: false,
            arrows: false,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            accessibility: true,
            adaptiveHeight: false,
            autoplay: true,
            autoplaySpeed: 3000,
            centerMode: true,

        });
    }
};

$(app.init);


