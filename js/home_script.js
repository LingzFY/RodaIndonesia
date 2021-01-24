(function ($) {
  "use strict";

  // ----------------------------
  // AOS
  // ----------------------------
  AOS.init({
    once: true
  });

  $(window).on("scroll", function () {
    //box shadow below navbar
    //.Scroll to top show/hide
    var scrollToTop = $(".scroll-top-to"),
      scroll = $(window).scrollTop();
    if (scroll >= 200) {
      $("#header_nav").addClass("box-shadow");
      $("#header_nav").removeClass("py-3");
      scrollToTop.fadeIn("slow");
    } else {
      $("#header_nav").removeClass("box-shadow");
      $("#header_nav").addClass("py-3");
      scrollToTop.fadeOut("slow");
    }
  });

  // scroll-to-top
  $(".scroll-top-to").on("click", function () {
    $("body,html").animate({scrollTop: 0}, 600);
    return false;
  });
})(jQuery);
