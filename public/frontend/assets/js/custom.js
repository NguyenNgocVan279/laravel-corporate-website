$(function () {
    //console.log('tinh vi tri bang ham .offset().top');
    //console.log($('.colorlib-services').offset().top);

    $('#colorlib-main-menu ul li:nth-child(1) a').on('click', function (event) { 
        event.preventDefault();
        $('html, body').animate({scrollTop: $('#colorlib-hero').offset().top},1500,"easeOutCubic");
    });

    $('#colorlib-main-menu ul li:nth-child(2) a').on('click', function (event) { 
        event.preventDefault();
        $('html, body').animate({scrollTop: $('.colorlib-services').offset().top},1500,"easeOutCubic");
    });

    $('#colorlib-main-menu ul li:nth-child(3) a').on('click', function (event) { 
        event.preventDefault();
        $('html, body').animate({scrollTop: $('.colorlib-work').offset().top},1500,"easeOutCubic");
    });

    $('#colorlib-main-menu ul li:nth-child(4) a').on('click', function (event) { 
        event.preventDefault();
        $('html, body').animate({scrollTop: $('.colorlib-blog').offset().top},1500,"easeOutCubic");
    });

    $('#colorlib-main-menu ul li:nth-child(5) a').on('click', function (event) { 
        event.preventDefault();
        $('html, body').animate({scrollTop: $('#get-in-touch').offset().top},1500,"easeOutCubic");
    });


    //=================ScrollTop Button ===============
    /* var mybutton = document.getElementById("myBtn");
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    } */

    $('#myBtn').on('click', function (event) { 
        event.preventDefault();
        $('html, body').animate({scrollTop: 0},1000);
    });

    //=================Enlarge Image ===============

    $("a.services-wrap").fancybox();

    
    
});