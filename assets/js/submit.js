// JavaScript Document
function submitdata() {
	
	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var uname = document.getElementById("uname").value;
	var pword = document.getElementById("pword").value;
	var con = document.getElementById("con").value;
	var street = document.getElementById("street").value;
	var city = document.getElementById("city").value;

	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'fname=' + fname + '&lname=' + lname + '&uname=' + uname + '&pword=' + pword
+ '&con=' + con + '&street=' + street + '&city=' + city	;
if (fname == '' || lname == '' || uname == '' || pword == '' || con == '' || street == '' || city == '')
{
	alert("Please Fill All Fields");
}
else
{
					// AJAX code to submit form.
					$.ajax({
					type: "POST",
					url: "submit.php",
					data: dataString,
					cache: false,
					success: function(html) {
					alert(html);
	document.getElementById("fname").value ="";
	document.getElementById("lname").value ="";
	document.getElementById("uname").value  ="";
	document.getElementById("pword").value ="";
	document.getElementById("con").value ="";
	document.getElementById("street").value ="";
	document.getElementById("city").value ="";
					}
					});
		}		
		return false;
}
