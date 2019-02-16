<?php
if(isset($_POST["action"]))
{
 require "require/dataconf.php"; 
 $output = '';
 if($_POST["action"] == "personalId")
 {
  $query = "SELECT id, plateNumber, make, series FROM vehicles WHERE personalId = '".$_POST["query"]."'";
  $result = mysqli_query($connection, $query);
  $output .= '<option value="">Select Vehicle</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["id"].'">'.$row["plateNumber"].''.$row["make"].''.$row["series"].'</option>';
  }
 }
 echo $output;
}
?>