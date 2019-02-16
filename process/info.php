<?php
    include_once 'databaseconnect.php';
    $id = $_SESSION['id'];
    $result = $pdo->query("select personalId from personalinfo where user_id = '$id'")->fetchColumn(); 
    $sql = "SELECT * FROM vehicles where personalId = '$result'";
    $_SESSION['personalId'] = $result;
    $stmt = $pdo->prepare($sql); 
    $stmt->execute(); 
    $vehicles = $stmt->fetchAll();  

 
?>
