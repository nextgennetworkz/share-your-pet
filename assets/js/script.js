function thirty_pc() {
    var height = $(window).height();
    var thirtypc = (90 * height) / 100;
    thirtypc = parseInt(thirtypc) + 'px';
    $(".home_product_content").css({'height': thirtypc, 'max-height': '980px'});
}


$(window).resize(function () {
    // $('.home_product_content').height($(window).height() + 'px');
    thirty_pc();
});

$(document).ready(function () {

    jQuery(".title_wrp a").click(function () {
        // console.log("click H3");
        jQuery(this).parents(".title_wrp").find(".sub_content_wrp").slideToggle("slow");
        jQuery(this).addClass("active");

        jQuery(this).parents(".title_wrp").siblings(".title_wrp").find(".sub_content_wrp").slideUp("slow");
        jQuery(this).parents(".title_wrp").siblings(".title_wrp ").find("a").removeClass("active");
    });

    jQuery(".year_content .dropitem").click(function () {
        // console.log("click H3");
        jQuery(this).parents(".year_content").find(".dropdown-content").slideToggle("slow");


        jQuery(this).parents(".year_content").siblings(".year_content").find(".dropdown-content").slideUp("slow");

    });

    // $('.home_product_content').height('10vh');

    // $('.home_product_content').height(100 + '%');

    thirty_pc();

    config = {
        maxS: 0.05,
        minS: 0.01,
        radious: 140,
        iClass: "iteam",
        btnClas: ".nav_round_wrp .play_btn"
    };
    rotateMenu(config);

    // $(".info_path ul li").click(function() {
    //     $(this).css({'-moz-transform' :'scale(2)', '-webkit-transform':'scale(2)', 'transform':'scale(2)'})
    //     $(this).siblings().css({'-moz-transform' :'scale(1)', '-webkit-transform':'scale(1)', 'transform':'scale(1)'})
    // })

    // ---------- text Effect for Service information --------------


    $(".srvice_solutions_sec .service_info_wrp").html($('#service_nav_home .info_path ul .active').find('.sevice_info').html());


    $("#service_nav_home .info_path ul li").click(function () {
        $(".srvice_solutions_sec .service_info_wrp").empty();
        $(".srvice_solutions_sec .service_info_wrp").html($(this).find('.sevice_info').html());
        $(".srvice_solutions_sec .main_content .title_wrp").html($(this).find('.sevice_title_wrp').html());
        $(this).addClass('active');
        $(this).siblings().removeClass('active');

        $('.birdman').birdman({speedUp: false});
    })

    $('.birdman').birdman({speedUp: false});


    var dd = $('.news_container').easyTicker({
        direction: 'up',
        easing: 'easeInOutBack',
        speed: 'slow',
        interval: 4000,
        height: 'auto',
        visible: 6,
        mousePause: 1,
        controls: {
            up: '.up',
            down: '.down',
            // toggle: '.toggle',
            // stopText: 'Stop !!!'
        }
    }).data('easyTicker');

    /*..................career culture sub view animation................... */

    var dd = $('#changing_tab').easyTicker({
        direction: 'up',
        easing: 'easeInOutBack',
        speed: 'slow',
        interval: 4000,
        height: 'auto',
        visible: 2,
        mousePause: 1,
        controls: {
            up: '.up',
            down: '.down',
            toggle: '.toggle',
            stopText: 'Stop !!!'
        }
    }).data('easyTicker');


    // ---------------------- Home staturgy sec wrp ------------------

    $(".main_info_box").html($(".strategy_content .info_container .box_type_active").find(".more_info").html());

    $(".strategy_content .info_container .item_box").click(function () {
        var info = "";
        info = $(this).find(".more_info").html();
        $(".main_info_box").html(info);
        $(this).addClass('box_type_active');
        $(this).siblings('.item_box').removeClass('box_type_active');
    });


    // ---------------------- Home Our Reach Section wrp ------------------

    // $(".home_our_reach_sec #location_list .active")

    $(".home_our_reach_sec #location_list .location_point").click(function () {
        var info = "";
        info = $(this).find(".location_info").html();
        $(".reach_bottom_row .content_wrp").html(info);
        $(this).addClass('active');
        $(this).siblings('.location_point').removeClass('active');
    });


    // ---------- text Effect Product & Service Page --------------


    $(".left_content .content_box").html($('#service_nav_products .info_path ul .active').find('.sevice_info').html());


    $("#service_nav_products .info_path ul li").click(function () {
        $(".left_content .content_box").empty();
        $(".left_content .content_box").html($(this).find('.sevice_info').html());
        $(this).addClass('active');
        $(this).siblings().removeClass('active');

        $('.service_info_txt').birdman({speedUp: false});

    })

    $('.service_info_txt').birdman({speedUp: false});


    $("#click1").click(function () {
        $("#tab1").trigger("click");

    })
    $("#click2").click(function () {
        $("#tab2").trigger("click");

    })
    $("#click3").click(function () {
        $("#tab3").trigger("click");
    })

    $("#click4").click(function () {
        $("#tab4").trigger("click");
    })


    // --------------- Get in touch form animation script -------------


    $("#git_form_btn").click(function () {
        $("#git_panel").slideToggle("slow");
    })

    $("#git_panel .form_col .minimize_icon").click(function () {
        $("#git_panel").slideUp("slow");
    })

    // $('#git_panel').click(function(event){
    //     event.stopPropagation();
    // });
    //
    // $(document).mouseup(function (e){
    //     if ($('#git_panel').is(e.target) // if the target of the click isn't the container...
    //         && $('#git_panel').has(e.target).length === 0) // ... nor a descendant of the container
    //         console.log('in if');
    //     {
    //         console.log('in else');
    //         $('#git_panel').hide();
    //     }
    // });

    var mouse_is_inside = false;

    $(document).ready(function () {
        $('#git_panel').hover(function () {
            mouse_is_inside = true;
        }, function () {
            mouse_is_inside = false;
        });

        $("body").mouseup(function () {
            if (!mouse_is_inside) $('#git_panel').hide();
        });
    });

    // --------------- Get in touch form validation script -------------

    $("#form_submit_btn").click(function () {
        valid = true;
        if ($('#txt01').val() == '') {
            $('#txt01').addClass('form_active');
        }
        else {
            $('#txt01').removeClass('form_active');
        }
        if ($('#txt04').val() == '') {
            $('#txt04').addClass('form_active');
            $('#txt04').popover('hide');
        }
        else {
            $('#txt04').removeClass('form_active');
            if (!ValidateEmail($("#txt04").val())) {
                $('#txt04').popover({
                    content: "Please Enter a Correct Email Address"
                }).popover('show');
            }
            else {
                $('#txt04').popover('hide');
            }
        }
        if ($('#message').val() == '') {
            $('#message').addClass('form_active');
        }
        else {
            $('#message').removeClass('form_active');
        }
        if ($('#country').val() == '') {
            $('#country').addClass('form_active');
        }
        else {
            $('#country').removeClass('form_active');
        }


    })


    function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    };


    // --------------- Contact Us form validate script -------------

    $("#contact_submit").click(function () {
        valid = true;
        if ($('#name_id').val() == '') {
            $('#name_id').addClass('form_active');
        }
        else {
            $('#name_id').removeClass('form_active');
        }
        if ($('#email_id').val() == '') {
            $('#email_id').addClass('form_active');
            $('#email_id').popover('hide');
        }
        else {
            $('#email_id').removeClass('form_active');
            if (!ValidateEmail($("#email_id").val())) {
                $('#email_id').popover({
                    content: "Please Enter a Correct Email Address"
                }).popover('show');
            }
            else {
                $('#email_id').popover('hide');
            }
        }
        if ($('#sbjct_id').val() == '') {
            $('#sbjct_id').addClass('form_active');
        }
        else {
            $('#sbjct_id').removeClass('form_active');
        }
        if ($('#msg_id').val() == '') {
            $('#msg_id').addClass('form_active');
        }
        else {
            $('#msg_id').removeClass('form_active');
        }


    })


    function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    };


});






