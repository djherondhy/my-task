
$('#form-edit-user').submit(function(e){
    e.preventDefault();
    var dados = {
        nome: $('#user-nome').val(),
        email: $('#user-email').val(),
        id: $('#user-id').val()
    }

    var dadosJson = JSON.stringify(dados);
    

    $.ajax({
        url: 'backend/updateUser.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
           getPopup(response);
           getUser();
        }
    })


})