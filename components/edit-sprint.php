<style>
    .sprintedit-container{
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        z-index: 1000;
        background-color: rgba(0,0,0,0.5);
    }

    .sprintedit-box{
        display: flex;
        flex-direction: column;
        background-color: #fff;
        padding: 1rem;
        min-width: 300px;
        gap: 1rem;
        position: relative;
    }

    .sprintedit-box form{
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

    #esprint-id{
        display: none;
    }
</style>
<div class="sprintedit-container">
   <div class="sprintedit-box">
    <button class="close-btn" id="close-sprintedit"><i class='bx bx-x'></i></button>
        <p class="box-title">Editar Sprint</p>
        <form action="" id="sprint-edit">
            <div class="input-agroup">
                <label for="">Título</label>
                <input type="text" id="esprint-titulo">
                <input type="text" id="esprint-id">
            </div>
            <div class="input-agroup">
                <input type="submit" value="Salvar">
            </div>
        </form>
   </div>
</div>
<script>
    $('.sprintedit-container').hide();
    $('#close-sprintedit').click(function(){$('.sprintedit-container').fadeOut('slow')});
</script>