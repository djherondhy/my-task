<style>
    .user-container {
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        z-index: 1000;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .user-box {
        display: flex;
        flex-direction: column;
        background-color: #fff;
        padding: 1rem;
        width: 350px;
        gap: 1rem;
        position: relative;
    }

    .perfil {
        width: 50px;
        height: 50px;
        background-color: #000;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        border-radius: 50%;
    }

    .dados {
        display: flex;
        gap: 1rem;
        align-items: center;
    }
</style>
<div class="user-container">
    <div class="user-box">
        <button class="close-btn" id="close-user"><i class='bx bx-x'></i></button>
        <div class="dados">
            <div class="perfil">
                <p>D</p>
            </div>
            <div class="info">
                <p class="username">Djhérondhy</p>
                <p class="email">djherondhyoficial@gmail.com</p>
            </div>
        </div>
        <div class="actions">
            <button id="btn-edit">Editar</button>
            <button id="btn-senha">Alterar Senha</button>
        </div>
    </div>
</div>

<script>
    $('.user-container').hide();

    $('#close-user').click(function () {
        $('.user-container').fadeOut('slow');

    })
</script>