(function ($) {
	"use strict";
        /*openBtn.on("click", function() {
            if (!navbar.hasClass("slideInn")) {
                navbar.addClass("slideInn");
                body.addClass("body-overlay");
            }
            return false;
        })

        closeBtn.on("click", function() {
            if (navbar.hasClass("slideInn")) {
                navbar.removeClass("slideInn");
            }
            body.removeClass("body-overlay");
            return false;
        })*/

    //Submenu Dropdown Toggle
    if($('.header-nav .navigation li.drop-down ul.submenu').length){

        $('.header-nav .navigation li.drop-down').append('<div class="dropdown-btn"><i class="icofont-simple-down"></i></div>');     
        
        //Dropdown Button
        $('.header-nav .navigation li.drop-down .dropdown-btn').on('click', function() {
            

            if($(this).prev('ul.submenu').css('display') == 'none'){
              $('.header-nav .navigation ul.submenu').css({"display": "none"});
              $(this).prev('ul.submenu').css({"display": "none"});
            }
            else{
              $('.header-nav .navigation ul.submenu').css({"display": "none"});
              $(this).prev('ul.submenu').css({"display": "block"});
            }

            $(this).prev('ul.submenu').slideToggle(1000).css({"display": "block", "position": "inherit"});
        });
        
        //Disable dropdown parent link
        $('.navigation li.drop-down > a').on('click', function(e) {
             e.preventDefault();
        });
    }

    // Function for toggle class for small menu
    // function toggleClassForSmallNav() {
    //     var windowWidth = window.innerWidth;
    //     var mainNav = $(".header-nav .navigation li.drop-down ul.submenu");

    //     if (windowWidth <= 991) {
    //         mainNav.css("display", "none");
    //     }
    // }

    // toggleClassForSmallNav();


    // notification bar(Home Style Three)
    $('.notification a').click(function(){
       $('.notification-bar').addClass("active");
    });

    $(document.body).on('click','.notification-close i',function(){
      $('.notification-bar').removeClass("active");
    });


	 // Toggle Menu Icon(Search Box)
    $('li.search-box a > i').click(function(){
        $("li.search-box .search-form").toggleClass('active');
    })

	// Hero slider background setting
    function sliderBgSetting() {
        if ($(".slider-active .single-slider").length) {
            $(".slider-active .single-slider").each(function() {
                var $this = $(this);
                var img = $this.find(".slick-bg").attr("src");

                $this.css({
                    backgroundImage: "url("+ img +")",
                    backgroundSize: "cover",
                    backgroundPosition: "center center"
                })
            });
        }
    }
    sliderBgSetting();

    //Setting hero slider
    function heroSlider() {
        if ($(".slider-active").length) {
            $(".slider-active").slick({
                autoplay: true,
                autoplaySpeed: 9000,
                arrows: true,
                prevArrow: '<button type="button" class="slick-next"></button>',
            	nextArrow: '<button type="button" class="slick-prev"></button>',
                fade: true,
                cssEase: 'linear',
                responsive: [
			      {
				    breakpoint: 768,
				    settings: {
				        arrows: false,
				        dots: true
				      }
				    },

                    {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        dots: true
                      }
                    }
				]
            });
        }
    }
    //Active heor slider
    heroSlider();

    // Magnific Video Popup
    $('.ripple').magnificPopup({
      type: 'iframe'
    });

    // isotope masonry activation
    var $grid = $('.case-studies-active').isotope({
      itemSelector: '.grid-item',
      percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: '.grid-item'
      }
    });

    // filter items on button click
    $('.filter-button-group').on( 'click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({ filter: filterValue });
    });

    // for menu active class
    $('.filter-button-group button').on( 'click', function(event) {
        $(this).siblings(".active").removeClass('active');
        $(this).addClass("active");
        event.preventDefault();
     
    });

    //LightBox / Fancybox
    if($('.lightbox-image').length) {
        $('.lightbox-image').fancybox({
            openEffect  : 'fade',
            closeEffect : 'fade',
            helpers : {
                media : {}
            }
        });
    }


    /*=============================================
                  Service Slider
    ===============================================*/
    var service_slider = $('.service-wraper');
    service_slider.slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
      prevArrow: '<button type="button" class="slick-next"></button>',
      nextArrow: '<button type="button" class="slick-prev"></button>',
    });

    /*=============================================
                  Service Slider
    ===============================================*/
    var team_slider = $('.team-wraper');
    team_slider.slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
      prevArrow: '<button type="button" class="slick-next"></button>',
      nextArrow: '<button type="button" class="slick-prev"></button>',
    });

    /*============================================
                  Testimonial Slider
    ===============================================*/
    var testimonial_slider = $('.testimonial-wraper');
    testimonial_slider.slick({
        autoplay: true,
        autoplaySpeed: 9000,
        dots: true,
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });


    /*============================================
                  Partner Slider
    ===============================================*/
    var partner_slider = $('.partner-wraper');
    partner_slider.slick({
        autoplay: true,
        arrows: false,
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 6,
        responsive: [
            {
              breakpoint: 1199,
              settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 991,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 575,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            }
          ]
    });


    /*===============================================
                  Single news Slider
    =================================================*/
    var single_post_slider = $('.single-post-wraper');
    single_post_slider.slick({
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        prevArrow: '<button type="button" class="slick-next"></button>',
        nextArrow: '<button type="button" class="slick-prev"></button>',
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    /*=============================================
                  Funfact Acive
    ===============================================*/
    var funfact_active = $('.funfact');
    funfact_active.counterUp({
        delay: 10,
        time: 1000
    });

    /*======================================
        - Scroll Up -
     ====================================== */
     $.scrollUp({
         scrollName: 'scrollUp', // Element ID
         topDistance: '300', // Distance from top before showing element (px)
         topSpeed: 300, // Speed back to top (ms)
         animation: 'fade', // Fade, slide, none
         animationInSpeed: 200, // Animation in speed (ms)
         animationOutSpeed: 200, // Animation out speed (ms)
         scrollText: '<a class="icofont-hand-up"></a>', // Text for element
         activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
     });


    /*------------------------------------------
                    STICKY HEADER
    -------------------------------------------*/
    // Function for clone an element for sticky menu
    function cloneNavForSticyMenu($ele, $newElmClass) {
        $ele.addClass('original').clone().insertAfter($ele).addClass($newElmClass).removeClass('original');
    }

    // clone home style 1 navigation for sticky menu
    if ($('.main-header .header-nav').length) {
        cloneNavForSticyMenu($('.main-header .header-nav'), "sticky-header");
    }

    var lastScrollTop = '';

    function stickyMenu($targetMenu, $toggleClass) {
        var st = $(window).scrollTop();
        var mainMenuTop = $('.main-header .header-nav');

        if ($(window).scrollTop() > 1000) {
            if (st > lastScrollTop) {
                // hide sticky menu on scroll down
                $targetMenu.removeClass($toggleClass);

            } else {
                // active sticky menu on scroll up
                $targetMenu.addClass($toggleClass);
            }

        } else {
            $targetMenu.removeClass($toggleClass);
        }

        lastScrollTop = st;
    }

    /*==========================================================================
        WHEN WINDOW SCROLL
    ==========================================================================*/
    $(window).on("scroll", function() {

    if ($(".main-header").length) {
            stickyMenu( $('.main-header .header-nav'), "sticky-on" );
        }
        //toggleBackToTopBtn();
    });

    $(window).on('load', function () {
        // preloader
         $('#preloader').fadeOut('500');

    });


})(jQuery);