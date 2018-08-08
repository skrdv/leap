(function($){

  // Navbar scroll sticky
  function navbarScroll() {
    var height = $(window).scrollTop();
    if(height  > 200) {
        $(".navbar").addClass('is-fixed-top');
    } else{
        $(".navbar").removeClass('is-fixed-top');
    }
  }

  // Show comments section
  function showComments() {
    var btn = $('#comments-toggle'),
        section = $('#comments-section');

    btn.click(function(e){
      e.preventDefault();
      console.log('click');
      if (section.hasClass('is-active')) {
          section.removeClass('is-active');
      } else {
        section.addClass('is-active');
      }
    });
  }

  // Animate home hero background
  function homeGallery() {
    var gallery = $('.mainBanner .gallery'),
        item = gallery.find('.gallery-item'),
        first = item.first();

    first.addClass('is-active');


    setInterval(function(){
      active = gallery.find('.is-active');
      next = active.next();


      next.removeClass('is-hidden');
      next.addClass('is-active');

      active.removeClass('is-active');
      active.addClass('is-hidden');

      if(!next.hasClass('is-active')){
        first.addClass('is-active');
        first.removeClass('is-hidden');
      }

    }, 6000)

  }

  $(document).ready(function() {

    // Check for click events on the navbar burger icon
    // $(".navbar-burger").click(function() {
    //     // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
    //     $(".navbar-burger").toggleClass("is-active");
    //     $(".navbar-menu").toggleClass("is-active");
    // });

    // Mobile menu toggle
    if ($('.navbar-burger').length) {
        $('.navbar-burger').on("click", function(){

            var menu_id = $(this).attr('data-target');
            $(this).toggleClass('is-active');
            $("#"+menu_id).toggleClass('is-active');
            $('.navbar.is-light').toggleClass('is-dark-mobile')
        });
    }




    navbarScroll();

    homeGallery();

    showComments();

  });

  $(window).scroll(function() {
    navbarScroll();
  });



})(jQuery);
