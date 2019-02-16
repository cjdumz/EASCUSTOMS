<?php
 $connection = new mysqli("localhost","eas","eas2018","eas");//make database connection

//Updating Overdue Appointment Request
$checkAppointmentStatus = $connection->prepare("SELECT * FROM `appointments` WHERE appointments.status = 'Accepted' AND appointments.date < now()");
if($checkAppointmentStatus->execute()){
  $data = $checkAppointmentStatus->get_result();
  while($row = $data->fetch_assoc()) {
    $ID = $row['id'];
    $updateStatus = $connection->prepare("UPDATE `appointments` SET `status` = 'Overdue' WHERE `appointments`.`id` = $ID;");
    $updateStatus->execute();
  }
}

?>
