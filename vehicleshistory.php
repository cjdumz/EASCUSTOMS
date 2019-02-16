<?php
    session_start();
    include 'process/database.php';
    include 'process/info.php';
    include 'process/auth.php';
    $username=$_SESSION['username'];
    $profile =new database;
    $profile->user_profile($username);


  
// $mechanicalservice = new database ;
// $mechanicalservice -> mechanical_service();
// $electricalservice = new database ;
// $electricalservice -> electrical_service();
// $paintservice = new database ;
// $paintservice -> painting_service();
$appointmentinfo = new database ;
$appointmentinfo -> appointment_info_activeschedule();
$personalinfo = new database ;
$personalinfo -> personal_info();
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>EAS Customs - Make an Appointment</title>
     <link rel="icon" href="images/Logo.png">

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" href="images/Logo.png">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     <!-- Font Awesome Version 5.0 -->
     <link rel="stylesheet" href="css/all.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
     <script src="js/jquery.js"></script>
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
      
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
     <script src="js/jquery.js"></script>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
       <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>
    

    <!-- HEADER -->
     <header>
          <div class="container" >
               <div class="row">
         
          <div class="col-md-4 col-sm-5">
                       <img src="images/Logo.png" class="logoo" alt="logo" style="width: 50px; height: 40px" />
                       <a href="home.php" class="navbar-brand" >EAS Customs</a>
          </div>

              <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i>  +639257196568 / +639304992021</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Sat)</span>
                         <span class="email-icon"><i class="fa fa-facebook-square" aria-hidden="true"></i> <a href="#">EAS Customs / @eascustoms75</a></span>
                    </div>


                    
        </div>
      </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation" >
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
              

               </div>
          

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav ">
                     <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" ><?php  if (isset($_SESSION['username'])) : ?><p> <i class="fas fa-user-circle"></i> Welcome <?php echo $_SESSION['username']; ?> <span class="caret"></span></p>
                  </a>
                  <ul class="dropdown-menu" id="dropdownaccount">
                     <li><a  href="accountsettings.php" style="font-size: 13px;z-index: 9999;"><i class="fa fa-cogs" aria-hidden="true"></i> Account Settings</a></li>
                    <li><a  href="process/logout.php" style="color: red;font-size: 13px;z-index: 9999;"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                  </ul>
                  </li>
                  <?php endif ?>
                </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                          
                        <li><a href="vehicleshistory.php" class="smoothScroll"><i class="fas fa-history"></i> Vehicle History  <span class="label label-pill label-danger count1" style="border-radius:10px;padding:6px;"></span></a></li>
                        <li><a href="vehiclesinfo.php" class="smoothScroll"><i class="fas fa-car"></i> Your Vehicles</a></li>  
                        <li class="dropdown">
                       
                        
                        
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" ><i class="far fa-calendar-check"></i> Request Status<span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" id="dropdownaccount">
                     <li><a  href="Acceptedreq.php" style="font-size: 13px;z-index: 9999;">Accepted Request</a></li>
                     <li><a  href="Pendingreq.php" style="font-size: 13px;z-index: 9999;">Pending Request</a>
                    </li>
                     <li><a  href="Declinedreq.php" style="font-size: 13px;z-index: 9999;">Declined Request</a>
                    </li>
                    <li><a  href="Rescheduledreq.php" style="font-size: 13px;z-index: 9999;">Rescheduled Request</a>
                    </li>
                  </ul>
                  </li>
                
             
                        
                        <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell" aria-hidden="true" style="font-size: 20px;padding: 0;"></i>  <span class="label label-pill label-danger count" style="border-radius:10px;"></span></a>
                         <ul class="dropdown-menu" id="dropdownnotif" aria-labelledby="dropdownMenuDivider"></ul>
                        </li>          
                        <li class="appointment-btn" ><a href="appointment.php">Make an appointment</a></li>       
                    </ul>
               </div>

          </div>
     </section>

  <!-- Start of APPOINTMENT SECTION --> 
    <div id="appointment-section">
        <div class="container">
            <div class="row">
                  
                <div class="col-xs-12 col-sm-12" style="width:100%; padding:5px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color: white; border-radius: 10px;">
        
                 <h3 align="center" style="margin-top:4%;">Vehicle History</h3>
                <br>
                    
                <table class="table table-hover table-bordered" id="doctables">
                  <thead style="background-color: #212529; color: white;">
                    <tr>
                      <th style="text-align:center; font-size: 18px;">Plate Number</th>
                      <th style="text-align:center; font-size: 18px;">Release Date</th>
                      <th style="text-align:center; font-size: 18px;">Action</th>
                    </tr>
                  </thead>
                    
                <tbody>
                    
      <!--Vehicle History -->
                 <?php
                  $resultCheck = mysqli_num_rows($res);
                  if ($resultCheck > 0) {
                  while ($row = mysqli_fetch_assoc($res)) {
                  ?>  
                  <tr>
                   <?php if (isset($row['plateNumber'])) {
                          echo "<td align = 'center'>".$row['plateNumber'].' '.$row['make'].' '.$row['series']."</td>";
                        }else
                          echo "<td align = 'center'>No Value.</td> ";
                    ?>
                  <?php if (isset($row['date'])) {
                          echo "<td align = 'center'>".date("F d, Y",strtotime($row['date']))."</td>"; 
                        }else
                          echo "<td align = 'center'>No Value.</td> ";
                    ?>
                    <td style="text-align: center;">
                      <button type="button" class="btn" style="background-color:  #308ee0;color: white;" data-toggle="modal" data-target="#viewHistory<?php echo $row['vehicleId']; ?>"><i class="fa  fa-address-card" aria-hidden="true"></i> &nbsp;View Info</button>

      <!-- Modal ng CI-->
                      <div class="modal fade" id="viewHistory<?php echo $row['vehicleId']; ?>" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#308ee0; color: #ffffff; font-size: 25px;">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h5 class="modal-title"><?php echo $row['make'].' '.$row['series'].' '.$row['yearModel']; ?></h5>
                            </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <label for="plateNumber">Plate Number</label>
                                <p><?php echo $row['plateNumber']; ?></p>
                              </div>
                              <div class="form-group">

                                <label for="date">Release Date</label>
                                <p><?php echo date("F d, Y",strtotime($row['date'])); ?></p>
                              </div>
                              <div class="form-group">
                                <label for="scopeWork">Scope of Work</label>
                              <p><?= preg_replace("/[,]/" , "<br>", $row['scopeId']); ?></p>
                              </div>
                               <div class="form-group">
                                <label for="sparePart">Spare Part</label>
                                <p><?php echo $row['spareParts']; ?></p>
                              </div>
                              <div class="form-group">
                                <label for="scopePrice">Scope Price</label>
                                <p><?php echo $row['totalPrice']; ?></p>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
                            </div>
                          </div>

                        </div>
                      </div>
                        </td>
                        <?php 
                         }
                        }else{
                          echo '<td colspan="7" style="text-align:center"><nav aria-label="breadcrumb" align="center">
                                  <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">NO DATA YET</li>
                                  </ol>
                                </nav></td>';
                        }
                        ?>
                      </tr>
               </tbody>
                    
      </table>
            </div>      
        </div> 
    </div>
    </div>
   
   <!-- END OF APPOINTMENT SECTION -->

     <!-- FOOTER -->
<footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <p class="wow fadeInUp" data-wow-delay="0.4s" style="font-size:30px; color:#404040; font-weight: bold; letter-spacing: 2px;">Contact Info</p>
                              <br>
                              <div class="contact-info">
                                   <p><i class="fas fa-phone" style="font-size:20px;color:#404040"></i> &nbsp;&nbsp;+639257196568 / +639304992021</p>
                                   <p><i class="fas fa-envelope" style="font-size:20px;color:#404040"></i> <a href="#"> &nbsp;&nbsp;eascustoms@yahoo.com</a></p>
                                   <p><i class="fab fa-facebook-square" style="font-size:20px;color:#404040"></i> <a href="#"> &nbsp;&nbsp;EAS Customs / @eascustoms75</a>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                            <p class="wow fadeInUp" data-wow-delay="0.4s" style="font-size:30px; color:#404040; font-weight: bold; letter-spacing: 2px;">Opening Hours</p>
                            <br> 
                            <div class="contact-info">
                               <p><i class="fas fa-calendar-check" style="font-size:20px;color:#404040"></i> &nbsp;&nbsp;Monday - Saturday <span style="font-weight:bold;">09:00 AM - 05:00 PM</span></p>
                               <p><i class="fas fa-calendar-times" style="font-size:20px;color:#404040"></i> &nbsp;&nbsp;Sunday <span style="font-weight:bold;">Closed</span></p>
                               <p><i class="fas fa-clock" style="font-size:20px;color:#404040"></i> &nbsp;&nbsp;GMT+8

                            </div> 

                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <p style="font-size:15px; color:#404040;">&copy; Copyright 2018. All Rights Reserved.</p>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 

                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>
    
 <!-- SCRIPTS -->
     <script src="js/notif.js"></script>
     <script src="js/notifinvoice.js"></script>
     <script src="js/makeseries.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
    <!-- FOR TABLE -->
     <script src="js/jquery.dataTables.js"></script>
     <script src="js/dataTables.bootstrap4.js"></script>
     <script src="js/sb-admin-datatables.min.js"></script>
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/js/vendor.bundle.addons.js"></script>
 

     <script>
      var table = $('#doctables').DataTable({
      // PAGELENGTH OPTIONS
      "lengthMenu": [[ 10, 25, 50, 100, -1], [ 10, 25, 50, 100, "All"]]

      });
    </script>

</body>
</html>