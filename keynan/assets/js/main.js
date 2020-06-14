
    (function($) {
        "use strict";
      
        // Smooth scrolling
        $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: (target.offset().top - 71)
              }, 1000, "easeInOutExpo");
              return false;
            }
          }
        });
      
        // Scroll to top button appear
        $(document).scroll(function() {
          var scrollDistance = $(this).scrollTop();
          if (scrollDistance > 100) {
            $('.scroll-to-top').fadeIn();
          } else {
            $('.scroll-to-top').fadeOut();
          }
        });
      
        // Closes responsive menu when scrolled
        $('.js-scroll-trigger').click(function() {
          $('.navbar-collapse').collapse('hide');
        });
      
        // Add active class to navbar items on scroll
        $('body').scrollspy({
          target: '#mainNav',
          offset: 80
        });
      
        // Collapse Navbar
        var navbarCollapse = function() {
          if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
          } else {
            $("#mainNav").removeClass("navbar-shrink");
          }
        };
        // Collapse now if page is not at top
        navbarCollapse();
        // Collapse the navbar when page is scrolled
        $(window).scroll(navbarCollapse);
      
      })(jQuery);
      