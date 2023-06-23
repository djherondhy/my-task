<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once 'connection.php';

$dataJson = $_POST['data'];
$data = json_decode($dataJson, true);
$nome = $data['nome'];
$email = $data['email'];
$id = $data['id'];

$sql = "UPDATE usuario SET nome = '$nome', email = '$email' WHERE id_usuario = '$id'";

$stmt = $conn->prepare($sql);
if ($stmt->execute()) {
   echo json_encode('Dados Atualizados');
} else {
    echo json_encode('Erro ao Cadastrar');
}

?>