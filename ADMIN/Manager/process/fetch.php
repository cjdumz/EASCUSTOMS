<?php
session_start();
include_once 'databaseconnect.php';
if(isset($_POST["view"]))
{
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE appointments SET notification=1 WHERE notification=0";
  mysqli_query($db, $update_query);
 }
 $query = "SELECT appointments.status AS status, vehicles.make AS make, vehicles.series AS series, vehicles.yearModel AS yearModel, appointments.created as created, vehicles.plateNumber as plateNumber FROM appointments JOIN vehicles ON appointments.vehicleId = vehicles.id ORDER BY created DESC LIMIT 5";
 $result = mysqli_query($db, $query);
 $output = '';

 if(mysqli_num_rows($result) > 0)
 {

  while($row = mysqli_fetch_array($result))
  { 
   $output .=
   '
               <a class="dropdown-item preview-item" href="appointments.php">
                <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                    <i class="mdi mdi-alert-circle-outline mx-0"></i>
                    </div>
                </div>
                <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-medium text-dark">'.$row["plateNumber"].' '.$row["make"].' '.$row["series"].' '.$row["yearModel"].'</h6>
                    <p class="font-weight-light small-text">
                    Status is now '.$row["status"].' check it here
                    </p>
                    <p class="font-weight-light small-text">
                    '.date("m/d/y h:i A",strtotime($row["created"])).'
                    </p>
                </div>
                </a>
   <li class="divider"></li>
   ';
  } 
}
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query2 = "SELECT * FROM appointments WHERE notification=0";
 $result2 = mysqli_query($db, $query2);
 $count = mysqli_num_rows($result2);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}

?>