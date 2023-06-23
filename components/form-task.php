<style>
    .task-container{
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        z-index: 1000;
        background-color: rgba(0,0,0,0.5);
    }

    .task-box{
        display: flex;
        flex-direction: column;
        background-color: #fff;
        padding: 1rem;
        min-width: 300px;
        gap: 1rem;
        position: relative;
    }

    .task-box form{
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .input-agroup{
        display: flex;
        flex-direction: column;
        gap: 0.3rem;
    }

    .input-agroup input[type="text"]{
        padding: 0.5rem;
        border: 1px solid #000;
    }

    .input-agroup select{
        padding: 0.5rem;
        border: 1px solid #000;
    }

    .input-agroup textarea{
        padding: 0.5rem;
        border: 1px solid #000;
        resize: none;
        height: 100px;
    }


    .input-agroup input[type="submit"]{
        padding: 0.5rem;
        background-color:  #000;
        color: #fff;
    }
    .box-title{
        font-weight: 500;
    }

    .close-btn{
        position: absolute;
        top: 1rem;
        right: 1rem;
        font-size: 1rem;
        background: 0;
        border: 0;
    }

    #task-sprint{
        display: none;
    }

</style>
<div class="task-container">
   <div class="task-box">
    <button class="close-btn" id="close-task"><i class='bx bx-x'></i></button>
        <p class="box-title">Nova Tarefa</p>
        <form action="" id="task-form">
            <div class="input-agroup">
                <label for="">Título</label>
                <input type="text" placeholder="Insira o título da tarefa" id="task-titulo">
                <input type="text" id="task-sprint">
            </div>
            <div class="input-agroup">
                <label for="">Descrição</label>
                <textarea name="task-descricao" id="task-descricao" resizable="false">

                </textarea>
            </div>
            <div class="input-agroup">
                <label for="">Prioridade</label>
                <select name="task-prioridade" id="task-prioridade">
                    <option value="Alta">Alta</option>
                    <option value="Normal">Normal</option>
                    <option value="Baixa">Baixa</option>
                    <option value="Importante">Importante</option>
                </select>
            </div>


            <div class="input-agroup">
                <input type="submit" value="Salvar">
            </div>
        </form>
   </div>
</div>
<script>
    $('.task-container').hide();
    $('#close-task').click(function(){$('.task-container').fadeOut('slow')});
</script>