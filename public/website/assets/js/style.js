$(document).ready(function () {
    (function ($) {
        //initialize tooltip
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

        // returntotop
        $(window).scroll(function () {
            if ($(this).scrollTop() >= 200) { $('#return-to-top').show(200); }
            else { $('#return-to-top').hide(200); }
        });
        $('#return-to-top').click(function () {
            $('body,html').animate({ scrollTop: 0 }, 000);
        });

        // sticking the navbar
        $(function () {
            var header = $("header");
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();
                if (scroll >= 20) {
                    header.addClass("top");
                } else {
                    header.removeClass("top");
                }
            });
        });
        //responsive navbar
        $('#custom-navbar-toggler').click(function () {
            $('header .menu').addClass('show')
        })
        $('#menuClose').click(function () {
            $('header .menu').removeClass('show')
        })
        $('.menu-toggler .search').on('click', function () {
            $(this).find('form').slideToggle(200);
        })
        $("#home-search").click(function () {
            $('header .menu').addClass('search-on')
            $('header .menu .search').addClass('extended')
            $('.search input').focus()
        })
        $("#search-close").click(function () {
            $('header .menu .search').removeClass('extended')
            $('header .menu').removeClass('search-on');
        })
        //expandable text
        $('.see-more-btn').click(function () {
            $('.expandable-text').toggleClass("expanded")
            if ($('.expandable-text').hasClass("expanded")) {
                $('.see-more-btn').text('Read less')
            } else {
                $('.see-more-btn').text('Read more')
            }
            $('html, body').animate({
                scrollTop: $(".expandable-text").offset().top - 200
            }, 0000);
        })

        // meet-our-team
        $('.team-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
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
        })

        //recent-blog
        $('.recent-blog').owlCarousel({
            margin: 20,
            nav: false,
            dots: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3.2
                }
            }
        })

        // our-latest-blog
        $('.our-latest-blog').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
            autoplay: true,
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
        })

        $(".filter-div").click(function () {
            $(".side-bar").addClass("show");
        });

        $(".close-sidebar").click(function () {
            $(".side-bar").removeClass("show");
        });
        $(document).ready(function () {
            $('.counter').counterUp({
                delay: 10,
                time: 1200
            })
        })

    })(jQuery);
});


