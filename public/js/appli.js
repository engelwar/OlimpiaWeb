! function (n, t, e) {
<<<<<<< HEAD
    console.log("init");
    var o = {
        init: function (e) {
            o.select2(),
                o.stellar(),
                o.carousel(),
                o.lightCase(),
                o.sideNav(),
                o.counter(),
                o.skills(),
                o.aos(),
                o.navbarChange(),
                o.navbarHeadroom()
        },
        select2: function () {
            n(e).ready(function () {
                n("select").select2()
            })
        },
        stellar: function () {
            var e = n(t).width();
            767 <= e && (n(".bg-fixed").attr("data-stellar-background-ratio", "0.8"),
                n.stellar({
                    horizontalScrolling: !1,
                    responsive: !0,
                    parallaxBackgrounds: !0,
                    scrollProperty: "scroll"
                }))
        },
        carousel: function () {
            n(".testi-carousel").owlCarousel({
                    loop: !0,
                    margin: 10,
                    autoplay: !0,
                    nav: !1,
                    dots: !0,
                    dotSpeed: 1e3,
                    autoplaySpeed: 1e3,
                    items: 1
                }),
                n(".client-slider").owlCarousel({
                    loop: !0,
                    margin: 10,
                    autoplay: !0,
                    nav: !1,
                    navSpeed: 1e3,
                    dots: !1,
                    autoplaySpeed: 1e3,
                    //navText:['<span class="fas fa-angle-left"></span>','<span class="fas fa-angle-right"></span>'],
                    responsive: {
                        0: {
                            items: 2
                        },
                        600: {
                            items: 3
                        },
                        1e3: {
                            items: 5
                        }
                    }
                }),
                n(".histo-carousel").owlCarousel({
                    animateOut: 'fadeOut',
                    loop: !0,
                    margin: 10,
                    autoplay: !0,
                    nav: !1,
                    dots: !1,
                    dotSpeed: 1e3,
                    autoplaySpeed: 1e3,
                    items: 1
                }),
                n(".promo-carousel").owlCarousel({
                    loop: true,
                    nav: true,
                    dots: false,
                    items: 1,
                    margin: 5,
                    navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
                }),
                n(".prod-carousel").owlCarousel({
                    dots: false,
                    nav: false,
                    items: 3,
                    margin: 15,
                    loop: true
                })
        },
        lightCase: function () {
            jQuery(e).ready(function (e) {
                e("a[data-rel^=lightcase]").lightcase()
            })
        },
        sideNav: function () {
        },
        counter: function () {
            n("#counter").each(function () {
                n(this).waypoint({
                    handler: function (e) {
                        n(".number").countTo({
                            speed: 1e3
                        }), this.destroy()
                    },
                    offset: "80%"
                })
            })
        },
        skills: function () {
            n("#skills").each(function () {
                return n(this).waypoint({
                    handler: function (e) {
                        n(".progress").each(function () {
                            console.log(n(this).attr("data-percent")),
                                n(this).find(".progress-bar").delay(1e4).css({
                                    width: n(this).attr("data-percent")
                                })
                        })
                    },
                    offset: "80%"
                }), !1
            })
        },
        aos: function () {
            AOS.init({
                once: !0
            })
        },
        navbarChange: function ()
        {
            n(t).scroll(function () {
                var e = n(t).scrollTop();
                return 150 < e ? (n("#header-navbar").removeClass("navbar-transparent")) : (n("#header-navbar").addClass("navbar-transparent")), !1
            })
        },
        navbarHeadroom: function () {
            var menufixed = document.getElementById("header");
            var headroom = new Headroom(menufixed);
            headroom.init();

            // MENU RESPONSIVE

            var ancho = $(window).width(),
                enlaces = $('#enlaces'),
                btnMenu = $('#btn-menu'),
                icono = $('#btn-menu .icono');

            if (ancho < 800) {
                enlaces.hide();
                icono.addClass('fa-bars');
            }

            btnMenu.on('click', function (e) {
                enlaces.slideToggle();
                icono.toggleClass('fa-bars');
                icono.toggleClass('fa-times');
            });

            $(window).on('resize', function () {
                if ($(this).width() > 800) {
                    enlaces.show();
                    icono.addClass('fa-times');
                    icono.removeClass('fa-bars');
                } else {
                    enlaces.hide();
                    icono.addClass('fa-bars');
                    icono.removeClass('fa-times');
                }
            });
        }
    };
    n(e).ready(function () {
        o.init(n)
    })
=======

>>>>>>> 66bce055bc4ff35e9237c5235dff18cd421a60b0
}(window.jQuery, window, document);
