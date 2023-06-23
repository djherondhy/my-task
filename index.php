<?php
header("Access-Control-Allow-Origin: *");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo ao MyTask</title>
    <link rel="stylesheet" href="css/preset.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="pluguins/jquery-3.6.4.min.js"></script>
</head>

<body>
<?php include 'components/popup.php'; ?>
    <div class="header">
        <p>MyTask</p>
    </div>
    <div class="container flex-h center">
        <div class="login flex-v h-center">
            <h2>Login</h2>
            <form action="backend/login-validation.php" method="post" class="flex-v">
                <div class="input-agroup">
                    <label for="">E-mail</label>
                    <input type="text" placeholder="seuemail@email.com" name="email">
                </div>
                <div class="input-agroup">
                    <label for="">Senha</label>
                    <input type="password" placeholder="sua senha" name="senha">
                </div>
                <div class="input-agroup">
                    <input type="submit" value="Entrar">
                </div>
            </form>
            <p class="create">Não possui conta? <a href="register.php"> Criar Conta </a></p>
        </div>
        <div class="info flex-v">
            <p class="title">MyTask</p>
            <p class="text">A solução para o gerenciamento de tarefas no contexto do Scrum, ajudando as equipes a alcançarem a excelência no desenvolvimento ágil de software.</p>
        </div>
    </div>
    <script>
    <?php
        if(isset($_GET['invalid'])){
            echo "getPopup('Usuário ou Senha inválidos');";
        }
        ?>
    </script>
  
</body>

</html>