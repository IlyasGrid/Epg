(function ($) {
    $.fn.menumaker = function (options) {
        var cssmenu = $(this),
            settings = $.extend(
                {
                    format: "dropdown",
                    sticky: false,
                },
                options
            );
        return this.each(function () {
            $(this)
                .find(".button")
                .on("click", function () {
                    $(this).toggleClass("menu-opened");
                    var mainmenu = $(this).next("ul");
                    if (mainmenu.hasClass("open")) {
                        mainmenu.slideToggle().removeClass("open");
                    } else {
                        mainmenu.slideToggle().addClass("open");
                        if (settings.format === "dropdown") {
                            mainmenu.find("ul").show();
                        }
                    }
                });
            cssmenu.find("li ul").parent().addClass("has-sub");
            multiTg = function () {
                cssmenu
                    .find(".has-sub")
                    .prepend('<span class="submenu-button"></span>');
                cssmenu.find(".submenu-button").on("click", function () {
                    $(this).toggleClass("submenu-opened");
                    if ($(this).siblings("ul").hasClass("open")) {
                        $(this).siblings("ul").removeClass("open").slideToggle();
                    } else {
                        $(this).siblings("ul").addClass("open").slideToggle();
                    }
                });
            };
            if (settings.format === "multitoggle") multiTg();
            else cssmenu.addClass("dropdown");
            if (settings.sticky === true) cssmenu.css("position", "fixed");
            resizeFix = function () {
                var mediasize = 1000;
                if ($(window).width() > mediasize) {
                    cssmenu.find("ul").show();
                }
                if ($(window).width() <= mediasize) {
                    cssmenu.find("ul").hide().removeClass("open");
                }
            };
            resizeFix();
            return $(window).on("resize", resizeFix);
        });
    };
})(jQuery);

(function ($) {
    $(document).ready(function () {
        $("#cssmenu").menumaker({
            format: "multitoggle",
        });
    });
})(jQuery);

var slides = document.querySelectorAll("#slides .slide");
var currentSlide = 0;
var slideInterval = setInterval(nextSlide, 6000);

function nextSlide() {
    slides[currentSlide].className = "slide";
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].className = "slide showing";
}

var louez = document.querySelectorAll("#slides .louez");
var slideInterval = setInterval(next, 6000);

function next() {
    louez[currentSlide].className = "louez";
    currentSlide = (currentSlide + 1) % louez.length;
    louez[currentSlide].className = "louez showing";
}
/*_______________Motion_______________*/
function get(id) {
    return document.getElementById(id);
}
get('btnpc1').addEventListener("mouseenter", function () {
    get('btnpc1').value = "Je veux un vidéo";
});
get('btnpc1').addEventListener("mouseleave", function () {
    get('btnpc1').value = "4500 Dh";
});
get('btnpc2').addEventListener("mouseenter", function () {
    get('btnpc2').value = "Je veux un vidéo";
});
get('btnpc2').addEventListener("mouseleave", function () {
    get('btnpc2').value = "8500 Dh";
});
get('btnpc3').addEventListener("mouseenter", function () {
    get('btnpc3').value = "Je veux un vidéo";
});
get('btnpc3').addEventListener("mouseleave", function () {
    get('btnpc3').value = "16500 Dh";
});