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
            <h2>Registro </h2>
            <form action="" class="flex-v" id="form-usuario">
                <div class="input-agroup">
                    <label for="email">E-mail</label>
                    <input type="text" placeholder="Insira seu e-mail" id="email">
                    <span class="email-message message">Este e-mail já foi cadastrado</span>
                </div>
                <div class="input-agroup">
                    <label for="">Nome</label>
                    <input type="text" placeholder="Como deseja ser chamado?" id="nome">
                </div>
                <div class="input-agroup">
                    <label for="">Senha</label>
                    <input type="password" placeholder="Insira sua senha" id="senha">
                    <span class="senha-message message">A senha deve possuir no mínimo 8 caracteres</span>
                </div>
                <div class="input-agroup">
                    <label for="">Confirmar Senha</label>
                    <input type="password" placeholder="Confirme sua senha" id="confirm">
                    <span class="confirm-message message">Senhas não coincidem</span>
                </div>
                <div class="input-agroup">
                    <input type="submit" value="Registrar-se" id="enviar">
                </div>
            </form>
            <p class="create">Já tem conta? <a href="index.php"> Login</a></p>
        </div>
        <div class="info  flex-v">
            <p class="title">MyTask</p>
            <p class="text">A solução para o gerenciamento de tarefas no contexto do Scrum, ajudando as equipes a alcançarem a excelência no desenvolvimento ágil de software.</p>
        </div>
    </div>
    <script src="js/hide-elements.js"></script>
    <script src="backend/register-validation.js"></script>
    <script src="backend/post-usuario.js"></script>
</body>

</html>