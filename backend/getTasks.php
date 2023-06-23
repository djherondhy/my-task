<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
          
require_once 'connection.php';

$data = json_decode($_POST['data'], true);
$id = $data['id_sprint'];

$sql = "SELECT * FROM task WHERE id_sprint  = '$id' order by id_task DESC";
$stmt = $conn->prepare($sql);

if($stmt->execute()){
   echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}else{
    echo json_encode('Erro ao Recuperar dados');
}


?>