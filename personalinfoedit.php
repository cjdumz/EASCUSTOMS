<?php
     session_start();
    include 'process/database.php';
    include 'process/server.php';
    include 'process/info.php';
    include 'process/auth.php';

     $username=$_SESSION['username'];
     $profile =new database;
     $profile->user_profile($username);
     $personalinfo =new database;
     $personalinfo->personal_info();

     


?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>EAS Customs - Account</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" href="images/Logo.png">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/all.css">
     <script src="js/jquery.js"></script>

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

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
                       <a href="home.html" class="navbar-brand" >EAS Customs</a>
          </div>

              <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i>  +639257196568 / +639304992021</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Sat)</span>
                         <span class="email-icon"><i class="fab fa-facebook-square" aria-hidden="true"></i> <a href="#">EAS Customs / @eascustoms75</a></span>
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

  <!-- EDIT PERSONAL INFORMATION --> 
  <div class="jumbotron">
 <div class="container">
   <div class="panel panel-default" id="headings" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
  <div class="panel-heading" style="background-color: #000099;color: white; font-size: 18px;"><i class="fas fa-user-cog"></i> &nbsp;Personal Info</div>
  <div class="panel-body" id="serviceDisplay" style="overflow-y: auto;height: auto;">
   <?php 
   foreach($personalinfo->personal_info as $personalinfo){
   ?>
  <form action="personalinfoedit.php" method="POST" >
    <br>
    <input type="hidden" class="form-control" id="username" name="user_id" value="<?php echo $personalinfo['user_id']; ?>" required="" oninvalid="this.setCustomValidity('Username is Invalid.')">
      <div class="row">
      <div class="col-sm-4 col-md-4">
      <label for="firstName">First Name:</label>
      <input type="text" class="form-control" name="firstName" value="<?php echo ucfirst($personalinfo['firstName']); ?>" required="" oninvalid="this.setCustomValidity('First Name is Invalid.')" oninput="setCustomValidity('')" pattern="[A-Za-z]{1,20}">
      </div>
      
      <div class="col-sm-4 col-md-4">
      <label for="middleName">Middle Name:</label>
      <input type="text" class="form-control" id="username" name="middleName" value=" <?php echo ucfirst($personalinfo['middleName']); ?>" required="" oninvalid="this.setCustomValidity('Middle Name is Invalid.')" oninput="setCustomValidity('')" pattern="[A-Za-z]{1,20}" >
      </div>
      
      
      <div class="col-sm-4 col-md-4">
        <label for="lastName">Last Name:</label>
        <input type="text" class="form-control" id="username" name="lastName" value=" <?php echo ucfirst($personalinfo['lastName']); ?>" required="" oninvalid="this.setCustomValidity('Last Name is Invalid.')" oninput="setCustomValidity('')" pattern="[A-Za-z]{1,20}">
      
      </div>
      </div>
      <br>
      <div class="row">
      <div class="col-sm-4 col-md-4">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="username" name="email" value=" <?php echo $personalinfo['email']; ?>" required="" oninvalid="this.setCustomValidity('Email is Invalid.')" oninput="setCustomValidity('')" pattern="^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$">
       </div>
      </div>
      <br>
      <div class="row">
      <div class="col-sm-4 col-md-4">
      <label for="contactNumber">Contact Number:</label>
      <div class="input-group input-group-md">
      <span class="input-group-addon" id="sizing-addon3">+63</span>
      <input type="text" class="form-control" id="contactNumber" name="contactNumber" value="<?php echo $personalinfo['mobileNumber']; ?>" aria-describedby="sizing-addon3" required="" oninvalid="this.setCustomValidity('Contact Number is Invalid.')" oninput="setCustomValidity('')" pattern="[0-9]{1,20}">
      </div>
      </div>
      </div>
      <br>
      <div class="row">
      <div class="col-sm-4 col-md-4">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="username" name="address" value=" <?php echo $personalinfo['address']; ?>" required="" oninvalid="this.setCustomValidity('Address is Invalid.')" oninput="setCustomValidity('')" pattern="^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$">
      </div>
      </div>
      <br>
     <div class="pull-right">
      <button type="submit" class="btn" name="account_edit" style="background-color:  #000099;color: white;"><i class="fas fa-user-edit"></i> Save</button>
      <button onclick="location.href='accountsettings.php'" type="button" class="btn" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cancel</button>
         
         
      </div>
    </form>
      <?php
          }
      ?>
        </div>
      </div>
   </div>
    </div>

                 
    

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