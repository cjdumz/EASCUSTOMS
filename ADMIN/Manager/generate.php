<?php
	require "process/require/dataconf.php";
	$id = $_GET['id'];
	$sql = "SELECT  firstName,lastName from appointments join personalinfo on appointments.personalId = personalinfo.personalId where id = '".$id."'";
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc($result);
	$owner = "".$row['firstName']." ".$row['lastName']."";
	$sql2 = "SELECT sum(workPrice) as total from task where appointmentID = '".$id."'";
	$result2 = mysqli_query($connection, $sql2);
	$row2 = mysqli_fetch_assoc($result2);
	$sql4 = "SELECT id from task where appointmentID = '".$id."'";
	$stmt = $connection->prepare($sql4); 
	$stmt->execute(); 
	$Sid = $stmt -> get_result();
	$sTotal=0;
	foreach($Sid as $ids):
	$sql3 = "SELECT sum(total) as Total from taskspare where taskID = '".$ids['id']."'";
	$result3 = mysqli_query($connection, $sql3);
	$row3 = mysqli_fetch_assoc($result3);
	$sTotal = $sTotal + $row3['Total'];

	endforeach;
	$totalPrice = $row2['total'] + $sTotal;
	$query = $connection->prepare("Insert into chargeinvoice(appointmentId,owner,TotalPrice) values (?,?,?); ");
            $query->bind_param('isi', $id, $owner, $totalPrice);
            $query->execute();
			
			$complete = "complete";
			$update = $connection->prepare("UPDATE `appointments` SET `status`= ?,`modified`= NOW() WHERE `id` = ?");
		  
			$update->bind_param("si", $complete,$id);
			$update->execute();
			header("Location: chargeinvoice.php");
?>