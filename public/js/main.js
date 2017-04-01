;(function($){
    $(document).on('click', '.new_message', function(e){
        e.preventDefault();
        var form = $('#form');
        $('#intro, #response').hide();
        form.show();
        form.find('input[type=reset]').click();
    });
    $(document).on('submit', '#form', function(e){
        e.preventDefault();
        var method = $('#form input[type=radio]:checked').val();
        var message = $('form textarea').val();
        $.post(
            'api/message/create'
            ,{
                method: method
                ,message: message
            }
            ,function(response){
                if(response.status != undefined && response.status == 'success'){
                    var responseBlock = $('#response');
                    $('#form').hide();
                    responseBlock.show().find('p').text(response.link);
                }else{
                    // TODO: error handler
                }
            }
            ,'json'
            );
    })
})(jQuery);