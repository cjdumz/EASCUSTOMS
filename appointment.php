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

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
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
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="padding: 0;"><?php  if (isset($_SESSION['username'])) : ?><p> <i class="fas fa-user-circle"></i> Welcome <?php echo $_SESSION['username']; ?> <span class="caret"></span></p>
                  </a>
                  <ul class="dropdown-menu" id="dropdownaccount">
                     <li><a  href="accountsettings.php" style="font-size: 13px;z-index: 9999;"><i class="fa fa-cogs" aria-hidden="true"></i> Account Settings</a></li>
                    <li><a  href="process/logout.php" style="color: red;font-size: 13px;z-index: 9999;"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
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
                  
                    
           
        <!--LEFT SECTION-->   
         <div class="col-xs-12 col-sm-12 " style="width:70%; padding:3px;
           box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center; background-color: white; border-radius: 8px;">
             
              <form method="post" id="appointment_form">
                <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                    <div class="panel-heading" style="text-align:center; background-color: #b80011; background: -webkit-linear-gradient(-135deg, #f06d06, #B80011); background: -o-linear-gradient(-135deg, #f06d06, #B80011); background: -moz-linear-gradient(-135deg, #f06d06, #B80011); background: linear-gradient(-135deg, #f06d06, #B80011);color: white; font-size: 22px;">Make an appointment</div>
                </div>
                <div class="wow fadeInUp box" data-wow-delay="0.2s" style="width: auto; padding:5px;">
                  
                    <!-- Select Car -->
                   <p style="text-align: justify; padding-left:15px; font-size:20px; color:#333333; font-weight: bold;"><i class="fas fa-car"></i> &nbsp;Select Car</p>
                    
                    <hr style="border-color: #b80011; border-top: 2px solid #b80011;">
                     <div class="panel-body" style="overflow-y: auto; height: 100px;">
                                  <select class="form-control" name="vehicle" id="vehicle" style="background-color:#ebecee;font-family: 'Poppins', sans-serif;">
                                                  <option value=" " selected disabled>Choose your Vehicle</option>
                                                  <?php foreach($vehicles as $vehicle): ?>
                                                  <option value="<?= $vehicle['id']; ?>"><?= $vehicle['plateNumber']; ?> <?= ucfirst($vehicle['make']); ?> <?= ucfirst($vehicle['series']); ?></option>
                                                  <?php endforeach; ?>                                                  
                                    </select>
                                </div>
                   
                    <!-- Select Service -->
                   <p style="text-align: justify; padding-left:15px; font-size:20px; color:#333333; font-weight: bold;"><i class="fas fa-cogs"></i> &nbsp;Select Service</p>
                    <hr style="border-color: #b80011; border-top: 2.5px solid #b80011;">

                        <div class="panel-body">
                         <div class ="services" >
                          <ul style="text-align:justify; font-size:17px;">
                            <li><a role="button" id="mechanical" >Mechanical</a></li>
                            <li><a role="button" id="electrical">Electrical</a></li>
                            <li><a role="button" id="customize">Customize</a></li>
                            <li><a role="button" id="bodyRepair">Body Repair</a></li>
                            <li><a role="button" id="painting">Body Paint</a></li>
                            <li><a role="button" id="maintenance">Maintenance</a></li>
                           </ul>
                          </div>
                          <br>
<div class="service-detail" id="mechanical_service" style="display: none; text-align:justify;">    
                          <?php
                          if ($mechanicalservicearrayCheck > 0) {
                            while ($mechanicalservice = mysqli_fetch_assoc($mechanicalservicearray)) {
                          ?>
                           <div class="col-md-4 col-sm-4">
                               <input type="checkbox" name="service[]" id="<?= $mechanicalservice['serviceName']; ?>"  value="<?= $mechanicalservice['serviceName']; ?>"><?= $mechanicalservice['serviceName']; ?><br>
                               </div>
                          <?php 
                            }
                          }else{
                              ?>
                                 <p> NO MECHANICAL SERVICE </p>
                              <?php
                              }
                              ?> 
                            </div>
                        
                            <div class="service-detail" id="electrical_service" style="display: none; text-align:justify;">
                          <?php
                          if ($electricalservicearrayCheck > 0) {
                            while ($electricalservice = mysqli_fetch_assoc($electricalservicearray)) {
                          ?>
                           <div class="col-md-4 col-sm-4">
                               <input type="checkbox" name="service[]" id="<?= $electricalservice['serviceName']; ?>"  value="<?= $electricalservice['serviceName']; ?>"><?= $electricalservice['serviceName']; ?><br>
                               </div>
                          <?php 
                            }
                          }else{
                              ?>
                                 <p> NO ELECTRICAL SERVICE </p>
                              <?php
                              }
                              ?> 
                         </div>
                        
                         <div class="service-detail" id="paint_service" style="display: none; text-align:justify;">
                          <?php
                          if ($paintservicearrayCheck > 0) {
                            while ($paintservice = mysqli_fetch_assoc($paintservicearray)) {
                          ?>
                           <div class="col-md-4 col-sm-4">
                               <input type="checkbox" name="service[]" id="<?= $paintservice['serviceName']; ?>"  value="<?= $paintservice['serviceName']; ?>"><?= $paintservice['serviceName']; ?><br>
                               </div>
                          <?php 
                            }
                          }else{
                              ?>
                                 <p> NO PAINT SERVICE </p>
                              <?php
                              }
                              ?>       
<!--                               <?php
                              if(isset($paintservice->paint_service)){
                               foreach($paintservice->paint_service as $paintservice):
                              ?>  
                               <div class="col-md-4 col-sm-4">
                               <input type="checkbox" name="service[]" id="<?= $paintservice['serviceName']; ?>"  value="<?= $paintservice['serviceName']; ?>"><?= $paintservice['serviceName']; ?><br>
                               </div>
                              <?php 
                                endforeach; 
                              }else{
                              ?>
                                 <p> NO PAINT SERVICE </p>
                              <?php
                              }
                              ?> -->       
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
                  </div>
                    
                    
                    
                    <!-- Other Service -->
                   <p style="text-align: justify; padding-left:15px; font-size:17px; color:#333333; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-cogs"></i> &nbsp;Other Service</p>
                    <div class="panel-body">
                        <textarea class="form-control" rows="5" id="otherService" name="otherService" placeholder="Others" style="background-color:#ebecee;"></textarea>
                      </div>
                    
                    <!-- Select Date -->
                           <?php foreach($personalinfo->personal_info as $personalinfo):?>
                              <input type="hidden" id="personalId" name="personalId" value="<?= $personalinfo['personalId']; ?>">
                            <?php endforeach; ?>   
              
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

                      
                   <p style="text-align: justify; padding-left:15px; font-size:20px; color:#333333; font-weight: bold;"><i class="fas fa-calendar-check"></i> &nbsp;Select Date</p>
                    <hr style="border-color: #b80011; border-top: 2.5px solid #b80011;">
                    <div class="panel-body">
                    <div class="row">
                    <div class="col-sm-3" id="date_body">
                    <b><input type="text" style="font-family: 'Poppins', sans-serif;cursor: pointer;" id="datepicker" name="date" class="form-control" readonly></b>
                    
                    </div>
                    </div>
                    </div>
                  
                          
                  <!-- Additional Message -->
                   <p style="text-align: justify; padding-left:15px; font-size:20px; color:#333333; font-weight: bold;"><i class="fas fa-envelope"></i> &nbsp;Additional Message</p>
                    <hr style="border-color: #b80011; border-top: 2.5px solid #b80011;">
                    <div class="panel-body">
                    <textarea class="form-control" name="additionalMessage" rows="5" id="additionalMessage" name="message" placeholder="Message" style="background-color:#ebecee;"></textarea>
                  </div>
                    
                    
                
                 
                    </div>
                     <div class="form-group" style="text-align: center;">
                      <br>
                      <input type="submit" name="post" id="cf-submit" class="btn btn-danger" value="SUBMIT" style="width: 25%; font-size:17px; font-family: 'Poppins', sans-serif;" />
                    </div>
                    <br>
             

                    </div>


                    <!--RIGHT SECTION-->    
                    <div class="col-xs-12 col-sm-12" style="margin-left:58%; width:25%; padding:3px;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    text-align: center; background-color: white; border-radius: 8px; position:fixed;">

                     <!-- Selected Services -->
                        <div class="panel-heading" style="text-align:center; background-color: #b80011; background: -webkit-linear-gradient(-135deg, #f06d06, #B80011); background: -o-linear-gradient(-135deg, #f06d06, #B80011); background: -moz-linear-gradient(-135deg, #f06d06, #B80011); background: linear-gradient(-135deg, #f06d06, #B80011);color: white; font-size: 18px;">Services Selected</div> 
                         <div class="panel-body" id="serviceDisplay">
                        </div>
                    </div>
                      
             </form>
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
     <script src="js/notifinvoice.js"></script>
     <script src="js/notif.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/script.js"></script>

</body>
</html>