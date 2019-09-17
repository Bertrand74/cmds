/* 
** Scroll for navbar
*/
$(window).scroll(function () {
    var $nav = $('.navbar');
    if ($(this).scrollTop() > 200) {
        $nav.removeClass('navbar__top');
        $nav.addClass('navbar__active');
    } else {
        $nav.removeClass('navbar__active');
        $nav.addClass('navbar__top');
    }
})


/**
 * Display animations skills on scroll
 */

$(window).scroll(function () {
    var $animatedCard = $('.card-body-skills');
    if ($(this).scrollTop() > 580) {
        console.log($(window).scrollTop());
        $animatedCard.addClass('d-block animated bounceInLeft');
    }
})