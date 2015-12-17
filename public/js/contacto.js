var jCoFo = jQuery.noConflict();

jCoFo(document).on("ready", function(){

    jCoFo('.progressForm .fa').hide();

    jCoFo("#formContactoSubmit").on("click", function(e){

        e.preventDefault();

        var form = jCoFo("#contactForm");
        var url = form.attr('action');
        var data = form.serialize();

        jCoFo('.progressForm .fa').show();

        jCoFo.post(url, data, function(result){
            jCoFo('.progressForm .fa').hide();
            jCoFo(".contact-content").addClass('alert').addClass('alert-success').text(result.message);
            form[0].reset();
        }).fail(function(result){
            jCoFo('.progressForm .fa').hide();
            console.log(result);
            jCoFo(".contact-content").text("Se produjo un error al enviar el mensaje. Intentelo de nuevo más tarde.");

            if(result.status === 422){

                var errors = result.responseJSON;

                errorsHtml = '<div class="alert alert-danger"><ul>';
                jCoFo.each( errors, function( key, value ) {
                    errorsHtml += '<li>' + value[0] + '</li>';
                });
                errorsHtml += '</ul></di>';

                jCoFo('.contact-content').html(errorsHtml);

            };

        });

    });

});