(function($){

    // $('form input').change(function() {
    //   $(this).closest('form').submit();
    //   // console.log('submit on input change');
    // });
    //
    // $('form select').change(function() {
    //   $(this).closest('form').submit();
    //   // console.log('submit on select change');
    // });
    //
    // $('#filter').submit(function(){
    //   var filter = $('#filter');
    //   $.ajax({
    //     url:filter.attr('action'),
    //     data:filter.serialize(),
    //     type:filter.attr('method'),
    //     beforeSend:function(xhr){
    //       // filter.find('button').text('Processing...');
    //     },
    //     success:function(data){
    //       // filter.find('button').text('Apply filter');
    //       $('#response').html(data);
    //     }
    //   });
    //   return false;
    // });

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

    showComments();

})(jQuery);
