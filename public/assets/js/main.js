!(function (e) {
    e(window).on("load", function () {
        e(".preloader").fadeOut();
    }),
        e(".preloader").length > 0 &&
            e(".preloaderCls").each(function () {
                e(this).on("click", function (t) {
                    t.preventDefault(), e(".preloader").css("display", "none");
                });
            }),
        (e.fn.vsmobilemenu = function (t) {
            var s = e.extend(
                {
                    menuToggleBtn: ".vs-menu-toggle",
                    bodyToggleClass: "vs-body-visible",
                    subMenuClass: "vs-submenu",
                    subMenuParent: "vs-item-has-children",
                    subMenuParentToggle: "vs-active",
                    meanExpandClass: "vs-mean-expand",
                    appendElement: '<span class="vs-mean-expand"></span>',
                    subMenuToggleClass: "vs-open",
                    toggleSpeed: 400,
                },
                t
            );
            return this.each(function () {
                var t = e(this);
                function n() {
                    t.toggleClass(s.bodyToggleClass);
                    var n = "." + s.subMenuClass;
                    e(n).each(function () {
                        e(this).hasClass(s.subMenuToggleClass) && (e(this).removeClass(s.subMenuToggleClass), e(this).css("display", "none"), e(this).parent().removeClass(s.subMenuParentToggle));
                    });
                }
                t.find("li").each(function () {
                    var t = e(this).find("ul");
                    t.addClass(s.subMenuClass), t.css("display", "none"), t.parent().addClass(s.subMenuParent), t.prev("a").append(s.appendElement), t.next("a").append(s.appendElement);
                });
                var a = "." + s.meanExpandClass;
                e(a).each(function () {
                    e(this).on("click", function (t) {
                        var n;
                        t.preventDefault(),
                            (n = e(this).parent()),
                            e(n).next("ul").length > 0
                                ? (e(n).parent().toggleClass(s.subMenuParentToggle), e(n).next("ul").slideToggle(s.toggleSpeed), e(n).next("ul").toggleClass(s.subMenuToggleClass))
                                : e(n).prev("ul").length > 0 && (e(n).parent().toggleClass(s.subMenuParentToggle), e(n).prev("ul").slideToggle(s.toggleSpeed), e(n).prev("ul").toggleClass(s.subMenuToggleClass));
                    });
                }),
                    e(s.menuToggleBtn).each(function () {
                        e(this).on("click", function () {
                            n();
                        });
                    }),
                    t.on("click", function (e) {
                        e.stopPropagation(), n();
                    }),
                    t.find("div").on("click", function (e) {
                        e.stopPropagation();
                    });
            });
        }),
        e(".vs-menu-wrapper").vsmobilemenu();
    var t = "",
        s = ".scrollToTop";
    e(window).on("scroll", function () {
        var n, a, o, i, r;
        (n = e(".sticky-active")),
            (a = "active"),
            (o = "will-sticky"),
            (i = e(window).scrollTop()),
            (r = n.css("height")),
            n.parent().css("min-height", r),
            e(window).scrollTop() > 800 ? (n.parent().addClass(o), i > t ? n.removeClass(a) : n.addClass(a)) : (n.parent().css("min-height", "").removeClass(o), n.removeClass(a)),
            (t = i),
            e(this).scrollTop() > 500 ? e(s).addClass("show") : e(s).removeClass("show");
    }),
        e(s).each(function () {
            e(this).on("click", function (s) {
                return s.preventDefault(), e("html, body").animate({ scrollTop: 0 }, t / 3), !1;
            });
        }),
        e("[data-bg-src]").length > 0 &&
            e("[data-bg-src]").each(function () {
                var t = e(this).attr("data-bg-src");
                e(this).css("background-image", "url(" + t + ")"), e(this).removeAttr("data-bg-src").addClass("background-image");
            }),
        e(".vs-hero-carousel").each(function () {
            var t = e(this);
            function s(e) {
                return t.data(e);
            }
            t.layerSlider({
                globalBGColor: !!s("globalbgcolor") && s("globalbgcolor"),
                allowRestartOnResize: !0,
                maxRatio: s("maxratio") ? s("maxratio") : 1,
                type: s("slidertype") ? s("slidertype") : "responsive",
                pauseOnHover: !!s("pauseonhover"),
                navPrevNext: !!s("navprevnext"),
                hoverPrevNext: !!s("hoverprevnext"),
                hoverBottomNav: !!s("hoverbottomnav"),
                navStartStop: !!s("navstartstop"),
                navButtons: !!s("navbuttons"),
                loop: !1 !== s("loop"),
                autostart: !!s("autostart"),
                height: s("height") ? s("height") : 1080,
                responsiveUnder: s("responsiveunder") ? s("responsiveunder") : 1220,
                layersContainer: s("container") ? s("container") : 1220,
                showCircleTimer: !!s("showcircletimer"),
                skinsPath: "layerslider/skins/",
                thumbnailNavigation: !1 !== s("thumbnailnavigation"),
            });
        }),
        e(".vs-carousel").each(function () {
            var t = e(this);
            function s(e) {
                return t.data(e);
            }
            var n = '<button type="button" class="slick-prev"><i class="' + s("prev-arrow") + '"></i></button>',
                a = '<button type="button" class="slick-next"><i class="' + s("next-arrow") + '"></i></button>';
            e("[data-slick-next]").each(function () {
                e(this).on("click", function (t) {
                    t.preventDefault(), e(e(this).data("slick-next")).slick("slickNext");
                });
            }),
                e("[data-slick-prev]").each(function () {
                    e(this).on("click", function (t) {
                        t.preventDefault(), e(e(this).data("slick-prev")).slick("slickPrev");
                    });
                }),
                1 == s("arrows") && (t.closest(".arrow-wrap").length || t.closest(".container").parent().addClass("arrow-wrap")),
                t.slick({
                    dots: !!s("dots"),
                    fade: !!s("fade"),
                    arrows: !!s("arrows"),
                    speed: s("speed") ? s("speed") : 1e3,
                    asNavFor: !!s("asnavfor") && s("asnavfor"),
                    autoplay: (s("autoplay"), !1),
                    infinite: 0 != s("infinite"),
                    slidesToShow: s("slide-show") ? s("slide-show") : 1,
                    adaptiveHeight: !!s("adaptive-height"),
                    centerMode: !!s("center-mode"),
                    autoplaySpeed: s("autoplay-speed") ? s("autoplay-speed") : 8e3,
                    centerPadding: s("center-padding") ? s("center-padding") : "0",
                    focusOnSelect: 0 != s("focuson-select"),
                    pauseOnFocus: !!s("pauseon-focus"),
                    pauseOnHover: !!s("pauseon-hover"),
                    variableWidth: !!s("variable-width"),
                    vertical: !!s("vertical"),
                    verticalSwiping: !!s("vertical"),
                    prevArrow: s("prev-arrow") ? n : '<button type="button" class="slick-prev"><i class="far fa-chevron-left"></i></button>',
                    nextArrow: s("next-arrow") ? a : '<button type="button" class="slick-next"><i class="far fa-chevron-right"></i></button>',
                    rtl: "rtl" == e("html").attr("dir"),
                    responsive: [
                        { breakpoint: 1600, settings: { arrows: !!s("xl-arrows"), dots: !!s("xl-dots"), slidesToShow: s("xl-slide-show") ? s("xl-slide-show") : s("slide-show"), centerMode: !!s("xl-center-mode"), centerPadding: 0 } },
                        { breakpoint: 1400, settings: { arrows: !!s("ml-arrows"), dots: !!s("ml-dots"), slidesToShow: s("ml-slide-show") ? s("ml-slide-show") : s("slide-show"), centerMode: !!s("ml-center-mode"), centerPadding: 0 } },
                        {
                            breakpoint: 1200,
                            settings: { arrows: !!s("lg-arrows"), dots: !!s("lg-dots"), slidesToShow: s("lg-slide-show") ? s("lg-slide-show") : s("slide-show"), centerMode: !!s("lg-center-mode") && s("lg-center-mode"), centerPadding: 0 },
                        },
                        {
                            breakpoint: 992,
                            settings: { arrows: !!s("md-arrows"), dots: !!s("md-dots"), slidesToShow: s("md-slide-show") ? s("md-slide-show") : 1, centerMode: !!s("md-center-mode") && s("md-center-mode"), centerPadding: 0 },
                        },
                        {
                            breakpoint: 767,
                            settings: { arrows: !!s("sm-arrows"), dots: !!s("sm-dots"), slidesToShow: s("sm-slide-show") ? s("sm-slide-show") : 1, centerMode: !!s("sm-center-mode") && s("sm-center-mode"), centerPadding: 0 },
                        },
                        {
                            breakpoint: 576,
                            settings: { arrows: !!s("xs-arrows"), dots: !!s("xs-dots"), slidesToShow: s("xs-slide-show") ? s("xs-slide-show") : 1, centerMode: !!s("xs-center-mode") && s("xs-center-mode"), centerPadding: 0 },
                        },
                    ],
                });
        });
    var n,
        a,
        o,
        i = ".ajax-contact",
        r = "is-invalid",
        l = '[name="email"]',
        c = '[name="firstname"],[name="lastname"],[name="email"],[name="number"],[name="message"]',
        d = e(".form-messages");
    function u() {
        var t,
            s = e(i).serialize();
        (t = (function () {
            var t,
                s = !0;
            function n(n) {
                n = n.split(",");
                for (var a = 0; a < n.length; a++) (t = i + " " + n[a]), e(t).val() ? (e(t).removeClass(r), (s = !0)) : (e(t).addClass(r), (s = !1));
            }
            n(c),
                e(l).val() &&
                e(l)
                    .val()
                    .match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)
                    ? (e(l).removeClass(r), (s = !0))
                    : (e(l).addClass(r), (s = !1));
            return s;
        })()),
            t &&
                jQuery
                    .ajax({ url: e(i).attr("action"), data: s, type: "POST" })
                    .done(function (t) {
                        d.removeClass("error"), d.addClass("success"), d.text(t), e(i + ' input:not([type="submit"]),' + i + " textarea").val("");
                    })
                    .fail(function (e) {
                        d.removeClass("success"), d.addClass("error"), "" !== e.responseText ? d.html(e.responseText) : d.html("Oops! An error occured and your message could not be sent.");
                    });
    }
    e(i).on("submit", function (e) {
        e.preventDefault(), u();
    }),
        e(".popup-image").magnificPopup({ type: "image", gallery: { enabled: !0 } }),
        e(".popup-video").magnificPopup({ type: "iframe" }),
        e(".filter-active").imagesLoaded(function () {
            var t = ".filter-active",
                s = ".filter-item",
                n = ".filter-menu-active";
            if (e(t).length > 0) {
                var a = e(t).isotope({ itemSelector: s, filter: "*", masonry: { columnWidth: s } });
                e(n).on("click", "button", function () {
                    var t = e(this).attr("data-filter");
                    a.isotope({ filter: t });
                }),
                    e(n).on("click", "button", function (t) {
                        t.preventDefault(), e(this).addClass("active"), e(this).siblings(".active").removeClass("active");
                    });
            }
        }),
        (n = ".sidemenu-wrapper"),
        (a = ".sideMenuCls"),
        (o = "show"),
        e(".sideMenuToggler").on("click", function (t) {
            t.preventDefault(), e(n).addClass(o);
        }),
        e(n).on("click", function (t) {
            t.stopPropagation(), e(n).removeClass(o);
        }),
        e(n + " > div").on("click", function (t) {
            t.stopPropagation(), e(n).addClass(o);
        }),
        e(a).on("click", function (t) {
            t.preventDefault(), t.stopPropagation(), e(n).removeClass(o);
        }),
        (function (t, s, n, a) {
            e(s).on("click", function (s) {
                s.preventDefault(), e(t).addClass(a);
            }),
                e(t).on("click", function (s) {
                    s.stopPropagation(), e(t).removeClass(a);
                }),
                e(t)
                    .find("form")
                    .on("click", function (s) {
                        s.stopPropagation(), e(t).addClass(a);
                    }),
                e(n).on("click", function (s) {
                    s.preventDefault(), s.stopPropagation(), e(t).removeClass(a);
                });
        })(".popup-search-box", ".searchBoxTggler", ".searchClose", "show"),
        e(".accordion-button").on("click", function () {
            e(this).closest(".accordion-item").toggleClass("active").siblings().removeClass("active");
        }),
        (e.fn.countdown = function () {
            e(this).each(function () {
                var t = e(this),
                    s = new Date(t.data("end-date")).getTime();
                function n(e) {
                    return t.find(e);
                }
                var a = setInterval(function () {
                    var e = new Date().getTime(),
                        o = s - e,
                        i = Math.floor(o / 864e5),
                        r = Math.floor((o % 864e5) / 36e5),
                        l = Math.floor((o % 36e5) / 6e4),
                        c = Math.floor((o % 6e4) / 1e3);
                    function d(e) {
                        return e < 10 ? "0" + e : e;
                    }
                    o < 0 ? (clearInterval(a), t.addClass("expired"), t.find(".message").css("display", "block")) : (n(".day").html(d(i)), n(".hour").html(d(r)), n(".minute").html(d(l)), n(".seconds").html(d(c)));
                }, 1e3);
            });
        }),
        e(".countdown-active").length && e(".countdown-active").countdown(),
        (e.fn.shapeMockup = function () {
            e(this).each(function () {
                var t = e(this),
                    s = t.data("top"),
                    n = t.data("right"),
                    a = t.data("bottom"),
                    o = t.data("left");
                t.css({ top: s, right: n, bottom: a, left: o }).removeAttr("data-top").removeAttr("data-right").removeAttr("data-bottom").removeAttr("data-left").parent().addClass("shape-mockup-wrap");
            });
        }),
        e(".shape-mockup") && e(".shape-mockup").shapeMockup(),
        e("#slider-range").slider({
            range: !0,
            min: 40,
            max: 300,
            values: [60, 570],
            slide: function (t, s) {
                e("#minAmount").text("$" + s.values[0]), e("#maxAmount").text("$" + s.values[1]);
            },
        }),
        e("#minAmount").text("$" + e("#slider-range").slider("values", 0)),
        e("#maxAmount").text("$" + e("#slider-range").slider("values", 1)),
        e("#ship-to-different-address-checkbox").on("change", function () {
            e(this).is(":checked") ? e("#ship-to-different-address").next(".shipping_address").slideDown() : e("#ship-to-different-address").next(".shipping_address").slideUp();
        }),
        e(".woocommerce-form-login-toggle a").on("click", function (t) {
            t.preventDefault(), e(".woocommerce-form-login").slideToggle();
        }),
        e(".woocommerce-form-coupon-toggle a").on("click", function (t) {
            t.preventDefault(), e(".woocommerce-form-coupon").slideToggle();
        }),
        e(".shipping-calculator-button").on("click", function (t) {
            t.preventDefault(), e(this).next(".shipping-calculator-form").slideToggle();
        }),
        e('.wc_payment_methods input[type="radio"]:checked').siblings(".payment_box").show(),
        e('.wc_payment_methods input[type="radio"]').each(function () {
            e(this).on("change", function () {
                e(".payment_box").slideUp(), e(this).siblings(".payment_box").slideDown();
            });
        }),
        e(".rating-select .stars a").each(function () {
            e(this).on("click", function (t) {
                t.preventDefault(), e(this).siblings().removeClass("active"), e(this).parent().parent().addClass("selected"), e(this).addClass("active");
            });
        }),
        e(".quantity-plus").each(function () {
            e(this).on("click", function (t) {
                t.preventDefault();
                var s = e(this).siblings(".qty-input"),
                    n = parseInt(s.val());
                isNaN(n) || s.val(n + 1);
            });
        }),
        e(".quantity-minus").each(function () {
            e(this).on("click", function (t) {
                t.preventDefault();
                var s = e(this).siblings(".qty-input"),
                    n = parseInt(s.val());
                !isNaN(n) && n > 1 && s.val(n - 1);
            });
        });
})(jQuery);
// window.addEventListener(
//     "contextmenu",
//     function (e) {
//         e.preventDefault();
//     },
//     !1
// )
    // (document.onkeydown = function (e) {
    //     if (123 == event.keyCode || (e.ctrlKey && e.shiftKey && 73 == e.keyCode) || (e.ctrlKey && e.shiftKey && 67 == e.keyCode) || (e.ctrlKey && e.shiftKey && 74 == e.keyCode) || (e.ctrlKey && 85 == e.keyCode)) return !1;
    // });
