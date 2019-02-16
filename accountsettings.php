<?php
     session_start();
    include 'process/database.php';
    include 'process/server.php';
    include 'process/info.php';
    include 'process/auth.php';
    include 'process/process.php';
     $username=$_SESSION['username'];
     $profile =new database;
     $profile->user_profile($username);
     $id = $_SESSION['id'];
     $pdo = new PDO('mysql:host=localhost;dbname=eas', 'eas', 'eas2018');
     $result = $pdo->query("select personalId from personalinfo where user_id = '$id'")->fetchColumn();
     $_SESSION['personalId'] = $result;
     $personalinfo =new database;
     $personalinfo->personal_info();
     $vehicleinfo =new database;
     $vehicleinfo->vehicle_info();
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>EAS Customs - Account</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" href="images/Logo.png">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <!-- Font Awesome Version 5.0 -->
     <link rel="stylesheet" href="css/all.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

     <script src="js/jquery.js"></script>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER 
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>
    -->

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
                         <span class="email-icon"><i class="fab fa-facebook"></i> <a href="#">EAS Customs / @eascustoms75</a></span>
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
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php  if (isset($_SESSION['username'])) : ?><p> <i class="fas fa-user-circle"></i> Welcome <?php echo $_SESSION['username']; ?> <span class="caret"></span></p>
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


<div class="jumbotron">    
<div class="container">
   <?php if (isset($_SESSION['success'])) : ?>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
    <?php endif ?>
    <?php if (isset($_SESSION['changepassword'])) : ?>
          <?php 
            echo $_SESSION['changepassword']; 
            unset($_SESSION['changepassword']);
          ?>
    <?php endif ?>
   </div>
 <div class="container">
 <div class="row">
 <div class="col-md-12 col-sm-12">
     
   <div class="panel panel-default" id="headings" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
       
  <div class="panel-heading" style="background-color: #b80011; background: -webkit-linear-gradient(-135deg, #f06d06, #B80011); background: -o-linear-gradient(-135deg, #f06d06, #B80011); background: -moz-linear-gradient(-135deg, #f06d06, #B80011); background: linear-gradient(-135deg, #f06d06, #B80011);color: white; font-size: 18px;"><i class="fas fa-user"> </i>  User Profile</div>
       
  <div class="panel-body" id="serviceDisplay" style="overflow-y: auto;height: ;">
 
  <div class="row">
  <div class="col-sm-6 col-md-6">
  <h4>General Information</h4>
      <label for="username">Username:</label>
     <?php echo $_SESSION['username']; ?><hr style="padding: 0px;margin: 0px;">
  
  <?php 
   foreach($personalinfo->personal_info as $personalinfo){
   ?>
      <label for="username">Account Name:</label>
      <?php echo ucfirst($personalinfo['firstName']).' '.ucfirst($personalinfo['middleName'][0]).'. '.ucfirst($personalinfo['lastName']); ?><hr style="padding: 0px;margin: 0px;">
  <br>
    <div class="pull-right">
      <button type="button" class="btn" style="background-color: #4caf50; color: white;" data-toggle="modal" data-target="#changepassword"><i class="fas fa-user-shield"></i> Change Password</button>
  
<div id="changepassword" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header" style="background-color:#4caf50; color: #ffffff;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title" style="color: white;"> <i class="fas fa-users-cog"></i> Change Password</h5>
      </div>
      <div class="modal-body" style="margin:0;">
      <form action="accountsettings.php" method="POST">
      <input type="hidden" name="personalId" value='<?php echo $personalinfo['personalId']; ?>'>
      
      <div class="form-group">
      <label for="existingpassword">Please Fill up your Old password:</label>
      <input type="password" class="form-control" name="existingpassword" id="existingpassword" title="Type your Old password" placeholder="Old Password" required="" oninvalid="this.setCustomValidity('Old password is Invalid.')" oninput="setCustomValidity('')" pattern="[A-Za-z0-9]{1,20}">
      <span style="font-size: 0.9em"></span>
      </div>

      <div class="form-group">

      <label for="password">New Password:</label>
      <input type="password" class="form-control" name="accountpassword" id="accountpassword" title="must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter">
      <div id="passwordpat_msg" style="display: none; color: red;font-size: 0.9em"> Must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter.</div>
      <div id="accountpassword_msg" style="display: none; color: red;font-size: 0.9em">password is empty</div>
      <span style="font-size: 0.9em"></span>
      </div>
      
      <div class="form-group">
      <label for="accountconfirm_password">Confirm Password:</label>
      <input type="password" class="form-control" name="accountconfirm_password" id="accountconfirm_password">
      <span id="message" style="font-size: 0.9em"></span>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" style="background-color: #4caf50; color: white;" id="changepassbutton" name="changepassword" class="btn disabled"><i class="fas fa-check-square"></i> Save</button>
        <button type="button" class="btn" style="color: black;" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
      </form>
      </div>
      </div>
     

  </div>
</div>
      
    </div>
  
  </div>
    <div class="vl"></div>
    <div class="col-sm-6 col-md-6">
    <div class="form-group">
    <h4>Contact Information</h4>
    </div>
      <label for="email">Email:</label>
      <?php echo $personalinfo['email']; ?><hr style="padding: 0px;margin: 0px;">
      <label for="phone">Contact Number:</label>
      <?php echo '+63'.$personalinfo['mobileNumber']; ?><hr style="padding: 0px;margin: 0px;">
      <label for="address">Address:</label>
      <?php echo ucfirst($personalinfo['address']); ?><hr style="padding: 0px;margin: 0px;">
      
      <hr style="padding: 0px;margin: 0px;">
  </div>
  </div>
  <div class="form-group">
    <br>
  <div class="pull-right">
  <form action="personalinfoedit.php" >
  <button type="button" class="btn" data-toggle="modal" data-target="#viewVehicle" style="background-color: #308ee0; color: white;"><i class="fas fa-car"></i> My Vehicle</button>
  <button type="submit" class="btn" style="background-color: #000099; color: white;"><i class="fas fa-user-edit"></i> Edit </button>
  </form>
  </div>

<!-- Modal -->
<div id="viewVehicle" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header" style="background-color: #308ee0">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title" style="color: white;"> <i class="fas fa-car"></i> My Vehicles</h5>
      </div>
      <div class="modal-body" style="margin:0;">
        <h5>Car Registered</h5>
        <?php 
         foreach($vehicleinfo->vehicle_info as $vehicleinfo):
         ?> 
         <b><?= $vehicleinfo['plateNumber']; ?></b> <?= $vehicleinfo['make']; ?> <?= $vehicleinfo['series']; ?> <?= $vehicleinfo['yearModel']; ?> <br><hr style="padding: 0;margin:0;">
         <?php 
          endforeach;
          ?>

      </div>
      <div class="modal-footer">
          <a href="vehiclesinfo.php" class="btn" style="background-color: #308ee0;color: white;"><i class="fas fa-info-circle"></i> Vehicles Info</a>
        <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
        
      </div>
    </div>

  </div>
</div>

  </div>

<?php
   
    }

  ?>
  </div>
</div>
  
  
</div>
          

               </div>
          </div>
        </div>
     </section>

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
     <script src="js/script.js"></script>
     <script src="js/notifinvoice.js"></script>
     <script src="js/notif.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
<?php
     session_start();
    include 'process/database.php';
    include 'process/server.php';
    include 'process/info.php';
    include 'process/auth.php';
    include 'process/process.php';
     $username=$_SESSION['username'];
     $profile =new database;
     $profile->user_profile($username);
     $id = $_SESSION['id'];
     $pdo = new PDO('mysql:host=localhost;dbname=eas', 'eas', 'eas2018');
     $result = $pdo->query("select personalId from personalinfo where user_id = '$id'")->fetchColumn();
     $_SESSION['personalId'] = $result;
     $personalinfo =new database;
     $personalinfo->personal_info();
     $vehicleinfo =new database;
     $vehicleinfo->vehicle_info();
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>EAS Customs - Account</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" href="images/Logo.png">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <!-- Font Awesome Version 5.0 -->
     <link rel="stylesheet" href="css/all.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

     <script src="js/jquery.js"></script>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER 
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>
    -->

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
                         <span class="email-icon"><i class="fab fa-facebook"></i> <a href="#">EAS Customs / @eascustoms75</a></span>
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
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php  if (isset($_SESSION['username'])) : ?><p> <i class="fas fa-user-circle"></i> Welcome <?php echo $_SESSION['username']; ?> <span class="caret"></span></p>
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


<div class="jumbotron">    
<div class="container">
   <?php if (isset($_SESSION['success'])) : ?>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
    <?php endif ?>
    <?php if (isset($_SESSION['changepassword'])) : ?>
          <?php 
            echo $_SESSION['changepassword']; 
            unset($_SESSION['changepassword']);
          ?>
    <?php endif ?>
   </div>
 <div class="container">
 <div class="row">
 <div class="col-md-12 col-sm-12">
     
   <div class="panel panel-default" id="headings" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
       
  <div class="panel-heading" style="background-color: #b80011; background: -webkit-linear-gradient(-135deg, #f06d06, #B80011); background: -o-linear-gradient(-135deg, #f06d06, #B80011); background: -moz-linear-gradient(-135deg, #f06d06, #B80011); background: linear-gradient(-135deg, #f06d06, #B80011);color: white; font-size: 18px;"><i class="fas fa-user"> </i>  User Profile</div>
       
  <div class="panel-body" id="serviceDisplay" style="overflow-y: auto;height: ;">
 
  <div class="row">
  <div class="col-sm-6 col-md-6">
  <h4>General Information</h4>
      <label for="username">Username:</label>
     <?php echo $_SESSION['username']; ?><hr style="padding: 0px;margin: 0px;">
  
  <?php 
   foreach($personalinfo->personal_info as $personalinfo){
   ?>
      <label for="username">Account Name:</label>
      <?php echo ucfirst($personalinfo['firstName']).' '.ucfirst($personalinfo['middleName'][0]).'. '.ucfirst($personalinfo['lastName']); ?><hr style="padding: 0px;margin: 0px;">
  <br>
    <div class="pull-right">
      <button type="button" class="btn" style="background-color: #4caf50; color: white;" data-toggle="modal" data-target="#changepassword"><i class="fas fa-user-shield"></i> Change Password</button>
  
<div id="changepassword" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header" style="background-color:#4caf50; color: #ffffff;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title" style="color: white;"> <i class="fas fa-users-cog"></i> Change Password</h5>
      </div>
      <div class="modal-body" style="margin:0;">
      <form action="accountsettings.php" method="POST">
      <input type="hidden" name="personalId" value='<?php echo $personalinfo['personalId']; ?>'>
      
      <div class="form-group">
      <label for="existingpassword">Please Fill up your Old password:</label>
      <input type="password" class="form-control" name="existingpassword" id="existingpassword" title="Type your Old password" placeholder="Old Password">
      <span style="font-size: 0.9em"></span>
      </div>

      <div class="form-group">

      <label for="password">New Password:</label>
      <input type="password" class="form-control" name="accountpassword" id="accountpassword" title="must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter">
      <div id="passwordpat_msg" style="display: none; color: red;font-size: 0.9em"> Must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter.</div>
      <div id="password_msg" style="display: none; color: red;font-size: 0.9em">password is empty</div>
      <span style="font-size: 0.9em"></span>
      </div>
      
      <div class="form-group">
      <label for="accountconfirm_password">Confirm Password:</label>
      <input type="password" class="form-control" name="accountconfirm_password" id="accountconfirm_password">
      <span id="message" style="font-size: 0.9em"></span>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" style="background-color: #4caf50; color: white;" id="changepassbutton" name="changepassword" class="btn disabled"><i class="fas fa-check-square"></i> Save</button>
        <button type="button" class="btn" style="color: black;" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
      </form>
      </div>
      </div>
     

  </div>
</div>
      
    </div>
  
  </div>
    <div class="vl"></div>
    <div class="col-sm-6 col-md-6">
    <div class="form-group">
    <h4>Contact Information</h4>
    </div>
      <label for="email">Email:</label>
      <?php echo $personalinfo['email']; ?><hr style="padding: 0px;margin: 0px;">
      <label for="phone">Contact Number:</label>
      <?php echo '+63'.$personalinfo['mobileNumber']; ?><hr style="padding: 0px;margin: 0px;">
      <label for="address">Address:</label>
      <?php echo ucfirst($personalinfo['address']); ?><hr style="padding: 0px;margin: 0px;">
      
      <hr style="padding: 0px;margin: 0px;">
  </div>
  </div>
  <div class="form-group">
    <br>
  <div class="pull-right">
  <form action="personalinfoedit.php" >
  <button type="button" class="btn" data-toggle="modal" data-target="#viewVehicle" style="background-color: #308ee0; color: white;"><i class="fas fa-car"></i> My Vehicle</button>
  <button type="submit" class="btn" style="background-color: #000099; color: white;"><i class="fas fa-user-edit"></i> Edit </button>
  </form>
  </div>

<!-- Modal -->
<div id="viewVehicle" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header" style="background-color: #308ee0">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title" style="color: white;"> <i class="fas fa-car"></i> My Vehicles</h5>
      </div>
      <div class="modal-body" style="margin:0;">
        <h5>Car Registered</h5>
        <?php 
         foreach($vehicleinfo->vehicle_info as $vehicleinfo):
         ?> 
         <b><?= $vehicleinfo['plateNumber']; ?></b> <?= $vehicleinfo['make']; ?> <?= $vehicleinfo['series']; ?> <?= $vehicleinfo['yearModel']; ?> <br><hr style="padding: 0;margin:0;">
         <?php 
          endforeach;
          ?>

      </div>
      <div class="modal-footer">
          <a href="vehiclesinfo.php" class="btn" style="background-color: #308ee0;color: white;"><i class="fas fa-info-circle"></i> Vehicles Info</a>
        <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
        
      </div>
    </div>

  </div>
</div>

  </div>

<?php
   
    }

  ?>
  </div>
</div>
  
  
</div>
          

               </div>
          </div>
        </div>
     </section>

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
     <script src="js/script.js"></script>
     <script src="js/notifinvoice.js"></script>
     <script src="js/notif.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
