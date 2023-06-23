<?php
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Origin: *");
    
    require_once 'connection.php';

    $data = $_POST['data'];
    $dataJson = json_decode($data, true);
    $tabela = $dataJson['tabela'];
    $coluna = $dataJson['coluna'];
    $dado = $dataJson['dado'];
    
    $sql = "SELECT * FROM `$tabela` WHERE $coluna = '$dado'";
    $stmt = $conn->prepare($sql);

    if($stmt->execute()){
       if($stmt->rowCount()!=0){
        $message = array(
            'result' => 1,
            'error' => false
        );
        echo json_encode($message);
       }else{
        $message = array(
            'result' => 0,
            'error' => false
        );
        echo json_encode($message);
       }
    }else{
        $message = array(
            'error' => true
        );
        echo json_encode($message);
    }
    
?>