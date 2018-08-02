(function($){

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

  function homaGallery() {
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
    $(".navbar-burger").click(function() {
        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
    });

    homaGallery();

    showComments();

  });





})(jQuery);
