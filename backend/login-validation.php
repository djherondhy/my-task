<?php
header("Access-Control-Allow-Origin: *");
      
require_once 'connection.php';

if(isset($_POST['email']) && isset($_POST['senha'])){
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM `usuario` WHERE `email` = '$email' AND `senha` =  '$senha'";
    $stmt = $conn->prepare($sql);

    if($stmt->execute()){
        if($stmt->rowCount() !=0){

            $data = $stmt->fetch(PDO::FETCH_ASSOC);

           session_start();
           $_SESSION['active'] = true;
           $_SESSION['user_id'] = $data['id_usuario'];
           header('Location: ../workspace.php');
           
        }else{
            unset($_SESSION['active']);
            unset($_SESSION['user_id']);
            header('Location: ../index.php?invalid=1');
            session_destroy();
        }

    }else{

    }
}

?>