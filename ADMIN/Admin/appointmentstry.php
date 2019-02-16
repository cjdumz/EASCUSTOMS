<?php
    session_start();
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>EAS Customs - Vehicle Info</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" href="images/Logo.png">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- Font Awesome Version 5.0 -->
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/all.css">
     <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
     <script src="js/jquery.js"></script>

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
     <script src="js/script.js"></script>


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
                         <span class="phone-icon"><i class="fa fa-phone"></i>  09257196568 / 09304992021</span>
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
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php  if (isset($_SESSION['username'])) : ?><p><i class="fas fa-user-circle"></i> Welcome <?php echo $_SESSION['username']; ?> <span class="caret"></span></p>
                </a>
                  <ul class="dropdown-menu" id="dropdownaccount">
                     <li><a  href="accountsettings.php" style="font-size: 12px;z-index: 9999;"><i class="fa fa-cogs" aria-hidden="true"></i> Account Settings</a></li>
              <li><a  href="process/logout.php" style="color: red;font-size: 12px;z-index: 9999;"><i class="fas fa-sign-out-alt"></i> Logout</a>
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
                     <li><a  href="acceptedreq.php" style="font-size: 13px;z-index: 9999;">Accepted Request</a></li>
                    <li><a  href="reschedulereq.php" style="font-size: 13px;z-index: 9999;">Reschedule Request</a>
                    </li>
                     <li><a  href="pendingreq" style="font-size: 13px;z-index: 9999;">Pending Request</a>
                    </li>
                     <li><a  href="declinedreq" style="font-size: 13px;z-index: 9999;">Declined Request</a>
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
    
     <div class="container">
    <?php if (isset($_SESSION['vehicle_add'])) : ?>
          <?php 
            echo $_SESSION['vehicle_add']; 
            unset($_SESSION['vehicle_add']);
          ?>
    <?php endif ?>

    <?php if (isset($_SESSION['delete'])) : ?>
          <?php 
            echo $_SESSION['delete']; 
            unset($_SESSION['delete']);
          ?>
    <?php endif ?>
   </div>
     

  <!-- Start of APPOINTMENT SECTION --> 
    <div id="appointment-section">
        <div class="container">
            <div class="row">
                  
                    
           

      <div class="form-group">
       <select name="make" id="make" class="form-control action" onclick="myFunction()">
        <option value="">Select Make</option>
        <?php echo $make; ?>
       </select><br>
       <select name="series" id="series" class="form-control action" >
        <option value="">Select Series</option>
       </select>
     

 
             
             
             
        

      <!-- SCRIPTS -->
     <script src="js/notifinvoice.js"></script>
     <script src="js/makeseries.js"></script>
     <script src="js/notif.js"></script>
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