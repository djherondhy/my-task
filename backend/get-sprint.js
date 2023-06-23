function getSprintData(_id_sprint) {
    var dados = {
        id_sprint: _id_sprint
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/getOneSprint.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            $('#sprint-titulo').empty();
            $('#sprint-titulo').append(response.titulo);
            $('#sprint-titulo').append('<button onclick="openEdit()"><i class="bx bxs-edit"></i></button>');
            $('#sprint-titulo').append('<button onclick="deleteSprint('+response.id_sprint+')"><i class="bx bxs-trash-alt"></i></button>');
            $('#esprint-titulo').val(response.titulo);
            $('#esprint-id').val(response.id_sprint);
            $('#task-sprint').val(response.id_sprint);
            getTask(response.id_sprint)
        }
    })

}


function viewTask(_id_task) {
    var dados = {
        id_task: _id_task
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/getTask.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            $('.view-container').fadeIn('slow');
            $('.view-titulo').empty();
            $('.view-titulo').append(response.titulo);

            $('#edit-titulo').val(response.titulo);
            $('#edit-prioridade').val(response.prioridade);
            $('#edit-descricao').val(response.descricao);
            $('#edit-id').val(response.id_task);
            $('#edit-sprint').val(response.id_sprint);

            $('.view-data').empty();
            $('.view-data').append(response.data);

            $('.view-prioridade').empty();
            $('.view-prioridade').append(response.prioridade);

            $('.view-descricao').empty();
            $('.view-descricao').append(response.descricao);

            $('#delete-task').click(function () {
                deleteTask(response.id_task, response.id_sprint);
            })

            $('#edit-task').click(function () {
               $('.edit-container').fadeIn('slow');
            })
        }
    })
}


function getTask(_id_sprint) {

    var dados = {
        id_sprint: _id_sprint
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/getTasks.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            console.log(response);
            $('.agroup').show();
            $('#todo').empty();
            $('#progress').empty();
            $('#done').empty();

            for (var i = 0; i < response.length; i++) {

                if (response[i].tipo == 1) {
                    $('#todo').append('<div id="' + response[i].id_task + '" class="task" draggable="true" ondragstart="drag(event)" onclick="viewTask(' + response[i].id_task + ')">'
                        + '<p class="title">' + response[i].titulo + '</p>'
                        + '<div class="tags">'
                        + '<div class="tag">'
                        + '<p>' + response[i].data + '</p>'
                        + '</div>'
                        + '<div class="tag">'
                        + '<p>' + response[i].prioridade + '</p>'
                        + '</div>'
                        + '</div>'
                        + '</div>');

                }

                if (response[i].tipo == 2) {
                    $('#progress').append('<div id="' + response[i].id_task + '" class="task" draggable="true" ondragstart="drag(event)" onclick="viewTask(' + response[i].id_task + ')">'
                        + '<p class="title">' + response[i].titulo + '</p>'
                        + '<div class="tags">'
                        + '<div class="tag">'
                        + '<p>' + response[i].data + '</p>'
                        + '</div>'
                        + '<div class="tag">'
                        + '<p>' + response[i].prioridade + '</p>'
                        + '</div>'
                        + '</div>'
                        + '</div>');

                }


                if (response[i].tipo == 3) {
                    $('#done').append('<div id="' + response[i].id_task + '" class="task" draggable="true" ondragstart="drag(event)" onclick="viewTask(' + response[i].id_task + ')">'
                        + '<p class="title">' + response[i].titulo + '</p>'
                        + '<div class="tags">'
                        + '<div class="tag">'
                        + '<p>' + response[i].data + '</p>'
                        + '</div>'
                        + '<div class="tag">'
                        + '<p>' + response[i].prioridade + '</p>'
                        + '</div>'
                        + '</div>'
                        + '</div>');

                }

            }
        }
    })
}



function getSprints() {
    var dados = {
        id_usuario: id_user
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/getSprint.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            console.log(response);
            $('.sprint-list').empty();
            for (var i = 0; i < response.length; i++) {
                $('.sprint-list').append('<div class="sprint-card" onclick="getSprintData(' + response[i].id_sprint + ')"> <p>' + response[i].titulo + '</p> </div>')
            }

        }
    })

}
getSprints();