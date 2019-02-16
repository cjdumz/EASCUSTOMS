
<?php
require "require/dataconf.php"; //datebase connection

if(isset($_POST["submit-service"])){


  $servicename = $connection->real_escape_string($_POST["servicename"]);
  $servicetype = $connection->real_escape_string($_POST["servicetype"]);

  // echo $first,", ", $middle,", ", $last, ", ",$suffix,", ", $address,", ", $email,", ", $mobile,", ", $telephone;

  $addservice = $connection->prepare("INSERT INTO `services`(`serviceName`, `serviceType`) VALUES (?,?);");
  

  $addservice->bind_param("ss", $servicename, $servicetype);
  if($addservice->execute()){ 
    header("Location: ../servicesmanagement.php");
  }else{
    header("Location: ../error.php");
    exit();
  }
}

?>