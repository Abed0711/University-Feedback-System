<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Baust Feedback System</title>



  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

  <!-- Font awesome -->
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <!-- Slick slider -->
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
  <!-- Fancybox slider -->
  <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen"/>
  <!-- Theme color -->
  <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

  <!-- Main style sheet -->
  <link href="assets/css/style.css" rel="stylesheet">


  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet'
        type='text/css'>

</head>



<body>

<section id="mu-menu">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- LOGO -->
        <!-- TEXT BASED LOGO -->
        <a class="navbar-brand" href="index.php"><img src="assets/img/BAUST.png" alt="logo" width="90px"></a>
        <a class="navbar-brand" href="index.php"><i
            class=""></i><span> BAUST Feedback System </span></a>
        <!-- IMG BASED LOGO  -->
        <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php?info=registration">Registration</a></li>
          <li><a href="index.php?info=login">Login</a></li>
          <li><a href="index.php?info=contact">contact</a></li>

          <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
</section>
<!-- End menu -->


<!-- End menu -->

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						
						 
						 if($info=="contact")
						 {
						 include('contact.html');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
	
	
	
    <!-- Page Content -->
    <div class="container" style="width: 100%">

        <div class="row">
            <div class="col-lg-12">
				
				
			<div class="col-sm-10" style="margin-top:130px;margin-bottom:80px">
				

   <!--Vetri Contents starts here-->
			
			<div>

      <div class="col-lg-3 col-md-3  col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="assets/img/student.png" alt="teacher img">
                      
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                    
                      <a href="index.php?info=login"> 
                      <button type="button" class="btn btn-success"><h3>Student Login</h3></button></a>

                      
                     
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-3  col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="assets/img/teacher.png" alt="teacher img">
                      
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                    <a href="index.php?info=faculty_login"> 
                      <button type="button" class="btn btn-success"><h3>See Response</h3></button></a>

                      
                      
                    </div>
                  </div>
                </div>

	</div>

	<!--Vetri Contents ends here-->

			</div>
			
				<?php } ?>
            </div>
            
    </div>
    <!-- /.container -->

    

    

    
	

    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
<!-- Start footer -->
<footer id="mu-footer">
  <!-- start footer top -->
  <div class="mu-footer-top">
    <div class="container">
      <div class="mu-footer-top-area">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="mu-footer-widget">
              <h4>Information</h4>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="">Features</a></li>
                <li><a href="">Courses</a></li>
                <li><a href="">Event</a></li>
                <li><a href="">Sitemap</a></li>
                <li><a href="">Term Of Use</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="mu-footer-widget">
              <h4>Student Help</h4>
              <ul>
                <li><a href="">Get Started</a></li>
                <li><a href="#">My Questions</a></li>
                <li><a href="">Download Files</a></li>
                <li><a href="">Latest Course</a></li>
                <li><a href="">Academic News</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="mu-footer-widget">
              <h4>News letter</h4>
              <p>Get latest update, news & academic offers</p>
              <form class="mu-subscribe-form">
                <input type="email" placeholder="Type your Email">
                <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
              </form>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="mu-footer-widget">
              <h4>Contact</h4>
              <address>
                <p>Saidpur Cantonment, Saidpur</p>
                <p>Phone: +8801769675560 </p>
                <p>Website:www.baust.edu.bd</p>
                <p>Email: info@baust.edu.bd</p>
              </address>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end footer top -->
  <!-- start footer bottom -->
  <div class="mu-footer-bottom">
    <div class="container">
      <div class="mu-footer-bottom-area">
        <p>&copy; All Right Reserved. Designed by <a
            href="http://www.baust.edu.bd/departments/index/computer-science-and-engineering" rel="nofollow">DEPARTMENT
          OF CSE, BAUST</a></p>
      </div>
    </div>
  </div>
  <!-- end footer bottom -->
</footer>
<!-- End footer -->


<!-- jQuery library -->
<script src="assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.js"></script>
<!-- Slick slider -->
<script type="text/javascript" src="assets/js/slick.js"></script>
<!-- Counter -->
<script type="text/javascript" src="assets/js/waypoints.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
<!-- Mixit slider -->
<script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

<!-- Custom js -->
<script src="assets/js/custom.js"></script>

</body>
</html>