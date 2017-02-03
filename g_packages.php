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
if(isset($_POST['btncreate']))
{
	if(isset($_POST['paxcount']) && isset($_POST['dishcount'])  && isset($_POST['evtype'])  && isset($_POST['ev_venue']) && isset($_POST['ev_title']))
	{
		$_SESSION['paxcount']=$_POST['paxcount'];
		$_SESSION['dishcount']=$_POST['dishcount'];
		$_SESSION['evtype']=$_POST['evtype'];
		$_SESSION['ev_venue']=$_POST['ev_venue'];
		$_SESSION['ev_title']=$_POST['ev_title'];
	header("Location: g_createplan.php");

		
	}

}

if(isset($_POST['btnplan9']))
{
	if(isset($_POST['p_paxcount']) && isset($_POST['p_ev_venue'])  && isset($_POST['p_dishcount '])  && isset($_POST['p_event_type']) && isset($_POST['p_event_title']))
	{
		$_SESSION['p_paxcount']=$_POST['paxcount'];
		$_SESSION['p_ev_venue']=$_POST['dishcount'];
		$_SESSION['p_dishcount']=$_POST['evtype'];
		$_SESSION['p_event_type']=$_POST['ev_venue'];
		$_SESSION['p_event_title']=$_POST['ev_title'];
	header("Location: g_eventplan.php");

		
	}

}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Packages</title>
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
 <!-- create package -->
	<form action="g_packages.php?id=<?php echo $id; ?>" method="POST">
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
            <li class="active"><a href="g_packages.php?id=<?php echo $id;?>">Packages</a></li>
            <li><a href="g_rooms.php?id=<?php echo $id;?>">Rooms</a></li>
            <li><a href="g_gallery.php?id=<?php echo $id;?>">Gallery</a></li>               
            <li><a href="g_contact.php?id=<?php echo $id;?>">Contact Us</a></li>
          </ul>                     
        </div><!--/.nav-collapse -->
        
      </div>     
    </nav>
  </section>
  <!-- END MENU --> 
  
  <!-- Start single page header -->
  <section id="single-page-header">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>Package Proposals</h2>
			  <h4>Applicable for</h4>
              <p>Wedding, Debut, Reunion, Christening, Seminar, Meeting,Team Building, Birthday, Church Gathering, Christmas Party, Reception, thanks giving party etc...</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Packages</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->

  
  
  
  
  
  
  
  
   <form action="" method="POST">
  <div class="modal fade" id="cpack" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><strong>Create Package: All Fields are Required</strong></h3>
        </div>
        <div class="modal-body">
		<label for="paxcount"><p strong>How many guest will participate in the event? <br> Example: 100 Pax</p></label>
		<input required type="number" name="paxcount" id="paxcount" class="form-control" placeholder="Minimum of 10 Maximum of 300" min="10" max="300" required><br>

		<label for="dishcount"><p strong>How many Main Course do you want in our catering service? <br> Example of Main Courses: Pork, Beef, Fish, Vegetable, Dessert</p></label>
		<input required type="number" name="dishcount" id="dishcount" class="form-control" placeholder="Minimum of 3 Maximum of 15" min="3" max="15" required><br>

		
		<label for="evtype"><p strong>What kind of event you will plan? <br> Example of Event: Birthday Party</p></label>
		<select class="form-control" name="evtype" id="evtype" required>
		<?php
	   $query="select * from tb_packtype order by ptypeid";
	   $result=mysql_query($query);
	   while($row=mysql_fetch_assoc($result))
	   {
		   echo '
		   
		   <option value="'.$row['ptypename'].'">'.$row['ptypename'].'</option>
		   ';
		   
	   }
		
		?>
		</select><br>
		
		<label for="ev_venue"><p strong>What Venue do you want to use? </p></label>
		<select class="form-control" name="ev_venue" id="ev_venue">
		<option value="Function Hall">Function Hall</option>
		<option value="Garden Venue">Garden Venue</option>
		</select><br>
		
			<label for="ev_title"><p strong>What is your Event Title?</p></label>
		<input type="text" max="30" class="form-control" required placeholder="Event Title" name="ev_title"> 
		
        </div>
        <div class="modal-footer">
			<input type="submit" class="btn btn-success btn-md" name="btncreate" value="Proceed">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  </form>
  
  <!-- Package Reminder -->
  <div class="modal fade" id="packageinfo" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reminders</h4>
        </div>
        <div class="modal-body">
          <ul>
		  <li><p>Price per head may change upon event plan or package customization</p></li>
		  <li><p>The total amount will be displayed upon event plan or package customization</p></li>
		  <li><p>Total amount of transaction depends on your additional request / catering courses that you will select.</p></li>
		  </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Package Reminder -->
  
  
    <!-- Package Create -->
  <div class="modal fade" id="packageinfo" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reminders</h4>
        </div>
        <div class="modal-body">
          <ul>
		  <li><p>Price per head may change upon event plan or package customization</p></li>
		  <li><p>The total amount will be displayed upon event plan or package customization</p></li>
		  <li><p>Total amount of transaction depends on your additional request / catering courses that you will select.</p></li>
		  </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Package Create -->
  
  <section id="our-team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h3 class="title">Function Hall & Garden Venue w/ Catering Packages</h3>
            <span class="line"></span><br><br>
            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#cpack"><i class="fa fa-pencil-square"></i> <strong>Create Own Package</strong></button>	
          </div>
        </div>
        <div class="col-md-12">
          <div class="our-team-content">
            <div class="row">
		 
<?php

$query="";
$query="select packid,pname,pvenue,ptypename,pperhead,minpax,maxpax,cater,amenities,freebies,imageurl from tb_packages join tb_packtype on typeid=ptypeid";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{
$p=$row['pperhead'];
$price=number_format($p,2,".",",");





echo ' <div class="modal fade" id="'.$row['packid'].'amenities" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Amenities</h4>
        </div>
        <div class="modal-body">
          <strong><p>'.$row['amenities'].'</p></strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>';

  echo ' <div class="modal fade" id="'.$row['packid'].'freebies" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Freebies</h4>
        </div>
        <div class="modal-body">
          <strong><p>'.$row['freebies'].'</p></strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>';
  
  
  
	echo ' <div class="col-md-4">
	
              <div class="single-team-member">
			  
                <article class="blog-news-single">
                  <div class="blog-news-img">
                 <img src="'.$row['imageurl'].'" alt="image">
                  </div>
                  <div class="blog-news-title">
                    <strong><h2>'.$row['pname'].' - Php.'.$price.' Per Pax</h2></strong>
                   <p>Venue: <strong>'.$row['pvenue'].'</strong></p>
				   <p>Exclusive for: <strong>'.$row['ptypename'].'</strong></p>
				   <p>Minimum of:<strong> '.$row['minpax'].' Pax</strong> </p>
				   <p>Maximum of:<strong> '.$row['maxpax'].' Pax</strong></p>
				   <p>Catering:<strong> '.$row['cater'].' Main Course</strong> </p> 
				   <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#'.$row['packid'].'amenities"><i class="fa fa-bookmark"></i> Amenities</button>
				   <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#'.$row['packid'].'freebies"><i class="fa fa-heart"></i> Freebies</button>
	<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#packageinfo"><i class="fa fa-exclamation"></i> Read Me</button>
                  </div>
                  
                </article>
				 <div class="team-member-link">
				  
				  <a href="g_eventplan.php?packid='.$row['packid'].' & price='.$row['pperhead'].' & maxpax='.$row['maxpax'].' & minpax='.$row['minpax'].' & cater='.$row['cater'].' & evtype='.$row['ptypename'].'"  target="_blank" ><i class="fa fa-hand-pointer-o"> PLAN EVENT  </i></a>
               
                 </div>
              </div>
			  </div>';
}


	
?>	
	  </form>

		
         
              <!-- start single latest news 
			  <div class="col-md-4">
              <div class="single-team-member">
                <article class="blog-news-single">
                  <div class="blog-news-img">
                    <a href="blog-single-with-right-sidebar.html"><img src="assets/images/blog-img-1.jpg" alt="image"></a>
                  </div>
                  <div class="blog-news-title">
                    <strong><h2>Package 1 - Php.300.00 Per Pax</h2></strong>
                   <p>Venue: <strong>Garden Venue</strong></p>
				   <p>Exclusive for: <strong>Wedding</strong></p>
				   <p>Maximum of:<strong> 50 Pax</strong> </p>
				   <p>Maximum of:<strong> 300 Pax</strong></p>
				   <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal"><i class="fa fa-bookmark"></i> Amenities</button>
				   <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal"><i class="fa fa-heart"></i> Freebies</button>
                  </div>
                  
                </article>
				 <div class="team-member-link">
                   <a href="#"><i class="fa fa-hand-pointer-o"> PLAN EVENT  </i></a>   
                 </div>
              </div>
			  </div>
              <!-- start single latest news -->
			  
			
			  
			
            
          
            </div>
          </div>
        </div>
		
		
		
		
		
		
      </div>
    </div>
  </section>

  
  
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