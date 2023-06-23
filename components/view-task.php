<style>
    .view-container{
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        z-index: 1000;
        background-color: rgba(0,0,0,0.5);
    }

    .view-box{
        display: flex;
        flex-direction: column;
        background-color: #fff;
        padding: 1rem;
        min-width: 350px;
        gap: 1rem;
        position: relative;
    }

    .content{
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    .view-titulo{
        font-weight: 500;
    }

    .view-descricao{
        text-align: justify;
        font-size: 0.8rem;
    }

    .actions{
        display: flex;
        gap: 0.5rem;
    }
    .actions button{
        padding: 0.3rem 0.5rem;
        background-color: #000;
        color: #fff;
        border: 0;
    }
    .delete{
        background-color: #f0325b !important;
    }
</style>
<div class="view-container">
    <div class="view-box">
    <button class="close-btn" id="close-view"><i class='bx bx-x'></i></button>
        <div class="content">
            <p class="view-titulo">Titulo</p>
            <div class="tags">
                <div class="tag">
                    <p class="view-data">2023-12-12</p>
                </div>
                <div class="tag" >
                    <p class="view-prioridade">Important</p>
                </div>
            </div>
            <p class="view-descricao">Descrição</p>
        </div>
        <div class="actions">
            <button id="edit-task">Editar</button>
            <button class="delete" id="delete-task">Excluir</button>
        </div>
    </div>
</div>
<script>
    $('.view-container').hide();
    $('#close-view').click(function(){$('.view-container').fadeOut('slow')});

</script>