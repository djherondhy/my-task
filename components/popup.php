<style>
.popup{
    width: 350px;
    background-color: #fff;
    position: fixed;
    top: 1rem;
    right: 1rem;
    
    display: flex;
    align-items: center;
    padding: 0.5rem;
    z-index: 2500;
    border: 1px solid #ccc;
}

.popup-message{
    width: 80%;
    padding: 0.5rem;
    font-size: 0.9rem;
}
.popup .close-btn{
    top: 1rem;
    right: 0.5rem;
}
</style>
<div class="popup">
    <p class="popup-message">Dados Atualizados</p>
    <button class="close-btn" id="close-popup"><i class='bx bx-x'></i></button>
</div>
<script>

    function getPopup(message){
        $('.popup').fadeIn('slow');
        $('.popup-message').empty();
        $('.popup-message').append(message);

        setInterval(function(){
            $('.popup').fadeOut('slow');
        }, 3000);
    }

    
    $('.popup').hide();
    $('#close-popup').click(function(){
        $('.popup').fadeOut('slow');
    })
</script>