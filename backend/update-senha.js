
$('#senha-atual').keyup(function(){
    var dados = {
        senha: $('#senha-atual').val(),
        id: $('#user-id-senha').val()
    }

    var dadosJson =JSON.stringify(dados);

    $.ajax({
        url: '../backend/getSenha.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
          if(response == 0){
            $('.message-atual').slideDown('slow');
            $('#salvar-senha').prop('disabled', true);
            $('#salvar-senha').css('background', '#424242');
          }else{
            $('.message-atual').slideUp('slow');
            $('#salvar-senha').prop('disabled', false);
            $('#salvar-senha').css('background', '#000');
          }
        }
    })

})


$('#nova-senha').keyup(function () {
    if($("#nova-senha").val() === ''){
        $('.nova-message').slideUp('slow');
    }else{
        if ($("#nova-senha").val().length < 8) {
            $('.nova-message').slideDown('slow');
            $('#salvar-senha').prop('disabled', true);
            $('#salvar-senha').css('background', '#424242');
        }else {
            $('.nova-message').slideUp('slow');
            $('#salvar-senha').prop('disabled', false);
            $('#salvar-senha').css('background', '#000');
        }
    }

    if($("#confirma-senha").val() != ''){
        if ($("#confirma-senha").val() === $("#nova-senha").val()) {
            $('.confirma-message').slideUp('slow');
            $('#salvar-senha').prop('disabled', false);
            $('#salvar-senha').css('background', '#000');
        } else {
            $('.confirma-message').slideDown('slow');
            $('#salvar-senha').prop('disabled', false);
            $('#salvar-senha').css('background', '#000');
        }
    }


  
});


$('#confirma-senha').keyup(function () {
    if($("#confirma-senha").val() === ''){
        $('.confirma-message').slideUp('slow');
    }else{
    if ($("#confirma-senha").val() === $("#nova-senha").val()) {
        $('.confirma-message').slideUp('slow');
        $('#salvar-senha').prop('disabled', false);
        $('#salvar-senha').css('background', '#000');
    } else {
        $('.confirma-message').slideDown('slow');
        $('#salvar-senha').prop('disabled', false);
        $('#salvar-senha').css('background', '#000');
    }
}
});


$('#edit-senha').submit(function(e){
    e.preventDefault();

    var dados = {
        id: $('#user-id-senha').val(),
        senha: $('#nova-senha').val()
    }

    var dadosJson = JSON.stringify(dados);
    

    $.ajax({
        url: 'backend/updateSenha.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
           getPopup(response);
           getUser();
           $('.senha-container').fadeOut('slow');
           
           $('#senha-atual').val('')
           $('#nova-senha').val('')
           $('#confirma-senha').val('')
        }
    })


   
})

