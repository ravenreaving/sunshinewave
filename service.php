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
 <form action="g_createplan.php" method="POST">
  
  <div class="modal fade" id="menurem" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reminders</h4>
        </div>
        <div class="modal-body">
          <ul>
		<li><p>The Total Price will be multiplied on the number of your occupants/PAX in the event. </p></li>
		  <li><p>Example: (You selected Chicken Pastel - 50) | (You specified the number of your occupants: 100 PAX)</p></li>
		  <li><p>Total Price = 50 x 100 = 5,000</p></li>
		  <li><p>Note: Extra Charges will be added to the total price. Example: Fried Rice, Cake, Etc</p></li>
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
		<li><p>Total Guest Count:<input type="text" name="paxcount" id="paxcount" class="form-control" readonly ></p></li>
		<li><p>Number of Main Course:<input type="text" name="course_count" id="course_count" class="form-control" readonly></p></li>
		<li><p>Event Type:<input type="text" name="ev_type" id="ev_type" class="form-control" readonly></p></li>
		<li><p>Event Venue:<input type="text" name="ev_venue" id="ev_venue" class="form-control" readonly></p></li>
		
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
              <p>Please read and make sure you choose the right course that you want and double check the price before you proceed.</p>
              <div class="price-footer">
			 <sup class="price-up"> <button type="button" class="btn btn-success btn-sm pull-center" data-toggle="modal" data-target="#myplan"><i class="fa fa-tags"></i> My Event Plan </button></sup>

                  
                  </div>
            </div>
			<br>
			<br>
  

	  
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
                      <sup class="price-up"> <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#paxcount"> Reminder <i class="fa fa-mouse-pointer"></i></button></sup>
                     
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
menu = menu + ",";
}
}
menu = menu.substring(0, menu.length - 1);
$("textarea[name=maintotal]").val(total);
$("textarea[name=mainname]").val(menu);


    }
	
		
	
		</script>	
<textarea name="mainname"  id="mainname" class="pull-left" cols="30" rows="3" readonly placeholder="Name"></textarea>
<textarea name="maintotal" id="maintotal" class="pull-left" cols="15" rows="3"  readonly placeholder="Total Price"></textarea>
<sup class="price-up"> <button type="button" class="btn btn-default btn-sm pull-left" data-toggle="modal" data-target="#reqform"> Request  <i class="fa fa-twitch"></i></button></sup>	 
<sup class="price-up"> <button type="button" class="btn btn-default btn-sm pull-left" data-toggle="modal" data-target="#menurem"> Reminder <i class="fa fa-exclamation"></i></button></sup>

    <!-- Modal -->
  <div class="modal fade" id="reqform" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Main Course Request</h4>
        </div>
        <div class="modal-body">
        
		<textarea name="coursereq" cols="30" rows="5"></textarea>
		
		
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
			
$( document ).ready(function() {


var cvalue = getElementsByName('secmenu').value = 0;
alert(cvalue)


});

function extra_calc() {
var el, i = 0;
var total = 0;
var menu = "";


while(el = document.getElementsByName("secmenu")[i++]) {
if(el.checked)
{

total= total + Number(el.value);
menu = menu + new String($('#s' + el.id).text());
menu = menu + ",";
}
}
menu = menu.substring(0, menu.length - 1);
$("textarea[name=sec_total]").val(total);
$("textarea[name=sec_name]").val(menu);

    }
			 
			 
			 
</script>
			 
			 
 	<!-- freebies start -->
			<div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-table-price" >
                  <div class="price-header">
                    <span class="price-title">Secondary Course Menu</span>
                    <div class="price">
 	<textarea name="sec_name" class="pull-left" cols="30" rows="3" placeholder="Name" readonly></textarea>
<textarea name="sec_total" class="pull-left" cols="15" rows="3" placeholder="Total Price" readonly></textarea>
<sup class="price-up"> <button type="button" class="btn btn-default btn-sm pull-left" data-toggle="modal" data-target="#menu2rem"> Reminder <i class="fa fa-mouse-pointer"></i></button></sup>
	 
                    </div>
                  </div>
                  <div class="price-article">	
<?php
require "includes/connection.php";
$query="select addid,menuname,ftypename,price from tb_menu_secondary_dish join tb_foodtype on f_typeid=ftypeid order by ftypename";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{

echo '     <ul> 
	
    <div class="col-md-6 col-sm-6 col-xs-12">                  
  <li align="left"><input type="checkbox"  id="s'.$row['addid'].'" name="secmenu" value="'.$row['price'].'" onclick="extra_calc()"  > 
	<label id="ss'.$row['addid'].'" for="s'.$row['addid'].'">'.$row['menuname'].'('.$row['price'].')</label>
	</li></div>
					  
					 
					
					  
                    </ul>';
}
?>				       
                </div>
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

 


<script>


var ncheck = document.getElementById('nofcheck').value;

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




</script>
  </form>

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