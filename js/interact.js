var introHeading = $('.introHeading');
var introPara = $('.introPara');
var mainBtns = $('.main-btns');

$(function() {
    $(document).ready(function () {
        introHeading.delay(500).animate({opacity: 1}, 1000);
        introPara.delay(1500).animate({opacity: 1}, 1000);
        mainBtns.delay(2500).animate({opacity: 1}, 1000);
    });
} );


// grab offset position of project details div for fading calculations later

var projects = $('.url-overlay');
var offset = projects.offset();






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

// catch touches on mobile to activate hover effects

$(function () {
    $('.url-overlay').on('click click', function(e) {
        e.preventDefault();
        $(this).toggleClass('touched');
    });

    $('.process-overlay').on('click click', function(e) {
        e.preventDefault();
        $(this).toggleClass('touched');
    });
});

