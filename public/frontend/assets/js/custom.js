$(function () {
    //console.log('tinh vi tri bang ham .offset().top');
    //console.log($('.colorlib-services').offset().top);

    /* $('#colorlib-main-menu ul li:nth-child(1) a').on('click', function (event) { 
        event.preventDefault();
        $('html, body').animate({scrollTop: $('#colorlib-hero').offset().top},1500,"easeOutCubic");
        $(this).parents('li').addClass('active');
        $(this).parents('li').siblings().removeClass('active');
    });

    $('#colorlib-main-menu ul li:nth-child(2) a').on('click', function (event) { 
        event.preventDefault();
        $('html, body').animate({scrollTop: $('.colorlib-about').offset().top},1500,"easeOutCubic");
        $(this).parents('li').addClass('active');
        $(this).parents('li').siblings().removeClass('active');
    });

    $('#colorlib-main-menu ul li:nth-child(3) a').on('click', function (event) { 
        event.preventDefault();
        $('html, body').animate({scrollTop: $('.colorlib-services').offset().top},1500,"easeOutCubic");
        $(this).parents('li').addClass('active');
        $(this).parents('li').siblings().removeClass('active');
    });

    $('#colorlib-main-menu ul li:nth-child(4) a').on('click', function (event) { 
        event.preventDefault();
        $('html, body').animate({scrollTop: $('.colorlib-work').offset().top},1500,"easeOutCubic");
        $(this).parents('li').addClass('active');
        $(this).parents('li').siblings().removeClass('active');
    });

    $('#colorlib-main-menu ul li:nth-child(5) a').on('click', function (event) { 
        event.preventDefault();
        $('html, body').animate({scrollTop: $('.colorlib-blog').offset().top},1500,"easeOutCubic");
        $(this).parents('li').addClass('active');
        $(this).parents('li').siblings().removeClass('active');
    });

    $('#colorlib-main-menu ul li:nth-child(6) a').on('click', function (event) { 
        event.preventDefault();
        $('html, body').animate({scrollTop: $('#get-in-touch').offset().top},1500,"easeOutCubic");
        $(this).parents('li').addClass('active');
        $(this).parents('li').siblings().removeClass('active');
    }); */


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

    //=================Accordion for Services Section ===============
    $('.service-features').slideUp();
    $('.feature-title').on('click', function(event){
        $(this).next().slideToggle(1000);
        $(this).children().toggleClass('services-text-img-rotate');
        $('html, body').animate({scrollTop: $(this).offset().top - 150});
    });

    //=================Scroll Spy ===============
    $('html, body').scrollspy({target:'.colorlib-main-menu'});

    $('.colorlib-main-menu ul li a').on('click', function(event){
        event.preventDefault();
        var section_id = $(this).attr('href');
        //console.log(section_id);
        $('html, body').animate({scrollTop: $(section_id).offset().top + 50});
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
        //return false;
    });
    
    
});