(function($) {
    'use strict';
    // Preloader
    $(window).on('load', function() {
        $('.preloader').addClass('hidden');
        $('[data-popup="tooltip"]').tooltip();
    });
    $(".hamburger>.hamburger_btn").on('click', function() {
        $(".main_navigation .main-menu").toggleClass('open');
        $(this).toggleClass('active');
    });
    // Mobile Menu
    $(".main_navigation .menu-item-has-children > a").on('click', function(e) {
        var submenu = $(this).next(".sub-menu");
        e.preventDefault();
        submenu.slideToggle(200);
    });
    // Main Collapse
    $(".main-collapse-wrap>button").on('click', function() {
        $(".accordion_wrap").slideToggle(200);
    });
    // Product Social
    $(".social_trigger").on('click', function() {
        $(this).next().slideToggle(200);
    });
    
    //Counter
    const counters = document.querySelectorAll('.counter')
 counters.forEach(counter => {
     counter.innerText = '0'
     const updatecounter =() => {
         const target = +counter.getAttribute('data-target')
         const c = +counter.innerText
         const increment = target / 200
         if (c<target) {
             counter.innerText = `${Math.ceil(c+increment)}`
             setTimeout(updatecounter,1 )
         }
         else{
             counter.innerText=target
         }
     }
     updatecounter()
 });
 // Sticky Header
    var header = $(".can-sticky");
    var footer = $(".ft-sticky");
    var headerHeight = header.innerHeight();
    var FooterHeight = footer.innerHeight();

    function doSticky() {
        if (window.pageYOffset > headerHeight) {
            header.addClass("sticky");
        } else {
            header.removeClass("sticky");
        }
        if (window.pageYOffset > FooterHeight) {
            footer.addClass("d-flex");
        } else {
            footer.removeClass("d-flex");
        }
    }
    doSticky();
    //On scroll events
    $(window).on('scroll', function() {
        doSticky();
    });
   if ($(".back-to-top").length) {
        $(".back-to-top").on("click", function() {
            var target = $(this).attr("data-target");
            // animate
            $("html, body").animate({
                    scrollTop: $(target).offset().top,
                },
                1000
            );

            return false;
        });
    };
    
    // Main Banner
    $('.banner_slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        dotsClass: "slick-dots d-flex",
        arrows: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                dots: true
            }
        }]
    });
    // Fruit Slider
    $('.fruits-slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        dotsClass: "slick-dots d-flex",
        arrows: true,
        responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true
                }
            }
        ]
    });
    
    // Blog Slider
    $('.blog-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        dotsClass: "slick-dots d-flex",
        arrows: true,
        responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true
                }
            }
        ]
    });
    
    
    // Vegetables Slider
    $('.vegetables-slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        dotsClass: "slick-dots d-flex",
        arrows: true,
        responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true
                }
            }
        ]
    });
    // Drinks Slider
    $('.drinks-slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        dotsClass: "slick-dots d-flex",
        arrows: true,
        responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true
                }
            }
        ]
    });
    // Bakery Slider
    $('.bakery-slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        dotsClass: "slick-dots d-flex",
        arrows: true,
        responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true
                }
            }
        ]
    });
    // Testimonials Slider
    $('.testimonial-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        dotsClass: "slick-dots d-flex",
        arrows: false,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true
                }
            }
        ]
    });
    
    // Partner Slider
    $('.partner-slider').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        dotsClass: "slick-dots d-flex",
        arrows: true,
        responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: 5
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    dots: true
                }
            }
        ]
    });
    
    // Product Details Slider
    $('.product_slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.product_slider_nav'
    });
    $('.product_slider_nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.product_slider',
        dots: false,
        centerMode: true,
        centerPadding: '0px',
        focusOnSelect: true,
        responsive: [{
            breakpoint: 567,
            settings: {
                slidesToShow: 2,
                arrows:false
            }
        }]
    });
    // Add / Subtract Quantity
    $(".quantity button").on('click', function() {
        var qty = $(this).closest('.quantity').find('input');
        var qtyVal = parseInt(qty.val());
        if ($(this).hasClass('qty-add')) {
            qty.val(qtyVal + 1);
        } else {
            return qtyVal > 1 ?
                qty.val(qtyVal - 1) :
                0;
        }
    });
    // Progress bar
    $(".rating_bar li").each(function() {
        var progressBar = $(this).find(".rate_bar>div");
        $(progressBar).one('inview', function(event, isInView) {
            if (isInView) {
                $(progressBar).animate({
                    width: $(progressBar).attr("data-valuenow") + "%"
                });
            }
        });
    });

    // Toggle eye
    function VisiblePassword() {
        var togglePassword = document.querySelector('#password_eye');
        var password = document.querySelector('#password_value');
        if (togglePassword) {
            togglePassword.addEventListener('click', function(e) {
                // toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                // toggle the eye / eye slash icon
                this.classList.toggle('fa-eye-slash');
            });
        }
    }
    VisiblePassword();

})(jQuery);