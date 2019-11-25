/* animation of navigation bar */
$(function() {
    var nav = $('.nav');
    $('li', nav)
        .mouseover(function(e) {
            $('ul', this).stop().slideDown('fast');
        })
        .mouseout(function(e) {
            $('ul', this).stop().slideUp('fast');
        });
});

// handle links with @href started with '#' only
$(document).on('click', 'a[href^="#"]', function(e) {
    // target element id
    var id = $(this).attr('href');

    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }

    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    // top position relative to the document
    var pos = $id.offset().top - 100;

    // animated top scrolling
    $('body, html').animate({scrollTop: pos});
});

/* navigation bar sticking to the top as scroll */
$(function() {
    //load or scroll
    $(window).on('load scroll', function(){

        console.log($(window).scrollTop());
        if ($(document).scrollTop() > 70) {
            console.log('yes');
            $('.nav').addClass('fixed');
        } else {
            console.log('no');
            $('.nav').removeClass('fixed');
        }

    });

});