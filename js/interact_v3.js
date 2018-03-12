var introHeading = $('.introHeading');
var introPara = $('.introPara');
var mainBtns = $('.main-btns');

$(function () {
    $(document).ready(function () {
        introHeading.delay(500).animate({opacity: 1}, 1000);
        introPara.delay(1500).animate({opacity: 1}, 1000);
        mainBtns.delay(2500).animate({opacity: 1}, 1000);
    });
});


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

// handle transitions on touch based devices and mouse devices

var zone = $('.process-overlay');

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

    $(function () {
        projects.on('click', function () {
            $(this).toggleClass('trans');
        });
    });

    $(function () {
        zone.on('click', function () {
            // allow overlay to be dismissed by both touching it or another div
            $(this).toggleClass('trans').parent().siblings().children('.process-overlay').removeClass('trans');
        });
    });

} else {

    $(function () {
        projects.on('mouseover', function () {
            $(this).toggleClass('trans');
        });
        projects.on('mouseout', function () {
            $(this).toggleClass('trans');
        });
    });

    $(function () {
        zone.on('mouseover', function () {
            $(this).toggleClass('trans');
        });
        zone.on('mouseout', function () {
            $(this).toggleClass('trans');
        });
    });
}
