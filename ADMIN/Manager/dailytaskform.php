<?php require 'process/require/auth.php';?>
<?php require "process/require/dataconf.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
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
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include "includes/navbar.php";?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
        
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav" style="position:fixed; width:256px;">
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
                  <a class="nav-link" href="appointments.php" style="font-size:14px;">Request</a>
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

          <li class="nav-item">
            <a class="nav-link" href="dailytaskform.php">
              <i class="menu-icon mdi mdi-account-multiple"></i>
              <span class="menu-title" style="font-size:14px;">Daily Task Form</span>
            </a>
          </li>
            
<!--
          <li class="nav-item">
            <a class="nav-link" href="accountmanagement.php">
              <i class="menu-icon mdi mdi-account-multiple"></i>
              <span class="menu-title" style="font-size:14px;">Account Management</span>
            </a>
          </li>
-->
            
          <li class="nav-item">
            <a class="nav-link" href="vehicle.php">
              <i class="menu-icon mdi mdi-car-side"></i>
              <span class="menu-title" style="font-size:14px;">Vehicle</span>
            </a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link" href="servicesmanagement.php">
              <i class="menu-icon mdi mdi-wrench"></i>
              <span class="menu-title" style="font-size:14px;">Services</span>
            </a>
          </li>
            
            
            
            
        </ul>
      </nav>
      
            <div class="main-panel">
               <div class="content-wrapper">
                   <div class="row">
                       
                       
                       <div class="col-lg-12 stretch-card">
                          <div class="card">
                              <div class="card-body">
                                <p class="card-title" style="font-size:20px;">Daily Task Form</p>
                                <p class="card-description">List of Daily Tasks for 
                                <?php 

                                  echo $date = date('F j, Y');
                                ?></p>
                               
                                <div class="table-responsive">
                                   <table class="table table-bordered table-dark" id="doctables">
                                      <thead>
                                          <tr class="grid">
                                              <th>Owner</th>
                                              <th>Plate Number</th>
                                              <th>Status</th>
                                              <th>Progress</th>
                                              <th>Task</th>
                                          </tr>
                                       </thead> 
                                       <tbody class="table-primary" style="color:black;">
                                        <?php
                                           $data = $connection->prepare("select appointments.id as 'IDs',plateNumber, concat(lastName, ', ', firstName, ' ', middleName) 
                                           as 'Name', date, appointments.status
                                           from vehicles inner join appointments on vehicles.id = appointments.vehicleId
                                           inner join personalinfo on appointments.personalId = personalinfo.personalId
                                           where appointments.status = 'In-progress'");
                                           if($data->execute()){
                                            $values = $data->get_result();
                                            while($row = $values->fetch_assoc()) {
                                              $id = $row['IDs'];
                                              echo '
                                              <tr>
                                                  <td>'.$row['plateNumber'].'</td>
                                                  <td>'.$row['Name'].'</td>
                                                  <td class="text-center">'.$row['status'].'</td>
                                                  <td> ';

                                                  $progress = 0;
                                                  if($row['status'] != 'Accepted'){
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
                                                 
                                                  echo'
                                                    <div class="progress">
                                                      <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                                       style="width: '.$progress.'%" aria-valuenow="25" aria-valuemin="0"
                                                      aria-valuemax="100"></div>
                                                    </div>
                                                    <p class="text-center" style="margin-top: 10x;">'.$progress.'% complete</p>
                                                    ';

                                                  echo'
                                                  </td>
                                                  <td class="text-center">
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#view'.$row['IDs'].'"><i class="menu-icon mdi mdi-eye-outline"></i>
                                                    List of Task</button>
                                                  </td>
                                              </tr>

                                              <div class="modal fade" id="view'.$row['IDs'].'" tabindex="-1" role="dialog" aria-labelledby="appointmentModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header" style="background-color: #000099; color: white; border: 3px solid #000099;">
                                                      <h5 class="modal-title" id="appointmentModalCenterTitle">Tasks</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">';

                                                      $data2 = $connection->prepare("SELECT * FROM task WHERE appointmentID =  $id");
                                                      if($data2->execute()){
                                                        $values2 = $data2->get_result();
                                                        echo '<p class="text-center"><font color="#000099">In-progress</font>&nbsp|&nbsp<font color="#4CAF50">Done</font></p>';
                                                        while($row2 = $values2->fetch_assoc()) {
                                                          if($row2['status']=='In-progress'){
                                                            echo '
                                                              <div style="border: 4px solid #000099; border-radius: 5px; color: white; 
                                                                text-align: center; background-color:#000099;margin-bottom: 5px; margin-top: 5px;">
                                                                '.$row2['service'].'
                                                              </div>';
                                                          }else{
                                                            echo '
                                                            <div style="border: 4px solid #308ee0; border-radius: 5px; color: white; 
                                                              text-align: center; background-color:#308ee0;margin-bottom: 5px; margin-top: 5px;">
                                                              '.$row2['service'].'
                                                           </div>';
                                                          }
                                                         
                                                        }
                                                      }
                                                        
                                                    echo'
                                                    </div>
                                                    <div class="modal-footer">
                                                      <a href="records.php?id='.$id.'" style="text-decoration:none; color: white;"><button class="btn btn-darkblue" data-toggle="modal" data-target="#view'.$row['IDs'].'"><i class="menu-icon mdi mdi-eye-outline"></i>
                                                      View Record</button></a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              ';
                                            }
                                          }
                                       
                                       
                                        ?>
                                       </tbody>

                                    </table>
                                </div>
                                 
                              </div>
                           </div>
                       </div>   
                   </div>
                    <div class="row">
                       
                       
                       
                   </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include "includes/footer.php";?>
                <!-- partial -->
           </div>
      </div>
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
  var table = $('#doctables').DataTable({
    // PAGELENGTH OPTIONS
    "lengthMenu": [[ 10, 25, 50, 100, -1], [ 10, 25, 50, 100, "All"]]
    });
    </script>
</body>

</html>