/*global $,AOS,document,window,alert,day*/
$(document).ready(function () {
    "use strict";

    /* ---------------------------------------------
     Loader Screen
    --------------------------------------------- */
    $(window).load(function () {
        $("body").css('overflow-y', 'auto');
        $('#loading').fadeOut(1000);
    });

    $('[data-tool="tooltip"]').tooltip({
        trigger: 'hover',
        animate: true,
        delay: 50,
        container: 'body'
    });

    /* ---------------------------------------------
     Scrool To Top Button Function
    --------------------------------------------- */
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $(".toTop").css("right", "20px");
        } else {
            $(".toTop").css("right", "-100px");
        }
    });

    $(".toTop").click(function () {
        $("html,body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    //customize the header
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.main-head').addClass('sticky');
        } else {
            $('.main-head').removeClass('sticky');
        }
    });

    $('.op-menu').click(function () {
        $('.main-sticky').addClass('active');
        $('html').addClass('off');
    });

    $('.off-menu').click(function () {
        $('.main-sticky').removeClass('active');
        $('html').removeClass('off');
    });

    $(".hero-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots: true,
        autoplay: 4000,
        items: 1,
        autoplayHoverPause: false,
        center: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn'
    });

    $(".latest-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots: false,
        autoplay: 4000,
        items: 1,
        autoplayHoverPause: false,
        center: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn'
        //        onInitialize: callback
    });

    /*function callback(event) {
        $('#comming').countdown({
            date: '5/18/2020 19:58:00',
            day: 'يوم',
            days: 'أيام',
            hour: 'ساعة',
            hours: 'ساعات',
            minute: 'دقيقة',
            minutes: 'دقائق',
            second: 'ثانية',
            seconds: 'ثواني'
        }, function () {
            alert('القد انتهي العرض!');
        });
    }*/

    var year = parseInt($(".count-down").attr("data-countdown-year"), 10);
    var month = parseInt($(".count-down").attr("data-countdown-month"), 10) - 1;
    var day = parseInt($(".count-down").attr("data-countdown-day"), 10);
    $(".count-down").countdown({
        until: new Date(year, month, day),
        padZeroes: true
    });

    var year = parseInt($(".count-down1").attr("data-countdown-year"), 10);
    var month = parseInt($(".count-down1").attr("data-countdown-month"), 10) - 1;
    var day = parseInt($(".count-down1").attr("data-countdown-day"), 10);
    $(".count-down1").countdown({
        until: new Date(year, month, day),
        padZeroes: true
    });

    $(".cat-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots: false,
        autoplay: 4000,
        items: 6,
        autoplayHoverPause: false,
        center: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 6
            }
        }
    });

    $(".l-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots: false,
        autoplay: 4000,
        items: 4,
        autoplayHoverPause: false,
        center: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 4
            }
        }
    });

    $(".cl-slider").owlCarousel({
        nav: false,
        loop: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots: false,
        autoplay: 4000,
        items: 6,
        autoplayHoverPause: false,
        center: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 6
            }
        }
    });

    AOS.init({
        once: true
    });

    $('select').niceSelect();

    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 1000,
        values: [0, 1000],
        slide: function (event, ui) {
            $("#amount").val("EP" + ui.values[0] + " - EP" + ui.values[1]);
        }
    });

    $("#amount").val("EP" + $("#slider-range").slider("values", 0) + " - EP" + $("#slider-range").slider("values", 1));

    $('.active-list-view').click(function () {
        $('.stores-inner .item').removeClass('col-md-4').addClass('col-md-12 list-view');
    });

    $('.active-grid-view').click(function () {
        $('.stores-inner .item').removeClass('col-md-12 list-view').addClass('col-md-4');
    });

    $('.op-filter').click(function () {
        $('.gen-sidebar').slideToggle();
        $(this).toggleClass('active');
    });

    var changeSlide = 4; // mobile -1, desktop + 1
    // Resize and refresh page. slider-two slideBy bug remove
    var slide = changeSlide;
    if ($(window).width() < 600) {
        var slide = changeSlide;
        slide--;
    } else if ($(window).width() > 999) {
        var slide = changeSlide;
        slide++;
    } else {
        var slide = changeSlide;
    }
    $('.one').owlCarousel({
        nav: false,
        items: 1,
        autoplay: false
    })
    $('.two').owlCarousel({
        nav: false,
        margin: 10,
        mouseDrag: false,
        touchDrag: false,
        responsive: {
            0: {
                items: changeSlide - 1,
                slideBy: changeSlide - 1
            },
            600: {
                items: changeSlide,
                slideBy: changeSlide
            },
            1000: {
                items: changeSlide + 1,
                slideBy: changeSlide + 1
            }
        }
    })
    var owl = $('.one');
    owl.owlCarousel();
    owl.on('translated.owl.carousel', function (event) {
        $(".right").removeClass("nonr");
        $(".left").removeClass("nonl");
        if ($('.one .owl-next').is(".disabled")) {
            $(".slider .right").addClass("nonr");
        }
        if ($('.one .owl-prev').is(".disabled")) {
            $(".slider .left").addClass("nonl");
        }
        $('.slider-two .item').removeClass("active");
        var c = $(".slider .owl-item.active").index();
        $('.slider-two .item').eq(c).addClass("active");
        var d = Math.ceil((c + 1) / (slide)) - 1;
        $(".slider-two .owl-dots .owl-dot").eq(d).trigger('click');
    })
    $('.right').click(function () {
        $(".slider .owl-next").trigger('click');
    });
    $('.left').click(function () {
        $(".slider .owl-prev").trigger('click');
    });
    $('.slider-two .item').click(function () {
        var b = $(".item").index(this);
        $(".slider .owl-dots .owl-dot").eq(b).trigger('click');
        $(".slider-two .item").removeClass("active");
        $(this).addClass("active");
    });
    var owl2 = $('.two');
    owl2.owlCarousel();
    owl2.on('translated.owl.carousel', function (event) {
        $(".right-t").removeClass("nonr-t");
        $(".left-t").removeClass("nonl-t");
        if ($('.two .owl-next').is(".disabled")) {
            $(".slider-two .right-t").addClass("nonr-t");
        }
        if ($('.two .owl-prev').is(".disabled")) {
            $(".slider-two .left-t").addClass("nonl-t");
        }
    })
    $('.right-t').click(function () {
        $(".slider-two .owl-next").trigger('click');
    });
    $('.left-t').click(function () {
        $(".slider-two .owl-prev").trigger('click');
    });

    $('.add-n').click(function () {
        $('.n-address').slideToggle();
    });

    $('.op-pro-filter').click(function () {
        $(this).toggleClass('active');
        $('.profile-wrap .prof-sidebar').slideToggle();
    });

    if ($('.select2').length) {
        $('.select2').select2();
    }

    if ($('.select-nosearch').length) {
        $('.select-nosearch').select2({
            minimumResultsForSearch: Infinity
        });
    }

    $('.edit-prof').click(function () {
        $('.profile-wrap .f-edit').show();
        $('.profile-wrap .f-view').hide();
        $(this).hide();
    });

    $('.edit-dets').click(function () {
        $('.profile-wrap .dets-edit').show();
        $('.profile-wrap .dets-view').hide();
        $(this).hide();
    });


    $('.op-msg-search').click(function () {
        $('.msg-search').addClass('active');
    });

    $('.cl-msg-search').click(function () {
        $('.msg-search').removeClass('active');
    });

    //cart plus & minus counter
    $(".qtybutton").on("click", function () {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
                alert('Number can not be minus');
            }
        }
        $button.parent().find("input").val(newVal);
    });

    $(".show-pass").click(function () {
        $('.show-pass i').toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
    $(".show-pass1").click(function () {
        $('.show-pass1 i').toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
    $(".show-pass2").click(function () {
        $('.show-pass2 i').toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

});