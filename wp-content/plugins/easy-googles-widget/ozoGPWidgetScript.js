jQuery(document).ready(function($) {
    $('.ozoGPcomments').click(function () {
        id = $(this).attr('id');
        if($('.'+ id +'').html() != "") {
            $('.'+ id +'').html('');
            return false
            }
        $('.'+ id +'').html('please wait<br /><br />');
        $.post(ajax_object.ajaxurl, {
            action: 'ajax_action',
            link: $(this).attr('name')
        }, function(data) {
            $('.'+ id +'').html(data);
        });
        return false;
    });
});