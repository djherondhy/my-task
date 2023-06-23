$('#form-usuario').submit(function(e){

    e.preventDefault();

    var dados = {
        nome: $('#nome').val(),
        email: $('#email').val(),
        senha: $('#senha').val()
    };

    var dadosJson = JSON.stringify(dados);
    

    $.ajax({
        url: 'backend/postUsuario.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            console.log(response);
            getPopup(response);;
            $('#nome').val('')
            $('#email').val('')
            $('#senha').val('')
            $('#confirm').val('')
        }
    })
})