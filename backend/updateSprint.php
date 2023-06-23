<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
      
require_once 'connection.php';

$dataJson = $_POST['data'];
$data = json_decode($dataJson, true);
$titulo = $data['titulo'];
$id_sprint = $data['id'];

$sql = "UPDATE `sprint` SET titulo = '$titulo' WHERE id_sprint = '$id_sprint'";

$stmt = $conn->prepare($sql);
if($stmt->execute()){
    
   echo json_encode('Dados Alterados');
}else{
   echo json_encode('Erro ao Cadastrar');
}

?>