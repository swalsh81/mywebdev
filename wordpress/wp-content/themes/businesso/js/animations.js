//	Animations v1.0, Copyright 2014, Joe Mottershaw, https://github.com/joemottershaw/
//	==================================================================================
//	Visible, Sam Sehnert, samatdf, TeamDF, https://github.com/teamdf/jquery-visible/
//	================================================================================
(function($) {
    "use strict";

    function randomClass() {
        var a = Math.ceil(Math.random() * classAmount);
        return type = classesArray[a]
    }

    function triggerOnce(a, b) {
        "random" == b && (b = randomClass()), $(a).removeClass("trigger infinite " + triggerClasses).addClass("trigger").addClass(b).one("webkitAnimationEnd oAnimationEnd MSAnimationEnd animationend", function() {
            $(this).removeClass("trigger infinite " + triggerClasses)
        })
    }

    function triggerInfinite(a, b) {
        "random" == b && (b = randomClass()), $(a).removeClass("trigger infinite " + triggerClasses).addClass("trigger infinite").addClass(b).one("webkitAnimationEnd oAnimationEnd MSAnimationEnd animationend", function() {
            $(this).removeClass("trigger infinite " + triggerClasses)
        })
    }! function(a) {
        a.fn.visible = function(b, c, d) {
            var e = a(this).eq(0),
                f = e.get(0),
                g = a(window),
                h = g.scrollTop(),
                i = h + g.height(),
                j = g.scrollLeft(),
                k = j + g.width(),
                l = e.offset().top,
                m = l + e.height(),
                n = e.offset().left,
                o = n + e.width(),
                p = b === !0 ? m : l,
                q = b === !0 ? l : m,
                r = b === !0 ? o : n,
                s = b === !0 ? n : o,
                t = c === !0 ? f.offsetWidth * f.offsetHeight : !0,
                d = d ? d : "both";
            return "both" === d ? !!t && i >= q && p >= h && k >= s && r >= j : "vertical" === d ? !!t && i >= q && p >= h : "horizontal" === d ? !!t && k >= s && r >= j : void 0
        }, a.fn.fireAnimations = function() {
            function c() {
                a(window).width() >= 960 ? a(".animate").each(function(b, c) {
                    var c = a(c),
                        d = a(this).attr("data-anim-type"),
                        e = a(this).attr("data-anim-delay");
                    c.visible(!0) && setTimeout(function() {
                        c.addClass(d)
                    }, e)
                }) : a(".animate").each(function(b, c) {
                    var c = a(c),
                        d = a(this).attr("data-anim-type"),
                        e = a(this).attr("data-anim-delay");
                    setTimeout(function() {
                        c.addClass(d)
                    }, e)
                })
            }
            a(document).ready(function() {
                a("html").removeClass("no-js").addClass("js"), c()
            }), a(window).scroll(function() {
                c(), a(window).scrollTop() + a(window).height() == a(document).height() && c()
            })
        }, a(".animate").fireAnimations()
    }(jQuery);
    var triggerClasses = "flash strobe shake bounce tada wave spin pullback wobble pulse pulsate heartbeat panic explode",
        classesArray = new Array;
    classesArray = triggerClasses.split(" ");
    var classAmount = classesArray.length;
    $(window).resize(function() {
        $(".animate").fireAnimations()
    });

})(jQuery);