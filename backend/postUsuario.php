<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
      
require_once 'connection.php';

$dataJson = $_POST['data'];
$data = json_decode($dataJson, true);
$nome = $data['nome'];
$email = $data['email'];
$senha = md5($data['senha']);

$sql = "INSERT INTO `usuario` (`nome`, `email`, `senha`)values('$nome', '$email', '$senha')";

$stmt = $conn->prepare($sql);
if($stmt->execute()){
   echo json_encode('Registrado com sucesso, faça login!');
}else{
   echo json_encode('Erro ao Cadastrar');
}

?>