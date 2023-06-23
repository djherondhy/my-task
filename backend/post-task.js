function newTask(){
    $('.task-container').fadeIn('slow');
}


$('#task-form').submit(function(e){

    e.preventDefault();

    var dados = {
        titulo: $('#task-titulo').val(),
        id_sprint: $('#task-sprint').val(),
        descricao: $('#task-descricao').val(),
        prioridade: $('#task-prioridade').val(),
        tipo: '1'
    };

    var dadosJson = JSON.stringify(dados);
   

    $.ajax({
        url: 'backend/postTask.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            getPopup('Tarefa Adicionada');
            getSprintData(dados.id_sprint);
            $('.task-container').fadeOut('slow');
        }
    })
})