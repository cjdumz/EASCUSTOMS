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
      
            <div class="main-panel">
               <div class="content-wrapper">
                   <div class="row">
                       
                       
                       <div class="col-lg-12 stretch-card">
                          <div class="card">
                              <div class="card-body">
                                
                                          <form action="process/addvehicle_process.php" method="POST">
                                          <p class="card-title" style="font-size:20px;">Vehicle Information</p>
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="bmd-label-floating">Plate Number</label>
                                                  <input type="text" class="form-control" name="plateNumber" required="" oninvalid="this.setCustomValidity('Plate Number Invalid or Empty.')" oninput="setCustomValidity('')" pattern="[A-Za-z]{3,} [0-9]{3,}" >
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="bmd-label-floating">Body Type</label>
                                                  <input type="text" class="form-control" name="bodyType">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="bmd-label-floating">Year Model</label>
                                                  <input type="text" class="form-control" name="yearModel" required="" oninvalid="this.setCustomValidity('Year Model is Invalid.')" oninput="setCustomValidity('')" pattern="[0-9]{1,20}">
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="bmd-label-floating">Chassis Number</label>
                                                  <input type="text" class="form-control" name="chasisNumber">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <label class="bmd-label-floating">Engine Classification</label>
                                                  <input type="text" class="form-control" name="engineClassification">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <label class="bmd-label-floating">Number of Cylinders</label>
                                                  <input type="text" class="form-control" name="numberOfCylinders">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="bmd-label-floating">Type of Drive Train</label>
                                                  <input type="text" class="form-control" name="typeOfDriveTrain">
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="bmd-label-floating">Make</label>
                                                  <input type="text" class="form-control" name="make" required>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="bmd-label-floating">Series</label>
                                                  <input type="text" class="form-control" name="series" required>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="bmd-label-floating">Color</label>
                                                  <input type="text" class="form-control" name="color" required="" oninvalid="this.setCustomValidity('Color Model is Invalid.')" oninput="setCustomValidity('')" pattern="[A-Za-z]{1,20}" >
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="bmd-label-floating">Engine Number</label>
                                                  <input type="text" class="form-control" name="engineNumber">
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="bmd-label-floating">Type of Engine</label>
                                                  <input type="text" class="form-control" name="typeOfEngine">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="bmd-label-floating">Engine Displacement</label>
                                                  <input type="text" class="form-control" name="engineDisplacement">
                                                </div>
                                              </div>
                                            </div>
                                            <br><br>
                                            <button type="submit" class="btn btn-primary" name="submit-vehicle" style="float:right"><i class="menu-icon mdi mdi-checkbox-multiple-marked-circle-outline"></i> Submit</button>
                                             
                                            <!-- <button onclick="location.href='adduser.php'" name="previous" type="submit" class="btn btn-primary" style="float:left"><i class="menu-icon mdi mdi-chevron-left"></i> Previous</button> -->
                                            <div class="clearfix"></div>      
                                      </form>
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

</html>