<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once 'connection.php';

$data = json_decode($_POST['data'], true);
$id = $data['id'];
$senha = md5($data['senha']);

$sql = "SELECT * FROM usuario WHERE senha = '$senha' and id_usuario = '$id'";

$stmt = $conn->prepare($sql);

if($stmt->execute()){
    if($stmt->rowCount() != 0){
        echo json_encode(1);
    }else{
        echo json_encode(0);
    }
}


?>