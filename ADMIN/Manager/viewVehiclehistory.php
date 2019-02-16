<?php require 'process/require/auth.php';
      require "process/require/dataconf.php";
      if(isset($_GET['plate'])){
        $plate = $connection->real_escape_string($_GET["plate"]);
        $data = $connection->prepare("SELECT *, concat(personalinfo.firstName, ' ', personalinfo.middleName, ' ', personalinfo.lastName) as 
        'Name', personalinfo.personalId as 'ID' FROM vehicles join personalinfo where plateNumber = '$plate' AND vehicles.personalId = personalinfo.personalId");
        if($data->execute()){
            $values = $data->get_result();
            $row = $values->fetch_assoc();
            $vehicleID = $row['id'];
        }else{
            header("Location: error.php");
        }
    }else{
        header("Location: error.php");
    }
?>


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
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-lg-12 grid-margin  stretch-card">
              <div class="card">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="vehicle.php" style="font-size:18px;">Vehicles</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="font-size:18px;"><?php echo $plate ?></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <div class="row">
            
            <!-- start -->

           
            <!-- end -->

            <!-- start -->
        
            <!-- end -->

            <!-- start -->
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Current Appointment</h4>
                  
                  <!-- start -->
                  <div class="table-responsive">
                    <table class="table table-borderless table-dark" id="doctables2">
                      <thead>
                        <tr class="text-center">
                          <th>Owner</th>
                          <th>Date Started</th>
                          <th>Date End</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-primary" style="color:black;">
                        <?php
                          $getHistory = $connection->prepare("SELECT *, concat(firstName,' ',middleName,' ',lastName) as 'Name', appointments.date as 'Time',
                          appointments.targetEndDate FROM
                          `appointments` inner join personalinfo on
                          appointments.personalId = personalinfo.personalId
                          where vehicleID = $vehicleID  AND (status = 'Accepted' OR status = 'Done' OR status = 'In-progress' ) limit 10");
                          if($getHistory->execute()){
                              $dates = $getHistory->get_result();
                              while($rows = $dates->fetch_assoc()) {
                                
                                echo '
                                    <tr>
                                        <td>'.$rows['Name'].'</td>
                                        <td>'.date('F j, Y',strtotime ($rows['Time'])).'</td>
                                        <td> '.date('F j, Y',strtotime ($rows['targetEndDate'])).'</td>
                                        <td>'.$rows['status'].'</td>
                                        <th><a href="records.php?id='.$rows['id'].'"><button class="btn btn-primary"><i class="menu-icon mdi mdi-eye-outline"></i> View</button></a></th>
                                    </tr>
   

                                  ';

                              }
                            }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- end -->

                </div>
              </div>
            </div>
            <!-- end -->
              
             <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Completed Appointment</h4>
                  
                  <!-- start -->
                  <div class="table-responsive">
                    <table class="table table-borderless table-dark" id="doctables3">
                      <thead>
                        <tr class="text-center">
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-primary" style="color:black;">
                        <?php
                          $getHistory = $connection->prepare("SELECT chargeinvoice.id as cId, plateNumber,make,series,owner,chargeinvoice.date as cDate FROM chargeinvoice join appointments on chargeinvoice.appointmentId = appointments.id join vehicles on appointments.vehicleId = vehicles.id WHERE vehicles.plateNumber = '".$_GET['plate']."' order by chargeinvoice.date desc");
                          if($getHistory->execute()){
                              $dates = $getHistory->get_result();
                              while($rows = $dates->fetch_assoc()) {
                                
                                echo '
                                    <tr>
                                        <td> '.date('F j, Y',strtotime ($rows['cDate'])).'</td>
                                        <th><a href="print.php?id='.$rows['cId'].'"><button class="btn btn-primary"><i class="menu-icon mdi mdi-eye-outline"></i> View</button></a></th>
                                    </tr>
   

                                  ';

                              }
                            }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- end -->

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

  <!-- modal start -->
  <div class="modal fade" id="updateprofilemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header" style="background-color: #4caf50; color: white; border: 3px solid #4caf50;">
        <h5 class="modal-title" id="exampleModalLabel">Update Vehicle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- start -->
      <p class="card-title" style="font-size:20px;">Vehicle Information</p>
      <form action="process/server.php" method="POST">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Body Type</label>
              <input type="text" class="form-control" name="bodyType" value="<?php echo $roww['bodyType'] ?>" placeholder="<?php echo $roww['bodyType'] ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Year Model</label>
              <input type="text" class="form-control" name="yearModel" value="<?php echo $roww['yearModel'] ?>" placeholder="<?php echo $roww['yearModel'] ?>" readonly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Chasis Number</label>
              <input type="text" class="form-control" name="chasisNumber" value="<?php echo $roww['chasisNumber'] ?>" placeholder="<?php echo $roww['chasisNumber'] ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Number of Cylinders</label>
              <input type="text" class="form-control" name="numberOfCylinders" value="<?php echo $roww['numberOfCylinders'] ?>" placeholder="<?php echo $roww['numberOfCylinders'] ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Make</label>
              <input type="text" class="form-control" name="make" value="<?php echo $roww['make'] ?>" placeholder="<?php echo $roww['make'] ?>" readonly>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Series</label>
              <input type="text" class="form-control" name="series" value="<?php echo $roww['series'] ?>" placeholder="<?php echo $roww['series'] ?>" readonly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Color</label>
              <input type="text" class="form-control" name="color" value="<?php echo $roww['color'] ?>" placeholder="<?php echo $roww['color'] ?>" readonly>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Type of drive terrain</label>
              <input type="text" class="form-control" name="typeOfDriveTrain" value="<?php echo $roww['typeOfDriveTrain'] ?>" placeholder="<?php echo $roww['typeOfDriveTrain'] ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Type of Engine</label>
              <input type="text" class="form-control" name="typeOfEngine" value="<?php echo $roww['typeOfEngine'] ?>" placeholder="<?php echo $roww['typeOfEngine'] ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Engine Classification</label>
              <input type="text" class="form-control" name="engineClassification" value="<?php echo $roww['engineClassification'] ?>" placeholder="<?php echo $roww['engineClassification'] ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Engine Displacement</label>
              <input type="text" class="form-control" name="engineDisplacement" value="<?php echo $roww['engineDisplacement'] ?>" placeholder="<?php echo $roww['engineDisplacement'] ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Engine Number</label>
              <input type="text" class="form-control" name="engineNumber" value="<?php echo $roww['engineNumber'] ?>" placeholder="<?php echo $roww['engineNumber'] ?>">
            </div>
          </div>
        </div>
        <input type="hidden" name="plate" value="<?php echo $plate; ?>">
        <!-- end -->
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="submit-vehicle" style="float:right"><i class="menu-icon mdi mdi-account-convert"></i> Update Profile</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i> Close</button>
          <div class="clearfix"></div>
        </form>
        </div>
      </div>
    </div>
  </div>
  <!-- modal end -->

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

<script>
  var table = $('#doctables2').DataTable({
    // PAGELENGTH OPTIONS
    "lengthMenu": [[ 5, 10, 25, 50, 100, -1], [ 5, 10, 25, 50, 100, "All"]]

});
</script>

<script>
  var table = $('#doctables3').DataTable({
    // PAGELENGTH OPTIONS
    "lengthMenu": [[ 5, 10, 25, 50, 100, -1], [ 5, 10, 25, 50, 100, "All"]]

});
</script>


