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

    $('#message_form').submit(function() {
        
        data = {
                "name": $("#form_name").val(),
                "email": $("#form_email").val(),
                "title": $("#form_title").val(),
                "message": $("#form_message").val()
            };

        $.ajax({
          type: "POST",
          url: "sendmessage.php",
          data: data,
          success: function(data) {
                alert("Сообщение отправлено");
                $("#form_title").val("");
                $("#form_message").val("");
            }
        }).fail(function() {
            alert( "Сообщение не отправлено, попробуйте снова." );
        });
                
        return false;
    })

    $("button[data-message], #cartridges-order").click(function(a,b) {
        data = messages[$(this).attr("data-message")];
        $("#form_title").val(data['topic']);
        $("#form_message").val(data['message']);
        window.location.hash="contacts";
        $("#form_name").focus();
        return false;
    });    
});

$(window).on("load", function() {
    $(".main-content").addClass("loaded");

    setTimeout(function() {
    }, 1800);
});
