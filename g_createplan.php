<?php
session_start();
require "includes/connection.php";
$id=$_COOKIE['guestid'];
		$paxcount=$_SESSION['paxcount'];
		$course_count=$_SESSION['dishcount'];
		$ev_type=$_SESSION['evtype'];
		$ev_venue=$_SESSION['ev_venue'];
		$ev_title=$_SESSION['ev_title'];

/*if(isset($_POST['btnproceed']) && isset($_POST['startDate']) && isset($_POST['startTime']) && isset($_POST['endTime']))
{
	 $sd=$_POST['startDate'];
	 $st=$_POST['startTime'];
	 $et=$_POST['endTime'];
	 
	 $sss=$_POST['timeStart'];
	
	//$dbFormatst = date('H:i:s', strtotime($st));
	 
	//$dbFormatet = date('H:i:s', strtotime($et));

	// echo $sd '<br>';
	 //echo $ed '<br>';
	//echo $dbFormatst;
	//echo $dbFormatet;
	
	echo $sss;
	
}*/




if(isset($_POST['btncancel']))
{
$_SESSION['paxcount']="";
$_SESSION['dishcount']="";
$_SESSION['evtype']="";
$_SESSION['ev_venue']="";

header("Location:g_packages.php ");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Create Plan</title>
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

	
 
 
 
    <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	
  </head>
  <body> 

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

 
  
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
          <a class="navbar-brand">Sunshine Wave Resort</a>        
          <!-- IMG BASED LOGO  -->
         <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->                    
        </div>
      
    </nav>
  </section>
  <!-- END MENU --> 
  <script src="assets/js/jquery-1.10.2.js"></script>
 <form action="g_createplan.php" method="POST" id="cplan">
  
  <div class="modal fade" id="menurem" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reminders</h4>
        </div>
        <div class="modal-body">
          <ul>
		<li><p><strong>Note: Maincourse Total Charges will be added to Secondarycourse Total Charges that will make "CATERING TOTAL"</strong></p></li>
		  <li><p>Example:  Maincourse Total Charge + Secondarycourse Total Charge = Catering Total Price </p></li>
		  <li><p>Note: Then Catering Total Price will be multiplied to the (Number of Occupants/Guest of the Event)</p></li>
		  <li><p>Example: Catering Total Price(250) * Number of Occupants/Guest(200) --> 250 * 200 = 50,000  </p></li>
		  <li><p>50,000 Will be the Total Charge of your Event. ! Note: The Total Charge can change depending on your Selected Additionals for the event. </p></li>
		  </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
   
  <div class="modal fade" id="myplan" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">My Event Plan Summary</h4>
        </div>
        <div class="modal-body">
          <ul>
		<li><p>Total Guest Count:<input type="text" name="paxcount" id="paxcount" class="form-control" readonly  value="<?php echo $paxcount?>"></p></li>
		<li><p>Number of Main Course:<input type="text" name="course_count" id="course_count" class="form-control" readonly  value="<?php echo $course_count?>"></p></li>
		<li><p>Event Type:<input type="text" name="ev_type" id="ev_type" class="form-control" readonly  value="<?php echo $ev_type?>"></p></li>
		<li><p>Event Venue:<input type="text" name="ev_venue" id="ev_venue" class="form-control" readonly  value="<?php echo $ev_venue?>"></p></li>
			<li><p>Event Title:<input type="text" name="ev_title" id="ev_title" class="form-control" readonly  value="<?php echo $ev_title?>"></p></li>
		
		  </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  
  

            <div class="error-content">
              <span>Event Plan</span>
              <p>Please <strong>READ ALL REMINDERS</strong> before you select a checkbox to avoid mistake & miscalculation.</p>
	
              <div class="price-footer">
			 <sup class="price-up"> <button type="button" class="btn btn-success btn-sm pull-center" data-toggle="modal" data-target="#myplan"><i class="fa fa-tags"></i> <strong>My Event Plan </strong> </button></sup>

				     
                  </div>
			 
            </div>
		
	
	
		  
       
	    
        <div class="col-md-12">
          <div class="pricing-table-content">
            <div class="row">
			
			
			<!-- freebies start -->
			<div class="col-md-12 col-sm-6 col-xs-12">
                <div class="single-table-price" >
                  <div class="price-header">
                    <span class="price-title">Check Event Date Time Availability</span>
                    <div class="price">

                    </div>
                  </div>

                  <div class="price-article">	

     <ul> 
	
    <div class="col-md-12 col-sm-6 col-xs-12">
	
 
 <div class="col-md-5">
<div id="sdate" class="input-group date form_date" data-date-format="yyyy-mm-dd">

                    <input class="form-control" name="d" id="d"  type="text"  readonly >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>

 </div>
<input type="hidden" id="isAvail" name="isAvail" 	value="">
	</div>
	
	<div class="col-md-5">
	<select class="form-control" name="seltime" id="seltime">
	<?php
	
	//date_format(ev_start_time, '%l:%i:%p')
	
	$query="select timeid, date_format(timestart, '%l:%i:%p')as timestart , date_format(timeend, '%l:%i:%p')as timeend  from tb_time";
	$result=mysql_query($query);
	$row=mysql_query($reult);
	while($row=mysql_fetch_assoc($result))
	{
		echo '<option value="'.$row['timeid'].'">'.$row['timestart'].' - '.$row['timeend'].'</value>';
		
	}
	
	?>
	
	</select>
	
	
	</div>
	
	<div class="col-md-2">
	<input type="button" class="btn btn-primary btn-md" value="Check Availability" id="checkdate_avail" name="checkdate_avail">
	</div>
	</br>
	<div id='username_availability_result' class="pull-center"></div>
	
			</div>		  
					 
					
					  
                    </ul>
		       
                </div>
				
				
				
              </div>
			 
			 <!-- freebies end -->	
		
			
 
		
			</div>
			</div>
			</div>
		

				 
		
				
		 
			
			
			
			
				

	  
	 <!-- test part here  --> 
	  
  
  <!-- Start Service -->
  <section id="service">
    <div class="container">
      <div class="row">
       
	    
        <div class="col-md-12">
          <div class="pricing-table-content">
            <div class="row">
			
			
	
			
			
			<!-- freebies start
			<div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-table-price" >
                  <div class="price-header">
                    <span class="price-title">Pax Count</span>
                    <div class="price">
                      <sup class="price-up"> <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#paxcount"> Reminder <i class="fa fa-ticket"></i></button></sup>
                     
                    </div>
                  </div>
                  <div class="price-article">
				
                    <ul> 
					  <div class="col-md-12 col-sm-6 col-xs-12">
                      <li>Pax Count: <input type="text" class="form-control" value="100" name="paxcount" readonly> </li>
					  	</div>
                    </ul>
                </div>
				
				
				
              </div>
			 </div>
			 <!-- freebies end -->
 
 
 
 
 
 
			 	<!-- freebies start -->
			<div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-table-price" >
                  <div class="price-header">
                    <span class="price-title">Main Course Menu</span>
                    <div class="price">
 
	 	<script>		 
			 function calculate() {
var el, i = 0;
var total = 0;
var menu = "";


while(el = document.getElementsByName("menu")[i++]) {
if(el.checked) 
{ 
total= total + Number(el.value);
menu = menu + new String($('#main' + el.id).text());
menu = menu + " , ";
}
}
menu = menu.substring(0, menu.length - 1);
$("textarea[name=maintotal]").val(total);
$("textarea[name=mainname]").val(menu);


    }
	
		
	
		</script>	
<textarea name="mainname"  id="mainname" class="form-control" cols="30" rows="2" readonly placeholder="Name"></textarea>
<textarea name="maintotal" id="maintotal" class="pull-left" cols="15" rows="1"  readonly placeholder="Total Price"></textarea>
<sup class="price-up"> <button type="button" class="purchase-btn pull-right" data-toggle="modal" data-target="#reqform"> <strong>Request Food</strong>  <i class="fa fa-twitch"></i></button></sup>	 
<sup class="price-up"> <button type="button" class="purchase-btn pull-right" data-toggle="modal" data-target="#menurem"> <strong>Reminder</strong> <i class="fa fa-ticket"></i></button></sup>

    <!-- Modal -->
  <div class="modal fade" id="reqform" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Main Course Request</h4>
        </div>
        <div class="modal-body">
        
		<textarea name="coursereq" class="form-control" cols="30" rows="5" maxlength="300" placeholder="Type here....."></textarea>
		
        </div><strong>	
		<p>Example: 1. Adobo , 2. Pakbet
		<p>Your course course/dish request will be discussed upon your confirmation in Sunshine Wave Thankyou.</p>
		<p>Total Charges may change depending on your request.</p></strong>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
		
                    </div>
                  </div>
				
                  <div class="price-article">
<?php
require "includes/connection.php";
$query="select menuid,menuname,ftypename,price from tb_menu_primary_dish join tb_foodtype on f_typeid=ftypeid where ftypename='pork'";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{

echo '     <ul> 
	
    <div class="col-md-6 col-sm-6 col-xs-12">                  
  <li align="left"><input type="checkbox"  id="'.$row['menuid'].'" name="menu" value="'.$row['price'].'" onclick="calculate()" > 
	<label id="main'.$row['menuid'].'" for="'.$row['menuid'].'">'.$row['menuname'].' ('.$row['price'].')</label>
	</li></div> 
					  
					 
					
					  
                    </ul>';
}
?>				       
                </div>
					 <div class="price-article" >	
<?php
require "includes/connection.php";
$query="select menuid,menuname,ftypename,price from tb_menu_primary_dish join tb_foodtype on f_typeid=ftypeid where ftypename='beef'";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{

echo '     <ul> 
	
    <div class="col-md-6 col-sm-6 col-xs-12">                  
  <li align="left"><input type="checkbox"  id="'.$row['menuid'].'" name="menu" value="'.$row['price'].'" onclick="calculate()" > 
	<label id="main'.$row['menuid'].'" for="'.$row['menuid'].'">'.$row['menuname'].' ('.$row['price'].')</label>
	</li></div> 
					  
					 
					
					  
                    </ul>';
}
?>				       
                </div>
				
<div class="price-article" >	
<?php
require "includes/connection.php";
$query="select menuid,menuname,ftypename,price from tb_menu_primary_dish join tb_foodtype on f_typeid=ftypeid where ftypename='chicken'";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{

echo '     <ul> 
	
    <div class="col-md-6 col-sm-6 col-xs-12">                  
  <li align="left"><input type="checkbox"  id="'.$row['menuid'].'" name="menu" value="'.$row['price'].'" onclick="calculate()" > 
	<label id="main'.$row['menuid'].'" for="'.$row['menuid'].'">'.$row['menuname'].' ('.$row['price'].')</label>
	</li></div> 
					  
					 
					
					  
                    </ul>';
}
?>				       
                </div>
				
				<div class="price-article" >	
<?php
require "includes/connection.php";
$query="select menuid,menuname,ftypename,price from tb_menu_primary_dish join tb_foodtype on f_typeid=ftypeid where ftypename='fish'";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{

echo '     <ul> 
	
    <div class="col-md-6 col-sm-6 col-xs-12">                  
  <li align="left"><input type="checkbox"  id="'.$row['menuid'].'" name="menu" value="'.$row['price'].'" onclick="calculate()" > 
	<label id="main'.$row['menuid'].'" for="'.$row['menuid'].'">'.$row['menuname'].' ('.$row['price'].')</label>
	</li></div> 
					  
					 
					
					  
                    </ul>';
}
?>				       
                </div>
				
				
			
				
					
				<div class="price-article" >	
<?php
require "includes/connection.php";
$query="select menuid,menuname,ftypename,price from tb_menu_primary_dish join tb_foodtype on f_typeid=ftypeid where ftypename='vegetable'";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{

echo '     <ul> 
	
    <div class="col-md-6 col-sm-6 col-xs-12">                  
  <li align="left"><input type="checkbox"  id="'.$row['menuid'].'" name="menu" value="'.$row['price'].'" onclick="calculate()" > 
	<label id="main'.$row['menuid'].'" for="'.$row['menuid'].'">'.$row['menuname'].' ('.$row['price'].')</label>
	</li></div> 
					  
					 
					
					  
                    </ul>';
}
?>				       
                </div>
				
					
				<div class="price-article" >	
<?php
require "includes/connection.php";
$query="select menuid,menuname,ftypename,price from tb_menu_primary_dish join tb_foodtype on f_typeid=ftypeid where ftypename='dessert'";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{

echo '     <ul> 
	
    <div class="col-md-6 col-sm-6 col-xs-12">                  
  <li align="left"><input type="checkbox"  id="'.$row['menuid'].'" name="menu" value="'.$row['price'].'" onclick="calculate()" > 
	<label id="main'.$row['menuid'].'" for="'.$row['menuid'].'">'.$row['menuname'].' ('.$row['price'].')</label>
	</li></div> 
					  
					 
					
					  
                    </ul>';
}
?>				       
                </div>
			
              </div>
			 </div>
			 <!-- freebies end -->

			 
			 <script type="text/javascript">
			


function extra_calc() {
var el, i = 0;
var total = 0;
var menu = "";


while(el = document.getElementsByName("secmenu")[i++]) {
if(el.checked)
{

total= total + Number(el.value);
menu = menu + new String($('#s' + el.id).text());
menu = menu + " , ";
}
}
menu = menu.substring(0, menu.length - 1);
$("textarea[name=sec_total]").val(total);
$("textarea[name=sec_name]").val(menu);

    }
			 
			 
			 
</script>
			 
			 <!-- Modal -->
  <div class="modal fade" id="menu2rem" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Secondary Course Reminder</h4>
        </div><strong>
        <div class="modal-body">
          <p>Note: Plain Rice, Mineral Water & Iced tea is already included therefore its FREE.</p>
        </div></strong>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
 	<!-- freebies start -->
			<div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-table-price" >
                  <div class="price-header">
                    <span class="price-title">Secondary Course Menu</span>
                    <div class="price">
 	<textarea name="sec_name" class="form-control pull-left" cols="30"  rows="2" placeholder="Name" readonly ></textarea>
<textarea name="sec_total" id="sec_total" class="pull-left" cols="15" rows="1" placeholder="Total Price" readonly></textarea>
<sup class="price-up"> <button type="button" class="purchase-btn pull-right" data-toggle="modal" data-target="#menu2rem"> <strong>Reminder</strong> <i class="fa fa-ticket"></i></button></sup>
	 
	 
	 
                    </div>
                  </div>
                  <div class="price-article">	
<?php
require "includes/connection.php";
$query="select addid,menuname,ftypename,price from tb_menu_secondary_dish join tb_foodtype on f_typeid=ftypeid where price >1 order by ftypename";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{

echo '     <ul> 
	
    <div class="col-md-6 col-sm-6 col-xs-12">                  
  <li align="left"><input type="checkbox"  id="s'.$row['addid'].'" name="secmenu" value="'.$row['price'].'" onclick="extra_calc()"  > 
	<label id="ss'.$row['addid'].'" for="s'.$row['addid'].'">'.$row['menuname'].' ('.$row['price'].')</label>
	</li></div>
					  
					 
					
					  
                    </ul>';
}
?>				       
                </div>
				
              </div>
			 </div>
			 <!-- freebies end -->			 
	

		 <script type="text/javascript">
			


function add_calc() {
var el, i = 0;
var total = 0;
var menu = "";


while(el = document.getElementsByName("adrates")[i++]) {
if(el.checked)
{

total= total + Number(el.value);
menu = menu + new String($('#ad' + el.id).text());
menu = menu + " , ";
}
}
menu = menu.substring(0, menu.length - 1);
$("textarea[name=ad_total]").val(total);
$("textarea[name=ad_name]").val(menu);

    }
			 
			 
			 
</script>
			 
	 <!-- Modal -->
  <div class="modal fade" id="adrem" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Additionals Reminder</h4>
        </div>
        <div class="modal-body">
          <p><strong>Additionals Total will be added to Theme/Color Theme Total that will make "EXTRA CHARGES"</strong></p>
		  <p><strong>Additionals like "Tarpaulin" etc. details will be discussed upon confirmation</strong></p>
		  <p><strong></strong></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  	
		<!-- freebies start -->
			<div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-table-price" >
                  <div class="price-header">
                    <span class="price-title">Additionals</span>
                    <div class="price">
 	<textarea name="ad_name" class="form-control" cols="30" rows="2" placeholder="Name" readonly></textarea>
<textarea name="ad_total" id="ad_total" class="pull-left" cols="15" rows="1" placeholder="Total Price" readonly></textarea>
<sup class="price-up"> <button type="button" class="purchase-btn pull-right" data-toggle="modal" data-target="#adnotes"> Add Notes <i class="fa fa-pencil"></i></button></sup>
<sup class="price-up"> <button type="button" class="purchase-btn pull-right" data-toggle="modal" data-target="#adrem"> Reminder <i class="fa fa-ticket"></i></button></sup>

		  <!-- Modal -->
  <div class="modal fade" id="adnotes" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Additionals Notes</h4>
        </div>
        <div class="modal-body">
          
		  <textarea name="adnotes" cols="30" rows="5" class="form-control" maxlength="300"  placeholder="Type here...."></textarea>
		  <p>Example: Cupcake stand should be in the front.</p>
		  
		  <p><strong></strong></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
                    </div>
                  </div>
                  <div class="price-article">	
<?php
require "includes/connection.php";

$ev_type=$_SESSION['evtype'];

$query="select adid,adname,adprice,ptypename from tb_add_rates join tb_packtype on adtype=ptypeid where ptypename = 'Any Occassion' or ptypename='$ev_type'";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{

echo ' <ul> 
		 
	<div class="col-md-6 col-sm-6 col-xs-12">                  
  <li align="left"><input type="checkbox"  id="ad'.$row['adid'].'" name="adrates" value="'.$row['adprice'].'" onclick="add_calc()"  > 
	<label id="adad'.$row['adid'].'" for="ad'.$row['adid'].'">'.$row['adname'].' ('.$row['adprice'].')</label>
	</li></div>

                    </ul>';
}
?>				       
                </div>
              </div>
			 </div>
			 <!-- freebies end -->			 
	
	
	
		 <script type="text/javascript">
			


function theme_calc() {
var el, i = 0;
var total = 0;
var menu = "";


while(el = document.getElementsByName("theme")[i++]) {
if(el.checked)
{

total= total + Number(el.value);
menu = menu + new String($('#t' + el.id).text());
menu = menu + " , ";
}
}
menu = menu.substring(0, menu.length - 1);
$("textarea[name=theme_total]").val(total);
$("textarea[name=theme_name]").val(menu);

    }
			 
			 
			 
</script>
	
	 <!-- Modal -->
  <div class="modal fade" id="tcolor" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reminder</h4>
        </div>
        <div class="modal-body">
          <p><strong>Note: You can select 1 - 3 Colors only</strong></p>
		  <p><strong>Here you can select what color you want. Then you can tell us how should we apply your theme color in the event.</strong></p>
        <p><strong>Please click the suggestion button to suggest how do you want us to use your designated color.</strong></p>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	

<!-- freebies start -->
			<div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-table-price" >
                  <div class="price-header">
                    <span class="price-title">Theme /Color theme</span>
                    <div class="price">
 	<textarea name="theme_name" class="form-control" cols="30" rows="2" placeholder="Name" readonly></textarea>
<textarea name="theme_total" id="theme_total" class="pull-left" cols="15" rows="1" placeholder="Total Price" readonly></textarea>
<sup class="price-up"> <button type="button" class="purchase-btn pull-right" data-toggle="modal" data-target="#tnotes"> Add Notes <i class="fa fa-pencil"></i></button></sup>
<sup class="price-up"> <button type="button" class="purchase-btn pull-right" data-toggle="modal" data-target="#tcolor"> Reminder <i class="fa fa-ticket"></i></button></sup>
	 
	 	<!-- Modal -->
  <div class="modal fade" id="tnotes" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Theme Color Note</h4>
        </div>
        <div class="modal-body">
		
           <textarea name="tnotes" cols="30" rows="5" maxlength="300" class="form-control" placeholder="Type here...."></textarea>
		  <p>Example: The color of table cloth should be Pink.</p>
		 
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	 
                    </div>
                  </div>
				  
				  
				  
                  <div class="price-article">	
				  
<?php
require "includes/connection.php";

$ev_type=$_SESSION['evtype'];

$query="select * from tb_theme";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{

echo '     <ul> 
	
    <div class="col-md-6 col-sm-6 col-xs-12">                  
  <li align="left"><input type="checkbox"  id="t'.$row['themeid'].'" name="theme" value="'.$row['tprice'].'" onclick="theme_calc()"  > 
	<label id="tt'.$row['themeid'].'" for="t'.$row['themeid'].'">'.$row['tcolor'].' ('.$row['tprice'].')</label>
	</li></div>
					  
					 
					
					  
                    </ul>';
}
?>				       
                </div>
				
				
				
              </div>
			 </div>
			 <!-- freebies end -->		
	
	
	<script type="text/javascript">
			
$("#cplan input[type='checkbox']").change(function(){
if (jQuery('#cplan input[type=checkbox]:checked').length > 0) {
   var main_course=document.getElementById("maintotal").value;
var sec_course=document.getElementById("sec_total").value;
var adds_total=document.getElementById("ad_total").value;
var theme_total=document.getElementById("theme_total").value;
var paxcount=document.getElementById("paxcount").value;



var catertotal=0;
var extra_charge=0;
var total_charge=0;

catertotal= Number(main_course) + Number(sec_course);
extra_charge=Number(adds_total) + Number(theme_total);
total_charge= Number(catertotal) * Number(paxcount) + Number(extra_charge);

$("input[name=cater_total]").val(catertotal);
$("input[name=extra_charge]").val(extra_charge);
$("input[name=total_charge]").val(total_charge);

} else {
   
var catertotal=0;
var extra_charge=0;
var total_charge=0;
$("input[name=cater_total]").val(catertotal);
$("input[name=extra_charge]").val(extra_charge);
$("input[name=total_charge]").val(total_charge);
}
}).trigger("change");

/*function total_calc() {



var main_course=document.getElementById("maintotal").value;
var sec_course=document.getElementById("sec_total").value;
var adds_total=document.getElementById("ad_total").value;
var theme_total=document.getElementById("theme_total").value;
var paxcount=document.getElementById("paxcount").value;



var catertotal=0;
var extra_charge=0;
var total_charge=0;

catertotal= Number(main_course) + Number(sec_course);
extra_charge=Number(adds_total) + Number(theme_total);
total_charge= Number(catertotal) * Number(paxcount) + Number(extra_charge);

$("input[name=cater_total]").val(catertotal);
$("input[name=extra_charge]").val(extra_charge);
$("input[name=total_charge]").val(total_charge);

    }*/
			 
			 
			 
</script>
	
 <!-- Modal -->
  <div class="modal fade" id="totalrem" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Total Charges Reminder</h4>
        </div>
        <div class="modal-body">
          <strong>
		  <p>1. Main Course Total + Secondary Course Total = "CATERING TOTAL"</p>
		  <p>2. Additionals Total + Theme/Color Theme Total = "EXTRA CHARGES"</p>
		  <p>3. Catering Total x Total Occupants/Guest + Extra Charges = "TOTAL CHARGES"
		  <p>Example1: 200(Catering Total) x 150(Guest Count) = 30,000 </p>
		  <p>Example2: 30,000 + 350(Extra Charges) = 30,350(Total Charges)</p>
		  <p>Conclusion: You will be paying 50% the amount of "Total Charges" upon confirmation @SunshineWave</p>
		  <p>Note: Your "Request Charge" will be determined during your confirmation of event @SunshineWave </p>
		  <p>4. 30,350(Total Charges) + 600(Request Charge) = 30,950(Total Charges)*Updated </p>
		  <p>5. Then you will pay exactly 30,950 Pesos in your event.</p>
		  <p>6. Additional Guest/Service/Etc.. During the Event will be charge as well and will update your Reservation Summary.</p>
		  </strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
	</div>
	<!-- freebies start -->
			<div class="col-md-12 col-sm-6 col-xs-12">
                <div class="single-table-price" >
                  <div class="price-header">
                    <span class="price-title">Summary of Charges </span>
                    <div class="price">

                    </div>
                  </div>

                  <div class="price-article">	

     <ul> 
	
    <div class="col-md-12 col-sm-6 col-xs-12">                  
  <li>
	<p class="pull-left"><strong>Catering Total:</strong><input type="text" disabled name="cater_total"  size="25"> </p> &nbsp;

	
	<p class="pull-left"><strong>Extra Charges:</strong><input type="text" disabled name="extra_charge"  size="25" > </p> &nbsp;


	<p class="pull-left"><strong>Total Charges:</strong><input type="text" disabled name="total_charge" size="25"  > </p> &nbsp; &nbsp;
	
<sup class="price-up"> <button type="button" class="btn btn-danger btn-sm pull-right" data-toggle="modal" data-target="#totalrem" ><i class="fa fa-exclamation"></i> <strong> Read ME</strong> </button></sup>	
	</li>	
	
	
  </div>
  
	</div>
					  
					 
					
					  
                    </ul>
		       
                </div>
				
				
				
              </div>
			 
			 <!-- freebies end -->		
			 
			 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service -->
<!-- for cbox count -->




  <div class="modal fade" id="btnproceed_modal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Error Message</h4>
        </div>
        <div class="modal-body">
         <strong> <div id='btnproceed_result'> </div> </strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


 <!-- test part here  --> 
	   <section id="error">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="errror-page-area">
          
            <div class="error-content">
              <span>Before you Proceed to Event Reservation !</span>
			  <strong>
              <p>Please make sure you selected the right checkboxes that you designated for your event.</p>
			  <p>Don't Forget to Add a note for us to determine what design you desire for your event.</p>
			  <p>Double Check All of the items/course/service that you selected.</p></strong>
			  <span><p>Check your Event Date Time Availability to be able to Proceed !.</p></span>
              <div class="price-footer">
			  <input type="submit" name="btncancel" class="purchase-btn" value="Cancel">
			
             <input type="button" class="purchase-btn" value="Proceed" id="btnproceed" name="btnproceed">
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
<script type="text/javascript" src="assets/js/jquery.js"></script>
	 <!-- test part here  --> 
<script type="text/javascript" src="assets/js/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="assets/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script>


var ncheck = document.getElementById('course_count').value;

$(":checkbox[name='menu']").change(function(){


  if ($(":checkbox[name='menu']:checked").length == ncheck)
{  
  // $(':checkbox:not(:checked)').prop('disabled', true); 
   $(":checkbox[name='menu']:not(:checked)").prop('disabled', true);
}

  else 
{
  
  // $(':checkbox:not(:checked)').prop('disabled', false); 
    $(":checkbox[name='menu']:not(:checked)").prop('disabled', false);
	
}

});

$(":checkbox[name='theme']").change(function(){


  if ($(":checkbox[name='theme']:checked").length == 3)
{  
  // $(':checkbox:not(:checked)').prop('disabled', true); 
   $(":checkbox[name='theme']:not(:checked)").prop('disabled', true);
}

  else 
{
  
  // $(':checkbox:not(:checked)').prop('disabled', false); 
    $(":checkbox[name='theme']:not(:checked)").prop('disabled', false);
	
}

});




    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
	
	
	  $(document).ready(function() {
        

var date_error1= 'Error: The Reservation should be 5 days ahead of the Event!';
var characters_error = 'Error: Please select Date/Time!';
var checking_html = '<img src="assets/images/dateloader.gif" /> Checking...';
var d = new Date(new Date().getTime()+(5*24*60*60*1000));
var month = d.getMonth()+1;
var day = d.getDate();
var newdate = d.getFullYear() + '-' +
    ((''+month).length<2 ? '0' : '') + month + '-' +
    ((''+day).length<2 ? '0' : '') + day;

//var myDate = new Date(new Date().getTime()+(5*24*60*60*1000));	
	
		//when button is clicked
		$('#checkdate_avail').click(function(){
	

			if($('#d').val() == '' ){
				
				$('#username_availability_result').html(characters_error);
			}
			else if ($('#d').val() < newdate)
			{
			   	$('#username_availability_result').html(date_error1);
			}
			
			else{			
				//else show the cheking_text and run the function to check
				$('#username_availability_result').html(checking_html);
				check_availability();
			}
		});
		
		
		
var theme_error = 'Please select atleast 1 Theme Color !';
var menu_error = 'Please select atleast 3 Main Menu Course !';
var date_error = 'Please Check Event Date Availability !';
var date_error2 = 'Please select date of your event !';
		//when button is clicked
		$('#btnproceed').click(function(){ 
	

//alert($(":checkbox[name='theme']:checked").length);
			if($(":checkbox[name='theme']:checked").length= 0){
				$('#btnproceed_modal').modal('show'); 
				$('#btnproceed_result').html(date_error);
			} else if ($(":checkbox[name='menu']:checked").length < 3) {
				$('#btnproceed_modal').modal('show'); 
				$('#btnproceed_result').html(menu_error);
			}
			
			else if ($('input[name="isAvail"]').val()== '0'){
				$('#btnproceed_modal').modal('show'); 
				$('#btnproceed_result').html(date_error);
			}
			else if ($('input[name="isAvail"]').val()== ''){
				$('#btnproceed_modal').modal('show'); 
				$('#btnproceed_result').html(date_error);
			}
			else
			{
				alert('Success');
			}

			
		
		}); 
		
		
		
  });
		
		
		
		
  //});

//function to check username availability	
function check_availability(){
		
		//get the username
		var startDate = $('#d').val();
		var seltime = $('#seltime').val();
		var seltext = $( "#seltime option:selected" ).text();
		
		//use ajax to run the check
		$.post("check_date.php", { startDate: startDate, seltime: seltime },
			function(result){
				//if the result is 1
				if(result ==1){
					//show that the username is available
					$('#username_availability_result').html('<span class="is_available"><b>' +startDate +' '+ seltext + '</b> is Available</span>');
				
					$('input[name="isAvail"]').val('1');
					//$('#totalrem').modal('show'); 
				}
		
				else{
					//show that the username is NOT available
					$('#username_availability_result').html('<span class="is_not_available"><b>' +startDate +' '+ seltext +'</b> is not Available</span>');
					$('input[name="isAvail"]').val('0');
				}
				
		});

}  
	
</script>
  </form>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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