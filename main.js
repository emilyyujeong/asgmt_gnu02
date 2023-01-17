$(function () {



    $('.main_pro_slide').slick({
        arrows: false,
        slidesToShow: 4,
    });


    $(window).on('scroll', function () {
        var sct = $(window).scrollTop();
        console.log(sct);

        if (sct > 500) {
            //$('.toTop').fadeIn();
            $('.toTop').addClass('on')
        } else {
            $('.toTop').removeClass('on')
        }
    });

    $('.toTop').on('click', function () {
        $('html, body').animate({ scrollTop: 0 })
    });





})