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
});

$(window).on("load", function() {
    $(".main-content").addClass("loaded");
});
