export default {
  init() {
    // JavaScript to be fired on the about us page
    if ( $( '#contact-btn-count' ) ) {
        $('#contact-btn-count').click(function() {
            $.ajax({
                url: '../wp-admin/admin-ajax.php',
                method: 'POST',
                data: { action: 'add_count', current_count: $('#contact-count').html() },
            }).done(function (data) {
                if(!isNaN(data)) {
                    $('#contact-count').html( data );
                }
            });
        });
    }
  },
};
