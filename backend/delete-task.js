function deleteTask(_id_task, _id_sprint){
    var dados = {
        id_task: _id_task
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/deleteTask.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            getPopup(response);
            getSprintData(_id_sprint);
            $('.view-container').fadeOut('slow');

        }
    })
}