<?php
//insert.php
if(isset($_POST["post"]))
{
 include 'require/dataconf.php';
 $vehicleId = mysqli_real_escape_string($connection	, $_POST["vehicleId"]);
 $otherService = mysqli_real_escape_string($connection	, $_POST["otherService"]);
 $personalId = mysqli_real_escape_string($connection, $_POST["personalId"]);
 $additionalMessage = mysqli_real_escape_string($connection, $_POST["additionalMessage"]);
 $service = mysqli_real_escape_string($connection, implode(',', $_POST['service']));
 $date = mysqli_real_escape_string($connection, $_POST["date"]);
 $query = "
 INSERT INTO appointments(serviceId, vehicleId, personalId, additionalMessage, otherService, date, status, notification )
 VALUES ('$service', '$vehicleId', '$personalId', '$additionalMessage', '$otherService', '$date', 'Pending', '0')
 ";
 mysqli_query($connection, $query);
 header("Location: ../appointments.php");
}
?>
