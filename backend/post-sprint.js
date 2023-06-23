$('#add-sprint').submit(function(e){

    e.preventDefault();

    var dados = {
        titulo: $('#titulo').val(),
        id_user: id_user
    };

    var dadosJson = JSON.stringify(dados);
   

    $.ajax({
        url: 'backend/postSprint.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            getPopup(response);
            $('.sprint-container').fadeOut('slow');
            getSprints();
        }
    })
})