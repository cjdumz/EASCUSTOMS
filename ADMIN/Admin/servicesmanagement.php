<?php require 'process/require/auth.php';?>
<?php require "process/require/dataconf.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Services</title>
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

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-lg-12 grid-margin  stretch-card">
              <div class="card">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php" style="font-size:18px;">Date Entry</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="font-size:18px;">Services</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <div class="row">   
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                    
                  <p class="card-title" style="font-size:20px;">Services</p>
                  Create services
                  <br>
                  <br>
                    
                  <div class="form-group">
                    <form action="process/addservice_process.php" method="POST">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Service Name</label>
                            <input style="background-color:#ebecee;" type="text" class="form-control" name="servicename" required oninvalid="this.setCustomValidity('Service Name is Invalid.')" oninput="setCustomValidity('')" pattern="^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$">
                          </div>
                        </div>
                          
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Service Type</label>
                            <input type="text" style="background-color:#ebecee;" class="form-control" name="servicetype" required oninvalid="this.setCustomValidity('Service Type is Invalid.')" oninput="setCustomValidity('')" pattern="^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$">
                          </div>
                        </div>
                      </div>

                      <br>

                      <button type="submit" class="btn btn-darkred" name="submit-service" style="float:right"><i class="menu-icon mdi mdi-car-side"></i> Add Service</button>
                      <div class="clearfix"></div>
                                      
                    </form>   
                  </div>
                  
                  <div class="table-responsive">
                  <table class="table table-bordered table-dark" id="doctables">
                      <thead>
                        <tr class="grid">
                          <th>
                            Service Name
                          </th>
                          <th>
                            Service Type
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody class="table-primary" style="color:black;">
                        <?php
                            $data = $connection->prepare("SELECT * FROM `services` ");
                            if($data->execute()){
                                $values = $data->get_result();
                                while($row = $values->fetch_assoc()) {
                            echo '<tr>
                                        <td>'.$row['serviceName'].'</td>
                                        <td>'.$row['serviceType'].'</td>
                                        <td class="text-center"> 
                                          <button type="submit" class="btn btn-darkblue"  data-toggle="modal"  data-target="#updateSpareParts'.$row['serviceId'].'"><i class="menu-icon mdi mdi-account-edit"></i> Edit</button>
                                           <a href="deleteServices.php?id='.$row['serviceId'].'"><button class="btn btn-danger"><i class="menu-icon mdi mdi-delete"></i> Delete</button></a>
                                        </td>
                              </tr>



                        <div div class="modal fade" id="updateSpareParts'.$row['serviceId'].'" role="dialog">
                          <div class="modal-dialog modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header" style="background-color: #4caf50; color: white; border: 3px solid #4caf50;">
                              <h5 class="modal-title" id="exampleModalLabel">Update Spare Parts</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <!-- start -->
                            <form action="process/server.php" method="POST">
                              <div class="row">
                                <div class="col-md-10">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Service Name</label>
                                    <input type="text" class="form-control" name="name" value="'.$row['serviceName'].'" placeholder="'.$row['serviceName'].'"  autocomplete="off" required pattern="^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-10">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Service Type</label>
                                    <input type="text" class="form-control" name="type" value="'.$row['serviceType'].'" placeholder="'.$row['serviceType'].'"  autocomplete="off" required pattern="^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$">
                                    <input type="hidden" class="form-control" name="id" value="'.$row['serviceId'].'" placeholder="'.$row['serviceId'].'">
                                  </div>
                                </div>
                              </div>
                              <!-- end -->
                              </div>
                              <div class="modal-footer">
                                  <button type="submit" class="btn btn-success" name="update_service" style="float:right"><i class="menu-icon mdi mdi-account-convert"></i> Update</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i> Cancel</button>
                                <div class="clearfix"></div>
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
    "lengthMenu": [[ 10, 25, 50, 100, -1], [ 10, 25, 50, 100, "All"]]

});
</script>

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