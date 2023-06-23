<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once 'connection.php';

$dataJson = $_POST['data'];
$data = json_decode($dataJson, true);
$id_task = $data['id_task'];
$tipo = $data['tipo'];


$sql = "UPDATE task SET tipo = '$tipo' WHERE id_task = '$id_task'";

$stmt = $conn->prepare($sql);
if ($stmt->execute()) {
   
    $get = "SELECT * FROM task WHERE id_task = '$id_task'";
    $ex = $conn->prepare($get);
    if($ex->execute()){
       
        echo json_encode($ex->fetch(PDO::FETCH_ASSOC));
    }

} else {
    echo json_encode('Erro ao Cadastrar');
}

?>