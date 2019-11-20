jQuery(document).on('submit',"#formig",function (event) {
    event.preventDefault();
    jQuery.ajax({
        url:'Index.php',
        type:'POST',
        dataType:'json',
        data:$(this).serialize(),
        beforeSend:function () {
            $('.entrar').val('Validando datos...');
        }
    })
        .done(function (respuesta) {
            console.log(respuesta);
            if (!respuesta.error())
                if(respuesta.tipo='usuario'{
                    location='PaginaPrincipal.html'
                })
        })
        .fail(function (resp) {
            console.log(resp.responseText);
        })
        .always(function () {
            console.log("Complete");

        });
});