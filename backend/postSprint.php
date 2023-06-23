<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
      
require_once 'connection.php';

$dataJson = $_POST['data'];
$data = json_decode($dataJson, true);
$titulo = $data['titulo'];
$id_user = $data['id_user'];

$sql = "INSERT INTO `sprint` (`titulo`, `id_user`)values('$titulo', '$id_user')";

$stmt = $conn->prepare($sql);
if($stmt->execute()){
    
   echo json_encode('Sprint Adicionado');
}else{
   echo json_encode('Erro ao Cadastrar');
}

?>