
!(function($) {
  "use strict";

  //fixed the header on the top with sticky
  //when the user scrolls the page, execute myFunction
  window.onscroll = function() {myFunction()}
  
  // Get the Header
  var header = document.getElementById("header");

  //Get the offset position of the navbar
  var sticky = header.offsetTop;

  // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
  function myFunction(){
      if(window.pageYOffset > sticky){
        header.classList.add("sticky");
      } else{
        header.classList.remove("sticky");
      }
  }

/*

  // Mobile Navigation
  if ($('.nav-menu').length) {
    var $mobile_nav = $('.nav-menu').clone().prop({
      class: 'mobile-nav d-lg-none'
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
    $('body').append('<div class="mobile-nav-overly"></div>');

    $(document).on('click', '.mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
      $('.mobile-nav-overly').toggle();
    });

    $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
      e.preventDefault();
      $(this).next().slideToggle(300);
      $(this).parent().toggleClass('active');
    });

    $(document).click(function(e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
      }
    });
  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }
  */
 // Mobile Navigation
 if ($('.nav-menu').length) {
  var $mobile_nav = $('.nav-menu').clone().prop({
    class: 'mobile-nav d-lg-none'
  });
  $('body').append($mobile_nav);
  $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
  $('body').append('<div class="mobile-nav-overly"></div>');

  $(document).on('click', '.mobile-nav-toggle', function(e) {
    $('body').toggleClass('mobile-nav-active');
    $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
    $('.mobile-nav-overly').toggle();
  });

  $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
    e.preventDefault();
    $(this).next().slideToggle(300);
    $(this).parent().toggleClass('active');
  });

  $(document).click(function(e) {
    var container = $(".mobile-nav, .mobile-nav-toggle");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      if ($('body').hasClass('mobile-nav-active')) {
        $('body').removeClass('mobile-nav-active');
        $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
        $('.mobile-nav-overly').fadeOut();
      }
    }
  });
} else if ($(".mobile-nav, .mobile-nav-toggle").length) {
  $(".mobile-nav, .mobile-nav-toggle").hide();
}

// Navigation active state on scroll
var nav_sections = $('section');
var main_nav = $('.nav-menu, #mobile-nav');
var main_nav_height = $('#header').outerHeight();

$(window).on('scroll', function() {
  var cur_pos = $(this).scrollTop() + 10;

  nav_sections.each(function() {
    var top = $(this).offset().top - main_nav_height,
      bottom = top + $(this).outerHeight();

    if (cur_pos >= top && cur_pos <= bottom) {
      if (cur_pos <= bottom) {
        main_nav.find('li').removeClass('active');
      }
      main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
    }
  });
});


  // Back to top button
  $(function () {
    // body...
    $(" .linkmain, footer .back-to-top").on("click",function (event) {
        // body...
        event.preventDefault();
        var hash =this.hash;

        $('body,html').animate({scrollTop:$(hash).offset().top}, 900, function () { window.location.hash=hash;
            // body...
        })
    });
})

 

  // Init AOS
  $(window).on('load', function() {
    AOS.init({
      duration: 1000,
      once: true
    });
  });

})(jQuery);