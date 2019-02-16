<?php require 'process/require/auth.php';?>
<?php require "process/require/dataconf.php";?>
<?php require "../../process/info.php";?>
<?php require "../../process/database.php";?>
<?php


  
//$mechanicalservice = new database ;
//$mechanicalservice -> mechanical_service();
//$electricalservice = new database ;
//$electricalservice -> electrical_service();
//$paintservice = new database ;
//$paintservice -> painting_service();
$appointmentinfo = new database ;
$appointmentinfo -> appointment_info_activeschedule();
// $personalinfo = new database ;
// $personalinfo -> personal_info();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Appointment Request</title>
  <link rel="icon" href="images/Logo.png">
    
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/custom.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link href="css/dataTables.bootstrap4.css" rel="stylesheet">

  <link rel="stylesheet" href="css/normalize.css"  type="text/css"/>
  <link rel="stylesheet" href="css/datepicker.css"  type="text/css"/> 
    
    
     <!-- DatePicker dont move to another line -->

     <!-- Notification Jquery Library -->
     
     <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
     <script> 
      var $jq171 = jQuery.noConflict(true);
      </script>


     <script> 
      window.jQuery = $jq171;
     </script>
     <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
     <script type="text/javascript" src="js/jquery2.js"></script>

      <script type="text/javascript">
      var unavailableDates  = [<?php
      foreach($appointmentinfo->appointment_info as $appointmentinfo):
      ?>"<?= date('d-n-o', strtotime($appointmentinfo['date'])); ?>",
      <?php     
      endforeach;
      ?>];

      function unavailable(date) {
      dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
      if ($jq171.inArray(dmy, unavailableDates) == -1) {
      return [true, ""];
      } else {
      return [false, "", "Unavailable"];
      }
      }

      function noWeekend(date){
      var noWeekend = $jq171.datepicker.noWeekends(date);
      return noWeekend[0] ? unavailable(date) : noWeekend;
      }
     </script>

</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include "includes/navbar.php";?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav" style="position:fixed;">
        <hr class="style2">
            
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="menu-icon mdi mdi-view-dashboard"></i>
              <span class="menu-title" style="font-size:14px;">Dashboard</span>
            </a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-inbox"></i>
              <span class="menu-title" style="font-size:14px;">Appointment</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="appointments.php" style="font-size:14px;">Create Appointment</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="request.php" style="font-size:14px;">Request</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="overdue.php" style="font-size:14px;">Overdue</a>
                </li>
              </ul>
            </div>
          </li>
            
          <li class="nav-item">
            <a class="nav-link" href="calendar.php">
              <i class="menu-icon mdi mdi-calendar"></i>
              <span class="menu-title" style="font-size:14px;">Calendar</span>
            </a>
          </li>
            
          <!-- <li class="nav-item">
            <a class="nav-link" href="dailytaskform.php">
              <i class="menu-icon mdi mdi-file"></i>
              <span class="menu-title" style="font-size:14px;">Daily Task Form</span>
            </a>
          </li> -->

          <li class="nav-item">
            <a class="nav-link"  href="chargeinvoice.php">
              <i class="menu-icon mdi mdi-receipt"></i>
              <span class="menu-title" style="font-size:14px;">Sales Invoice</span>
            </a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
              <i class="menu-icon mdi mdi-account-multiple"></i>
              <span class="menu-title" style="font-size:14px;">Account Management</span>
              <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="accountmanagement.php" style="font-size:14px;">Users</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="administratormanagement.php" style="font-size:14px;">Administrators</a>
                </li>
              </ul>
            </div>
        </li>
            
          <li class="nav-item">
            <a class="nav-link" href="vehicle.php">
              <i class="menu-icon mdi mdi-car-side"></i>
              <span class="menu-title" style="font-size:14px;">Vehicle</span>
            </a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link" href="sparepartsmanagement.php">
              <i class="menu-icon mdi mdi-wrench"></i>
              <span class="menu-title" style="font-size:14px;">Spare Parts</span>
            </a>
          </li>
            
        </ul>
      </nav>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title" style="font-size:20px;">Appointments</p>
                  <p class="card-description">
                    List of Appointment Request
                  </p>
                  <div class="table-responsive">
                    <table class="table table-bordered table-dark" id="doctables">
                      <thead>
                        <tr class="grid">
                            <th>Name</th>
                            <th>Plate Number</th>
                            <th>Status</th>
                            <th>Date Sent</th>
                            <th>Date of Appointment Request</th>
                            <th style="font-size:15px;" class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-primary" style="color:black;">
                      <?php
                        $data = $connection->prepare("SELECT appointments.id as 'ID',concat(firstName,' ',middleName,' ',lastName) as 
                        'Name',make,series,appointments.created as 'created', appointments.serviceId as 'service', appointments.otherService as 
                        'others', yearModel,plateNumber,appointments.status,date, appointments.additionalMessage as 'message', adminDate,rescheduledate
                         from appointments join personalinfo on appointments.personalId
                        = personalinfo.personalId join vehicles on appointments.vehicleId = vehicles.id where ( appointments.status = 'Pending' OR appointments.status = 'Rescheduled')");
                        if($data->execute()){
                            $values = $data->get_result();
                            while($row = $values->fetch_assoc()) {
                            $dateTime = $row['date'];
                            $dateTimeSplit = explode(" ",$dateTime);
                            $date = $dateTimeSplit[0];

                            $dateTime2 = $row['created'];
                            $dateTimeSplit2 = explode(" ",$dateTime2);
                            $date2 = $dateTimeSplit2[0];
                            echo '
                                <tr>
                                <td>'.$row['Name'].'</td>
                                <td><a href = "viewvehicle.php?plate='.$row['plateNumber'].'" style="color:black;">'.$row['plateNumber'].'</a></td>
                                <td>'.$row['status'].'</td>
                                <td>'; echo date('M d, Y',strtotime($date2)); echo '</td>
                                <td><a href = "appointmentbasis.php?date='.$row['date'].'" style="color:black;">'; echo date('M d, Y',strtotime($date)); echo '</a></td>
                                <td class="text-center">
                                
                                  <div class="row">';
                                if($row['adminDate'] != 'admin'){
                                  echo '<div class="col-12">
                                  <button class="btn btn-success" name="commands1" style="margin-top: 5px; width: 145px; color:white;"  data-toggle="modal" data-target="#appointmentModalCenter'.$row['ID'].'"><i class="menu-icon mdi mdi-checkbox-marked-outline"></i>
                                  Accept</button>
                                </div>';
                                }

                                echo '
                                      <div class="col-12">
                                        <input type="hidden" name="command2" value="deny">
                                        <input type="hidden" name="id2" value="'.$row['ID'].'">
                                        <button class="btn btn-warning"  name="commands2" style="margin-top: 5px; width: 145px; color:white;" data-toggle="modal" data-target="#exampleModalCenter'.$row['ID'].'"><i class="menu-icon mdi mdi-calendar-clock"></i>
                                        Reschedule</button>
                                      </div>
                                      <div class="col-12">
                                        <input type="hidden" name="command2" value="decline">
                                        <input type="hidden" name="id2" value="'.$row['ID'].'">
                                        <button class="btn btn-danger"  name="commands2" style="margin-top: 5px; width: 145px; color:white;" data-toggle="modal" data-target="#decline'.$row['ID'].'"><i class="menu-icon mdi mdi-calendar-remove"></i>
                                        Decline</button>
                                      </div>
                                    </div>';
                                    
                                    if($row['status'] == 'Rescheduled'){
                                      if($row['adminDate'] == 'admin'){
                                        echo '<p style="margin-top: 10px; color: red;">Note: Appointment date is <br> waiting for Client approval</p>';
                                      }
                                      if($row['adminDate'] == 'reschedclient'){
                                        echo '<p style="margin-top: 10px; color: red;">Note: The Client sent new <br> dates for the appointment</p>';
                                      }
                                      if($row['adminDate'] == 'client'){
                                        echo '<p style="margin-top: 10px; color: red;">Note: Appointment date was <br> approved by the Client</p>';
                                      }
                                    }
                                      echo '
                                    
                                </td>

                                </tr>

                                <!-- Appointment Modal -->
                                <div class="modal fade" id="appointmentModalCenter'.$row['ID'].'" tabindex="-1" role="dialog" aria-labelledby="appointmentModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header" style="background-color: #4caf50; color: white; border: 3px solid #4caf50;">
                                        <h5 class="modal-title" id="appointmentModalCenterTitle">Accept</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <!-- start -->
                                        <div class="row">
                                          <div class="col-6">
                                            <h4 class="card-title">Customer Name:</h4>                                            
                                          </div>
                                          <div class="col-6">
                                            <h4 class="card-title">'.$row['Name'].'</h4>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-6">
                                            <h4 class="card-title">Plate Number:</h4>                                            
                                          </div>
                                          <div class="col-6">
                                            <h4 class="card-title">'.$row['plateNumber'].'</h4>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-6">
                                            <h4 class="card-title">Status:</h4>                                            
                                          </div>
                                          <div class="col-6">
                                            <h4 class="card-title">'.$row['status'].'</h4>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-6">
                                            <h4 class="card-title">Services:</h4>                                            
                                          </div>
                                          <div class="col-6">
                                            <h4 class="card-title">'.$row['service'].'&nbsp
                                            ';
                                              if(!empty($row['otherService'])){
                                                echo ', ',$row['otherService'];
                                              }
                                            echo'
                                            </h4>
                                          </div>
                                        </div>
                                        
                                        <form action="process/server.php" method="post">
                                        
                                       
                                          <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Date: </label>
                                            <div class="col-sm-9">
                                            <form action="process/server.php" method="post">
                                            ';
                                            if($row['rescheduledate']==""){
                                              echo '
                                              <input type="hidden" value="'.$row['date'].'" name="date1">
                                              <input type="text" class="form-control" id="exampleInputEmail2" disabled value="'; echo date('M d, Y',strtotime($row['date'])); echo ' ">
                                              ';
                                            }else{
                                              $dates = explode("|", $row['rescheduledate']);
                                              for ($i = 0; $i < count($dates); $i++) {
                                                
                                                echo '
                                                <input class="form-check-input " type="radio" name="date" id="exampleRadios1" value="'.$dates[$i].'" required>
                                                <input type="text" class="form-control" id="exampleInputEmail2" disabled value="'; echo date('M d, Y',strtotime($dates[$i])); echo ' ">
                                                ';
                                                  
                                    
                                              }
                                            }
                                          
                                            echo'
                                            </div>
                                          </div>
                                          
                                        <!-- end -->
                                      </div>

                                      <div class="modal-footer" >
                                            <input type="hidden" name="command1" value="accept">
                                            <input type="hidden" name="id1" value="'.$row['ID'].'">
                                          <button class="btn btn-success" type="submit" name="commands1" style="margin-top: 5px; width: 145px; color:white;"><i class="menu-icon mdi mdi-checkbox-marked-outline"></i>
                                          Accept</button>
                                          
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i>Dismiss</button>
                                    
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- Reschedule Modal -->
                                <div class="modal fade" id="exampleModalCenter'.$row['ID'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header" style="background-color: #FFAF00; color: white; border: 3px solid #FFAF00;">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Reschedule</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <!-- start -->
                                        <div class="row">
                                          <div class="col-4">
                                            <h4 class="card-title">Customer Name:</h4>                                            
                                          </div>
                                          <div class="col-8">
                                            <h4 class="card-title">'.$row['Name'].'</h4>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-4">
                                            <h4 class="card-title">Plate Number:</h4>                                            
                                          </div>
                                          <div class="col-8">
                                            <h4 class="card-title">'.$row['plateNumber'].'</h4>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-4">
                                            <h4 class="card-title">Status:</h4>                                            
                                          </div>
                                          <div class="col-8">
                                            <h4 class="card-title">'.$row['status'].'</h4>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-4">
                                            <h4 class="card-title">Services:</h4>                                            
                                          </div>
                                          <div class="col-8">
                                            <h4 class="card-title">'.$row['service'].'&nbsp
                                            ';
                                              if(!empty($row['otherService'])){
                                                echo ', ',$row['otherService'];
                                              }
                                            echo'
                                            </h4>
                                          </div>
                                        </div>';
                                        if($row['status'] == 'Rescheduled'){
                                          echo '<div class="row">
                                                  <div class="col-4">
                                                    <h4 class="card-title">Previous Message:</h4>                                            
                                                  </div>
                                                  <div class="col-8">
                                                    <h4 class="card-title">'.$row['message'].'</h4>
                                                  </div>
                                                </div>';
                                        }
                                      ?>
                                <script type="text/javascript">
                                $jq171(function(){
                                $jq171('#datepicker1<?php echo $row['ID']; ?>').datepicker({
                                dateFormat: 'yy-m-d',
                                minDate: 1,
                                beforeShowDay: noWeekend, //eto yung date para sa disabled dates
                                inline: true,
                                //nextText: '&rarr;',
                                //prevText: '&larr;',
                                showOtherMonths: true,
                                //dateFormat: 'dd MM yy',
                                dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                                //showOn: "button",
                                //buttonImage: "img/calendar-blue.png",
                                //buttonImageOnly: true,
                                });
                                });
                                $jq171(function(){
                                $jq171('#datepicker2<?php echo $row['ID']; ?>').datepicker({
                                dateFormat: 'yy-m-d',
                                minDate: 1,
                                beforeShowDay: noWeekend, //eto yung date para sa disabled dates
                                inline: true,
                                //nextText: '&rarr;',
                                //prevText: '&larr;',
                                showOtherMonths: true,
                                //dateFormat: 'dd MM yy',
                                dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                                //showOn: "button",
                                //buttonImage: "img/calendar-blue.png",
                                //buttonImageOnly: true,
                                });
                                });
                                $jq171(function(){
                                $jq171('#datepicker3<?php echo $row['ID']; ?>').datepicker({
                                dateFormat: 'yy-m-d',
                                minDate: 1,
                                beforeShowDay: noWeekend, //eto yung date para sa disabled dates
                                inline: true,
                                //nextText: '&rarr;',
                                //prevText: '&larr;',
                                showOtherMonths: true,
                                //dateFormat: 'dd MM yy',
                                dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                                //showOn: "button",
                                //buttonImage: "img/calendar-blue.png",
                                //buttonImageOnly: true,
                                });
                                });

                                </script>
                                      <?php

                                        echo'
                                        <form method="POST" action="process/server.php" enctype="multipart/form-data">
                                          <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label card-title">Previous Date</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" disabled value="'; echo date('M d, Y',strtotime($date)); echo ' ">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label card-title">Date 1:</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" name="date1" id="datepicker1'.$row['ID'].'" placeholder="Date1" required="" readonly>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label card-title">Date 2:</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" name="date2" id="datepicker2'.$row['ID']. '" placeholder="Date2*" readonly>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label card-title">Date 3:</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" name="date3" id="datepicker3'.$row['ID'].'" placeholder="Date3" readonly>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label card-title">Message</label>
                                            <div class="col-sm-9">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" required></textarea>
                                            </div>
                                          </div>
                                        <!-- end -->
                                      </div>
                                      
                                      
                                      <input type="hidden" name="id" value="'.$row['ID'].'">
                                      <input type="hidden" name="location" value="appointment">
                                      <div class="modal-footer" >
                                      
                                        <button type="submit" name="resubmit" class="btn btn-warning"><i class="menu-icon mdi mdi-calendar-clock"></i>Reschedule</button>
                                        
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i>Dismiss</button>
                                        
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- Decline Modal -->
                                <div class="modal fade" id="decline'.$row['ID'].'" tabindex="-1" role="dialog" aria-labelledby="appointmentModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header" style="background-color: #F44336; color: white; border: 3px solid #F44336;">
                                        <h5 class="modal-title" id="appointmentModalCenterTitle">Decline</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <!-- start -->
                                        <div class="row">
                                          <div class="col-6">
                                            <h4 class="card-title">Customer Name:</h4>                                            
                                          </div>
                                          <div class="col-6">
                                            <h4 class="card-title">'.$row['Name'].'</h4>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-6">
                                            <h4 class="card-title">Plate Number:</h4>                                            
                                          </div>
                                          <div class="col-6">
                                            <h4 class="card-title">'.$row['plateNumber'].'</h4>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-6">
                                            <h4 class="card-title">Status:</h4>                                            
                                          </div>
                                          <div class="col-6">
                                            <h4 class="card-title">'.$row['status'].'</h4>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-6">
                                            <h4 class="card-title">Services:</h4>                                            
                                          </div>
                                          <div class="col-6">
                                            <h4 class="card-title">'.$row['service'].'&nbsp
                                            ';
                                              if($row['otherService'] = ""){
                                                echo ', ',$row['otherService'];
                                              }
                                            echo'
                                            </h4>
                                          </div>
                                        </div>
                                       
                                          <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Date</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="exampleInputEmail2" disabled value="'; echo date('M d, Y',strtotime($date)); echo ' ">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <form action="process/server.php" method="post">
                                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label card-title">Message</label>
                                            <div class="col-sm-9">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" required></textarea>
                                            </div>
                                          </div>
                                        <!-- end -->
                                      </div>

                                      <div class="modal-footer" >
                                        
                                        <input type="hidden" name="command1" value="decline">
                                        <input type="hidden" name="id1" value="'.$row['ID'].'">
                                        
                                          <button class="btn btn-danger" type="submit" name="commands1" style="margin-top: 5px; width: 145px; color:white;"><i class="menu-icon mdi mdi-calendar-remove"></i>
                                          Decline</button>
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i>Dismiss</button>
                                    
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            ';
                            }
                        }else{
                            echo "<tr>
                                    <td colspan='7'>No Available Data</td>
                                </tr>";
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include "includes/footer.php";?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <script src="js/sb-admin-datatables.min.js"></script>


  
</body>

</html>

<script>
  var table = $('#doctables').DataTable({
    // PAGELENGTH OPTIONS
    "lengthMenu": [[ 5, 10, 25, 50, 100, -1], [ 5, 10, 25, 50, 100, "All"]]

});
</script>
<!-- <script>
$('form.ajax').on('submit', function(){
    var that = $(this),
        url = that.attr('action'),
        type = that.attr('method'),
        data = {};

    that.find('[name]').each(function(index, value){
        var that = $(this),
            name = that.attr('name'),
            value = that.val();

        data[name] = value;
    });

    $.ajax({
        url: url,
        type: type,
        data: data,
        success: function(response){
            console.log(response);
        }

    });

    return false;

});
<<<<<<< HEAD
</script> -->