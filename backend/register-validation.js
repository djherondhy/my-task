

$('#email').keyup(function () {
    var dados = {
        dado: $('#email').val(),
        coluna: 'email',
        tabela: 'usuario'
    }
    console.log(dados.dado);
    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: 'backend/getOne.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            if (response.result) {
                $('.email-message').slideDown('slow');
                $('#enviar').prop('disabled', true);
                $('#enviar').css('background', '#424242');
            } else {
                $('.email-message').slideUp('slow');
                $('#enviar').prop('disabled', false);
                $('#enviar').css('background', '#000');
            }
        }, error: function (status, error) {
            console.log(error);
        }
    });
})

$('.senha-message').hide();
$('.confirm-message').hide();


$('#senha').keyup(function () {
    if($("#senha").val() === ''){
        $('.senha-message').slideUp('slow');
    }else{
        if ($("#senha").val().length < 8) {
            $('.senha-message').slideDown('slow');
            $('#enviar').prop('disabled', true);
            $('#enviar').css('background', '#424242');
        }else {
            $('.senha-message').slideUp('slow');
            $('#enviar').prop('disabled', false);
            $('#enviar').css('background', '#000');
        }
    }

    if($("#confirm").val() != ''){
        if ($("#confirm").val() === $("#senha").val()) {
            $('.confirm-message').slideUp('slow');
            $('#enviar').prop('disabled', false);
            $('#enviar').css('background', '#000');
        } else {
            $('.confirm-message').slideDown('slow');
            $('#enviar').prop('disabled', false);
            $('#enviar').css('background', '#000');
        }
    }


  
});


$('#confirm').keyup(function () {
    if($("#confirm").val() === ''){
        $('.confirm-message').slideUp('slow');
    }else{
    if ($("#confirm").val() === $("#senha").val()) {
        $('.confirm-message').slideUp('slow');
        $('#enviar').prop('disabled', false);
        $('#enviar').css('background', '#000');
    } else {
        $('.confirm-message').slideDown('slow');
        $('#enviar').prop('disabled', false);
        $('#enviar').css('background', '#000');
    }
}
});


