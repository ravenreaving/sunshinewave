<?php
session_start();
require "includes/connection.php";
$id=$_COOKIE['guestid'];

if(empty($_COOKIE['guestid']) && isset($_COOKIE['guestid'])==0)
{
	header("Location:index.php");
}
if(isset($_POST['logout']))
{
	setcookie('guestid',0,time()-60*60*24*365);
	header("Location:index.php");
}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sunshine Wave : Contact</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/sunfavicon.png"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>  
    <!-- Bootstrap progressbar  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/> 
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/bridge-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="assets/js/submit.js"></script>
  </head>
  <body> 
<form action="g_contact.php?id=<?php echo $id;?>" method="POST">
  <!-- BEGAIN PRELOADER -->
 
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header -->
  <header id="header">
    <!-- header top search -->
    <div class="header-top">
      <div class="container">
        
      </div>
    </div>
 
 
  <!-- header bottom -->
    <div class="header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="header-contact">
              <ul>
              
				<a class="login modal-form"  href="g_acc.php?id=<?php echo $id;?>">My Account</a>
				<a class="login modal-form"  href="g_reservation.php?id=<?php echo $id;?>">My Reservation</a>
				
				
              </ul>
            </div>
          </div>
		  
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="header-login">
			
     <!--<input type="submit" name="Save"  class="login-modal-form" />-->
			 <input type="submit" name="logout" value="Logout" class="login modal-form" />
			
            </div>
          </div>
        </div>
      </div>
    </div> 
  </header>
  <!-- End header -->
	  </form>
  

  <!-- BEGIN MENU -->
  <section id="menu-area">      
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.php">Sunshine Wave Resort</a>              
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->                    
        </div>
           <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="g_packages.php?id=<?php echo $id;?>">Packages</a></li>
            <li><a href="g_rooms.php?id=<?php echo $id;?>">Rooms</a></li>
            <li><a href="g_gallery.php?id=<?php echo $id;?>">Gallery</a></li>               
            <li class="active"><a href="g_contact.php?id=<?php echo $id;?>">Contact Us</a></li>
          </ul>                     
        </div><!--/.nav-collapse -->
     
      </div>     
    </nav>
  </section>
  <!-- END MENU -->

  <!-- Start contact section  -->
  <section id="contact">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="title-area">
              <h2 class="title">Have any Questions?</h2>
              <span class="line"></span>
           
            </div>
         </div>
         <div class="col-md-8">
           <div class="cotact-area">
             <div class="row">
               <div class="col-md-8">
                 <div class="contact-area-left">
                   <h4>Contact Information</h4>
                   <p>Description</p>
                   <address class="single-address">
                     <p>Reyes St, Santiago Isabela</p>
                     <a href="https://www.facebook.com/norie.gabuat/?fref=ts">https://www.facebook.com/norie.gabuat/?fref=ts</a>
                     <p>+639159872998</p>
                   </address> 
                   <div class="footer-right contact-social">
                      <a href="https://www.facebook.com/norie.gabuat/?fref=ts"><i class="fa fa-facebook"></i></a>
               
                    </div>                
                 </div>
               </div>
              
             </div>
           </div>
         </div>
       </div>
     </div>
  </section>
  <!-- End contact section  -->

  <!-- Start google map -->
  <section id="google-map">
    <iframe src="https://www.instantstreetview.com/@16.670853,121.534289,-94.64h,2.42p,1z" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>
  <!-- End google map -->

  <!-- Start subscribe us -->
  <section id="subscribe">
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
              <h2>Like us on <a href="https://www.facebook.com/norie.gabuat/?fref=ts">Facebook </a></h2>
			  <form action="" class="subscrib-form">
       
              </form>
             
			    
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End subscribe us -->

  <!-- Start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="footer-left">
           <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="footer-right">
            <a href="index.html"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End footer -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>    
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
 <!-- counter -->
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/jquery.counterup.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 
  <!-- progress bar   -->
  <script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>  
  
 
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
    
  </body>
</html>