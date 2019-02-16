<?php require 'process/require/auth.php';?>
<?php require "process/require/dataconf.php";?>
<?php require "../../process/info.php";?>
<?php require "../../process/database.php";?>
<?php if(!isset($_GET['id'])){
        header("Location: error.php");
        exit();
      }else{
        $id = $connection->real_escape_string($_GET["id"]);
        $data = $connection->prepare("SELECT `appointments`.`id` as 'ID', `serviceId`, `vehicleId`, `appointments`.`personalId`, `otherService`, concat(firstName,
        ' ',middleName, ' ',lastName)as 'Name', `appointments`.`serviceId` as 'service',`appointments`.`otherService` as 'others', `vehicles`.`plateNumber`, targetEndDate,
        `additionalMessage`, `appointments`.`status` as 'stat', `date`, `adminDate`, `appointments`.`created`, `appointments`.`modified`, `notification`,
         `targetEndDate` FROM `personalinfo` inner join  `appointments` on `appointments`.`personalId` = `personalinfo`.`personalId` inner join `vehicles` on
         `appointments`.`vehicleId` = `vehicles`.`id`
          WHERE `appointments`.`id`  = $id");
        if($data->execute()){
            $values = $data->get_result();
            $row = $values->fetch_assoc();
            $dateTime = $row['date'];
            $dateTimeSplit = explode(" ",$dateTime);
            $date = $dateTimeSplit[0];

            if($row['stat'] == "Pending"){
              header("Location: error.php");
            }elseif($row['stat'] == "Rescheduled"){
              header("Location: error.php");
            }

        }else{
            header("Location: error.php");
        }
      }

    $appointmentinfo = new database;
    $appointmentinfo -> appointment_info_activeschedule();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Records</title>
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
  <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
  <script> 
  var $jq171 = jQuery.noConflict(true);
  </script>


  <script> 
  window.jQuery = $jq171;
  </script>
  <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
  <script type="text/javascript" src="js/jquery2.js"></script>
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
            <div class="col-lg-12 grid-margin  stretch-card">
              <div class="card">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="calendar.php" style="font-size:18px;">Calendar</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="font-size:18px;"><?php echo '(',date('F j, Y',strtotime ($row['date'])), '&nbsp-&nbsp',$row['Name'] ,')' ?></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <div class="row">
            
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title" style="font-size:20px; float:left;"><?php echo date('F j, Y',strtotime($row['date'])); ?></p>
                    <?php
                        if ($row['targetEndDate'] == $row['date']){
                    ?>
                    <form method = "post" action="addenddate.php?id=<?php echo $id;?>">      
                        <p class="card-title" style="font-size:20px; float:right;" >Target End Date : <input type ="date" name="enddate" style="border-style: groove; border-radius: 5px; border-color:#f2f2f2"> <button class="btn btn-primary" type="submit" name="submit"><i class="menu-icon mdi mdi-checkbox-multiple-marked-circle-outline"></i> Submit</button></p></form>
                    <?php
                        }else{
                            ?><p class="card-title" style="font-size:20px; float:right;" > Target End Date : <?php echo date('F j, Y',strtotime ($row['targetEndDate']));?>
                        <?php
                        }
                    ?>
                    
                  <p class="card-description" style="clear:both">Transaction Record of Appointment ID: <?php echo $id; ?></p>
                  <hr>
                  <br>
                  <!-- start -->
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

                  <div class="form-group">
                    <div class="row"><!-- row-start -->
                      <div class="col-md-2"><p>Owner</p></div>
                      <div class="col-md-4"><h5 style="margin-top: -1%">: <?php echo $row['Name'] ?></h5></div>
                      <div class="col-md-2"><p>Date of Request</p></div>
                      <div class="col-md-4"><h5 style="margin-top: -1%">: <?php echo date('F j, Y',strtotime($row['created'])); ?></h5></div>
                    </div><!-- row-end -->
                    <div class="row">
                      <div class="col-md-2"><p>Plate Number </p></div>
                      <div class="col-md-4"><h5 style="margin-top: -1%">: <?php echo $row['plateNumber'] ?></h5></div>
                      <div class="col-md-2"><p>Date Approved </p></div>
                      <div class="col-md-4"><h5 style="margin-top: -1%">: <?php echo date('F j, Y',strtotime($row['modified'])); ?></h5></div>
                    </div>
                    <div class="row">
                      <div class="col-md-2"><p>Status</p></div>
                      <div class="col-md-4"><h5 style="margin-top: -1%">: <?php $progress_status = $row['stat'];echo $row['stat'] ?></h5></div>
                      <div class="col-md-2"><p> </p></div>
                        <div class="col-md-4"><h5 style="margin-top: -1%"></h5></div>
                    </div>
                    <div class="row">
                      <div class=" offset-md-1 col-md-2"><p>Progress</p></div>
                      <div class="col-md-7">
                        <div class="progress">
                        <?php
                          $progress = 0;
                          if($row['stat'] != 'Accepted'){
                            $allTask;
                            $finishedTask;
                            $all_task = $connection->prepare("SELECT count(id) as 'All' FROM `task` WHERE appointmentId = $id");
                            if($all_task->execute()){
                            $values = $all_task->get_result();
                            $rowd = $values->fetch_assoc(); 
                              $allTask = $rowd['All'];
                            }

                            $finished_task = $connection->prepare("SELECT count(status) as 'All' FROM `task` WHERE appointmentID = $id AND status = 'Done'");
                            if($finished_task->execute()){
                            $values = $finished_task->get_result();
                            $rowb = $values->fetch_assoc(); 
                              $finishedTask = $rowb['All'];
                            }

                            if($finishedTask == 0 && $allTask == 0){
                              $progress = 0;
                            }else{
                              $progress = ($finishedTask / $allTask)*100;
                            }

                            if($progress<100){
                              $checkprogress = $connection->prepare("UPDATE `appointments` SET `status` = 'In-Progress' WHERE `appointments`.`id` = $id;");
                               $checkprogress->execute();
                            }
                          }
                          

                        ?>
                          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?php echo $progress;?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- suggested task start -->
                    <?php 
                      if($row['stat'] == 'Accepted'){

                      }else{

                        echo '<p>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                  Client Suggested Task
                                </button>
                              </p>
                              <div class="collapse" id="collapseExample">
                                <div class="card card-body">';
                        $ClientSuggestedTask = $connection->prepare("SELECT * FROM appointments WHERE appointments.id = $id");
                        if($ClientSuggestedTask->execute()){
                          $values = $ClientSuggestedTask->get_result();
                          while($rowb = $values->fetch_assoc()){
                              $services = $rowb['serviceId'];
                              $id = $rowb['id'];
 
                              $task = explode(",", $services);
                              for ($i = 0; $i < count($task); $i++) {
                                echo  '<li>'.$task[$i].'</li>';
                              }

                              if($rowb['otherService'] != ""){
                                $other = $rowb['otherService'];
                                echo  '<li>'.$other.'</li>';
                              }
                          }
                        }
                        echo'
                                </div>
                              </div>';
                      }
                    ?>
                    <!-- suggested task end -->

                    <?php 
                      if($row['stat'] == 'Accepted'){
                          if(empty($row['targetEndDate'])){
                              echo '  
                                  <form action="process/server.php" method="POST">
                                    <input type="hidden" name="app_id" value="'.$id.'">
                                    <button type="submit" disabled class="btn btn-success" name="start" style="float:right">
                                      <i class="menu-icon mdi mdi-arrow-right-drop-circle-outline"></i> Start
                                    </button>
                                  </form>';
                          }else{
                             $date1 = date("Y-m-d", strtotime($row['date']));
                             $date2 = date('Y-m-d');
                            if($date1 == $date2){
                                echo '  
                                <form action="process/server.php" method="POST">
                                  <input type="hidden" name="app_id" value="'.$id.'">
                                  <button type="submit" name="start" class="btn btn-success" style="float:right">
                                    <i class="menu-icon mdi mdi-arrow-right-drop-circle-outline"></i> Start
                                  </button>
                                </form>';
                            }else{
                                echo '  
                                
                                  <input type="hidden" name="app_id" value="'.$id.'">
                                  <button class="btn btn-success" style="float:right" data-toggle="modal"  data-target="#continue'.$row['ID'].'">
                                    <i class="menu-icon mdi mdi-arrow-right-drop-circle-outline"></i> Start Now
                                  </button>


                                  <!-- Reschedule Modal -->
                                  <div class="modal fade" id="continue'.$row['ID'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header" style="background-color: #4caf50; color: white; border: 3px solid #4caf50;">
                                          <h5 class="modal-title" id="exampleModalCenterTitle">Start Now</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <div class="modal-body">You are about to start an appointment that is not due.<br>
                                          Select "Confirm" to Continue</div>
                                        </div>
                                        
                                      
                                        <div class="modal-footer" >
                                          <form action="process/server.php" method="POST">
                                            <input type="hidden" name="app_id" value="'.$id.'">
                                            <button type="submit" name="start"class="btn btn-success"><i class="menu-icon mdi mdi-arrow-right-drop-circle-outline"></i>Confirm</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i>Dismiss</button>
                                          </form>
                                
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <!-- end modal -->
                                ';
                            }
                              
                          }
                          
                        echo'
                                <input type="hidden" name="app_id" value="'.$id.'">
                                <button type="submit" class="btn btn-warning" style="float:right; margin-right: 10px;"  data-toggle="modal"  data-target="#exampleModalCenter'.$row['ID'].'">
                                  <i class="menu-icon mdi mdi-calendar-clock"></i> Reschedule
                                </button>


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
                                            <h4 class="card-title">'.$row['stat'].'</h4>
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
                                        if($row['stat'] == 'Rescheduled'){
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
                                              <input type="text" class="form-control" id="exampleInputEmail2" disabled value="'; echo date('M d, Y',strtotime($date)); echo ' ">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label card-title">Date 1:</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="datepicker1'.$row['ID'].'" name="date1" placeholder="" required>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label card-title">Date 2:</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="datepicker2'.$row['ID'].'" name="date2" placeholder="">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label card-title">Date 3:</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="datepicker3'.$row['ID'].'" name="date3" placeholder="">
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
                              <!-- end modal -->
                              ';
                      }else{
                        echo '
                        <!-- start -->
                        <hr>
                        <div class="row">
                          <div class="col-md-2"><p><p class="card-title" style="font-size:20px;">Task List</p></div>
                            <div class="col-md-2 offset-md-8" style="margin">
                              <h5 style="margin-top: 20px;">';
                              if($row['stat'] == 'In-Progress'){
                                echo '<button type="button" class="btn btn-darkred" style="padding-button: 10px; float: right; width: 140px;" data-toggle="modal" data-target="#exampleModalCenter"><i class="menu-icon mdi mdi-clipboard-text"></i> Add Task</button>';
                              }
                              echo '</h5>
                            </div>
                          </div>
                          
                        
                          <div class="table-responsive">
                            <table class="table table-bordered table-dark" id="doctables">
                              <thead>
                                <tr class="grid">
                                  <th scope="col" style="font-size:15px;">
                                    <div class="row">
                                      <div class="col-2">
                                        Task
                                      </div>
                                      <div class="col-1">
                                        Status
                                      </div>
                                      <div class="col-2">
                                        Date Start
                                      </div>
                                      <div class="col-2">
                                        Date End
                                      </div>
                                      <div class="col-5">
                                        Action
                                      </div>
                                    </div>
                                  </th>
                                </tr>
                              </thead>
                              <tbody class="table-primary" style="color:black;">
                               
                                ';
                                $table = $connection->prepare("SELECT * FROM `task` WHERE appointmentID = $id");
                                if($table->execute()){
                                  $content = $table->get_result();
                                  while($rows = $content->fetch_assoc()){
                                      if(strlen($rows['scope'])>20){
                                        $scope = substr($rows['scope'],0,20).'...';
                                      }else{
                                        $scope = $rows['scope'];
                                      }
                                      
                                    echo '
                                        <tr>
                                            <div class="row">
                                              <div col-12>
                                              <td colspan="5">
                                                <div class="row">
                                                  <div class="col-md-2 col-sml-12 text-center"><p>'.$scope.'</p></div>
                                                  <div class="col-md-1 col-sml-12 text-center">'.$rows['status'].'</div>
                                                  <div class="col-md-2 col-sml-12 text-center">

                                            ';
                                            if(empty($rows['dateStart'])){
                                              echo '<form action="process/server.php" method="POST">
                                                      <input type="hidden" name="task_id" value="'.$rows['id'].'">
                                                      <input type="hidden" name="app_id" value="'.$id.'">
                                                      <button class="btn btn-success" type="submit" name="startTask"><i class="menu-icon mdi mdi-arrow-right-drop-circle-outline"></i> Start Task</button>
                                                    </form>
                                                    ';
                                            }else{
                                              echo date('F j, Y',strtotime($rows['dateStart']));
                                            }
                                            echo '</div><div class="col-md-2 col-sml-12  text-center">';
                                            if(empty($rows['dateStart'])){
                                              echo '<button class="btn btn-success" disabled><i class="menu-icon mdi mdi-arrow-right-drop-circle"></i> Finish Task</button>';
                                            }elseif(empty($rows['dateEnd'])){
                                              echo '
                                                    <form action="process/server.php" method="POST">
                                                      <input type="hidden" name="task_id" value="'.$rows['id'].'">
                                                      <input type="hidden" name="app_id" value="'.$id.'">
                                                      <button class="btn btn-success" type="submit" name="finishTask">Finish Task</button>
                                                    </form>
                                                    ';
                                            }else{
                                              echo date('F j, Y',strtotime($rows['dateEnd']));
                                            }
                                            echo '
                                                </div>
                                                <div class="col-md-5 col-sml-12">
                                                  <div class="row">
                                                    <div class="col-4 col-sm-4 offset-2"
                                                      <!-- Button trigger modal -->
                                                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter'.$rows['id'].'"><i class="menu-icon mdi mdi-table-edit"></i>
                                                        Delete
                                                      </button>
                                                    </div>
                                                    <div class="col-4 col-sm-4">
                                                      <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#multiCollapseExample1'.$rows['id'].'"><i class="menu-icon mdi mdi-table-edit"></i>
                                                        Details
                                                      </button>
                                                    </div>
                                                  </div>
                                                </div>
                                                </div>
                                              </div>
                                              <div class="col-12">
                                                <div class="collapse multi-collapse" id="multiCollapseExample1'.$rows['id'].'">
                                                  <hr>
                                                    <div class="card card-body">
                                                      <div class="row">
                                                      <div class="form-group">
                                                        <div class="row"><!-- row-start -->
                                                          <div class="col-md-4"><p>Service Type</p></div>
                                                          <div class="col-md-8"><h5 style="margin-top: -1%">:&nbsp '.$rows['service'].'</h5></div>
                                                        </div><!-- row-end -->
                                                        <div class="row">
                                                          <div class="col-md-4"><p>Scope </p></div>
                                                          <div class="col-md-8"><h5 style="margin-top: -1%">:&nbsp '.$rows['scope'].'</h5></div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="col-md-4"><p>Remarks </p></div>
                                                          <div class="col-md-8"><h5 style="margin-top: -1%">:&nbsp '.$rows['description'].'</h5></div>
                                                        </div>
        
                                                      </div>
                                                        <div class="col-10"><h4 class="card-title">Spare Parts</h4></div>
                                                        <div class="col-2">
                                                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#spare'.$rows['id'].'" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="menu-icon mdi mdi-table-edit"></i>
                                                            Add Spare Parts
                                                          </button>
                                                        </div>
                                                        <div class="col-12">
                                                          <div class="row">
                                                            <div class="col-12 row text-center">
                                                              <div class="col-1" style="border-style: groove">Qty</div>
                                                              <div class="col-2" style="border-style: groove">Part Name</div>
                                                              <div class="col-2" style="border-style: groove">Price</div>
                                                              <div class="col-2" style="border-style: groove">Brand</div>
                                                              <div class="col-3" style="border-style: groove">Remarks</div>
                                                              <div class="col-2" style="border-style: groove">Action</div>
                                                            </div>
                                                            <div class="col-12 row">
                                                            ';
                                                              $getSpareParts = $connection->prepare('select spareparts.name as "Name", taskspare.id as "taskID", taskspare.quantity as "qty", taskspare.remarks as
                                                               "Remarks", spareparts.brandName as "Brand", taskspare.total as "total", spareparts.price as "Price" from task inner join
                                                                taskspare on task.id = taskspare.taskID inner join spareparts on taskspare.partID = spareparts.id
                                                                 where task.id = '.$rows['id'].'');
                                                              if($getSpareParts->execute()){
                                                                  $values = $getSpareParts->get_result();
                                                                  while( $rowsGetParts = $values->fetch_assoc()){
                                                                   echo '
                                                                    <div class="col-1 text-center" style="border-style: groove;">'.$rowsGetParts['qty'].'</div>
                                                                    <div class="col-2" style="border-style: groove">'.$rowsGetParts['Name'].'</div>
                                                                    <div class="col-2" style="border-style: groove;"><p  style="float:right;">₱ &nbsp'.$rowsGetParts['total'].'</p></div>
                                                                    <div class="col-2" style="border-style: groove">'.$rowsGetParts['Brand'].'</div>
                                                                    <div class="col-3" style="border-style: groove">'.$rowsGetParts['Remarks'].'</div>
                                                                    <div class="col-2 text-center" style="border-style: groove"> 
                                                                      <label class="badge badge-success" style="margin: 2px 2px 2px 2px;"  data-toggle="modal" data-target="#edits'.$rowsGetParts['taskID'].'" aria-expanded="false" aria-controls="multiCollapseExample1">edit</label>
                                                                      <label class="badge badge-danger" style="margin: 2px 2px 2px 2px;"  data-toggle="modal" data-target="#deletes'.$rowsGetParts['taskID'].'" aria-expanded="false" aria-controls="multiCollapseExample1">delete</label>
                                                                    </div>

                                                                    <!-- delete sparepart Modal -->
                                                                    <div class="modal fade" id="deletes'.$rowsGetParts['taskID'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header"  style="background-color: #F44336; color: white; border: 3px solid #F44336;">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Delete Task</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                          </div>
                                                                          <div class="modal-body">
                                                                            Are You sure you want to delete('.$rowsGetParts['qty'].'x '.$rowsGetParts['Name'].')?
                                                                            
                                                                          </div>
                                                                          <div class="modal-footer">
                                                                          <form action="process/server.php" method="POST">
                                                                            <input type="hidden" name="app_ids" value="'.$id.'">
                                                                            <input type="hidden" name="taskspare" value="'.$rowsGetParts['taskID'].'">
                                                                            <button type="submit" name="delete-spare-part" class="btn btn-danger"><i class="menu-icon mdi mdi-trash-text"></i>Delete</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i>Close</button>
                                                                          </form>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                    <!-- end -->

                                                                    <!-- edit sparepart Modal -->
                                                                    <div class="modal fade" id="edits'.$rowsGetParts['taskID'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header"  style="background-color: #4caf50; color: white; border: 3px solid #4caf50;">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Task Spare</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                          </div>
                                                                          <div class="modal-body">
                                                                          <!-- start -->
                                                                            <form action="process/server.php" method="POST">
                                                                            <div class="form-group">
                                        
                                                                              <div class="form-group">
                                                                                <div class="row">     
                                                                                  <div class="col-9">
                                                                                  <label for="exampleFormControlSelect2">Select Service</label>
                                                                                    <input type="text" class="form-control" id="exampleFormControlSelect3"
                                                                                     value="'.$rowsGetParts['Name'].' ('.$rowsGetParts['Brand'].') -  '.$rowsGetParts['Price'].'" disabled>
                                                                                  </div>
                                                                                  <div class="col-3">
                                                                                    <div class="form-group">
                                                                                      <label for="exampleFormControlSelect3">Quantity</label>
                                                                                      <input type="number" class="form-control" id="exampleFormControlSelect3" name="quantity" value="'.$rowsGetParts['qty'].'" required>
                                                                                    </div>
                                                                                  </div>
                                                                                </div>
                                                                              </div>

                                                                              <div class="form-group">
                                                                                <label for="exampleFormControlSelect2">Remarks</label>
                                                                                <textarea class="form-control" name="remarks">'.$rowsGetParts['Remarks'].'</textarea>
                                                                              </div>
                                                                            </div>
                                                                            <!-- end -->
                                                                          </div>
                                                                          <div class="modal-footer">
                                                                          <form action="process/server.php" method="POST">
                                                                            <input type="hidden" name="app_ids" value="'.$id.'">
                                                                            <input type="hidden" name="price" value="'.$rowsGetParts['Price'].'">
                                                                            <input type="hidden" name="taskspare" value="'.$rowsGetParts['taskID'].'">
                                                                            <button type="submit" name="update-spare-part" class="btn btn-success"><i class="menu-icon mdi mdi-trash-text"></i>Update</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i>Close</button>
                                                                          </form>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                    <!-- end -->
                                                                   ';
                                                                }
                                                                  
                                                              }else{
                                                                echo ' <div class="col-12 text-center" style="border-style: groove;">No spareparts added..</div>';
                                                              }
                                                            echo'
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div> 
                                                    </div>
                                                </div>
                                              </div>
                                            </div>

                                          </td>
                                        </tr>

                                      <!-- delete Modal -->
                                      <div class="modal fade" id="exampleModalCenter'.$rows['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header"  style="background-color: #F44336; color: white; border: 3px solid #F44336;">
                                              <h5 class="modal-title" id="exampleModalLabel">Delete Task</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              Are You sure you want to delete task ('.$rows['scope'].')?
                                              <br><br>
                                              Warning!! Spare Parts under this task must be deleted in order to succesfull delete this entry.
                                              
                                            </div>
                                            <div class="modal-footer">
                                            <form action="process/server.php" method="POST">
                                              <input type="hidden" name="app_ids" value="'.$id.'">
                                              <input type="hidden" name="task_id" value="'.$rows['id'].'">
                                              <button type="submit" name="delete-task" class="btn btn-danger"><i class="menu-icon mdi mdi-trash-text"></i>Delete</button>
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i>Close</button>
                                            </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- end -->

                                      <!-- delete sparepart Modal -->
                                      <div class="modal fade" id="deletespare'.$rows['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header"  style="background-color: #F44336; color: white; border: 3px solid #F44336;">
                                              <h5 class="modal-title" id="exampleModalLabel">Delete Task</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              Are You sure you want to delete('.$rows['service'].')?
                                              
                                            </div>
                                            <div class="modal-footer">
                                            <form action="process/server.php" method="POST">
                                              <input type="hidden" name="app_ids" value="'.$id.'">
                                              <input type="hidden" name="task_id" value="'.$rows['id'].'">
                                              <button type="submit" name="delete-task" class="btn btn-danger"><i class="menu-icon mdi mdi-trash-text"></i>Delete</button>
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i>Close</button>
                                            </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- end -->

                                      <!-- spare part modal Modal -->
                                      <div class="modal fade" id="spare'.$rows['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header"  style="background-color: #F0AD4E; color: white; border: 3px solid #F0AD4E;">
                                              <h5 class="modal-title" id="exampleModalLabel">Spare Parts</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">

                                            <!-- start -->
                                            <form action="process/server.php" method="POST">
                                            <div class="form-group">
        
                                              <div class="form-group">
                                                <div class="row">     
                                                  <div class="col-9">
                                                  <label for="exampleFormControlSelect2">Select Service</label>
                                                  <select type="text" class="form-control  chzn-select" name="spare" tabindex="2" required> 
                                                    <option hidden selected value="" >Select Spareparts</option>
                                                    ';
                                                      $data = $connection->prepare("SELECT * FROM spareParts where status = 'Available';");
                                                      if($data->execute()){
                                                          $values = $data->get_result();
                                                          while( $row = $values->fetch_assoc()){
                                                            echo '<option value="'.$row['id'].'|'.$row['price'].'">'.$row['name'].' ('.$row['brandName'].') - P '.$row['price'].'</option>';
                                                        }
                                                          
                                                      }
                                                    echo'
                                                  </select>
                                                  </div>
                                                  <div class="col-3">
                                                    <div class="form-group">
                                                      <label for="exampleFormControlSelect3">Quantity</label>
                                                      <input type="number" class="form-control" id="exampleFormControlSelect3" name="quantity" required>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <label for="exampleFormControlSelect2">Remarks</label>
                                                <textarea class="form-control" name="remarks"></textarea>
                                              </div>
                                            </div>
                                            <!-- end -->
                                              
                                            </div>
                                            <div class="modal-footer">
                                              <input type="hidden" name="app_id" value="'.$id.'">
                                              <input type="hidden" name="taskId" value="'.$rows['id'].'">
                                              <button type="submit" name="taskSpare" class="btn btn-warning"><i class="menu-icon mdi mdi-trash-text"></i>Add</button>
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i>Close</button>
                                            </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- end -->
                                      
                                    ';
                                  }                                
                                }
                                echo'
                              </tbody>
                            </table>
                          </div>
                          <br>
                          
                          <!-- Button trigger modal -->

                          <!-- Add Modal -->
                          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color: #b80011; color: white; border: 3px solid #b80011;">
                                  <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action="process/server.php" method="POST">
                                    <div class="form-group">

                                      <div class="form-group">
                                        <label for="exampleFormControlSelect2">Select Service</label>
                                        <select name="service" type="text" class="form-control  chzn-select" name="owner" tabindex="2" required> 
                                          <option hidden selected value="" >Select Scope of Service</option>
                                          ';
                                            $data = $connection->prepare("SELECT * FROM scope;");
                                            if($data->execute()){
                                                $values = $data->get_result();
                                                while( $row = $values->fetch_assoc()){
                                                  echo '<option value="'.$row['subScope'].'|'.$row['scopeWork'].'">'.$row['scopeWork'].' ('.$row['subScope'].')</option>';
                                              }
                                                
                                            }
                                          echo'
                                        </select>
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleFormControlSelect2">Remarks</label>
                                        <textarea class="form-control" name="remarks"></textarea>
                                      </div>

                                    </div>
                            

                                </div>
                                <div class="modal-footer">
                                  <input type="hidden" name="app_id" value="'.$id.'">
                                  <button type="submit"  name="add-task" class="btn btn-darkred"><i class="menu-icon mdi mdi-clipboard-text"></i>Add</button>
                                  </form>
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i>Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- end -->

                        ';
                      }
                    ?>
                    
                    <?php   
                    if($progress_status =="In-Progress"){
                      if($progress==100){
                        echo '
                        <form action="process/server.php" method="POST">
                          <input type="hidden" name="app" value="'.$id.'">
                          <button type="submit" name="finishrecord" class="btn btn-success" style="padding-button: 10px; float: right;
                            width: 140px;" ><i class="menu-icon mdi mdi-clipboard-text">
                            </i>Finish</button>
                        </form>
                        ';
                      }else{
                        echo '
                        <form action="process/server.php" method="POST">
                          <input type="hidden" name="app" value="'.$id.'">
                          <button type="submit" disabled name="finishrecord" class="btn btn-success" style="padding-button: 10px; float: right;
                            width: 140px;" ><i class="menu-icon mdi mdi-clipboard-text">
                            </i>Finish</button>
                        </form>
                        ';
                      }
                    }

                    if($progress_status =="Accepted"){

                    }

                    if($progress_status =="Done"){
                      echo'<form action="process/server.php" method="POST">
                      <input type="hidden" name="app" value="'.$id.'">
                      <button type="submit" disabled name="finishrecord" class="btn btn-primary" style="padding-button: 10px; float: right;
                        width: 140px;" data-toggle="modal" data-target="#exampleModalCenter"><i class="menu-icon mdi mdi-clipboard-text">
                        </i>Done</button>
                    </form>';
                    }

                    ?>
                    
                 
                  </div>
                  <!-- END -->

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
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <script src="js/sb-admin-datatables.min.js"></script>

  <script>
    var check = function() {
    if (document.getElementById('password').value ==
      document.getElementById('confirm_password').value) {
      document.getElementById('message').style.color = 'green';
      document.getElementById('message').innerHTML = 'matching';
      $('#Submit').prop('disabled',false);
    } else {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'not matching';
      $('#Submit').prop('disabled',true);
      }
    }
  </script>
  
</body>

</html>

<script>
  var table = $('#doctables').DataTable({
    // PAGELENGTH OPTIONS
    "lengthMenu": [[ 10, 25, 50, 100, -1], [ 10, 25, 50, 100, "All"]]

});
</script>