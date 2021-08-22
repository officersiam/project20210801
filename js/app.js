/*--------------------------------------------*/
/*  PRE LOADING
 /*------------------------------------------*/

$(window).load(function() {
    'use strict';
    $('#loading').delay(350).fadeOut('slow');
});


$(document).ready(function() {
    /* ------------------------------------- */
    /*   wow
     /* ------------------------------------- */

          var wow = new WOW(
             {
                animateClass: 'animated',
                offset: 50,
                mobile: true
             }
           );
          wow.init();

    /* ==============================================
     Smooth Scroll To Anchor
     =============================================== */

        'use strict';
        $('.navbar-nav a').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 0
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });

    /* ==============================================
     STICKY HEADER
     =============================================== */

    $(window).on('scroll', function () {
        if ($(window).scrollTop() < 100) {
            $('.header').removeClass('sticky_header');
        } else {
            $('.header').addClass('sticky_header');
        }
    });


    /* ==============================================
     portfolio-filter
     =============================================== */

        // filter items on button click
            $('#filtr-container').on('click', 'li', function(e) {
                'use strict';
                e.preventDefault();
                $('#filtr-container li').removeClass('active');
                $(this).closest('li').addClass('active');
            });

            $(window).load(function() {
                $('.filtr-container').filterizr();
            });


    /* ==============================================
     pop up
     =============================================== */

       // portfolio-pop up

        $('.filtr-container').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title');
                }
            },
            zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function (element) {
                    return element.find('img');
                }
            }
        });

    // intro video pop up

        $('.popup-video').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });


    /* ==============================================
     OWL CAROUSEL
     =============================================== */

    $(".team_carousel").owlCarousel({
        itemsCustom : [
            [0, 1],
            [450,1],
            [720, 2],
            [1000, 3]
        ],
        slideSpeed : 1000,
        pagination:false,
        autoPlay:true
    });


    $(".testimonial_carousel").owlCarousel({
        itemsCustom : [
            [0, 1],
            [600,1],
            [720, 1],
            [1000, 1]
        ],
        slideSpeed : 1000,
        pagination:false,
        autoPlay:true
    });


    $(".blog_carousel").owlCarousel({
        itemsCustom : [
            [0, 1],
            [450,1],
            [720, 2],
            [1000, 3]
        ],
        slideSpeed : 1000,
        pagination:false,
        autoPlay:true
    });


    $(".intro_owl_carousel").owlCarousel({
        itemsCustom : [
            [0, 1],
            [600,1],
            [720, 1],
            [1000, 1]
        ],
        slideSpeed : 1000,
        pagination:false,
        autoPlay:true
    });


    $(".fullscreen-slider").owlCarousel({
        slideSpeed: 350,
        singleItem: !0,
        autoHeight: !1,
        navigation: !0,
        pagination: !0,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: !0,
        autoPlay:true
    });

    /* ------------------------------------- */
    /* Animated progress bars
     /* ------------------------------------- */

    $('.progress_bar').waypoint(function () {
        $('.progress').each(function () {
            $('.progress .progress-bar').progressbar({
                transition_delay: 1000
            });
        });
    }, {
        offset: '100%',
        triggerOnce: true
    });


    /* --------------------------------------------------------
     MAPS
     ----------------------------------------------------------- */

    google.maps.event.addDomListener(window, 'load', init);
    var map = $('#map');
    var lattuide = map.attr('data-lat');
    var longtuided = map.attr('data-lon');

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 16,
            scrollwheel: false,
            navigationControl: false,
            mapTypeControl: false,
            scaleControl: false,
            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(lattuide, longtuided), // New York

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e9e9e9"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 29
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 18
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dedede"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#333333"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        },
                        {
                            "lightness": 19
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                }
            ]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(lattuide, longtuided),
            map: map,
            title: 'Snazzy!'
        });
    }



    /* --------------------------------------------------------
     TEXTILLATE ANIMATE
     ----------------------------------------------------------- */
    "use strict";
    var tlt  = $(".tlt");
    if(tlt.length > 0 ) {
        tlt.textillate({
            loop: true,
            minDisplayTime: 5000,
            in: {
                // set the effect name
                effect: 'fadeInLeft',
                delayScale: 1.5
            },
            out: {
                effect: 'hinge',
                delayScale: 1.5,
                delay: 50,
                sync: false,
                shuffle: false,
                reverse: false,
                callback: function () {}
            }
        });
    }


    /* --------------------------------------------------------
     TEXT ROTATOR
     ----------------------------------------------------------- */
    $(".rotate").textrotator({
        animation: "dissolve", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
        separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
        speed: 3000 // How many milliseconds until the next word show.
    });


    /* --------------------------------------------------------
     YTPlayer
     ----------------------------------------------------------- */
    jQuery("#home_intro_video").YTPlayer();


    /* --------------------------------------------------------
     COUNTER JS
     ----------------------------------------------------------- */

    $('.counter').counterUp({
        delay: 10,
        time: 3000
    });



  });



















