const e = () => {
    console.log("headerScrollingBehavior"), $("header").length && $(window).on("scroll", (function () {
        $(this).scrollTop() > 10 ? $("header").addClass("navbar-solid") : $("header").removeClass("navbar-solid")
    }))
}, t = () => {
    $(".faq h3").click((function () {
        var e = $(this).parent();
        console.log(e);
        var t = e.hasClass("active");
        $(".faq .answer").slideUp(), $(".faq").removeClass("active"), t || (e.addClass("active"), e.find(".answer").slideDown())
    })), $("nav a").click((function () {
        $("nav a").removeClass("active"), $(this).addClass("active")
    })), $(".navbar-burger").click((function () {
        console.log("click"), $(this).toggleClass("active"), $(".navbar-menu").toggleClass("active")
    })), $("nav ul li a").on("click", (function (e) {
        e.preventDefault();
        var t = $(this).attr("href");
        $("html, body").animate({scrollTop: $(t).offset().top - 100}, 1e3), $(".navbar-burger").trigger("click")
    }))
}, n = () => {
    const e = document.querySelector(".timeline ol"), t = document.querySelectorAll(".timeline li > div"),
        n = document.querySelectorAll(".timeline .arrows .arrow"),
        s = document.querySelector(".timeline .arrows .arrow__prev"),
        o = document.querySelector(".timeline .arrows .arrow__next"),
        i = document.querySelector(".timeline li:first-child"), l = document.querySelector(".timeline li:last-child");

    function r(e) {
        const t = e.getBoundingClientRect();
        return t.top >= 0 && t.left >= 0 && t.bottom <= (window.innerHeight || document.documentElement.clientHeight) && t.right <= (window.innerWidth || document.documentElement.clientWidth)
    }

    window.addEventListener("load", (function () {
        (function (e) {
            let t = 0;
            for (let n = 0; n < e.length; n++) {
                const s = e[n].offsetHeight;
                t < s && (t = s)
            }
            for (let n = 0; n < e.length; n++) e[n].style.height = `${t}px`
        })(t), function (e, t, n) {
            let a = 0;
            for (let c = 0; c < t.length; c++) t[c].addEventListener("click", (function () {
                s.disabled || (s.disabled = !0), o.disabled || (o.disabled = !0);
                const t = this.classList.contains("arrow__prev") ? "" : "-";
                if (0 === a) n.style.transform = `translateX(-${e}px)`; else {
                    const s = getComputedStyle(n),
                        o = s.getPropertyValue("-webkit-transform") || s.getPropertyValue("transform"),
                        i = parseInt(o.split(",")[4]) + parseInt(`${t}${e}`);
                    n.style.transform = `translateX(${i}px)`
                }
                setTimeout((() => {
                    r(i) ? setBtnState(s) : setBtnState(s, !1), r(l) ? setBtnState(o) : setBtnState(o, !1)
                }), 1100), a++
            }))
        }(122, n, e), function (e, t, n) {
            const s = new Hammer(e);
            s.on("swipeleft", (() => n.click())), s.on("swiperight", (() => t.click()))
        }(e, s, o), a = s, c = o, document.addEventListener("keydown", (t => {
            if (37 === t.which || 39 === t.which) {
                const n = e.offsetTop;
                n !== window.pageYOffset && window.scrollTo(0, n), 37 === t.which ? a.click() : 39 === t.which && c.click()
            }
        }));
        var a, c
    }))
};

document.addEventListener("DOMContentLoaded", (function () {
    e(), t(), $(".testimonials .testimonials-content").length && ($(".testimonials .testimonials-content").addClass("owl-carosuel"), $(".testimonials .testimonials-content.owl-carosuel").owlCarousel({
        loop: !0,
        margin: 0,
        nav: !0,
        dots: !1,
        items: 1,
        responsive: {0: {items: 1}, 600: {items: 1}, 1024: {items: 1}}
    })), $(".services .services-content .services-offerts .row").length && $(window).width() < 768 && ($(".services .services-content .services-offerts .row").addClass("owl-carosuel"), $(".services .services-content .services-offerts .row.owl-carosuel").owlCarousel({
        loop: !0,
        nav: !1,
        dots: !0,
        items: 1,
        responsive: {0: {items: 2, dots: !0}, 600: {items: 2}, 700: {items: 2}}
    })), $(".banner-clients .banner-clients-items-container").length && ($(".banner-clients .banner-clients-items-container").addClass("owl-carosuel"), $(".banner-clients .banner-clients-items-container.owl-carosuel").owlCarousel({
        loop: !0,
        nav: !0,
        dots: !1,
        items: 1,
        responsive: {0: {items: 1, dots: !1}, 600: {items: 1}, 1024: {items: 1}}
    })), $(".carouse-clients").length && ($(".carouse-clients").addClass("owl-carosuel"), $(".carouse-clients.owl-carosuel").owlCarousel({
        loop: !0,
        nav: !1,
        dots: !1,
        margin: 10,
        responsive: {0: {items: 2, dots: !1}, 600: {items: 3}, 1024: {items: 4}}
    })), n()
}));
