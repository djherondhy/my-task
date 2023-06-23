<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once 'connection.php';

$dataJson = $_POST['data'];
$data = json_decode($dataJson, true);
$senha = md5($data['senha']);
$id = $data['id'];

$sql = "UPDATE usuario SET senha = '$senha' WHERE id_usuario = '$id'";

$stmt = $conn->prepare($sql);
if ($stmt->execute()) {
   echo json_encode('Senha Atualizada');
} else {
    echo json_encode('Erro ao Cadastrar');
}

?>