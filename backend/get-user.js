function getUser() {

    var dados = {
        tabela: 'usuario',
        id_usuario: id_user
    }
    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/getUser.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            $('.username').empty();
            $('.username').append(response.nome);
            $('.email').empty();
            $('.perfil p').empty();
            $('.perfil p').append(response.nome[0]);
            $('.email').append(response.email);
            $('title').empty();
            $('title').append(response.nome+' Workspace');

            $('#user-nome').val(response.nome);
            $('#user-email').val(response.email);
            $('#user-id').val(response.id_usuario);
            $('#user-id-senha').val(response.id_usuario);

            if (response.perfil == '') {
                $('.perfil-img').empty();
                $('.perfil-img').append('<p>' + response.nome[0] + '</p>')
            }
        }
    })
}

getUser();