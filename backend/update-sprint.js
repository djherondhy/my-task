function openEdit() {
    $('.sprintedit-container').fadeIn('slow');
}

$('#sprint-edit').submit(function (e) {
    e.preventDefault();

    var dados = {
        id: $('#esprint-id').val(),
        titulo: $('#esprint-titulo').val()
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: 'backend/updateSprint.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            getPopup(response);
            getSprintData(dados.id);
            $('.sprintedit-container').fadeOut('slow')
        }
    })


})

function deleteSprint(_id_sprint){
    $('.confirm-container').fadeIn('slow');

    $('#confirma').click(function(){
        var dados = {
            id_sprint: _id_sprint
        }

        var dadosJson = JSON.stringify(dados);

        $.ajax({
            url: '../backend/deleteSprint.php',
            method: 'post',
            data: { data: dadosJson },
            dataType: 'json',
            success: function (response) {
                getPopup(response);
                $('.agroup').hide();
                $('#todo').empty();
                $('#progress').empty();
                $('#done').empty();
                $('#sprint-titulo').empty();
                $('#sprint-titulo').append('Bem Vindo, Gerencie suas Tarefas');
                getSprints();
                $('.confirm-container').fadeOut('slow');
    
            }
        })

    })    
}