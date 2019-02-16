<?php 
  extract($_POST);
 
  include 'process/databaseconnect.php';
  if (isset($_POST['username_check'])) {
    $username = $_POST['username'];
    $sql = "SELECT * FROM users WHERE username='$username'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }
  if (isset($_POST['email_check'])) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM personalinfo WHERE email='$email'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }
  if (isset($_POST['plateNumber_check'])) {
    $plateNumber = $_POST['plateNumber'];
    $sql = "SELECT * FROM vehicles WHERE plateNumber='$plateNumber'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }

  if (isset($_POST['plateNumber1_check'])) {
    $plateNumber1 = $_POST['plateNumber1'];
    $sql = "SELECT * FROM vehicles WHERE plateNumber='$plateNumber1'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }

  if (isset($_POST['existingpassword_check'])) {
    //$existingpassword = password_hash($_POST['existingpassword'], PASSWORD_DEFAULT);
    $existingpassword = $_POST['existingpassword'];
    $sql = "SELECT password FROM users WHERE id='".$_SESSION['id']."'";
   // $sql = "SELECT * FROM users WHERE password='$existingpassword'";
    $existingpasswordresult = mysqli_query($db, $sql);
    $existingpasswordresultCheck = mysqli_num_rows($existingpasswordresult);

   if ($existingpasswordresultCheck > 0) {
         while ($row = mysqli_fetch_assoc($existingpasswordresult)) {
          $hash = $row['password'];
       }
     }
    
   
   
    if (password_verify($existingpassword, $hash)) { 
       echo 'taken'; 
    } else { 
       echo 'not_taken'; 
    } 
    exit();

   // if ($existingpasswordresultCheck > 0) {
   //   echo "taken"; 

  //  }else{
   //   echo 'not_taken';
  //  }
  //  exit();

  }

  if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $contactNumber = $_POST['contactNumber'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $plateNumber = $_POST['plateNumber'];
    $make = $_POST['make'];
    $series = $_POST['series'];
    $yearModel = $_POST['yearModel'];
    $color = $_POST['color'];
    $sql = "SELECT * FROM users WHERE username='$username'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "exists";  
      exit();
    }else{
      $query = "INSERT INTO users (username, password , status , type) 
            VALUES ('$username', '".password_hash($_POST['password'], PASSWORD_DEFAULT)."' ,'Active', 'client')";
     $result1 = mysqli_query($db, $query);
     $query2 = "INSERT INTO personalinfo (user_id, firstName, middleName, lastName, address, email, mobileNumber) VALUES (LAST_INSERT_ID(),'$firstName', '$middleName', '$lastName', '$address', '$email', '$contactNumber')";
     $result2 = mysqli_query($db, $query2);
     $query3 = "INSERT INTO vehicles (personalid, plateNumber, yearModel, make, series, color) VALUES (LAST_INSERT_ID(), '$plateNumber', '$yearModel', '$make', '$series', '$color')";
     $result3 = mysqli_query($db, $query3);
      header('location: login.php?success=done');
      exit(); 
    }
  }

?>