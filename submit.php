<?php

require "includes/connection.php";
// Fetching Values From the post method

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$uname=$_POST['uname'];
	$pword=$_POST['pword'];
	$con=$_POST['con'];
	$street=$_POST['street'];
	$city=$_POST['city'];

	$pass=sha1($pword);

	if(isset($_POST['uname']))
	{
		$query="select * from tb_guest where uname='$uname'";
			$result=mysql_query($query);
			$row=mysql_fetch_assoc($result);
			$count = mysql_num_rows($result);
		if($count == 1)
			{
	
		echo 'Username is Already Taken';
	
			}
	else 
	{
	
	
		
	$query="INSERT INTO tb_guest(uname,pword,fname,lname,street,city,contact)
			VALUES('$uname','$pass','$fname','$lname','$street','$city','$con')";
		$result=mysql_query($query);
		echo 'Success';
	
	}
		
	}
	
	
	
	
	
/*if (isset($_POST['username'])) {
$query = mysqli_query($dbconfig,"insert into tbl_users(userName, userPass) values ('$username', '$password')"); //Insert Query
echo "Form Submitted succesfully";
}*/
?>
