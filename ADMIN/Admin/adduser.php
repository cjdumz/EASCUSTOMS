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
                                <?php
                                // define variables and set to empty values
                                $nameErr = $emailErr = $genderErr = $websiteErr = "";
                                // $name = $email = $gender = $comment = $website = "";
                                
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    
                                    if (empty($_POST["email"])) {
                                      $emailErr = "Email is required";
                                    }else {
                                      $email = test_input($_POST["email"]);
                                      
                                      // check if e-mail address is well-formed
                                      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                          $emailErr = "Invalid email format"; 
                                      }
                                    }
                                }
                                
                                function test_input($data) {
                                    $data = trim($data);
                                    $data = stripslashes($data);
                                    $data = htmlspecialchars($data);
                                    return $data;
                                }
                              ?>
                                    <form action="process/adduser_process.php" method="POST">
                                    <p class="card-title" style="font-size:20px;">Personal Information</p>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label class="bmd-label-floating">First Name</label>
                                              <input type="text" class="form-control" name="first" oninvalid="this.setCustomValidity('First Name is Invalid.')" oninput="setCustomValidity('')" pattern="[A-Za-z]{1,20}" requiredoninvalid="this.setCustomValidity('First Name is Invalid.')" oninput="setCustomValidity('')" pattern="[A-Za-z]{1,20}" required>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label class="bmd-label-floating">Middle Name</label>
                                              <input type="text" class="form-control" name="middle">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label class="bmd-label-floating">Last Name</label>
                                              <input type="text" class="form-control" name="last" oninvalid="this.setCustomValidity('Last Name is Invalid.')" oninput="setCustomValidity('')" pattern="[A-Za-z]{1,20}" required>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label class="bmd-label-floating">Address</label>
                                              <input type="text" class="form-control" name="address" required>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label class="bmd-label-floating">Email Address</label>
                                              <input type="text" class="form-control" name="email" required="" oninvalid="this.setCustomValidity('Email is Invalid.')" oninput="setCustomValidity('')" pattern="^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label class="bmd-label-floating">Mobile Number</label>
                                              <input type="text" class="form-control"  pattern="[0-9]{4}[0-9]{3}[0-9]{4}" oninvalid="this.setCustomValidity('Mobile Number is Invalid.')" oninput="setCustomValidity('')" name="mobile" required>
                                              <span style="font-size: 14px;color:red">(Ex. 09*********)</span>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label class="bmd-label-floating">Telephone Number</label>
                                              <input type="text" class="form-control"  pattern="[0-9]{3}[0-9]{3}[0-9]{4}" oninvalid="this.setCustomValidity('Telephone Number is Invalid.')" oninput="setCustomValidity('')" name="mobile" required name="telephone">
                                              <span style="font-size: 14px;color:red">(Ex. 074 *** ****)</span>
                                            </div>
                                          </div>
                                        </div>
                                        <br><br><br>
                                        <a href="addvehicle.php">
                                            <button type="submit" class="btn btn-primary" name="submit-user" style="float:right">Next <i class="menu-icon mdi mdi-chevron-right"></i></button>
                                            <div class="clearfix"></div>
                                        </a>
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