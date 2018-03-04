// this class to be removed, or mobile menu will never show

$('.menu-list').removeClass('hideOnLoad');


// hide mobile menu div initially
$('.menu-list').hide();


// menu bar fade-in on devices 768px and over
// fade in nav bar
$(function () {
    $(window).scroll(function () {
        // set distance user needs to scroll before we fadeIn navbar
        if ($(this).scrollTop() > 100) {
            $('#main-nav').fadeIn();
        } else {
            $('#main-nav').fadeOut();
        }
    });
});

// fade in hamburger
$(function () {
    $(window).scroll(function () {
        // set distance user needs to scroll before we fadeIn icon
        if ($(this).scrollTop() > 100) {
            $('#nav-icon').fadeIn();
        } else {
            $('#nav-icon').fadeOut();
        }
    });


});


// hamburger animation and toggle mobile nav menu

$('#nav-icon').click(function () {
    if ($('#nav-icon').hasClass('open')) {

        $(this).toggleClass('open');
        $('.menu-overlay').fadeOut();
        $('.menu-list').animate({
            top: "-100%"
        }, 800);

    } else {

        $(this).toggleClass('open');
        $('.menu-overlay').fadeIn();
        $('.menu-list').show();
        $('.menu-list').animate({
            top: "50%"
        }, 800);
    }
});

$('.menu-list a').click(function () {
    $('.menu-list').animate({
        top: "-100%"
    }, 800);
    $('.menu-overlay').fadeOut();
    $('#nav-icon').toggleClass('open');
});


