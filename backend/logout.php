<?php
session_start();
unset($_SESSION['active']);
unset($_SESSION['user_id']);
session_destroy();
header('Location: ../index.php');
?>