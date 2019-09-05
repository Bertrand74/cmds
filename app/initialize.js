var app = {

    init: function () {

        $('.carousel').slick({
            dots: true,
            arrows: false,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });
    }

};

$(app.init);


