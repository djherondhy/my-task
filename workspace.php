<?php
session_start();
if (isset($_SESSION['active'])) {
    $id_user = $_SESSION['user_id'];

} else {
    header('location: index.php');
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Djhérondhy Workspace</title>
    <link rel="stylesheet" href="css/preset.css">
    <link rel="stylesheet" href="css/worspace.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="pluguins/jquery-3.6.4.min.js"></script>
</head>

<body>
    <script>
        <?php if (isset($_SESSION['active'])) {
            echo "var id_user =  $id_user ;";
        } ?>
    </script>

    <?php include 'components/form-sprint.php'; ?>
    <?php include 'components/form-task.php'; ?>
    <?php include 'components/view-task.php'; ?>
    <?php include 'components/popup.php'; ?>
    <?php include 'components/edit-task.php'; ?>
    <?php include 'components/user-view.php'; ?>
    <?php include 'components/edit-user.php'; ?>
    <?php include 'components/edit-senha.php'; ?>
    <?php include 'components/edit-sprint.php'; ?>
    <?php include 'components/confirm.php'; ?>
    <button id="menu"><i class='bx bx-menu'></i></button>

    
    <div class="container">
        <div class="sidemenu flex-v h-center visible">
            <div class="user-card">
                <div class="info flex-h h-center">
                    <div class="perfil-img">
                    </div>
                    <p class="username">Djhérondhy</p>
                </div>

                <button id="info-user"><i class='bx bx-cog'></i></button>
            </div>
            <div class="sprints">
                <button id="new-sprint"> <i class='bx bxs-layer-plus'></i> Nova Sprint</button>
                <div class="sprint-list">

                </div>
            </div>

            <div class="logout">
                <a href="../backend/logout.php"><i class='bx bx-log-out'></i> Logout</a>
            </div>
        </div>
        <div class="space">
            <div class="board">

                <h1 id="sprint-titulo">Bem Vindo, Gerencie suas Tarefas</h1>
                <div class="agroup">
                    <div class="task-card" id="todo-list">
                        <div class="header">
                            <p>
                                <span class="todo"><i class='bx bxs-square-rounded'></i></span>
                                A Fazer
                            </p>
                            <button id="new-task" onclick="newTask()"><i class='bx bxs-layer-plus'></i> Criar</button>
                        </div>
                        <div class="task-list" id="todo" ondrop="drop(event)" ondragover="allowDrop(event)"
                            ondragleave="dragLeave(event)">

                        </div>
                    </div>
                    <div class="task-card">
                        <div class="header">
                            <p><span class="andamento"><i class='bx bxs-square-rounded'></i></span>Em Andamento</p>
                        </div>
                        <div class="task-list" id="progress" ondrop="drop(event)" ondragover="allowDrop(event)"
                            ondragleave="dragLeave(event)">

                        </div>
                    </div>
                    <div class="task-card">
                        <div class="header">
                            <p><span class="done"><i class='bx bxs-square-rounded'></i></span>Finalizado</p>
                        </div>
                        <div class="task-list" id="done" ondrop="drop(event)" ondragover="allowDrop(event)"
                            ondragleave="dragLeave(event)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function allowDrop(event) {
            event.preventDefault();
            var destino = document.getElementById(event.target.id);
            destino.style.background = "#f5f5f5";
        }

        function dragLeave(event) {
            event.preventDefault();
            var destino = document.getElementById(event.target.id);
            destino.style.background = "";
        }

        function drag(event) {
            event.dataTransfer.setData("text/plain", event.target.id);
        }

        function drop(event) {
            event.target.id
            var data = event.dataTransfer.getData("text");
            var taskArrastada = document.getElementById(data);
            var destino = document.getElementById(event.target.id);
            destino.style.background = "";

            if (event.target.id == "todo" || event.target.id == "progress" || event.target.id == "done") {
                updateTipo(taskArrastada.id, event.target.id);
            }
        }

        $('#new-sprint').click(function () { $('.sprint-container').fadeIn('slow') });
        $('.agroup').hide();

        $('#info-user').click(function () {
            $('.user-container').fadeIn('slow');
        })


    </script>
    <script src="backend/delete-task.js"></script>
    <script src="backend/get-user.js"></script>
    <script src="backend/post-sprint.js"></script>
    <script src="backend/post-task.js"></script>
    <script src="backend/get-sprint.js"></script>
    <script src="backend/update-tipo.js"></script>
    <script src="backend/update-task.js"></script>
    <script src="backend/update-user.js"></script>
    <script src="backend/update-senha.js"></script>
    <script src="backend/update-sprint.js"></script>
    <script>
        $('#btn-edit-sprint').click(function () {
            alert('click');
        })

        $('#menu').click(function(){
           if($('.sidemenu').hasClass('visible')){
            $('.sidemenu').css('display', 'flex');
            $('.sidemenu').removeClass('visible');
           }else{
            $('.sidemenu').css('display', 'none');
            $('.sidemenu').addClass('visible');
           }

            
        })
    </script>
</body>

</html>