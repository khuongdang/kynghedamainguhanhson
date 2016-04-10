var timeload;

function hideLive() {
    $('.collapse.expand').parent().stop().animate({ 'right': -280 }, 840, function () {
        $('.collapse.expand').removeClass('expand').parent().animate({ 'right': -250 }, 250);
    });
}

$(document).ready(function () {
    var top = ($(window).height() - $('.livesupport').height()) / 2;
    $('.livesupport').css('top', top);
    if ($('.Support_Block').length < 2 && top > 0) {
        $('.livesupport').animate({ 'opacity': 1 }, 400);
    }
    $(".collapse").live("click", function () {

        if ($(this).hasClass("expand")) {
            hideLive();
        } else
            $(this).addClass("expand").parent().stop().animate({ 'right': 0 });

    });
    $('.livesupport.popup').live("mouseover mouseout", function (event) {
        if (event.type == 'mouseover') {
            clearTimeout(timeload);
        }
        if (event.type == 'mouseout') {
            timeload = setTimeout("hideLive()", 8000);
        }
    });
    $(".toTop").live("click", function (event) {
        event.preventDefault();
        var t = $(window).scrollTop();
        $('html,body').stop().animate({ scrollTop: 0 }, t);
    });
    $(window).scroll(function () {
        var op = $(window).scrollTop() / $(window).height();
        op = op > 1 ? 1 : op;
        $(".toTop").stop().animate({ 'opacity': op }, 10);
    }).resize(function () {
        var top = ($(window).height() - $('.livesupport').height()) / 2;
        if ($('.Support_Block').length < 2 && top > 0) {
            $('.livesupport').css({ 'top': top }).show();
        } else {
            $('.livesupport').css({ 'top': top }).hide();
        }
    });

});