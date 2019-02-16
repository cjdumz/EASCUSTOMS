<?php require 'process/require/auth.php';?>
<?php require "process/require/dataconf.php";?>
<?php require 'process/process.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Make Series Management</title>
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
                    <li class="breadcrumb-item"><a href="accountmanagement.php" style="font-size:18px;">Make and Series Management</a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <div class="row">
            
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-11">
                            <p class="card-title" style="font-size:20px;">Make and Series</p>
                            <p class="card-description">
                            </p>
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn btn-darkred" style="padding-button: 10px; float: right; width: 208px;" data-toggle="modal" data-target="#addMakeSeries"><i class="menu-icon mdi mdi-account-multiple-plus"></i>
                                Add Make and Series
                            </button>
                              <!--MODAL-->
                            <div class="modal fade" id="addMakeSeries" role="dialog">
                              <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    
                                  <div class="modal-header" style="background-color:#B80011; color: #ffffff;">
                                    <h5 class="modal-title"><i class="fa fa-car" aria-hidden="true"></i> Add Make and Series</h5>
                                      
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      
                                  </div>
                                    
                                  <div class="modal-body">
                                  <form action="process/server.php" method="post">
                                  <small id="reminder" class="form-text text-muted">Please fill out the required fields.</small><br>
                                      
                                  <div class="form-group">
                                    <label for="make">Make</label>
                                    <input type="text" class="form-control input-xs" id="make"  placeholder="make" name="make"
                                    required="" oninvalid="this.setCustomValidity('Make is Invalid.')" oninput="setCustomValidity('')" pattern="[A-Za-z]{1,20}">
                                  </div>
                                  <div class="form-group">
                                    <label for="Series">Series</label>
                                    <input type="text" class="form-control input-xs" id="series"  placeholder="series" name="series" required="" oninvalid="this.setCustomValidity('Series is Invalid.')" oninput="setCustomValidity('')" pattern="^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$">
                                  </div>
                                      
                                  </div>
                                      
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-sm " name="add_makeseries" style="background-color: #B80011;color: white"><i class="menu-icon mdi mdi-account-multiple-plus"></i> Add</button>
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" style="color:black;"><i class="menu-icon mdi mdi-close"></i> Cancel</button>
                                  </div>
                                  </form>
                              </div>
                              </div>
                        </div>
                    </div>
                    
                  
                  
                  <div class="table-responsive">
                  <table class="table table-bordered table-dark" id="doctables">
                      <thead>
                        <tr class="grid">
                          <th style="font-size:18px;">
                            Make
                          </th>
                          <th style="font-size:18px;">
                            Series
                          </th>
                          <th style="font-size:18px;">
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody class="table-primary" style="color:black;">
                        <?php
                            $data = $connection->prepare("SELECT * FROM `make_series` ");
                            if($data->execute()){
                                $values = $data->get_result();
                                while($row = $values->fetch_assoc()) {
                            echo '<tr>
                                        <td>'.$row['make'].'</td>
                                        <td>'.$row['series'].'</td>
                                        <td class="text-center">
                                          <button type="submit" class="btn btn-darkblue"  data-toggle="modal"  data-target="#updateMakeSeries'.$row['id'].'"><i class="menu-icon mdi mdi-account-edit"></i>  Edit</button>
                                          
                                           <a href="deleteMakeSeries.php?id='.$row['id'].'"><button class="btn btn-danger"><i class="menu-icon mdi mdi-delete"></i> Delete</button></a>
                                          </td>
                              </tr>



                        <div div class="modal fade" id="updateMakeSeries'.$row['id'].'" role="dialog">
                          <div class="modal-dialog modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header" style="background-color: #4caf50; color: white; border: 3px solid #4caf50;">
                              <h5 class="modal-title" id="exampleModalLabel">Update Make and Series</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            
                            <!-- start -->
                            <form action="process/server.php" method="POST">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Make</label>
                                    <input type="text" class="form-control" name="make" value="'.$row['make'].'" placeholder="'.$row['make'].'" required="" s pattern="[A-Za-z]{1,20}">
                                  </div>
                                </div>
                              </div>
                              
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Series</label>
                                    <input type="text" class="form-control" name="series" value="'.$row['series'].'" placeholder="'.$row['series'].'" required="" pattern="^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$">
                                    <input type="hidden" class="form-control" name="id" value="'.$row['id'].'" placeholder="'.$row['id'].'">
                                  </div>
                              </div>
                            </div>
                            <!-- end -->
                              
                              </div>
                              <div class="modal-footer">
                                  <button type="submit" class="btn btn-success" name="update_makeseries" style="float:right"><i class="menu-icon mdi mdi-account-convert"></i> Update</button>
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
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- Modal -->
  
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
  <!-- AJAX Link -->
 <script>
$(document).ready(function(){
  $("#submit").click(function(){
    var exampleInputName1 = $("#exampleInputName1").val();
    var exampleInputName2 = $("#exampleInputName2").val();
    var exampleInputName3 = $("#exampleInputName3").val();
    var exampleInputPlate = $("#exampleInputPlate").val();
    var exampleInputEmail = $("#exampleInputEmail").val();
    var exampleInputMobile = $("#exampleInputMobile").val();
    var exampleInputTel = $("#exampleInputTel").val();
    var exampleInputAddress = $("#exampleInputAddress").val();
    var dataString = 'exampleInputName1=' + exampleInputName1 + '&exampleInputName2=' + exampleInputName2;
    if(exampleInputName1=='' || exampleInputName2=='' || exampleInputName3=='' || exampleInputNPlate=='' || exampleInputEmail==''
      || exampleInputMobile=='' || exampleInputTel=='' || exampleInputAddress==''){
      alert('Fill all fields')
      $("#display").html("");
    } else {
    $.ajax({
      type: "POST",
      cache: false,
      success: function(result){
       $("#display").html(result);
      }
    });
    }
    return false;
  }); 
});
</script>
</body>




<script>
  var table = $('#doctables').DataTable({
    // PAGELENGTH OPTIONS
    "lengthMenu": [[ 10, 25, 50, 100, -1], [ 10, 25, 50, 100, "All"]]

});
</script>

<script></script>
</html>