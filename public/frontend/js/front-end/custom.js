/*
 * Supposition v0.3a - an optional enhancer for Superfish jQuery menu widget
 *
 * Copyright (c) 2013 Joel Birch - based on work by Jesse Klaasse - credit goes largely to him.
 * Special thanks to Karl Swedberg for valuable input.
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 * 	http://www.gnu.org/licenses/gpl.html
 */

;
(function ($) {

    $.fn.supposition = function () {
        var $w = $(window),
            /*do this once instead of every onBeforeShow call*/
            _offset = function (dir) {
                return window[dir == 'y' ? 'pageYOffset' : 'pageXOffset'] ||
                    document.documentElement && document.documentElement[dir == 'y' ? 'scrollTop' : 'scrollLeft'] ||
                    document.body[dir == 'y' ? 'scrollTop' : 'scrollLeft'];
            },
            onInit = function () {
                /* I haven't touched this bit - needs work as there are still z-index issues */
                $topNav = $('li', this);
                var cZ = parseInt($topNav.css('z-index')) + $topNav.length;
                $topNav.each(function () {
                    $(this).css({
                        zIndex: --cZ
                    });
                });
            },
            onHide = function () {
                this.css({
                    marginTop: '',
                    marginLeft: ''
                });
            },
            onBeforeShow = function () {
                this.each(function () {
                    var $u = $(this);
                    var menuWidth = $u.width(),
                        parentWidth = $u.parents('ul').width(),
                        totalRight = $w.width() + _offset('x'),
                        menuRight = $u.offset().left + menuWidth;
                    if ($u.parents('li').hasClass('menu-has-children')) {
                        menuRight = $u.parents('ul').offset().left + menuWidth + $u.parents('ul').width()
                    }
                    if (menuRight > totalRight) {
                        $u.css('margin-left', ($u.parents('ul').length == 1 ? totalRight - menuRight : -(menuWidth + parentWidth)) + 'px');
                    }

                    var windowHeight = $w.height(),
                        offsetTop = $u.offset().top,
                        menuHeight = $u.height(),
                        baseline = windowHeight + _offset('y');
                    var expandUp = (offsetTop + menuHeight > baseline);
                    if (expandUp) {
                        $u.css('margin-top', baseline - (menuHeight + offsetTop));
                    }
                });
            };

        return this.each(function () {
            var $this = $(this),
                o = $this.data('sf-options'); /* get this menu's options */

            /* if callbacks already set, store them */
            var _onInit = o.onInit,
                _onBeforeShow = o.onBeforeShow,
                _onHide = o.onHide;

            $.extend($this.data('sf-options'), {
                onInit: function () {
                    onInit.call(this); /* fire our Supposition callback */
                    _onInit.call(this); /* fire stored callbacks */
                },
                onBeforeShow: function () {
                    onBeforeShow.call(this); /* fire our Supposition callback */
                    _onBeforeShow.call(this); /* fire stored callbacks */
                },
                onHide: function () {
                    onHide.call(this); /* fire our Supposition callback */
                    _onHide.call(this); /* fire stored callbacks */
                }
            });
        });
    };

})(jQuery);


$(document).ready(function () {
    AOS.init({
        duration: 500,
        mirror: true,
        offset: 80,
    })
    var slides = $('.slider-item');
    $('.rad-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        useCSS: false,
        useTransform: false,
        prevArrow: '<div class="slick-prev"><i class="fas fa-chevron-left fa-2x"></i></div>',
        nextArrow: '<div class="slick-next"><i class="fas fa-chevron-right fa-2x"></i></div>',
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 1000,
        dots: true,
    }).on('init', function (slick) {
        $('.slider-item .aos-init').removeClass('aos-init').removeClass('aos-animate');

    }).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        $('.slider-item .aos-init').removeClass('aos-init').removeClass('aos-animate');
        //slides.removeClass('radOut radIn');
        //slides.eq(currentSlide).addClass('radOut');
        //slides.eq(nextSlide).addClass('radIn');
        // setTimeout(() => {
        //
        // }, 500);
    }).on('afterChange', function (slick, currentSlide, ) {
        AOS.refresh()
    });

    if ($(".ph-slider-heading").length > 0) {
        $('.ph-slider-heading').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            useCSS: false,
            useTransform: false,
            autoplay: false,
            autoplaySpeed: 4000,
            speed: 1000,
            dots: true,
        });
    }

    // slider.events.on('transitionStart', function () {
    //     $('.slider-item .aos-init').removeClass('aos-init').removeClass('aos-animate');
    // });
    // slider.events.on('transitionEnd', function () {
    //     AOS.refresh()
    // });


    // Header fixed and Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 30) {
            $('.back-to-top').fadeIn('slow');
            $('#header').addClass('header-fixed');
            $('body').addClass('fixed-header');
        } else {
            $('.back-to-top').fadeOut('slow');
            $('#header').removeClass('header-fixed');
            $('body').removeClass('fixed-header');
        }
    });
    if ($(this).scrollTop() > 50) {
        $('.back-to-top').fadeIn('slow');
        $('#header').addClass('header-fixed');
    }
    $('.back-to-top').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1500, 'easeInOutExpo');
        return false;
    });

    // Initiate superfish on nav menu
    $('.nav-menu').superfish({
        animation: {
            opacity: 'show',
            height: 'show'
        },
        speed: 250,
    }).supposition();

    // Mobile Navigation
    if ($('#nav-menu-container').length) {
        var $mobile_nav = $('#nav-menu-container').clone().prop({
            id: 'mobile-nav'
        });
        $mobile_nav.find('> ul').attr({
            'class': '',
            'id': ''
        });
        $('body').append($mobile_nav);
        $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>');
        $('body').append('<div id="mobile-body-overly"></div>');
        $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');

        $(document).on('click', '.menu-has-children i', function (e) {
            $(this).next().toggleClass('menu-item-active');
            $(this).nextAll('ul').eq(0).slideToggle();
            $(this).toggleClass("fa-chevron-up fa-chevron-down");
        });

        $(document).on('click', '#mobile-nav-toggle', function (e) {
            $('body').toggleClass('mobile-nav-active');
            $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
            $('#mobile-body-overly').toggle();
        });

        $(document).click(function (e) {
            var container = $("#mobile-nav, #mobile-nav-toggle");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
                    $('#mobile-body-overly').fadeOut();
                }
            }
        });
    } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
        $("#mobile-nav, #mobile-nav-toggle").hide();
    }

    // Smoth scroll on page hash links
    $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            if (target.length) {
                var top_space = 0;

                if ($('#header').length) {
                    top_space = $('#header').outerHeight();

                    if (!$('#header').hasClass('header-fixed')) {
                        top_space = top_space - 20;
                    }
                }

                $('html, body').animate({
                    scrollTop: target.offset().top - top_space
                }, 1500, 'easeInOutExpo');

                if ($(this).parents('.nav-menu').length) {
                    $('.nav-menu .menu-active').removeClass('menu-active');
                    $(this).closest('li').addClass('menu-active');
                }

                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
                    $('#mobile-body-overly').fadeOut();
                }
                return false;
            }
        }
    });

    $(".tab-control .carousel-control-prev").click(function () {
        var prev = jQuery('#nav-tab > .active').prev('a')
        if (prev.length) {
            prev.trigger('click');
        } else {
            jQuery('#nav-tab a:last').tab('show');
        }
    });
    $(".tab-control .carousel-control-next").click(function () {
        var next = jQuery('#nav-tab > .active').next('a')
        if (next.length) {
            next.trigger('click');
        } else {
            jQuery('#nav-tab a:first').tab('show');
        }
    });


    /*--===== TQI SCRIPT =====--*/




    /*--====== Modile Menu ======*/
    function mobileMenu() {
        if ($("#nav-menu-container").length > 0) {
            var menuHtml = $("#nav-menu-container > ul").html();
            $(".mobile-menu").html('<ul>' + menuHtml + '</ul>').addClass("hide");
            $(".mobile-menu ul li ul").parent().addClass("tqi-dropdown");
            $(".mobile-menu .sf-with-ul").append('<span class="m-drop"><i class="fas fa-plus"></i></span>');
            var windowW = $(window).width();
            var mobileMenuShowWidth = parseInt($("#nav-menu-container .nav-menu").data("responsive-menu") - 16);
            if (windowW < mobileMenuShowWidth) {
                $("#nav-menu-container > ul").addClass("hide");
                $("#mobile-menu").removeClass("hide");
                $(".menu-toggle").addClass("show-inline");
            } else {
                $("#nav-menu-container > ul").removeClass("hide");
                $("#mobile-menu").addClass("hide");
                $(".menu-toggle").removeClass("show-inline");
            }
        }
    }
    mobileMenu();
    $(window).resize(function () {
        mobileMenu();
    });
    $(".menu-toggle").on("click", function () {
        $("#mobile-menu").slideToggle(300);
    });

    $(".m-drop").on("click", function () {
        $(this).children("i").toggleClass("fa-minus").parent().parent().parent("li.tqi-dropdown").children("ul").slideToggle(300);
        $(this).parent().parent("li.tqi-dropdown").siblings("li.tqi-dropdown").children("ul").slideUp(300);
        $(this).parents("li.tqi-dropdown").siblings("li.tqi-dropdown").children("a").find("i").removeClass("fa-minus");
        return false;
    });

    /*--====== End Mobile Menu ======*/

})

var ProductSearchTypeHint = {
    products: [],
    generics: [],
    therapeutics: [],
    query: '',
    searchBy: '',
    redirectUrl: '',

    searchByVal: function(item) {
        if(item[0].tagName == 'INPUT') {
            return item.filter( function () {
                return $(this).prop('checked') == true;
            }).val()
        }
        return item.val();
    },

    itemList: function (obj = this) {
        if (obj.searchBy !== 'brand') {
            return obj[obj.searchBy + 's'].filter(function (item) {
                // return item.match(new RegExp("^" + obj.query + ".*", 'i'));
                return item.toLowerCase().includes(obj.query.toLowerCase());
            });
        }

        return obj.products.filter(function (item) {
            // return item.match(new RegExp("^" + obj.query + ".*", 'i'));
            return item.toLowerCase().includes(obj.query.toLowerCase());
        });
    },

    generateHintsList: function (hintsElement, limit) {

        var name = this.itemList(),
            obj = this;

        var htmlToAppend = name.map(function(item, index) {
            if(limit && obj.query.length && index >= limit)
                return false;
            return '<li>' + item.trim() + '</li>';
        });

        hintsElement.html(htmlToAppend);

        if (hintsElement.children('li').length === 0) {
            hintsElement.slideUp('slow');
        } else {
            hintsElement.slideDown('slow');
        }
    },

    displayHints: function (obj, searchByElement, hintsElement, e, eThis, listLimit) {
        obj.query = eThis.val();
        obj.searchBy = obj.searchByVal(searchByElement);
        // obj.redirectUrl = redirectUrl;

        if (e.keyCode === 13) {
            obj.redirectSearch(obj.query);
        }

        obj.generateHintsList(hintsElement, listLimit);
    },

    onFocus: function (element, searchByElement, hintsElement) {
        var obj = this;

        element.on('focus', function (e) {
            obj.displayHints(obj, searchByElement, hintsElement, e, $(this))
        });
    },

    onKeyUp: function (element, searchByElement, hintsElement, searchUrl = '', redirectUrl = '') {

        var obj = this;

        element.on('keyup', function (e) {
            obj.displayHints(obj, searchByElement, hintsElement, e, $(this), 5);

            // $.ajax({
            //     method: "GET",
            //     url: searchUrl,
            //     data: {
            //         query: obj.query,
            //         searchBy: obj.searchBy
            //     },
            //     success: function (response) {
            //         console.dir(response);
            //         var htmlToAppend = '',
            //             unique_names = [];
            //         response.forEach(function (item, index) {
            //             var name = (obj.searchBy !== 'brand') ? item[obj.searchBy].name : item.name;
            //
            //             if (index >= 5) return;
            //             if (unique_names.includes(name)) return;
            //
            //             unique_names.push(name);
            //             htmlToAppend += '<li>' + name + '</li>';
            //         });
            //
            //         hintsElement.html(htmlToAppend);
            //
            //         if (hintsElement.children('li').length === 0) {
            //             hintsElement.slideUp('slow');
            //         } else {
            //             hintsElement.slideDown('slow');
            //         }
            //     }
            // })
        });
    },
    onBlur: function (targetElement, duration = 500) {
        targetElement.on('blur', function () {
            setTimeout(function () {
                $('#hints').slideUp('slow');
            }, duration);
        });
    },
    onHintClick: function (targetElement) {
        var obj = this;
        targetElement.on('click', 'li', function (e) {
            var text = e.target.textContent;
            obj.redirectSearch(text);
        });
    },
    onSearchClick: function (targetElement) {
        var obj = this;
        targetElement.on('click', function (e) {
            obj.redirectSearch(obj.query);
        });
    },
    redirectSearch: function (query) {
        window.location = this.redirectUrl + '?query=' + encodeURIComponent(query) + '&searchBy=' + this.searchBy + '#search-wrapper';
    }
}
