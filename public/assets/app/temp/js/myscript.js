$(document).ready(function(){
    $('.bannerTop').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
});

$("document").ready(function($){
    var nav = $('#ssearch');

    $(window).scroll(function () {
        if ($(this).scrollTop() > 90.19) {
            nav.addClass("f-nav");
        } else {
            nav.removeClass("f-nav");
        }
    });
});

$(document).ready(function () {

    $(window).scroll(function() {
        // 100 = The point you would like to fade the nav in.

        if ($(window).scrollTop() > 100 ){

            $('a.scrollup').fadeIn();

        } else {

            $('a.scrollup').fadeOut();

        };
    });
    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});