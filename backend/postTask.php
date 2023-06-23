<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
      
require_once 'connection.php';

$dataJson = $_POST['data'];
$data = json_decode($dataJson, true);
$titulo = $data['titulo'];
$descricao = $data['descricao'];
$id_sprint = $data['id_sprint'];
$prioridade = $data['prioridade'];
$tipo = $data['tipo'];
$data = date('Y-m-d');

$sql = "INSERT INTO `task` (`titulo`, `descricao`, `prioridade`, `data`, `id_sprint`, `tipo`)values('$titulo', '$descricao', '$prioridade', '$data', '$id_sprint','$tipo')";

$stmt = $conn->prepare($sql);
if($stmt->execute()){
   
    $id = $conn->lastInsertId();
   echo json_encode($id);
}else{
   echo json_encode('Erro ao Cadastrar');
}

?>