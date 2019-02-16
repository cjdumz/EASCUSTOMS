<?php
session_start();
include 'process/authhome.php';
include 'sendsms.php';
include 'threedayssms.php';
include 'onday.php';
include 'process/createContents.php';
include 'process/databaseconnect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>EAS Customs</title>
     <link rel="icon" href="images/Logo.png">
    <!--

    Template 2098 Health

    http://www.tooplate.com/view/2098-health

    -->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet" href="css/all.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/all.css">
     
    
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/index-style.css">
     <link rel="stylesheet" href="css/style.css">

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
                        <span class="email-icon"><i class="fas fa-user-circle" aria-hidden="true"></i> <a href="login.php">LOGIN</a></span>
                        <span class="email-icon"><i class="fas fa-id-card" aria-hidden="true"></i> <a href="register.php">REGISTER</a></span>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i>  +639257196568 / +639304992021</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 09:00 AM - 05:00 PM (Mon-Sat)</span>
                         <span class="email-icon"><i class="fab fa-facebook-square"></i> <a href="#">EAS Customs / @eascustoms75</a></span>
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

                    <a href="index.php" class="navbar-brand"> EAS CUSTOMS</a>


               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#services" class="smoothScroll">Services</a></li>
                         <li><a href="#fc" class="smoothScroll">Featured Cars</a></li>
                         <li><a href="#team" class="smoothScroll">The Team</a></li>
                         <li><a href="#feedback" class="smoothScroll">Feedback</a></li>
                         <li><a href="#google-map" class="smoothScroll">Find Us</a></li>
                         <li class="appointment-btn"><a href="appointment.php">Make an appointment</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Let's make the most of your car</h3>
                                             <h1>Fuels Passion Beyond Full Throttle</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Team</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Find out more about us.</h3>
                                             <h1>What is EAS Customs?</h1>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Find out about what we do.</h3>
                                             <h1>Services Beyond Expectations</h1>
                                             <a href="#services" class="section-btn btn btn-default btn-blue smoothScroll">See our Services</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="about-info">
                              <p class="wow fadeInUp" data-wow-delay="0.6s" style="text-align: center; font-size:3.5vw; color: black; font-weight:bold; letter-spacing: 5px;">Welcome to EAS Customs</p>
                             <br>
                             <br>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p style="text-align: justify;text-justify: inter-word; font-size:1.3vw; color:#4d4d4d;">EAS customs is a family-owned business located at #08 Regidor St., Pacdal Baguio City, Benguet. The shop was formerly known as “Toot’s Auto Repair Shop”. The business began as a small-time automotive repair shop in the year 2002. The shop catered mechanical works and was only using the garage of the owner’s house. “Toot’s Auto Repair Shop” was changed to “Enriques A. Simeon Auto Repair Shop” which was named after the owner of the company.</p>
                                  <br>
                                   <p style="text-align: justify;text-justify: inter-word; font-size:1.3vw; color:#4d4d4d;">The shop is one of the few auto repair shops that specializes in American and European-made automobiles (eg. BMW, Opel, Ford, Mini Cooper, Mercedes Benz, Chevrolet, and Cadillac).</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                              </figure>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>

     <!-- SERVICES -->
     <section id="services" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2 style="letter-spacing: 5px;"> Services</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='body_paint'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="max-width:100%; height:32%;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <h3>Body Paint</h3>
                                   <p>'.$row['description'].'</p>
                                   
                            </div>
                                ';
                            }
                        ?>
                              
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='body_repair'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="max-width:100%; height:32%;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <h3>Body Repair</h3>
                                   <p>'.$row['description'].'</p>
                                   
                            </div>
                                ';
                            }
                        ?>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='customize'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="max-width:100%; height:32%;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <h3>Customize</h3>
                                   <p>'.$row['description'].'</p>
                                   
                            </div>
                                ';
                            }
                        ?>
                         </div>
                    </div>

               </div>
          </div>

          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='electrical'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="max-width:100%; height:32%;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <h3>Electrical</h3>
                                   <p>'.$row['description'].'</p>
                                   
                            </div>
                                ';
                            }
                        ?>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='maintenance'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="max-width:100%; height:32%;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <h3>Maintenance</h3>
                                   <p>'.$row['description'].'</p>
                                   
                            </div>
                                ';
                            }
                        ?>
                              
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='mechanical'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="max-width:100%; height:32%;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <h3>Mechanical</h3>
                                   <p>'.$row['description'].'</p>
                                   
                            </div>
                                ';
                            }
                        ?>
                         </div>
                         <br>
                        <br>
                        <br>
                    </div>

               </div>
          </div>
     </section>

     <!-- LATEST CARS -->
     <section id="fc" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                             <br>
                             <br>
                             <h2 style="letter-spacing: 5px;"> Latest Cars</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='first'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="max-width:100%; height:32%;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <span>'.date('F j, Y',strtotime($row['date'])).'</span>
                            </div>
                                ';
                            }
                        ?>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='second'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="max-width:100%; height:32%;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <span>'.date('F j, Y',strtotime($row['date'])).'</span>
                            </div>
                                ';
                            }
                        ?>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='third'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="max-width:100%; height:32%;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <span>'.date('F j, Y',strtotime($row['date'])).'</span>
                            </div>
                                ';
                            }
                        ?>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row"  >

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s" style="letter-spacing: 5px;"> Our Team</h2>
                             <br>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='manager'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="height:63.5%; max-width:100%" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <h3>Manager</h3>
                                   <p>'.$row['description'].'</p>
                                   
                            </div>
                                ';
                            }
                        ?>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='assi_man'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="height:63.5%; max-width:100%" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <h3>Assistant Manager</h3>
                                   <p>'.$row['description'].'</p>
                                   
                            </div>
                                ';
                            }
                        ?>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='supervisor'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="height:63.5%; max-width:100%" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <h3>Supervisor</h3>
                                   <p>'.$row['description'].'</p>
                                   
                            </div>
                                ';
                            }
                        ?>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>

     <!-- FEEDBACKS -->
    <section id="feedback" data-stellar-background-ratio="3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <!-- CONTACT FORM HERE -->
            <form id="appointment-form" role="form" method="post" action="process/feedback.php">
              <!-- SECTION TITLE -->
              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                <h2 style="letter-spacing: 5px;">Feedback
                </h2>
              
                <div class="container">       
                  <?php
                    include_once("db_connect.php");
                    $ratingDetails = "SELECT ratingNumber FROM feedback";
                    $rateResult = mysqli_query($conn, $ratingDetails) or die("database error:". mysqli_error($conn));
                    $ratingNumber = 0;
                    $count = 0;
                    $fiveStarRating = 0;
                    $fourStarRating = 0;
                    $threeStarRating = 0;
                    $twoStarRating = 0;
                    $oneStarRating = 0;
                    while($rate = mysqli_fetch_assoc($rateResult)) {
                    $ratingNumber+= $rate['ratingNumber'];
                    $count += 1;
                    if($rate['ratingNumber'] == 5) {
                    $fiveStarRating +=1;
                    } else if($rate['ratingNumber'] == 4) {
                    $fourStarRating +=1;
                    } else if($rate['ratingNumber'] == 3) {
                    $threeStarRating +=1;
                    } else if($rate['ratingNumber'] == 2) {
                    $twoStarRating +=1;
                    } else if($rate['ratingNumber'] == 1) {
                    $oneStarRating +=1;
                    }
                    }
                    $average = 0;
                    if($ratingNumber && $count) {
                    $average = $ratingNumber/$count;
                    }    
                    ?>        
                  <br>
                
                  <div id="ratingDetails">           
                    <div class="row">             
                      <div class="col-sm-6">                  
                        <h4>Rating and Reviews
                        </h4>
                        <h2 class="bold padding-bottom-7">
                          <?php printf('%.1f', $average); ?> 
                          <small>/ 5
                          </small>
                        </h2>                  
                        <?php
                            $averageRating = round($average, 0);
                            for ($i = 1; $i <= 5; $i++) {
                            $ratingClass = "btn-default btn-grey";
                            if($i <= $averageRating) {
                            $ratingClass = "btn-warning";
                            }
                            ?>
                        <button type="button" class="btn btn-sm <?php echo $ratingClass; ?>" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true">
                          </span>
                        </button> 
                        <?php } ?>                    
                      </div>
                      <div class="col-sm-5">
                        <?php
                            $fiveStarRatingPercent = round(($fiveStarRating/5)*100);
                            $fiveStarRatingPercent = !empty($fiveStarRatingPercent)?$fiveStarRatingPercent.'%':'0%';  
                            $fourStarRatingPercent = round(($fourStarRating/5)*100);
                            $fourStarRatingPercent = !empty($fourStarRatingPercent)?$fourStarRatingPercent.'%':'0%';
                            $threeStarRatingPercent = round(($threeStarRating/5)*100);
                            $threeStarRatingPercent = !empty($threeStarRatingPercent)?$threeStarRatingPercent.'%':'0%';
                            $twoStarRatingPercent = round(($twoStarRating/5)*100);
                            $twoStarRatingPercent = !empty($twoStarRatingPercent)?$twoStarRatingPercent.'%':'0%';
                            $oneStarRatingPercent = round(($oneStarRating/5)*100);
                            $oneStarRatingPercent = !empty($oneStarRatingPercent)?$oneStarRatingPercent.'%':'0%';
                            ?>
                        <div class="pull-left">
                          <div class="pull-left" style="width:38px; line-height:1;">
                            <div style="height:9px; margin:5px 0;">5 &nbsp;
                                 <span style="color:#4caf50;" class="glyphicon glyphicon-star">
                              </span>
                            </div>
                          </div>
                          <div class="pull-left" style="width:230px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                              <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fiveStarRatingPercent; ?>">
                                <span class="sr-only">
                                  <?php echo $fiveStarRatingPercent; ?>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="pull-right" style="margin-left:10px;">
                            <?php echo $fiveStarRating; ?>
                          </div>
                        </div>
                        <div class="pull-left">
                          <div class="pull-left" style="width:38px; line-height:1;">
                            <div style="height:9px; margin:5px 0;">4 &nbsp; 
                              <span style="color: #000099;" class="glyphicon glyphicon-star">
                              </span>
                            </div>
                          </div>
                          <div class="pull-left" style="width:230px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                              <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fourStarRatingPercent; ?>">
                                <span class="sr-only">
                                  <?php echo $fourStarRatingPercent; ?>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="pull-right" style="margin-left:10px;">
                            <?php echo $fourStarRating; ?>
                          </div>
                        </div>
                        <div class="pull-left">
                          <div class="pull-left" style="width:38px; line-height:1;">
                            <div style="height:9px; margin:5px 0;">3 &nbsp;
                              <span style="color:#308ee0;" class="glyphicon glyphicon-star">
                              </span>
                            </div>
                          </div>
                          <div class="pull-left" style="width:230px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                              <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $threeStarRatingPercent; ?>">
                                <span class="sr-only">
                                  <?php echo $threeStarRatingPercent; ?>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="pull-right" style="margin-left:10px;">
                            <?php echo $threeStarRating; ?>
                          </div>
                        </div>
                        <div class="pull-left">
                          <div class="pull-left" style="width:38px; line-height:1;">
                            <div style="height:9px; margin:5px 0;">2 &nbsp; 
                              <span style="color:#ffaf00;" class="glyphicon glyphicon-star">
                              </span>
                            </div>
                          </div>
                          <div class="pull-left" style="width:230px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                              <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $twoStarRatingPercent; ?>">
                                <span class="sr-only">
                                  <?php echo $twoStarRatingPercent; ?>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="pull-right" style="margin-left:10px;">
                            <?php echo $twoStarRating; ?>
                          </div>
                        </div>
                        <div class="pull-left">
                          <div class="pull-left" style="width:38px; line-height:1;">
                            <div style="height:9px; margin:5px 0;">1 &nbsp;&nbsp; <span style="color:#f44336;" class="glyphicon glyphicon-star">
                              </span>
                            </div>
                          </div>
                          <div class="pull-left" style="width:230px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                              <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $oneStarRatingPercent; ?>">
                                <span class="sr-only">
                                  <?php echo $oneStarRatingPercent; ?>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="pull-right" style="margin-left:10px;">
                            <?php echo $oneStarRating; ?>
                          </div>
                        </div>
                      </div>         
                    </div>
                    <div class="row">
                      <div class="col-sm-12" style="height: 425px; overflow-y:auto;">
                        <hr/>
                        <div class="review-block">         
                          <?php
                            $ratinguery = "SELECT ratingId, ratingNumber, name, comments, created, modified FROM feedback";
                            $ratingResult = mysqli_query($conn, $ratinguery) or die("database error:". mysqli_error($conn));
                            while($rating = mysqli_fetch_assoc($ratingResult)){
                            $date=date_create($rating['created']);
                            $reviewDate = date_format($date,"M d, Y");             
                            ?>                  
                          <div class="row">
                            <div class="col-sm-3">
                              <img style="height:65px; width:70px;" class="img-sm rounded-circle mb-4 mb-md-0" src="images/profile.png" alt="profile image">
                              <div class="review-block-date">
                                <?php echo $reviewDate; ?>
                              </div>
                            </div>
                            <div class="col-sm-9">
                              <div class="review-block-rate">
                                <?php
                                    for ($i = 1; $i <= 5; $i++) {
                                    $ratingClass = "btn-default btn-grey";
                                    if($i <= $rating['ratingNumber']) {
                                    $ratingClass = "btn-warning";
                                    }
                                    ?>
                                <button type="button" class="btn btn-xs <?php echo $ratingClass; ?>" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true">
                                  </span>
                                </button>                                    
                                <?php } ?>
                              </div>
                              <div class="review-block-title">
                                <?php echo $rating['name']; ?>
                              </div>
                              <div class="review-block-description">
                                <?php echo $rating['comments']; ?>
                              </div>
                            </div>
                          </div>
                          <hr/>                         
                          <?php } ?>
                            </div>
                          </div>
                        </div> 
                        <br>
                      </div>
                     </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
        <!-- FEEDBACKS -->
        <section id="feedback" data-stellar-background-ratio="3">
          <div class="container">
            <div class="row">
                <!-- CONTACT FORM HERE -->
                <!-- SECTION TITLE --> 
                
              <div class="col-md-12 col-sm-12">
                <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                  <h2 style="letter-spacing: 2px;">We'd love to hear from you
                  </h2>
                  <div class="container">       
                    <div id="ratingDetails">           
                      <div class="row">             
                        <div id="ratingSection" >
                          <div class="row">
                            <div class="col-sm-12">
                              <form id="ratingForm" method="POST">                        
                                <div class="form-group">
                                  <h4>Rate us
                                  </h4>
                                  <button type="button" class="btn btn-warning btn-sm rateButton" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true">
                                    </span>
                                  </button>
                                  <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true">
                                    </span>
                                  </button>
                                  <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true">
                                    </span>
                                  </button>
                                  <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true">
                                    </span>
                                  </button>
                                  <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true">
                                    </span>
                                  </button>
                                  <input type="hidden" class="form-control" id="rating" name="rating" value="1">
                                  <input type="hidden" class="form-control" id="Id" name="Id" value="12345678">
                                </div>         
                                 <div class="form-group">
                                      <label for="usr">Name (Optional)</label>
                                      <input type="text" class="form-control" id="name" name="name" autocomplete="off" placeholder="Your Name">
                                 </div>
                                 <div class="form-group">
                                      <label for="comment">Comment</label>
                                      <textarea class="form-control" rows="5" id="comment" name="comment" required placeholder="Comment"></textarea>
                                 </div>
                                 <div class="form-group">
                                      <button type="submit" class="form-control" id="saveReview" name="submit" style="background:#333333; color:white; height:50px;">Submit</button> 
                                 </div>                 
                            </form>
                            </div>
                          </div>
                        </div>                   
                      </div>         
                    </div>
                  </div>
                </div>
              </div>
                
            </div>    
          </div>
        </section>



     <!-- GOOGLE MAP -->
     <section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
  
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1913.5731268645245!2d120.61448442071841!3d16.417396917170695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391a155e4185ff3%3A0xcab1184b836ba6ac!2sEAS+Customs!5e0!3m2!1sen!2sph!4v1544168498115" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
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
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/rating.js"></script>

</body>
</html>