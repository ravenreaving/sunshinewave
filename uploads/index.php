<?php
session_start();
require "includes/connection.php";
$query="select * from tb_contactus";
$result=mysql_query($query);
$row=mysql_fetch_assoc($result);
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
	
		 
	 <script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
	
  </head>
  <body>
  
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
                <li>
                  <div class="phone">
                    <i class="fa fa-phone"></i>
                    <?php  echo $row['con_numb']?>
                  </div>
                </li>
                <li>
                  <div class="mail">
                    <i class="fa fa-envelope"></i>
                    <?php echo $row['con_fb']?>
                  </div>
                </li>
              </ul>
            </div>
          </div> 
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="header-login">
              <a class="login modal-form" data-target="#login-form" data-toggle="modal" href="#">Login / Sign Up</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header -->
  
  <!-- Start login section -->
  <div aria-hidden="false" role="dialog" tabindex="-1" id="login-form" class="modal leread-modal fade in">
    <div class="modal-dialog">
     
	<form method="post">
	<?php

	if(isset($_POST['login']))
{
	if(isset($_POST['uname']) && $_POST['pword'])
	{
		$uname=mysql_real_escape_string($_POST['uname']);
		
		$pword=sha1($_POST['pword']);
		$p=mysql_real_escape_string($pword);
		
		$query="select userid from tb_guest where uname='$uname' AND pword='$p'";
		$result=mysql_query($query);
		$row=mysql_fetch_assoc($result);
		$id=$row['userid'];
		if(!empty($id))
		{
			if(isset($_POST['keep'])!=NULL)
			{
			setcookie('logged',1,time()+60*60*24*365);
			}
			else
			{
			setcookie('logged',1,false);	
			}
			 $_SESSION['userid']=$id;
			header("Location: guestindex.php?id=$id");
		}
		else
		{
		$query="select accid from tb_users where uname='$uname' AND pword='$pword'";
		$result=mysql_query($query);
		$row=mysql_fetch_assoc($result);
		$id=$row['accid'];
		if(!empty($id))
		{
			if(isset($_POST['keep'])!=NULL)
			{
			setcookie('logged',1,time()+60*60*24*365);
			}
			else
			{
			setcookie('logged',1,false);	
			}
			 $_SESSION['adminid']=$id;
			header("Location: adminindex.php?id=$id");
		}
		else
		{
		echo '<script language="javascript">';
		echo 'alert("Invalid Username/ Password!")';
		echo '</script>';
		}
	
		}
		
	}
	
	
}
	
	?>
	
	 <div id="login-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-unlock-alt"></i>Login</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input required type="text" name="uname" placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
              <input required type="password" name="pword" placeholder="Password" class="form-control">
            </div>
             <div class="loginbox">
              <label><input type="checkbox" name="keep"><span>Remember me</span></label>
			  <input type="submit" class="btn signin-btn" name="login" value="Login">
           
            </div>   
	
          </form>
        </div>
        <div class="modal-footer footer-box">
         
          <span>No account ? <a id="signup-btn" href="#">Sign Up.</a></span>            
        </div>
      </div> </form>
	  
	  
	      <!-- Start signup section -->
      <div id="signup-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-lock"></i>Sign Up</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input required placeholder="Firstname" name="fname" class="form-control">
            </div>
			<div class="form-group">
              <input required placeholder="Lastname" name="lname" class="form-control">
            </div>
            <div class="form-group">
              <input required placeholder="Username" name="uname" class="form-control">
            </div>
            <div class="form-group">
              <input required placeholder="Password" name="pword"class="form-control">
            </div>
            <div class="form-group">
              <input required type="password" placeholder="Password" class="form-control">
            </div>
			<tr>
      <td align="right" valign="top"> Validation code:</td>
      <td><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
        <label for='message'>Enter the code above here :</label>
        
        <input id="captcha_code" name="captcha_code" type="text" class="form-control" required>
        
        Can't read the image? click <a href='javascript: refreshCaptcha();'>HERE</a> to refresh.</td>
    </tr>
            <div class="signupbox">
              <span>Already got account? <a id="login-btn" href="#">Sign In.</a></span>
            </div>
            <div class="loginbox">
              <label><input type="checkbox"><span>Remember me</span><i class="fa"></i></label>
              <button class="btn signin-btn" type="button">SIGN UP</button>
            </div>
          </form>
        </div>
      </div>
	  <!-- signup -->
	  
	  
	  
	  
	  
	  
	  
	      </div>
  </div>
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
            <li><a href="packages.php">Packages</a></li>
            <li><a href="rooms.php">Rooms</a></li>
            <li><a href="gallery.php">Gallery</a></li>               
            <li><a href="contact.php">Contact Us</a></li>
          </ul>                     
        </div><!--/.nav-collapse -->
       
      </div>
    </nav>
  </section>
  <!-- END MENU --> 

  <!-- Start slider -->
  <section id="slider">
    <div class="main-slider">
      <div class="single-slide">
        <img src="<?php 
		$query="SELECT * from tb_homebg where bgid=1";
$result=mysql_query($query);
$row=mysql_fetch_assoc($result);
echo $row['bgimage']?>" alt="img">
        <div class="slide-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="slide-article">
                  <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s"><?php echo $row['bgdetails']?></h1>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s"> </p>
                  
                </div>
              </div>
       
			
            </div>
          </div>
        </div>
      </div>
      <div class="single-slide">
        <img src="<?php 
		$query="SELECT * from tb_homebg where bgid=2";
$result=mysql_query($query);
$row=mysql_fetch_assoc($result);
echo $row['bgimage']?>" alt="img">
        <div class="slide-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
            
		<div class="slide-article">
                  <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s"><?php echo $row['bgdetails']?></h1>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s"> </p>
                  
                </div>
			
              </div>
              <!--<div class="col-md-6 col-sm-6">
                <div class="slider-img wow fadeInUp">
                  <img src="assets/images/whys2.png" alt="business man">
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>          
    </div>
  </section>
  <!-- End slider -->

  
  
  <!-- special offers -->
  
  
 
  
  
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
      
      
       
  
		 
		  
         <div class="single-portfolio mix photography">
           <div class="single-item">
             <img src="assets/images/portfolio/recent/jan8.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/recent/jan8.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Event Title</h4>
                  <span>Date</span>
                </div>
             </div>
           </div>
         </div>
       
       
     
        
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
            <h2 class="title">About us</h2>
            <span class="line"></span>
            <p>The history of sunshine and how they started with partners.</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="about-content">
            <div class="row">
              <div class="col-md-12">
                <div class="our-skill">
                  <h3>Sunshine Wave Specialties</h3>                  
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
                  <p>Contact Sunshine Wave Resort and Garden Venue +63915987299</p>
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
             2016 <a target="_blank" href="https://www.facebook.com/norie.gabuat/?fref=ts" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Sunshine Wave Resort and Garden Venue</a>. All Rights Reserved.
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
  <script type="text/javascript" src="js/swave.js"></script>
  </body>
</html>