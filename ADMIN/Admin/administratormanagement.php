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
  <title>Account Management</title>
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
                    <li class="breadcrumb-item"><a href="accountmanagement.php" style="font-size:18px;">Account Management</a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

         

          <!-- start -->
          <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-9">
                            <p class="card-title" style="font-size:20px;">Administrators</p>
                            <p class="card-description">
                                List of all registered Administrator Accounts
                            </p>
                        </div>
                        <div class="col-3">
                            
                        <button type="button" class="btn btn-darkred" style="padding-button: 10px; float: right; width: 160px;"
                            data-toggle="modal" data-target="#adds"><i class="menu-icon mdi mdi-account-multiple-plus"></i>
                                Add Accounts
                            </button>

                            <div class="modal fade" id="adds" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header" style="background-color: #B80011; color: white; border: 3px solid #B80011;">
                                    <h5 class="modal-title" id="exampleModalLabel">Manage Account</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <!-- start -->
                                <p class="card-title" style="font-size:20px;">Basic Information</p>
                                <form action="process/server.php" method="POST">
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="bmd-label-floating">Fist Name</label>
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <input type="text" class="form-control" name="first"  placeholder="First Name" required="" oninvalid="this.setCustomValidity('First Name is Invalid.')" pattern="[A-Za-z]{1,20}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="bmd-label-floating">Middle Name</label>
                                        <input type="text" class="form-control" name="middle" placeholder="Middle Name" >
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="bmd-label-floating">Last Name</label>
                                        <input type="text" class="form-control" name="last" placeholder="Last Name" required="" oninvalid="this.setCustomValidity('Last Name is Invalid.')" oninput="setCustomValidity('')" pattern="[A-Za-z]{1,20}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="bmd-label-floating">Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Username"  required="" oninvalid="this.setCustomValidity('Username is Invalid.')" oninput="setCustomValidity('')" pattern="[a-zA-Z0-9-]+" >
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="bmd-label-floating">Password</label>
                                        <input type="password" class="form-control" name="p1"  id="password" placeholder="Password"  onkeyup="check();" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="bmd-label-floating">Confirm Password</label>
                                        <input type="password" class="form-control" name="p2" id="confirm_password" placeholder="Confirm Password" onkeyup="check();" required>
                                        <span id="message">
                                        </div>
                                    </div>
                                    </div>
                                    <p class="card-title" style="font-size:20px;">Account Information</p>
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <label class="bmd-label-floating" for="typeselector">Type</label>
                                        <select class="form-control" id="typeselector" name="type" required> 
                                            <option selected hidden>Select Type</option>                                          
                                            <option value="admin">Admin</option>
                                            <option value="manager">Manager</option>
                                            <option value="assistant">Assistant Manager</option>
                                        </select>
                                        </div>
                                    </div>
                                    </div>
                                    
                                                
                                    <!-- end -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-darkred" name="add_account" style="float:right"><i class="menu-icon mdi mdi-account-convert"></i> Add Account</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i> Close</button>
                                    <div class="clearfix"></div>
                                    </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                <div class="table-responsive">
                  <table class="table table-bordered table-dark" id="doctables">
                      <thead>
                      <tr class="grid">
                          <th style="font-size:15px;">
                            Username
                          </th>
                          <th style="font-size:15px;">
                            Name
                          </th>
                          <th style="font-size:15px;">
                            Type
                          </th>
                          <th style="font-size:15px;">
                            status
                          </th>
                          <th style="font-size:15px;">
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody class="table-primary" style="color:black;">
                      <?php
                            $data = $connection->prepare("SELECT *, concat(firstName, ' ' , middleName,' ' , lastName ) as 'Name' FROM users WHERE
                             (type = 'admin' OR type = 'manager' or type = 'assistant');");
                            if($data->execute()){
                                $values = $data->get_result();
                                
                                while($row = $values->fetch_assoc()) {
                                  $vehicleID = $row['id'];
                                  $type;
                                  $typeView;

                                  $statusView = "";
                                  if($row['type']=="admin"){
                                      $type = "admin";
                                      $typeView = "Admin";
                                  }elseif($row['type']=="manager"){
                                      $type = "manager";
                                      $typeView = "Manager";
                                  }elseif($row['type']=="assistant"){
                                      $typeView = "Assistant Manager";
                                      $type = "assistant";
                                  }

                                  if($row['status']=="Active"){
                                      $status = "Active";
                                      $statusView = "Active";
                                  }elseif($row['status']=="Deactivated"){
                                      $status = "Deactivated";
                                      $statusView = "Deactivated";
                                  }
                                echo '
                                    <tr>
                                        <td>'.$row['username'].'</td>
                                        <td>'.$row['Name'].'</td>
                                        <td>'.$typeView.'</td>
                                        <td>'.$statusView.'</td>
                                        <td class="text-center">

                                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#changePassword'.$row['id'].'">
                                              <i class="menu-icon mdi mdi-lock-reset"></i>Change Password
                                          </button>
                                        
                                          <button class="btn btn-darkblue" data-toggle="modal" data-target="#manage'.$row['id'].'"><i class="menu-icon mdi mdi-history"></i>
                                          Manage</button>
                                        
                                        </td>
                                    </tr>
                                     ';
                                 ?>

                                    <!-- manage -->
                                    <div class="modal fade" id="manage<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header" style="background-color: #000099; color: white; border: 3px solid #000099;">
                                            <h5 class="modal-title" id="exampleModalLabel">Manage Account</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <!-- start -->
                                        <p class="card-title" style="font-size:20px;">Basic Information</p>
                                        <form action="process/server.php" method="POST">
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="bmd-label-floating">Fist Name</label>
                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                <input type="text" class="form-control" name="first" value="<?php echo $row['firstName']; ?>" placeholder="<?php echo $row['firstName']; ?>" required="" oninvalid="this.setCustomValidity('First Name is Invalid.')" oninput="setCustomValidity('')" pattern="[A-Za-z]{1,20}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="bmd-label-floating">Middle Name</label>
                                                <input type="text" class="form-control" name="middle" value="<?php echo $row['middleName']; ?>" placeholder="<?php echo $row['middleName']; ?>">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="bmd-label-floating">Last Name</label>
                                                <input type="text" class="form-control" name="last" value="<?php echo $row['lastName']; ?>" placeholder="<?php echo $row['lastName']; ?>" required="" oninvalid="this.setCustomValidity('Last Name is Invalid.')" oninput="setCustomValidity('')" pattern="[A-Za-z]{1,20}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="bmd-label-floating">Username</label>
                                                <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>" placeholder="<?php echo $row['username']; ?>" required="" oninvalid="this.setCustomValidity('Username is Invalid.')" oninput="setCustomValidity('')" pattern="[0-9A-Za-z0-9]{1,20}">
                                                </div>
                                            </div>
                                            </div>
                                            <p class="card-title" style="font-size:20px;">Account Information</p>
                                            <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label class="bmd-label-floating" for="typeselector">Type</label>
                                                <select class="form-control" name="type" id="typeselector" required>
                                                    <option selected hidden value="<?php echo $type; ?>"><?php echo $typeView; ?></option>
                                                    <option value="admin">Admin</option>
                                                    <option value="manager">Manager</option>
                                                    <option value="assistant">Assistant Manager</option>
                                                </select>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label class="bmd-label-floating" for="typeselector">Status</label>
                                                <select class="form-control" name="status" id="typeselector" required>
                                                    <option selected hidden><?php echo $status; ?></option>
                                                    <option value="Active">Active</option>
                                                    <option value="Deactivated">Deactivate</option>
                                                </select>
                                                </div>
                                            </div>
                                            </div>
                                           
                                                        
                                            <!-- end -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-darkblue" name="update_Admin" style="float:right"><i class="menu-icon mdi mdi-account-convert"></i> Update Account</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i> Close</button>
                                            <div class="clearfix"></div>
                                            </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <!-- changepassword -->
                                    <div class="modal fade" id="changePassword<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header" style="background-color: #308ee0; color: white; border: 3px solid #308ee0;">
                                          
                                            <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                                            
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                            
                                          </div>
                                          <div class="modal-body">
                                          <form action="process/server.php" method="POST">
                                            <div>
                                              <label for="message-text" class="col-form-label">Password:</label>
                                              <input type="password" class="form-control" name="p1" placeholder="Password"  required>
                                            </div>
                                            <div class="form-group">
                                              <label for="message-text" class="col-form-label">Confirm Password:</label>
                                              <input type="password" class="form-control" name="p2"   placeholder="Confirm Password" required>
                                              <span id="message">
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <input type="hidden" value="<?php echo $row['id']; ?>" name="per-id">
                                            
                                            <button type="submit" name="changePassAdm" class="btn btn-primary"><i class="menu-icon mdi mdi-lock-reset"></i>Save changes</button>                                         
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i>Close</button>
                                            
                                          </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
        
                                   
                            <?php
                                }
                            }else{
                                echo "<tr>
                                        <td colspan='7'>No Available Data</td>
                                    </tr>";
                            }
                        ?>
                      </tbody>
                    </table>
                  </div><!-- table responsive -->

                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col-lg-12 stretch-card -->
          </div><!-- row -->
          <!-- end -->

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

<script>
  var table = $('#doctables2').DataTable({
    // PAGELENGTH OPTIONS
    "lengthMenu": [[ 10, 25, 50, 100, -1], [ 10, 25, 50, 100, "All"]]

});
</script>
</html>