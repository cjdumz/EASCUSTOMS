<?php 
    session_start();
    include 'process/info.php';
    include 'process/auth.php';
    include 'process/server.php';
    include 'process/database.php';
    $username=$_SESSION['username'];
    $profile =new database;
    $profile->user_profile($username);
    $appointmentinfo = new database;
    $appointmentinfo -> appointment_info_activeschedule();


?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>EAS Customs - Request Status</title>
     
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" href="images/Logo.png">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <!-- Font Awesome Version 5.0 -->
     <link rel="stylesheet" href="css/all.css">
     <script src="js/jquery.js"></script>
     
     

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

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
                         <span class="email-icon"><i class="fab fa-facebook"></i> <a href="#">EAS Customs / @eascustoms75</a></span>
                    </div>


                    
        </div>
      </div>

     

     </header>
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

           $jq171(function(){
            $jq171('#datepicker2').datepicker({
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
           $jq171(function(){
            $jq171('#datepicker3').datepicker({
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
    <div class="jumbotron">
     <div class="container">  
    <?php if (isset($_SESSION['success'])) : ?>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']); 
          ?>
    <?php endif ?>
    <?php if (isset($_SESSION['delete'])) : ?>
          <?php 
            echo $_SESSION['delete']; 
              unset($_SESSION['delete']);
          ?>
      <?php endif ?>
      </div>
    
    <div class="container">
    <?php if (isset($_SESSION['appointment_delete'])) : ?>
          <?php 
            echo $_SESSION['appointment_delete']; 
              unset($_SESSION['appointment_delete']);
          ?>
    <?php endif ?>
    <?php if (isset($_SESSION['appointment_accepted'])) : ?>
      <?php 
        echo $_SESSION['appointment_accepted']; 
          unset($_SESSION['appointment_accepted']);
      ?>
    <?php endif ?>
        <?php if (isset($_SESSION['appointment_cancel_Pending'])) : ?>
      <?php 
        echo $_SESSION['appointment_cancel_Pending']; 
          unset($_SESSION['appointment_cancel_Pending']);
      ?>
    <?php endif ?>

    <div class="row">
    <div class="col-xs-12 col-sm-12">
    <div class="panel panel-default" id="headings" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <div class="panel-heading" style="background-color: #ffaf00;color: white; font-size: 18px;"><i class="fas fa-truck-loading"></i> &nbsp;Pending Requests</div>
      <div class="panel-body" id="serviceDisplay" style="overflow-y: auto;height: 450px;">




      <!-- PENDING ANG RESCHEDULED -->        
      <?php
       if ($pendingRequestsresultCheck > 0) {
        while ($appointmentpending = mysqli_fetch_assoc($pendingRequestsresult)) {
      ?>
      <div class="well well-sm" style="margin: 0;"> 
      <br> 
      <b><?= $appointmentpending['plateNumber']; ?> <?= $appointmentpending['make']; ?> <?= $appointmentpending['series']; ?> <?= $appointmentpending['yearModel']; ?></b>
      <?php if ($appointmentpending['status'] == "Pending"){ ?>
        <div class="pull-right">
        <label for="Pending" style="color: #0066cc;">Status:</label>
        <b style="color:orange;"><?= $appointmentpending['status']; ?></b>
        </div>
        <div class="row">
       <div class="col-sm-6 col-md-6">
        <br>
       <label for="desiredDate" style="color: #0066cc;">Date of Appointment:</label>
       <?= date('F d, Y', strtotime($appointmentpending['desiredDate'])); ?><br>
      </div>

      <div class="col-md-6 col-sm-6">
      <br><br><br>
      <div class="pull-right">
      <button type="button" class="btn" style="margin-top: 2px; width: 140px; color:white; background-color:#308ee0;" data-toggle="modal" data-target="#pendingModal<?= $appointmentpending['id']; ?>"><i class="fas fa-info-circle"></i> More Details</button>
          
      <button type="button" class="btn" style="margin-top: 2px; width: 140px; color:black;" data-toggle="modal" data-target="#cancelpendingModal<?= $appointmentpending['id']; ?>"><i class="far fa-calendar-times"></i> Cancel </button>
          

      </div> 
      <div id="pendingModal<?= $appointmentpending['id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background-color:#308ee0; color: white;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><i class="fas fa-concierge-bell"></i> Service Request</h5>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                <label for="created">Date Requested:</label><br>
                <?= date("F d, Y h:i A",strtotime($appointmentpending['created'])); ?>   
               <label for="otherServices">Other Services:</label><br>
                <?= $appointmentpending['otherServices']; ?>
                </div>
                <div class="col-md-6 col-sm-6">
               <label for="services">Services Requested:</label><br>
               <?= preg_replace("/[,]/" , "<br>",$appointmentpending['services']); ?>
                </div>
               </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
            </div>
          </div>
        </div>
      </div>
      <form action="requeststatus.php" method="POST">
      <div id="cancelpendingModal<?= $appointmentpending['id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background-color: #f44336;color: white;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><i class="far fa-calendar-minus"></i> Cancel Appointment</h5>
            </div>
            <div class="modal-body">
                <input name="appointmentId" type="hidden" value="<?= $appointmentpending['id']; ?>">
                Are you sure you want to cancel your appointment on <b><?= date("F d, Y",strtotime($appointmentpending['desiredDate'])); ?></b> ?
      
            </div>
            <div class="modal-footer">
              <button type="submit" name="appointmentcancelPending" class="btn" style="background-color:#f44336; color:white;"><i class="fas fa-check"></i> Yes</button>
              <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</button>
            </div>
          </div>
        </div>
      </div></form>
      </form>
      </div>
      </div>





      <?php
       }  elseif($appointmentpending['status'] == "Rescheduled"){
      ?>  
        <div class="pull-right">
        <label for="Pending" >Status:</label>
        <b style="color:red;"><?= $appointmentpending['status']; ?></b>
        </div><hr style="padding: 0px;margin: 0px;">
        <div class="row">
       <div class="col-sm-6 col-md-6">
       <br>
       <label for="desiredDate" style="color: #0066cc;">Date of Appointment:</label>
       <?= date('F d, Y', strtotime($appointmentpending['desiredDate'])); ?><br><br>

       <label for="dateSuggested" style="color: #0066cc;">Date Suggested:</label><br>
        <?php $dates =explode("|", $appointmentpending['rescheduledate']); ?>
        <?php
        for($i =0; $i < count($dates); $i++){
         echo date("F j, Y",strtotime($dates[$i])).'<br>';
        }
        ?><br>
       <label for="reason" style="color: #0066cc;">Reason:</label><br>
       <hr style="padding: 0px;margin: 0px;">
       <?= $appointmentpending['reason']; ?>



      </div>
      <div class="col-md-6 col-sm-6">
      <br><br><br>
      <div class="pull-right">
      <div class="form-group">
      <?php if ($appointmentpending['adminDate'] == "admin") : ?>
      <button type="button" class="btn" data-toggle="modal" data-target="#approverescheduleModal<?= $appointmentpending['id']; ?>" style="background-color: #4caf50; color:white; width: 140px;"><i class="far fa-calendar-check"></i> Approve </button>
      <?php endif ?>
      <button type="button" class="btn" data-toggle="modal" data-target="#cancelrescheduleModal<?= $appointmentpending['id']; ?>" style="width: 140px; color:black;"> <i class="far fa-calendar-times"></i> Cancel </button> 
      </div>
      <div class="form-group">
      <div class="pull-right">
      <?php if ($appointmentpending['adminDate'] == "admin") : ?>
          
      <button type="button" class="btn" data-toggle="modal" data-target="#rerescheduleModal<?= $appointmentpending['id']; ?>" style="background-color: #ffaf00; color:white; margin-top: 2px; width: 140px;"><i class="far fa-calendar-alt"></i> Reschedule</button>
          
      <?php endif ?>
      <button type="button" class="btn" style="margin-top: 2px; width: 140px; color:white; background-color:#308ee0;" data-toggle="modal" data-target="#rescheduleModal<?= $appointmentpending['id']; ?>"><i class="fas fa-info-circle"></i> More Details</button>
      </div>
      </div>      
      </div>

      <div id="rescheduleModal<?= $appointmentpending['id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->

          <div class="modal-content">
            <div class="modal-header" style="background-color: #308ee0;color: white;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><i class="fas fa-concierge-bell"></i> Service Request</h5>
            </div>
            <div class="modal-body">
            <div class="row">
             <div class="col-md-6 col-sm-6">
                <label for="created" style="color: #0066cc;">Date Requested:</label><br>
                <?= date("F d, Y h:i A",strtotime($appointmentpending['created'])); ?><br><br>

                <label for="services" style="color: #0066cc;">Services Requested:</label><br>
                <?= preg_replace("/[,]/" , "<br>",$appointmentpending['services']); ?> 
             </div>
             <div class="col-md-6 col-sm-6"> 
               <label for="otherServices" style="color: #0066cc;">Other Services:</label><br>
                <?= $appointmentpending['otherServices']; ?>
            </div>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
            </div>
          </div>
        </div>
      </div>

      <div id="rerescheduleModal<?= $appointmentpending['id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <form action="requeststatus.php" method="POST">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #ffaf00;color: white;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><i class="far fa-calendar-alt"></i> Reschedule</h5>
            </div>
            <div class="modal-body">
                <label for="date">Desired date to be Rescheduled:</label>
                <input type="hidden" name="appointmentId" value="<?= $appointmentpending['id']; ?>">
                <b><input type="text" style="font-family: 'Poppins', sans-serif;cursor: pointer;" id="datepicker" name="date[]" class="form-control" placeholder="Date1" required></b><br>
                <b><input type="text" style="font-family: 'Poppins', sans-serif;cursor: pointer;" id="datepicker2" name="date[]" class="form-control" placeholder="Date2*"></b><br>
                <b><input type="text" style="font-family: 'Poppins', sans-serif;cursor: pointer;" id="datepicker3" name="date[]" class="form-control" placeholder="Date3*"></b><br>

                <label for="reasonStated">Reason:</label><br>
                <textarea class="form-control" name="reasonStated" rows="5" ></textarea>   
            </div>
            <div class="modal-footer">
              <button type="submit" name="appointmentrescheduleRescheduled" class="btn" style="background-color: #ffaf00; color:white;"><i class="fas fa-times-circle"></i> Save</button>
              <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
            </div>
          </div>
          </form>
        </div>
      </div>

      <div id="cancelrescheduleModal<?= $appointmentpending['id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <form action="requeststatus.php" method="POST">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #f44336;color: white;">
               <input type="hidden" name="appointmentId" value="<?= $appointmentpending['id']; ?>">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><i class="far fa-calendar-minus"></i> Cancel Appointment</h5>
            </div>
            <div class="modal-body">

                Are you sure you want to cancel your appointment on <b><?= date("F d, Y",strtotime($appointmentpending['desiredDate'])); ?></b> ?

            </div>
            <div class="modal-footer">
              <button type="submit" style="background-color:#f44336; color:white;" name="appointmentrescheduleCancel" class="btn"><i class="fas fa-check"></i> Yes</button>
              <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</button>
            </div>
          </div>
          </form>
        </div>
      </div>



      <div id="approverescheduleModal<?= $appointmentpending['id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background-color: #4caf50;color: white;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><i class="fas fa-check-square"></i> Approve Date</h5>
            </div>
            <div class="modal-body">
              <form action="requeststatus.php" method="POST">
                <input type="hidden" name="appointmentId" value="<?= $appointmentpending['id']; ?>">
                <input type="hidden" name="adminDate" value="<?= $appointmentpending['adminDate']; ?>">
                <input type="hidden" name="plateNumber" value="<?= $appointmentpending['plateNumber']; ?>">
                <input type="hidden" name="make" value="<?= $appointmentpending['make']; ?>">
                <input type="hidden" name="series" value="<?= $appointmentpending['series']; ?>">
                <input type="hidden" name="yearModel" value="<?= $appointmentpending['yearModel']; ?>">
                <label for="created" style="color: #0066cc;">Date:</label><br>
                <hr style="padding: 0px;margin: 0px;">
                <?php $dates =explode("|", $appointmentpending['rescheduledate']); ?>
                <?php
                for($i =0; $i < count($dates); $i++){
                 echo '<input type="radio" name="date" value='.$dates[$i].'>'.date("F j, Y",strtotime($dates[$i])).'<br>';
                }
                ?>
                  <h5>Would you like to choose this date for your appointment?</h5>
                <br>
            </div>
            <div class="modal-footer">
              <button type="submit" style="background-color:#4caf50; color:white;" class="btn" name="appointmentAccepted" value="<?= $appointmentpending['id']; ?>" ><i class="fas fa-check"></i> Yes</button>
              <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-ban"></i> Cancel</button>
             </form>
            </div>
          </div>
        </div>
      </div>


      </div>
      </div>
      <?php
      }
      ?>
      </div>
      <br>
      <?php 
         }
        } else {
          echo '<ol class="breadcrumb" style = "text-align: center;">
              <li class="breadcrumb-item active" aria-current="page">NO PENDING REQUESTS</li>
            </ol>';
        }
      ?>
    </div>
    </div>

    </div>
    </div>
  </div>
  </div>

    <!-- END OF JUMBOTRON -->
 

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