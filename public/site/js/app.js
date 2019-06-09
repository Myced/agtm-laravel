
toastr.options =
        {
            "closeButton": false,
            "debug": true,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "500",
            "hideDuration": "1000",
            "timeOut": "8000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "slideDown",
            "hideMethod": "fadeOut"
            }

            // When the user scrolls the page, execute myFunction
            window.onscroll = function() {myFunction()};

            // Get the navbar
            var navbar = document.getElementById("navbar");

            // Get the offset position of the navbar
            var sticky = navbar.offsetTop;

            // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
            function myFunction() {
                if (window.pageYOffset >= sticky) {
                    navbar.classList.add("sticky")
                } else {
                    navbar.classList.remove("sticky");
                }
            }

$(document).ready(function(){

    // menu js script
    $('#main-menu').smartmenus();

    var $mainMenuState = $('#main-menu-state');
    if ($mainMenuState.length) {
      // animate mobile menu
      $mainMenuState.change(function(e) {
        var $menu = $('#main-menu');
        if (this.checked) {
          $menu.hide().slideDown(250, function() { $menu.css('display', ''); });
        } else {
          $menu.show().slideUp(250, function() { $menu.css('display', ''); });
        }
      });
      // hide mobile menu beforeunload
      $(window).on('beforeunload unload', function() {
        if ($mainMenuState[0].checked) {
          $mainMenuState[0].click();
        }
      });
    }

    //other plugins initialisation
    var dd = $('.vticker').easyTicker({
       direction: 'up',
       easing: 'easeInOutBack',
       speed: 'slow',
       interval: 2000,
       height: 'auto',
       visible: 10,
       mousePause: 0,
       controls: {
           up: '.up',
           down: '.down',
           toggle: '.toggle',
           stopText: 'Stop !!!'
       }
   }).data('easyTicker');

   var dd = $('.vtick').easyTicker({
      direction: 'up',
      easing: 'easeInOutBack',
      speed: 'slow',
      interval: 4000,
      height: 'auto',
      visible: 5,
      mousePause: 0,
      controls: {
          up: '.up',
          down: '.down',
          toggle: '.toggle',
          stopText: 'Stop !!!'
      }
  }).data('easyTicker');

   $('.slim').slimScroll({
       height: '500px'
   });


   //initialse slick too
   $('.first').slick({
     slidesToShow: 2,
     slidesToScroll: 1,
     autoplay: true,
     autoplaySpeed: 2000,
   });
})
