<?php
session_start();

include('process/server.php'); 

if (isset($_SESSION['username'])) {            
    header('location: home.php');
          }

?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>EAS Customs - Login</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
    
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">

     <link rel="icon" href="images/Logo.png">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/all.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
    
     <!-- LOGIN CSS -->
     <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
     <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
     <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
     <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
     <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
     <link rel="stylesheet" type="text/css" href="css/util.css">
   <link rel="stylesheet" type="text/css" href="css/main.css">


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
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                        <span class="email-icon"><i class="fas fa-user-circle"></i> <a href="login.php">LOGIN</a></span>
                        <span class="email-icon"><i class="fas fa-id-card"></i> <a href="register.php">REGISTER</a></span>
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
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                     <img src="images/Logo.png" class="logoo" alt="logo" />
                     
                    <a href="index.php" class="navbar-brand">EAS CUSTOMS</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li class="appointment-btn"><a href="login.php?loginrequired=1">Make an appointment</a></li>
                    </ul>
               </div>

          </div>
     </section>

   
   
     <!-- LOGIN PAGE -->
  <div class="limiter">
    <div class="container-login100">
            <div class="login100-pic js-tilt" data-tilt>
        <span class="login500-form">
            Fuels Passion Beyond Full Throttle
        </span>
                <span class="login700-form">
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    Since 2002
        </span>
            </div>
            
      <div class="wrap-login100">
        <form class="login100-form validate-form" id="appointment-form" role="form" method="post" action="login.php">
          <span class="login100-form-title">
            Login
          </span>
                         <?php if (isset($_SESSION['unauthorized_user'])) : ?>
                         <?php 
                           echo $_SESSION['unauthorized_user']; 
                             unset($_SESSION['unauthorized_user']);
                         ?>
                         <?php endif ?>
                         <?php if (isset($_SESSION['logged_out'])) : ?>
                         <?php 
                           echo $_SESSION['logged_out']; 
                             unset($_SESSION['logged_out']);
                         ?>

                         <?php endif ?>
                         <?php if (isset($_SESSION['timeout'])) : ?>
                         <?php 
                         
                           echo $_SESSION['timeout']; 
                             unset($_SESSION['timeout']);
                         ?>
                         <?php endif ?>
                         <?php if (isset($_SESSION['login_first'])) : ?>
                         <?php 
                         
                           echo $_SESSION['login_first']; 
                             unset($_SESSION['login_first']);
                         ?>
                         <?php endif ?>
                         <?php if (isset($_SESSION['register_success'])) : ?>
                         <?php 
                         
                           echo $_SESSION['register_success']; 
                             unset($_SESSION['register_success']);
                         ?>
                         <?php endif ?>
                         <?php if (isset($_SESSION['emptyusername'])) : ?>
                         <?php 
                         
                           echo $_SESSION['emptyusername']; 
                             unset($_SESSION['emptyusername']);
                         ?>
                         <?php endif ?>
                         <?php if (isset($_SESSION['emptypassword'])) : ?>
                         <?php 
                         
                         echo $_SESSION['emptypassword']; 
                           unset($_SESSION['emptypassword']);
                         ?>
                         <?php endif ?>
                         <?php if (isset($_SESSION['errormsg'])) : ?>
                         <?php 
                         
                         echo $_SESSION['errormsg']; 
                           unset($_SESSION['errormsg']);
                         ?>
                         <?php endif ?>
                         <?php
                         if(isset($_REQUEST['success'])=="done")
                          {
                              echo '<div class="alert alert-success fade in" align="center">
                              <a href="#" class="close" data-dismiss="alert" >&times;</a>
                              <i class="fas fa-check-circle"></i> <strong>Notice</strong> Registration Successful Please Login </div>';
                              unset($_REQUEST['success']);
                          }
                         ?>
                         <?php
                         if(isset($_REQUEST['loginrequired'])=="1")
                          {
                              echo '<div class="alert alert-danger fade in" align="center">
                              <a href="#" class="close" data-dismiss="alert" >&times;</a>
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <strong>Notice</strong>  Please login first. </div>';
                              unset($_REQUEST['loginrequrired']);
                          }

                         ?>
                         <?php if (isset($_SESSION['invalid_password_username'])) : ?>
                         <?php 
                         
                           echo $_SESSION['invalid_password_username']; 
                           unset($_SESSION['invalid_password_username']);
                         ?>
                         <?php endif ?>



          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" id="username" name="username" placeholder="Username">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="login_user">
              Login
            </button>
          </div>

          <div class="text-center p-t-12">
            <a class="txt1" href="register.php">
              Don't have an account? Register here.
            </a>
                        <br>
          </div>
                    
                    <div class="text-center p-t-15">
                        
                    </div>

        </form>
      </div>
    </div>
  </div>

     <!-- FOOTER -->
<footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <p class="wow fadeInUp" data-wow-delay="0.4s" style="font-size:2vw; color:#404040; font-weight: bold; letter-spacing: 2px;">Contact Info</p>
                              <br>
                              <div class="contact-info">
                                   <p style="font-size:1vw;"><i class="fas fa-phone" style="font-size:1.3vw; color:#404040"></i> &nbsp;&nbsp;+639257196568 / +639304992021</p>
                                   <p style="font-size:1vw;"><i class="fas fa-envelope" style="font-size:1.3vw; color:#404040"></i> &nbsp;&nbsp;eascustoms@yahoo.com</p>
                                  <p style="font-size:1vw;"><i class="fab fa-facebook-square" style="font-size:1.3vw; color:#404040"></i> &nbsp;&nbsp;EAS Customs / @eascustoms75</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                            <p class="wow fadeInUp" data-wow-delay="0.4s" style="font-size:2vw; color:#404040; font-weight: bold; letter-spacing: 2px;">Opening Hours</p>
                            <br> 
                            <div class="contact-info">
                               <p style="font-size:1vw;"><i class="fas fa-calendar-check" style="font-size:1.3vw;color:#404040"></i> &nbsp;&nbsp;Monday - Saturday <span style="font-weight:bold;">09:00 AM - 05:00 PM</span></p>
                               <p style="font-size:1vw;"><i class="fas fa-calendar-times" style="font-size:1.3vw;color:#404040"></i> &nbsp;&nbsp;Sunday <span style="font-weight:bold;">Closed</span></p>
                               <p style="font-size:1vw;"><i class="fas fa-clock" style="font-size:1.3vw; color:#404040"></i> &nbsp;&nbsp;GMT+8

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
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
    
    
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
    <script src="js/main.js"></script>
    
</body>
</html>