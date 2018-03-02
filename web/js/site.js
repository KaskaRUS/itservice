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


    // $('a[href^="#"]').click(function() {
    //     elementClick = $(this).attr("href").split("#");
    //     destination = $("#" + elementClick[1]).offset().top;
    //     $("html, body").animate({
    //         scrollTop: destination
    //     }, 800);
    //     return false;
    // });

    $('#form_name, #form_email, #form_title, #form_message').change(function() {
        $(this).removeClass("error");
    });

    $('#message_form').submit(function() {
        
        if ($("#form_name").val() == "") {
            $("#form_name").addClass("error");
            $("#form_name").focus();
            return false;
        }

        if ($("#form_email").val() == "") {
            $("#form_email").addClass("error");
            $("#form_email").focus();
            return false;
        }

        if ($("#form_title").val() == "") {
            $("#form_title").addClass("error");
            $("#form_title").focus();
            return false;
        }

        if ($("#form_message").val() == "") {
            $("#form_message").addClass("error");
            $("#form_message").focus();
            return false;
        }

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
