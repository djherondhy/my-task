
$('#task-edit').submit(function(e){
    e.preventDefault();

    var dados = {
        titulo: $('#edit-titulo').val(),
        id_sprint: $('#edit-sprint').val(),
        id_task: $('#edit-id').val(),
        descricao: $('#edit-descricao').val(),
        prioridade: $('#edit-prioridade').val()
    };

    var dadosJson = JSON.stringify(dados);
    console.log(dados);

    $.ajax({
        url: 'backend/updateTask.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            getPopup(response);
            getSprintData(dados.id_sprint);
            viewTask(dados.id_task);
            getTask(dados.id_task);
            $('.edit-container').fadeOut('slow');
        }
    })
    

})