<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
      
require_once 'connection.php';

$dataJson = $_POST['data'];
$data = json_decode($dataJson, true);
$titulo = $data['titulo'];
$descricao = $data['descricao'];
$id_sprint = $data['id_sprint'];
$id_task = $data['id_task'];
$prioridade = $data['prioridade'];


$sql = "UPDATE task SET titulo = '$titulo', descricao = '$descricao', prioridade = '$prioridade' WHERE id_task = '$id_task'";

$stmt = $conn->prepare($sql);
if($stmt->execute()){
   
    
   echo json_encode('Dados Alterados');
}else{
   echo json_encode('Erro ao Alterar');
}

?>