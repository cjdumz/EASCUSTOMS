<?php
    include 'databaseconnect.php';
    $id = $_SESSION['id'];
    $result = $pdo->query("select personalId from personalinfo where user_id = '$id'")->fetchColumn(); 
    $sql = "SELECT appointments.id, appointments.vehicleId, vehicles.plateNumber, appointments.targetEndDate, appointments.date, appointments.personalId, appointments.serviceId, appointments.status FROM appointments inner join vehicles on vehciles.id = appointments.vehicleId where personalId = '$result'";
    $_SESSION['personalId'] = $result;
    $stmt = $pdo->prepare($sql); 
    $stmt->execute(); 
    $appointments = $stmt->fetchAll();  

 
?>