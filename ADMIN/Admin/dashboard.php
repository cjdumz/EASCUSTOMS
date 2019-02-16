<?php require 'process/require/auth.php';?>
<?php require "process/require/dataconf.php";?>


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <link rel="icon" href="images/Logo.png">
  <!-- plugins:css -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
    
    
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/calendar.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link href="css/dataTables.bootstrap4.css" rel="stylesheet">

    <style>
     html{
   scroll-behavior:smooth; 
     }
    </style>
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
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                          <i class="menu-icon mdi mdi-inbox"></i>
                          <span class="menu-title" style="font-size:14px;">Data Entry</span>
                          <i class="menu-arrow"></i>
                        </a>

                        <div class="collapse" id="ui-basic">
                          <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                              <a class="nav-link" href="makeseriesmanagement.php" style="font-size:14px;">Make Series</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="sparepartsmanagement.php" style="font-size:14px;">Spare Parts</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="servicesmanagement.php" style="font-size:14px;">Services</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="scopeofworkmanagement.php" style="font-size:14px;">Scope of Work</a>
                            </li>
                          </ul>
                        </div>
                    </li>
                   
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
                          <i class="menu-icon mdi mdi-folder-multiple-image"></i>
                          <span class="menu-title" style="font-size:14px;">Content Management</span>
                           <i class="menu-arrow"></i> 
                        </a>
                        <div class="collapse" id="ui-basic2">
                          <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                              <a class="nav-link" href="CM.php" style="font-size:14px;">Services</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="CM2.php" style="font-size:14px;">Latest Cars</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="CM3.php" style="font-size:14px;">Our Team</a>
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
            
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="dailytaskform.php">
                      <i class="menu-icon mdi mdi-file"></i>
                      <span class="menu-title" style="font-size:14px;">Daily Task Form</span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link"  href="chargeinvoice.php">
                      <i class="menu-icon mdi mdi-receipt"></i>
                      <span class="menu-title" style="font-size:14px;">Charge Invoice</span>
                    </a>
                  </li> -->

               </ul>

            </nav>
        
    <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         

        <!--  Start Calendar  -->
         <div class="row">
         
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-wrench text-success icon-lg"></i>
                    </div>
                       <a href="#In-Progress" class="smoothScroll" style="color:black;"> 
                    <div class="float-right">
                      <p class="mb-0 text-right">Appointment<br>In-Progress</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $box4['count']?></h3>
                      </div>
                    </div>
                   </a>
                  </div>
                </div>
              </div>       
            </div>
            
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-calendar-clock text-danger icon-lg"></i>
                    </div>
                    <a href="#UpcomingAppointment" class="smoothScroll" style="color:black;">
                    <div class="float-right">
                      <p class="mb-0 text-right">Upcoming<br> Appointment</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $box1['count']?></h3>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
             
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-check-circle text-info icon-lg"></i>
                    </div>
                      <a href="#UpcomingAppointment" class="smoothScroll" style="color:black;">
                    <div class="float-right">
                      <p class="mb-0 text-right">Vehicles<br>Repaired</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $box3['count']?></h3>
                      </div>
                    </div>
                      </a>
                  </div>
                </div>
              </div>
            </div>
             
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                     <i class="mdi mdi-car-side text-warning icon-lg"></i>
                    </div>
                    <a href="appointments.php" style="color:black;">
                    <div class="float-right">
                      <p class="mb-0 text-right">Pending<br>Request</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $box2['count']?></h3>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
           
        
            
            <section id ="In-Progress">
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <br><br><h1 class="card-title">Appointment in progress</h1>
                  <div class="table-responsive">
                    <table class="table table-bordered" id="doctables" style="background-color: #212529; color:white; border-color:#212529; text-align: center;">
                      <thead>
                        <tr>
                          <th>
                            Full Name
                          </th>
                          <th>
                            Progress
                          </th>
                          <th>
                            Plate Number
                          </th>
                          <th>
                            Start Date
                          </th>
                          <th>
                            Target End Date
                          </th>
                          <th>
                            Days Remaining
                          </th>
                        </tr>
                      </thead>
                      <tbody style="background-color:white; color:#212529;text-align: center;">
                         <?php $query = $connection->prepare("SELECT CONCAT(personalinfo.firstName,' ', personalinfo.middleName, ' ', personalinfo.lastName) AS FullName, appointments.date, appointments.targetEndDate, appointments.id as 'ID', vehicles.plateNumber, appointments.status as 'status' FROM personalinfo JOIN appointments ON appointments.personalId = personalinfo.personalId JOIN vehicles ON appointments.vehicleId = vehicles.id WHERE appointments.status = 'In-progress' ORDER BY appointments.date ASC"); 
                            if ($query->execute()){
                                $result=$query->get_result();
                                while($appinprogress = $result->fetch_assoc()){
                               ?> 
                        <tr>
                          <td>
                           <?php echo $appinprogress['FullName']?>
                          </td>
                          <td>
                            <div class="progress">
                              <?php
                                $id = $appinprogress['ID'];
                                $progress = 0;
                                if($appinprogress['status'] != 'Accepted'){
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
                                
                                }   
                              ?>
                              <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: <?php echo $progress;?>%" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                           <?php echo $appinprogress['plateNumber']?>
                          </td>
                          <td class="text-success"> <?php echo  date('F j, Y',strtotime($appinprogress['date']))?>
                          </td>
                          <td class="text-danger">
                            <?php echo  date('F j, Y',strtotime($appinprogress['targetEndDate']))?>
                          </td>
                           <td class="text-danger">  
                            <?php
                            date_default_timezone_set('Asia/Manila');
                                    
                            $now = time();
                            $cnt = 1;
                            $your_date = strtotime($appinprogress['targetEndDate']);
                            $datediff = $your_date - $now;
                            $days_remaining = floor($datediff/(60*60*24));
                            $daysremaining = $days_remaining + $cnt;
                            echo $daysremaining;
                            ?>
                        </td>
                        </tr>
                           <?php }
                            }
                          ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
       
        <section id ="UpcomingAppointment">
           <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <br><br><h1 class="card-title">Upcoming Appointment</h1>
                  <div class="table-responsive">
                    <table class="table table-bordered" id="doctables2" style="background-color: #212529; color:white; border-color:#212529; text-align: center;">
                      <thead>
                        <tr>
                          <th>
                            Full Name
                          </th>
                          <th>
                            Plate Number
                          </th>
                          <th>
                            Start Date
                          </th>
                          <th>
                            Days Remaining
                          </th>
                        </tr>
                      </thead>
                      <tbody style="background-color:white; color:#212529; text-align: center;">
                         <?php $query = $connection->prepare("SELECT CONCAT(personalinfo.firstName,' ', personalinfo.middleName, ' ', personalinfo.lastName) AS FullName, appointments.date, appointments.targetEndDate, appointments.id, vehicles.plateNumber FROM personalinfo JOIN appointments ON appointments.personalId = personalinfo.personalId JOIN vehicles ON appointments.vehicleId = vehicles.id WHERE appointments.status = 'Accepted' ORDER BY appointments.date ASC"); 
                            if ($query->execute()){
                                $result=$query->get_result();
                                while($appinprogress = $result->fetch_assoc()){
                               ?> 
                        <tr>
                          <td>
                           <?php echo $appinprogress['FullName']?>
                          </td>
                          <td>
                           <?php echo $appinprogress['plateNumber']?>
                          </td>
                          <td class="text-success"> <?php echo  date('F j, Y',strtotime($appinprogress['date']))?>
                          </td>
                          <td class="text-danger">  
                            <?php
                            date_default_timezone_set('Asia/Manila');    
                            $now = time();
                            $cnt = 1;
                            $your_date = strtotime($appinprogress['date']);
                            $datediff = $your_date - $now; 
                            $days_remaining = floor($datediff/(60*60*24));
                            $daysremaining = $days_remaining + $cnt;
                            echo $daysremaining;
                            ?>
                        </td>
                        </tr>
                           <?php }
                            }
                          ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
         <section id ="VehiclesRepaired">
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <br><br><h1 class="card-title">Vehicles Repaired</h1>
                  <div class="table-responsive">
                    <table class="table table-bordered" id="doctables3" style="background-color: #212529; color:white; border-color:#212529; text-align: center;">
                      <thead>
                        <tr>
                          <th>
                            Full Name
                          </th>
                          <th>
                            Plate Number
                          </th>
                          <th>
                            Start Date
                          </th>
                          <th>
                            End Date
                          </th>
                        </tr>
                      </thead>
                      <tbody style="background-color:white; color:#212529; text-align: center;">
                         <?php $query = $connection->prepare("SELECT CONCAT(personalinfo.firstName,' ', personalinfo.middleName, ' ', personalinfo.lastName) AS FullName, appointments.date, appointments.targetEndDate, appointments.id, vehicles.plateNumber FROM personalinfo JOIN appointments ON appointments.personalId = personalinfo.personalId JOIN vehicles ON appointments.vehicleId = vehicles.id WHERE appointments.status = 'Done' ORDER BY appointments.date DESC"); 
                            if ($query->execute()){
                                $result=$query->get_result();
                                while($appinprogress = $result->fetch_assoc()){
                               ?> 
                        <tr>
                          <td>
                           <?php echo $appinprogress['FullName']?>
                          </td>
                          <td>
                           <?php echo $appinprogress['plateNumber']?>
                          </td>
                          <td class="text-success"> <?php echo  date('F j, Y',strtotime($appinprogress['date']))?>
                          </td>
                          <td class="text-danger">
                            <?php echo  date('F j, Y',strtotime($appinprogress['targetEndDate']))?>
                          </td>
                        </tr>
                           <?php }
                            }
                          ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
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
  <script src="js/script.js"></script> 
    
    <script>
  var table = $('#doctables').DataTable({
    // PAGELENGTH OPTIONS
    "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]]

});
</script>
    
     <script>
  var table = $('#doctables2').DataTable({
    // PAGELENGTH OPTIONS
    "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]]

});
</script>
 
    <script>
  var table = $('#doctables3').DataTable({
    // PAGELENGTH OPTIONS
    "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]]

});
</script>
 

    
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script type="text/javascript" src="js/calendar.js"></script>
<script type="text/javascript" src="js/events.js"></script>    
</body>


</html>
        
     