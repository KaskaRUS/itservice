$(document).ready(function() {
    var $menu_btn = $(".menu-btn .tcon"),
        $wrap = $(".wrap");
    $menu_btn.click(function() {
        $menu_btn.toggleClass('active');
        $wrap.toggleClass('show-menu');
    });
    $(window).resize(function() {
        if ($(window).width() > 990) {
            if ($menu_btn.hasClass("active")) {
                $menu_btn.click();
            }
        }
    });


    $('a[href^="#"]').click(function() {
        elementClick = $(this).attr("href").split("#");
        destination = $("a[name=" + elementClick[1] + "]").offset().top;
        $("html, body").animate({
            scrollTop: destination
        }, 800);
        return false;
    });



});

$(window).on("load", function() {
    $(".main-content").addClass("loaded");

    setTimeout(function() {
    }, 1800);
});
