<style>
   .confirm-container{
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        z-index: 1000;
        background-color: rgba(0,0,0,0.5);
    }

    .confirm-box{
        display: flex;
        flex-direction: column;
        background-color: #fff;
        padding: 1rem;
        min-width: 300px;
        gap: 1rem;
        position: relative;
    }

    .confirma{
        background-color: #f0325b !important;
    }
</style>
<div class="confirm-container">
    <div class="confirm-box">
        <p>Tem Certeza que deseja deletar?</p>
        <div class="actions">
            <button class="confirma" id="confirma" onclick="">Confirmar</button>
            <button id="cancelar">Cancelar</button>
        </div>
    </div>
</div>

<script>
    $('#cancelar').click(function(){
        $('.confirm-container').fadeOut('slow');
    })
    $('.confirm-container').hide();
</script>