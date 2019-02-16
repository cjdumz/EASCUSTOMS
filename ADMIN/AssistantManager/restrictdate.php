<?php require 'process/require/auth.php';?>
<?php require "process/require/dataconf.php";?>
<?php require "../../process/database.php";

    $appointmentinfo = new database;
    $appointmentinfo -> appointment_info_activeschedule();

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
  <link rel="stylesheet" href="css/normalize.css"  type="text/css"/>
  <link rel="stylesheet" href="css/datepicker.css"  type="text/css"/> 
  <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
  <script> 
  var $jq171 = jQuery.noConflict(true);
  </script>

  <script> 
  window.jQuery = $jq171;
  </script>
  <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
  <script src="js/jquery.js"></script>
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
            <div class="col-lg-12 grid-margin  stretch-card">
              <div class="card">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="restrictdate.php" style="font-size:18px;">Date Restrict</a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <script type="text/javascript">
          var unavailableDates  = [<?php
          foreach($appointmentinfo->appointment_info as $appointmentinfo):
          ?>"<?= date('d-n-o', strtotime($appointmentinfo['date'])); ?>",
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

          function noWeekend(date){
          var noWeekend = $jq171.datepicker.noWeekends(date);
          return noWeekend[0] ? unavailable(date) : noWeekend;
          }

          $jq171(function(){
          $jq171('#datepicker').datepicker({
          dateFormat: 'yy-m-d',
          minDate: 1,
          beforeShowDay: noWeekend, //eto yung date para sa disabled dates
          inline: true,
          //nextText: '&rarr;',
          //prevText: '&larr;',
          showOtherMonths: true,
          //dateFormat: 'dd MM yy',
          dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
          //showOn: "button",
          //buttonImage: "img/calendar-blue.png",
          //buttonImageOnly: true,
          });
          });

          </script>

            
        <!--  Start Calendar  -->
          <div class="row">
               <div class="col-lg-6 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">    
                      <div class="container">
                        <form method = "post" action="rDate.php"> 
                            <p class="card-title" style="font-size:20px; float:right;" >Select Date : <input type ="text" name="rdate" id="datepicker" style="border-style: groove; border-radius: 5px; border-color:#f2f2f2" required>
                                <button class="btn btn-primary" type="submit" name="submit" style="float:right;"><i class="menu-icon mdi mdi-calendar-remove"></i> Restrict</button></p>
                          </form>
                          
                      </div>

                      </div>
                   </div>
               </div> 
             
            <!-- start -->
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                <!-- start -->
                <p class="card-title" style="font-size:20px;">Restricted Dates</p>
                <div class="table-responsive">
                    <table class="table table-bordered table-dark" id="doctables">
                      <thead>
                        <tr class="text-center">
                          <th>Date Restricted</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-primary" style="color:black;">
                    <?php
                        $datas = $connection->prepare("Select id,date from `daterestricted`;");
                        if($datas->execute()){
                            $valuess = $datas->get_result();
                            while($row = $valuess->fetch_assoc()) {
                            echo '
                                <tr>
                                  <td>'.$row['date'].'</td>
                                  <td class="text-center"><a href="unrestrict.php?id='.$row['id'].'"><button class="btn btn-primary"><i class="menu-icon mdi mdi-calendar-check"></i> Unrestrict</td>
                                </tr>
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
  var table = $('#doctables1').DataTable({
    // PAGELENGTH OPTIONS
    "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]]

});
</script>
       
</body>

</html>