jQuery(document).ready(function($) {

    // Perform AJAX login on form submit
    $('form#login-form').on('submit', function(e){
      // e.preventDefault();
        $('form#login-form .wp-success').show().text(ajax_login_object.loadingmessage);

        // AJAX Filter Form Submit
        // var filter = $('#login-form');
        // $.ajax({
        //   url:filter.attr('action'),
        //   data:filter.serialize(),
        //   type:filter.attr('method'),
        //   beforeSend:function(xhr){},
        //   success:function(data){
        //     $('#response').html(data);
        //   }
        // });


        //get foem data
        // var input_data = $('#login-form').serialize();
        var input_data = $('#login-form');
        $.ajax({
            url:input_data.attr('action'),
            data:input_data.serialize(),
            type:input_data.attr('method'),
            success: function(msg) {

              $('.wp-success').html('Success!');
                // if login incorrect, wordpress will redirect user to its own login form. We scan for an error term.
                var reg1 = /login_error/g;
                if (reg1.test(msg)) {
                    $('#message').html("<?php _e('Your login credentials is not correct. Please try again.'); ?>");
                    $('.wp-success').html("<?php _e('Your login credentials is not correct. Please try again.'); ?>");
                }else {
                    // login success. redirect users to some page.
                    //$(location).attr('href', '/my-account/');
                    //or reload the same page
                    location.reload();
                }
            }
        });

        // $.ajax({
        //     type: 'POST',
        //     dataType: 'json',
        //     url: ajax_login_object.ajaxurl,
        //     data: {
        //         'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
        //         'username': $('form#login-form #username').val(),
        //         'password': $('form#login-form #password').val(),
        //         'security': $('form#login-form #security').val() },
        //     success: function(data){
        //         $('form#login-form .wp-success').text(data.message);
        //         if (data.loggedin == true){
        //             document.location.href = ajax_login_object.redirecturl;
        //         }
        //     }
        // });

        e.preventDefault();
    });

});
