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
    <title>Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="sunfavicon.png"/>
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
    <!-- Progress bar  -->
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
  <form action="g_index.php?id=<?php echo $id;?>" method="POST">
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
              
				<a class="login modal-form"  href="g_act.php?id=<?php echo $id;?>">My Account</a>
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
	  
<!-- -->
	  
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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="g_packages.php?id=<?php echo $id;?>">Packages</a></li>
            <li><a href="g_rooms.php?id=<?php echo $id;?>">Rooms</a></li>
            <li><a href="g_gallery.php?id=<?php echo $id;?>">Gallery</a></li>               
            <li><a href="g_contact.php?id=<?php echo $id;?>">Contact Us</a></li>
          </ul>                     
        </div><!--/.nav-collapse -->
       
      </div>
    </nav>
  </section>
  <!-- END MENU --> 

    <!-- Start Clients brand 
  <section id="clients-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="clients-brand-area">
            <ul class="clients-brand-slide">
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="uploads/bg/function.png"  alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="uploads/bg/catering.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="uploads/bg/seasonal.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                <img src="uploads/bg/garden.png" alt="img">
                </div>
              </li>
               <li class="col-md-3">
                <div class="single-brand">
                  <img src="uploads/bg/function.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="uploads/bg/catering.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="uploads/bg/seasonal.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                <img src="uploads/bg/garden.png" alt="img">
                </div>
              </li>
			  
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Clients brand -->
 
  <!-- Start Feature -->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Special Offers</h2>
            <span class="line"></span>
            <p>There are many types of services that Sunshine Wave Resort Offers to the Costumers</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="service-content">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <i class="fa fa-university service-icon"></i>
                  <h4 class="service-title"><?php  
				 
				  $query="select * from tb_homeservices where title='Function Hall'";
													$result=mysql_query($query);
													$row=mysql_fetch_assoc($result);
													echo $row['title'];?>
</h4>
                  <p> <?php echo $row['details']; ?> </p> 
                </p>
                </div>
              </div> 
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <i class="fa fa-bed service-icon"></i>
                  <h4 class="service-title"><?php  
				 
				  $query="select * from tb_homeservices where title='Sunshine Wave Suites'";
													$result=mysql_query($query);
													$row1=mysql_fetch_assoc($result);
													echo $row1['title'];?></h4>
                  <p><?php echo$row1['details'];?></p>
              
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <i class="fa fa-tree service-icon"></i>
                  <h4 class="service-title"><?php  
				 
				  $query="select * from tb_homeservices where title='Garden Venue'";
													$result=mysql_query($query);
													$row2=mysql_fetch_assoc($result);
													echo $row2['title'];?></h4>
                  <p><?php echo $row2['details']?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Feature -->

  <!-- Start Service -->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Our Services</h2>
            <span class="line"></span>
            <p>There are different types of services that sunshine offers.</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="service-content">
            <div class="row">
        
           
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <i class="fa fa-truck service-icon"></i>
                  <h4 class="service-title"><?php  
				 
				  $query="select * from tb_homeservices where title='Catering Service'";
													$result=mysql_query($query);
													$row2=mysql_fetch_assoc($result);
													echo $row2['title'];?></h4>
              
                  <p><?php echo $row2['details']?></p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <i class="fa fa-birthday-cake service-icon"></i>
                  <h4 class="service-title"><?php  
				 
				  $query="select * from tb_homeservices where title='Cake'";
													$result=mysql_query($query);
													$row2=mysql_fetch_assoc($result);
													echo $row2['title'];?></h4>
              
                  <p><?php echo $row2['details']?></p>
                </div>
              </div>
              <!-- End single service -->
          
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <i class="fa fa-cutlery service-icon"></i>
                  <h4 class="service-title"><?php  
				 
				  $query="select * from tb_homeservices where title='Restaurant'";
													$result=mysql_query($query);
													$row2=mysql_fetch_assoc($result);
													echo $row2['title'];?></h4>
              
                  <p><?php echo $row2['details']?></p>
                </div>
              </div>
              <!-- End single service -->
       
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service -->

  <!-- Start About Us -->
  
  
   <!-- Start portfolio -->
  <section id="portfolio">
    <div class="portfolio-area">
        <!-- portfolio menu -->
		<div class="title-area">
            <h2 class="title">Featured Photos</h2>
            <span class="line"></span>
      
          </div>
      
       </div>      
       <!-- Portfolio container -->
       <div id="mixit-container" class="portfolio-container">
   
	  
      <!-- php code for photography-->  
      
      
       
  
		 
		<?php

$query="select * from tb_gallery where pictype='featured' limit 8";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{
	
	echo  '<div class="single-portfolio mix .'.$row['pictype'].'">
           <div class="single-item">
             <img src="'.$row['picurl'].'" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="'.$row['picurl'].'"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>'.$row['picname'].'</h4>
                
                </div>
             </div>
           </div>
         </div>';
       
	
	
}


?>	 
       
     
        
       </div>        
    </div>
  </section>
  <!-- End portfolio -->
  
  
  
  
  
    <!-- Start about  -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Sunshine Wave Specialties</h2>
            <span class="line"></span>
            <p></p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="about-content">
            <div class="row">
              <div class="col-md-6">
                <div class="our-skill">
                              
                  <div class="our-skill-content">
                  <p>The sunshine wave most costumers wanted to be a part of.</p>
                    <div class="progress"><?php $query="select * from tb_homespec where stitle='Function Hall'";
					$result=mysql_query($query);
					$row2=mysql_fetch_assoc($result);?>
                      <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="<?php echo $row2['spercent']?>">
                        <span class="progress-title"><?php echo $row2['stitle'] ?></span>
                      </div>
                  </div>
                  <div class="progress"><?php $query="select * from tb_homespec where stitle='Garden Venue'";
					$result=mysql_query($query);
					$row2=mysql_fetch_assoc($result);?>
                      <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="<?php echo $row2['spercent']?>">
                        <span class="progress-title"><?php echo $row2['stitle'] ?></span>
                      </div>
                  </div>
                  <div class="progress"><?php $query="select * from tb_homespec where stitle='Resort'";
					$result=mysql_query($query);
					$row2=mysql_fetch_assoc($result);?>
                      <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="<?php echo $row2['spercent']?>">
                        <span class="progress-title"><?php echo $row2['stitle'] ?></span>
                      </div>
                  </div>
                  <div class="progress"><?php $query="select * from tb_homespec where stitle='Catering Service'";
					$result=mysql_query($query);
					$row2=mysql_fetch_assoc($result);?>
                      <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="<?php echo $row2['spercent']?>">
                        <span class="progress-title"><?php echo $row2['stitle'] ?></span>
                      </div>
                  </div>
                  <div class="progress"><?php $query="select * from tb_homespec where stitle='Sunshine Wave Hotel'";
					$result=mysql_query($query);
					$row2=mysql_fetch_assoc($result);?>
                      <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="<?php echo $row2['spercent']?>">
                        <span class="progress-title"><?php echo $row2['stitle'] ?></span>
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
  <!-- end about -->
  
  
  
  <!-- Start subscribe us -->
  <section id="subscribe">
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
			
              
             
			  <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <i class="fa fa-phone service-icon"></i>
                  <h2 >Have a question or inquiries?</h2>
                  <p>Contact Sunshine Wave Resort and Garden Venue +639159872992</p>
                </div>
              </div>
			 
			 
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
             2016 <a target="_blank" href="https://www.facebook.com/norie.gabuat/?fref=ts" title="Sunshine Wave Facebook Page">Sunshine Wave Resort and Garden Venue</a>. All Rights Reserved.
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="footer-right">
          <a href="https://www.facebook.com/norie.gabuat/?fref=ts"><i class="fa fa-facebook"></i>
		  </a>
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