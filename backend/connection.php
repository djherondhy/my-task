<?php
    
    $conn = new PDO('mysql:host=localhost:3306;dbname=mytask;','root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
?>