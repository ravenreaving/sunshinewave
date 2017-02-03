<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Create Plan</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
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

 


 
  <!-- Start single page header -->
  <section id="single-page-header">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>Service</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Service</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  
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
 
 
   <!-- Modal -->
  <div class="modal fade" id="menurem" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">1st Step </h4>
        </div>
        <div class="modal-body">
          <p>This is a large modal.</p>
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
                    <span class="price-title">Main Course Menu</span>
                    <div class="price">
 
	 	<script>		 
			 function calculate() {
var el, i = 0;
var total = 0;
var menu = "";
var pax = document.getElementById("pax").value;


while(el = document.getElementsByName("menu")[i++]) {
if(el.checked) 
{ 
total= total + Number(el.value) * pax;
menu = menu + new String($('#main' + el.id).text());
menu = menu + ",";
}
}
menu = menu.substring(0, menu.length - 1);
$("textarea[name=maintotal]").val(total);
$("textarea[name=mainname]").val(menu);

    }
		</script>	
<textarea name="mainname"  id="mainname" class="pull-left" cols="30" rows="3" readonly></textarea>
<textarea name="maintotal" id="maintotal" class="pull-left" cols="15" rows="3"  readonly></textarea>
<sup class="price-up"> <button type="button" class="btn btn-default btn-sm pull-right" data-toggle="modal" data-target="#menurem"> Reminder <i class="fa fa-mouse-pointer"></i></button></sup>

	 
		
                    </div>
                  </div>
                  <div class="price-article">	
<?php
require "includes/connection.php";
$query="select menuid,menuname,ftypename,price from tb_menu_primary_dish join tb_foodtype on f_typeid=ftypeid order by ftypename";
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
			 

 	<!-- freebies start -->
			<div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-table-price" >
                  <div class="price-header">
                    <span class="price-title">Secondary Course Menu</span>
                    <div class="price">
 	<textarea name="second_fname" class="pull-left" cols="30" rows="3" placeholder="Foodname" readonly></textarea>
<textarea name="second_total" class="pull-left" cols="15" rows="3" placeholder="Total Price" readonly></textarea>
<sup class="price-up"> <button type="button" class="btn btn-default btn-md pull-right" data-toggle="modal" data-target="#menu2rem"> Reminder <i class="fa fa-mouse-pointer"></i></button></sup>
	 
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
  <li align="left"><input type="checkbox"  id="'.$row['addid'].'" name="secmenu" value="'.$row['price'].'" onclick="calculate()" > 
	<label id="sec'.$row['addid'].'" for="'.$row['addid'].'">'.$row['menuname'].'('.$row['price'].')</label>
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
  <input type="text"  value="3" id="nofcheck" name="nofcheck" hidden>
<input type="text" value="100" id ="pax" hidden >
 


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
  
  <script src="assets/js/jquery-1.10.2.js"></script>

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