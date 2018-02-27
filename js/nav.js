// grab offset position of project details div for fading calculations later

var projects = $('.url-overlay');
var offset = projects.offset();

// menu bar fade-in on devices 768px and over

// hide mobile menu div initially
$('.menu-list').hide();

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


// fade in project details - uses offset variable declared at top of script and compares to scrollTop

$(function () {
    $(window).scroll(function () {
        if (offset.top - $(this).scrollTop() <= 300) {
            $('.project-detail').fadeIn();
        } else {
            $('.project-detail').fadeOut();
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


