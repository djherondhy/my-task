
function updateTipo(_id_task, tipo){
    var dados = {
        id_task: _id_task,
        tipo: ''
    }

    if(tipo == 'todo'){
        dados.tipo = 1
    }

    if(tipo == 'progress'){
        dados.tipo = 2
    }

    if(tipo == 'done'){
        dados.tipo = 3
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: 'backend/updateTipo.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
          getSprintData(response.id_sprint);
        }
    })



}