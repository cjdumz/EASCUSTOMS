<?php require 'process/require/auth.php';?>
<?php require "process/require/dataconf.php";
$sql = "SELECT chargeinvoice.id as cId, plateNumber,vehicles.make as make,series,owner,chargeinvoice.date as cDate FROM chargeinvoice join appointments on chargeinvoice.appointmentId = appointments.id join vehicles on appointments.vehicleId = vehicles.id order by chargeinvoice.date desc";
$stmt = $connection->prepare($sql); 
$stmt->execute(); 
$ci = $stmt -> get_result();
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
      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-6">
                            <p class="card-title" style="font-size:20px;">Sales Invoice</p>
                            <br>
                        </div>
                        <div class="col-2">
                           <button  class="btn btn-darkred" style="padding-button: 10px; float: right; width: 145px;" data-toggle="modal" data-target="#Yearly"><i class="menu-icon mdi mdi-receipt"></i>
                                Annual SI
                            </button> 
                        </div>
                        <div class="col-2">
                           <button href="year.php" class="btn btn-darkred" style="padding-button: 10px; float: right; width: 145px;" data-toggle="modal" data-target="#Monthly"><i class="menu-icon mdi mdi-receipt"></i>
                                Monthly SI
                            </button> 
                        </div>
                        <div class="col-2">
                           <a href="dailySI.php" class="btn btn-darkred" style="padding-button: 10px; float: right; width: 145px;"><i class="menu-icon mdi mdi-receipt"></i>
                                Daily SI
                            </a> 
                        </div>
                    </div>
                    
                    
                <a href ="addSalesInvoice.php"></a>

                <!-- yearly Modal -->
                <div class="modal fade" id="Yearly" tabindex="-1" role="dialog" aria-labelledby="addCi" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header" style="background-color: #b80011; color: white; border: 3px solid #b80011;">
                        <h5 class="modal-title" id="exampleModalLabel">Annual Sales Invoice</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                        <div class="modal-body">
                        <form action="year.php" method="POST">
                          <label for="exampleFormControlSelect2">Select Year</label>
                          <select type="text" class="form-control  chzn-select" name="date" id="exampleFormControlSelect2" tabindex="2" required> 
                            <option hidden selected value="" >Select a Year</option>
                            <?php
                            for ($i = 2019; $i <= date('Y'); $i++){
                                echo '<option value="'.$i.'">'.$i.'</option>';
                              }
                            ?>
                          </select>
                        </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-danger"><i class="menu-icon mdi mdi-arrow-right-drop-circle-outline"></i>Generate</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i> Close</button>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- monthly Modal -->
                <div class="modal fade" id="Monthly" tabindex="-1" role="dialog" aria-labelledby="addCi" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header" style="background-color: #b80011; color: white; border: 3px solid #b80011;">
                        <h5 class="modal-title" id="exampleModalLabel">Monthly Sales Invoice</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                        <div class="modal-body">
                        <form action="month.php" method="POST">
                          <label for="exampleFormControlSelect2">Select a Month</label>
                          <select type="text" class="form-control  chzn-select" name="date" id="exampleFormControlSelect2" tabindex="2" required> 
                            <option hidden selected value="" >Select Month</option>
                            <option  value="1" >January</option>
                            <option  value="2" >February</option>
                            <option  value="3" >March</option>
                            <option  value="4" >April</option>
                            <option  value="5" >May</option>
                            <option  value="6" >June</option>
                            <option  value="7" >July</option>
                            <option  value="8" >August</option>
                            <option  value="9" >September</option>
                            <option  value="10" >October</option>
                            <option  value="11" >November</option>
                            <option  value="12" >December</option>
                          </select>
                            <label for="exampleFormControlSelect2">Select Year</label>
                            <select type="text" class="form-control  chzn-select" name="date2" id="exampleFormControlSelect2" tabindex="2" required> 
                            <option selected value="" >Select a Year</option>
                            <?php
                            for ($i = 2019; $i <= date('Y'); $i++){
                                echo '<option value="'.$i.'">'.$i.'</option>';
                              }
                            ?>
                          </select>
                        </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-danger"><i class="menu-icon mdi mdi-arrow-right-drop-circle-outline"></i>Generate</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i> Close</button>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
                    
                <div class="table-responsive">
                  <table class="table table-bordered table-dark" id="doctables">
                      <thead>
                        <tr class="grid">
                            
                            <th>Plate</th>
                            <th>Make</th>
                            <th>Series</th>
                            <th>Client Name</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-primary" style="color:black;">
                          <?php foreach($ci as $chargeInvoice): ?>
                              <tr>
                                <td><?= $chargeInvoice['plateNumber']; ?></td>
                                <td><?= $chargeInvoice['make']; ?></td>
                                <td><?= $chargeInvoice['series']; ?></td>
                                <td><?= $chargeInvoice['owner']; ?></td>
                                <td><?= date('F j, Y',strtotime($chargeInvoice['cDate'])); ?></td>
                                  <td>
                                      <a href="print.php?id=<?= $chargeInvoice['cId'];?>"><input type='submit'value='Full Details' name='submit' class="btn btn-primary"></a>
                                  </td>
                              </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                      <br>
                  </div>


                <!-- Done -->
                <?php 
                  $sql2 = "SELECT appointments.id as 'ID',concat(firstName,' ',middleName,' ',lastName) as 
                  'owner',make,series,appointments.created as 'created', appointments.serviceId as 'service', appointments.otherService as 
                  'others', yearModel,plateNumber,appointments.status,date, appointments.additionalMessage as 'message', adminDate,rescheduledate, appointments.modified as 'modified'
                   from appointments join personalinfo on appointments.personalId
                  = personalinfo.personalId join vehicles on appointments.vehicleId = vehicles.id where (appointments.status = 'Done')";
                  $stmt2 = $connection->prepare($sql2); 
                  $stmt2->execute(); 
                  $ci2 = $stmt2 -> get_result();
                ?>
                <div class="row">
                    <div class="col-11">
                        <p class="card-title" style="font-size:20px;">Done Appoinment</p>
                        <br>
                    </div>
                </div>

                <div class="table-responsive">
                  <table class="table table-bordered table-dark" id="doctables2">
                      <thead>
                        <tr class="grid">
                            
                            <th>Name</th>
                            <th>Plate Number</th>
                            <th>Date Finished</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-primary" style="color:black;">
                          <?php foreach($ci2 as $chargeInvoice2): ?>
                              <tr>
                                <td><?= $chargeInvoice2['owner']; ?></td>
                                <td><?= $chargeInvoice2['plateNumber']; ?></td>
                                <td><?= date('F j, Y',strtotime($chargeInvoice2['modified'])); ?></td>
                                <td><a href="generate.php?id=<?= $chargeInvoice2['ID'];?>"><input type='submit'value='Generate' name='submit' class="btn btn-primary"></a></td>
                                  
                              </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                      <br>
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
       
</body>
    
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

</html>
