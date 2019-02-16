<?php require 'process/require/auth.php';?>
<?php require "process/require/dataconf.php";?>
<?php require "process/check/appointmentcheck.php";?>
<?php require "process/users.php";?>
<?php require "../../process/database.php";?>
<?php require "process/appointment_walkin_insert.php";?>

<?php


  
$mechanicalservice = new database ;
$mechanicalservice -> mechanical_service();
$electricalservice = new database ;
$electricalservice -> electrical_service();
$paintservice = new database ;
$paintservice -> painting_service();
$appointmentinfo = new database ;
$appointmentinfo -> appointment_info_activeschedule();
// $personalinfo = new database ;
// $personalinfo -> personal_info();

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
  <title>Appointment Request</title>
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
    
    
     <!-- DatePicker dont move to another line -->

     <!-- Notification Jquery Library -->
     
     <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
     <script> 
      var $jq171 = jQuery.noConflict(true);
      </script>


     <script> 
      window.jQuery = $jq171;
     </script>
     <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
     <script type="text/javascript" src="js/jquery.js"></script>
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
                    <li class="breadcrumb-item active" aria-current="page" style="font-size:18px;">Appointments <?PHP echo $_SESSION['id']; ?></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
            
             
          <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title" style="font-size:20px;">Create appointment</p>
                <form method="post" action="process/appointment_walkin_insert.php">
                  <div class="form-group">
                 <select name="personalId" id="personalId" class="form-control action" onclick="myFunction()" style="background-color:#ebecee; font-size:16px; color:#333333;">
                  <option value="">Select User</option>
                  <?php echo $make; ?>
                 </select><br>
                 <select name="vehicleId" id="vehicleId" class="form-control action" style="background-color:#ebecee; font-size:16px; color:#333333;">
                  <option value="">Select Vehicle</option>
                 </select>
                </div>
                 <div class="panel-body">
                     <div class ="services" >
                        <div class="col-md-3 col-sm-3">
                          <ul style="text-align:justify; font-size:16px;list-style: none;">
                            <li><a role="button" id="mechanical" >Mechanical</a></li>
                            <li><a role="button" id="electrical">Electrical</a></li>
                            <li><a role="button" id="customize">Customize</a></li>
                            <li><a role="button" id="bodyRepair">Body Repair</a></li>
                            <li><a role="button" id="painting">Body Paint</a></li>
                           </ul>
                        </div>
                      </div>
                     
                        <div class="col-md-8 col-sm-8">
                            <ul style="text-align:justify; font-size:16px;list-style: none;">
                            <div class="service-detail" id="mechanical_service" style="display: none; text-align:justify;">    
                              <?php
                               foreach($mechanicalservice->mechanical_service as $mechanicalservice):
                              ?>  
                               <div class="col-md-5 col-sm-5">
                               <input type="checkbox" name="service[]" id="<?= $mechanicalservice['serviceName']; ?>"  value="<?= $mechanicalservice['serviceName']; ?>"><?= $mechanicalservice['serviceName']; ?><br>
                               </div>
                              <?php 
                                endforeach; 
                              ?>
                            </div>
                        
                            <div class="service-detail" id="electrical_service" style="display: none; text-align:justify;">
                              <?php
                               foreach($electricalservice->electrical_service as $electricalservice):
                              ?>
                               <div class="col-md-5 cosl-sm-5">   
                               <input type="checkbox" name="service[]" id="<?= $electricalservice['serviceName']; ?>"  value="<?= $electricalservice['serviceName']; ?>"> 
                               <?= $electricalservice['serviceName']; ?>
                               <br> 
                               </div>
                              <?php     
                                 endforeach;  
                              ?>
                         </div>
                        
                         <div class="service-detail" id="paint_service" style="display: none; text-align:justify;">
                              <?php
                               foreach($paintservice->painting_service as $paintservice){
                              ?>   
                               <input type="checkbox" name="service[]" id="<?= $paintservice['serviceName']; ?>"  value="<?= $paintservice['serviceName']; ?>"><?= $paintservice['serviceName']; 
                                ?>
                              <br><br>
                              <?php     
                                   }
                              ?>        
                         </div>
                    
                        <div class="service-detail" id="body_Repair" style="display: none; text-align:justify;">
                               <input type="checkbox" name="service[]" value="Body Repair">Request for Body Repair.
                              <br><br> 
                        </div>
                         <div class="service-detail" id="customization" style="display: none; text-align:justify;">
                               <input type="checkbox" name="service[]" value="Customize">Request for Customization.
                              <br><br> 
                         </div>

                         <div class="service-detail" id="maintenance" style="display: none; text-align:justify;">
                               <input type="checkbox" name="service[]" value="Maintenance">Request for Maintenance.
                              <br><br> 
                         </div>
                     </ul>
                     </div>
                  </div>

                    <!-- Other Service -->
                    <hr>
                   <p style="text-align: justify; padding-left:15px; font-size:17px; color:#333333;">Other Service</p>
                    <div class="panel-body">
                        <textarea class="form-control" name="otherService" rows="5" id="additionalMessage" name="message" placeholder="Others" style="background-color:#ebecee;"></textarea>
                      </div>
                    
                    <!-- Select Date -->                                      

                          <script type="text/javascript">
                           var unavailableDates  = [<?php
                           foreach($appointmentinfo->appointment_info as $appointmentinfo):
                           ?>"<?= date('j-m-Y', strtotime($appointmentinfo['date'])); ?>",
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

                          $jq171(function(){
                            $jq171('#datepicker').datepicker({
                              dateFormat: 'yy-mm-dd',
                              minDate: 0,
                              beforeShowDay: $jq171.datepicker.noWeekends,
                              inline: true,
                              //nextText: '&rarr;',
                              //prevText: '&larr;',
                              showOtherMonths: true,
                              //dateFormat: 'dd MM yy',
                              dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                              beforeShowDay: unavailable, 
                              //showOn: "button",
                              //buttonImage: "img/calendar-blue.png",
                              //buttonImageOnly: true,
                            });
                          });

                          </script>
                    <hr>
                   <p style="text-align: justify; padding-left:15px; font-size:17px; color:#333333;">Select Date</p>
                    <div class="panel-body">
                    <div class="row">
                    <div class="col-sm-3" id="date_body">
                    <b><input type="text" style="font-family: 'Poppins', sans-serif;cursor: pointer;" id="datepicker" name="date" class="form-control" readonly></b>
                    
                    </div>
                    <div class="col-sm-3" id="date_body">
                   
                    </div>
                    </div>
                    </div>
                  
                    <hr>      
                  <!-- Additional Message -->
                   <p style="text-align: justify; padding-left:15px; font-size:17px; color:#333333;">Additional Message</p>
                    <div class="panel-body">
                    <textarea class="form-control" name="additionalMessage" rows="5" id="additionalMessage" name="message" placeholder="Message" style="background-color:#ebecee;"></textarea>
                  </div>
                    
                    </div>
                     <div class="form-group" style="text-align: center;">
                      <input type="submit" name="post" id="cf-submit" class="btn btn-primary" value="Submit" style="width: 20%; font-size:17px; font-family: 'Poppins', sans-serif;"/>
                    </div>
                  </form>
                  
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
  <!-- container-scroller -->

  <script src="js/script.js"></script>
  <script src="js/uservehicle.js"></script>
  <script src="js/appointment_walkin.js"></script>

</body>

</html>


