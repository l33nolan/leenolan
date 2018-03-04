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