// navbar toggel
function toggleNav() {
    document.getElementsByClassName('navTrigger')[0].classList.toggle('active');
    document.getElementById('mainListDiv').classList.toggle('show_list');
    document.getElementById('mainListDiv').style.display = "block"
}

$(document).ready(function() {
    // preload spin 
    $(window).on('load', function() {
            $('.wh-widget-send-button-get-button').innerHTML = ''
            $('.preloader').fadeOut('1000')
            $('#vid1').attr('src', 'https://www.youtube.com/embed/HXg1_NyME2c');
            $('#vid2').attr('src', 'https://www.youtube.com/embed/dvgZIqN-s6A');
            $('#vid3').attr('src', 'https://www.youtube.com/embed/ht7jQpdrHiY');
            console.log('loaded')
        })
        // side navbar scrollspy
    $('body').scrollspy({
        target: '#navbar-example'
    })

    // $('.list-group-item.active').hover(function() {
    // $(window).scroll(function() {
    //         if ($('.list-group-item').hasClass('active')) {
    //             if ($('.list-group-item').parents().not('#nav-icon')) {
    //                 $('.list-group-item.active').prepend('<img id="nav-icon src="../assets/icon.png" alt="">');
    //             } else {
    //                 console.log('m4 mwgodaaaaa');
    //             }
    //         }
    // })
    // })
    // $(function dina() {
    //     $('a.list-group-item').toArray().forEach((index, element) => {

    //         if ($('a.list-group-item').hasCalss('active')) {
    //             console.log('ok');
    //         }
    //     })
    // })


    // let position = $(this).scrollTop();
    // console.log(position);
    // $('.list-group-item').toArray().forEach((index, element) => {
    // console.log($(index).offset());
    // console.log($(index).hasClass('active'));
    // if ($(index).hasClass('active') == true) {
    //     console.log('eslam');
    // return false;
    //     }
    // })


    // add active class to mobile navbar
    $('.nav .navlinks a').on('click', function() {
        $('.nav .navlinks').find('li.mobile-nav-active').removeClass('mobile-nav-active');
        $(this).parent('li').addClass('mobile-nav-active');
    });

    // show and hide nav
    $('.navbar-collapse .nav-item .nav-link').on('click', function() {
        $('.navbar-collapse').removeClass('show');
    });

    $(window).scroll(function() {
        let position = $(this).scrollTop();
        // console.log(position);
        // $('.main-section').toArray().forEach((index, element) => {
        // console.log($(index).offset());
        // console.log($(index));


        // $('.custom[href="#why"').css('display', 'none')
        // console.log($(element));
        // console.log($(index));


        // })

        if (position >= 620) {
            $('.sidenav').addClass('change');
        } else {
            $('.sidenav').removeClass('change', );
        }

        // if (position >= 580 && position <= 1120) {
        //     $('.icon-container').fadeIn(800);
        //     $('.icon .nav-border').addClass('side-title');
        // } else {
        //     $('.icon-container').hide();
        //     $('.icon .nav-border').removeClass('side-title');
        // }
        // if (position >= 1120 && position <= 1820) {
        //     $('.icon-container').fadeIn(800);
        //     $('.icon .nav-border2').addClass('side-title');
        // } else {
        //     $('.icon-container').hide();
        //     $('.icon .nav-border2').removeClass('side-title');
        // }
        // if (position >= 1820 && position <= 2340) {
        //     $('.icon-container3').fadeIn(800);
        //     $('.icon .nav-border3').addClass('side-title');
        // } else {
        //     $('.icon-container3').hide();
        //     $('.icon .nav-border3').removeClass('side-title');
        // }
        // if (position >= 2340 && position <= 2875) {
        //     $('.icon-container4').fadeIn(800);
        //     $('.icon .nav-border4').addClass('side-title');
        // } else {
        //     $('.icon-container4').hide();
        //     $('.icon .nav-border4').removeClass('side-title');
        // }
        // if (position >= 2875 && position <= 3790) {
        //     $('.icon-container5').fadeIn(800);
        //     $('.icon .nav-border5').addClass('side-title');
        // } else {
        //     $('.icon-container5').hide();
        //     $('.icon .nav-border5').removeClass('side-title');
        // }
        // if (position >= 3790) {
        //     $('.icon-container6').fadeIn(800);
        //     $('.icon .nav-border6').addClass('side-title');
        // } else {
        //     $('.icon-container6').hide();
        //     $('.icon .nav-border6').removeClass('side-title');
        // }
    })

    // owl carosuel for product section 
    $('.products-carousel').owlCarousel({
        // rtl:true,
        loop: true,
        autoplay: true,
        margin: 10,
        autoplayHoverPause: true,
        autoplaySpeed: 1000,
        autoplayTimeout: 3000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    $(".hero-carousel").owlCarousel({
        navigation: true, // Show next and prev buttons
        slideSpeed: 1000,
        paginationSpeed: 3000,
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        itemsDesktop: false,
        itemsDesktopSmall: false,
        itemsTablet: false,
        itemsMobile: true,
        pagination: true,
        navigationText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"]
    });

    // AON
    AOS.init({
        duration: 1000
    });

    $('.video-popup').magnificPopup({
        type: 'iframe',
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com',
                    src: 'https://www.youtube.com/embed/TCFEm-Nc15Q'
                }
            }
        }
    });
    // parts mixitup
    var mixer = mixitup('.portfolio-list');
    // set iframes src; 

    console.log("ready")

});

//* Navbar Fixed  
var nav_offset_top = $('.header_area').height() + 50;

function navbarFixed() {
    if ($('.header_area').length) {
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= nav_offset_top) {
                $(".header_area").addClass("navbar_fixed");
            } else {
                $(".header_area").removeClass("navbar_fixed");
            }
        });
    };
};
navbarFixed();


/* 10. WOW active */
new WOW().init();