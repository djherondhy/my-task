<style>
    .senha-container{
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        z-index: 1000;
        background-color: rgba(0,0,0,0.5);
    }

    .senha-box{
        display: flex;
        flex-direction: column;
        background-color: #fff;
        padding: 1rem;
        min-width: 300px;
        gap: 1rem;
        position: relative;
    }

    .senha-box form{
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .input-agroup{
        display: flex;
        flex-direction: column;
        gap: 0.3rem;
    }

    .input-agroup input[type="password"]{
        padding: 0.5rem;
        border: 1px solid #000;
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

    #user-id-senha{
        display: none;
    }

    .senha-message{
        font-size: 0.8rem;
        color: red;
    }
</style>
<div class="senha-container">
   <div class="senha-box">
    <button class="close-btn" id="close-senha"><i class='bx bx-x'></i></button>
        <p class="box-title">Alterar Senha</p>
        <form action="" id="edit-senha">
            <div class="input-agroup">
                <input type="password" id="senha-atual" placeholder="Digite a senha atual" required>
                <input type="text" id="user-id-senha">
                <span class="senha-message message-atual">Senha atual incorreta.</span>
            </div>
            <div class="input-agroup">
                <input type="password" id="nova-senha" placeholder="Digite a nova senha" required>
                <span class="senha-message nova-message">Senha deve conter 8 caracteres</span>
            </div>
            <div class="input-agroup">
                <input type="password" id="confirma-senha" placeholder="Confirme a nova senha" required>
                <span class="senha-message confirma-message">Senha diferentes</span>
            </div>
            <div class="input-agroup">
                <input type="submit" value="Salvar" id="salvar-senha">
            </div>
        </form>
   </div>
</div>
<script>

    $('.senha-message').hide();
    $('.senha-container').hide();
    $('#close-senha').click(function(){$('.senha-container').fadeOut('slow')});
    $('#btn-senha').click(function(){
        $('.senha-container').fadeIn('slow');
    })
</script>