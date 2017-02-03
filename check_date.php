<?php
//connect to database
require "includes/connection.php";

//get the fields
/*$startDate = $_POST['startDate'];
$seltime = $_POST['seltime'];

$result1= mysql_query("select timestart, timeend from tb_time where timeid=$seltime");
$row= mysql_fetch_assoc($result1);



$sTime = $row['timestart'];
$eTime = $row['timeend'];
*/



if(isset($_POST['seltime']) && isset($_POST['startDate']))
{
$eventDate=$_POST['startDate'];
$seltime=$_POST['seltime'];
$query="select timestart, timeend from tb_time where timeid=$seltime";
$result=mysql_query($query);
$row=mysql_fetch_assoc($result);
$startTime = $row['timestart'];
$endTime = $row['timeend'];

$query1="select * from tb_event_res where startDate='$eventDate' && startTime='$startTime' && endTime='$endTime'";
$result1=mysql_query($query1);
if(mysql_num_rows($result1)==1)
{
	echo 0;
}
else
{
	echo 1;
}

}


/*test
if(isset($_POST['seltime']) && isset($_POST['startDate']))
{
$eventDate=$_POST['startDate'];
$seltime=$_POST['seltime'];

$query="select * from tb_event_res where timeid=$seltime";

}
*/













































/*
$sTime = date('H:i:s', strtotime($startTime));
$eTime = date('H:i:s', strtotime($endTime));
*/

/*
$result = mysql_query("select * from tb_event_res where startTime ='$stime' && endTime='$etime' && startDate='$startDate'");
if(mysql_num_rows($result)>1)
{
	echo 0;
	
	
	/*
	$result2= mysql_query("select * from tb_event_res where cast(endTIme as time) between '$sTime' and '$eTime' and cast(eventDate as date) = '$startDate'");
	if(mysql_num_rows($result)<=0)
	{
		echo 1;
	}
	else
	{
		echo 0;
	}
	
}
else
{
	echo 0;
}
*/




/*

//mysql query to select field username if it's equal to the username that we check '
$result = mysql_query('select username from users where username = "'. $username .'"');

//if number of rows fields is bigger them 0 that means it's NOT available '
if(mysql_num_rows($result)>0){
	//and we send 0 to the ajax request
	echo 0;
}else{
	//else if it's not bigger then 0, then it's available '
	//and we send 1 to the ajax request
	echo 1;
}

/*select * from tb_event_res
where cast(startTime as time) between '08:00:00' and '14:00:00'*/


?>	