<?php include "dbConnect.php";

 if($_REQUEST['action_type'] == 'add'){

	$uname 					= $_POST['uname'];
	$email 					= $_POST['email'];
	$pass 					= $_POST['pass'];
	$cpass 					=$_POST['cpass'];


	$fname     	= $_POST['fname'];
	$lname 				= $_POST['lname'];
	$contact 					= $_POST['contact'];
	$address 					= $_POST['address'];
	$city 				= $_POST['city'];
	$state 			= $_POST['state'];
	$zip 			= $_POST['zip'];

				
	 mysqli_query($connect, "INSERT INTO accounts (ACC_uname, ACC_email, ACC_pass, ACC_cpass) VALUES ('$uname', '$email', '$pass', '$cpass')");

	mysqli_query($connect, "INSERT INTO userinfo (user_fname, user_lname, user_contact, user_address, user_city, user_state, user_zip) VALUES ('$fname', '$lname' , '$contact', '$address', '$city', '$state', '$zip')");
	


}


 ?>
<html>



<head>
	<title>Registration Form</title>

	<style>
		body{
			background: #333;
			font-family:arial;
		}
		form{
			padding:10px;
			margin:0 auto;
			background:#FFFFFF;
			width:500px;
		}

		label{
			font-weight:bold;
			float:left;
			width: 200px;
		}
	</style>

</head>

<body>
	<form method="POST" action="registration.php">
	<h1>Registration Form</h1>
	<fieldset>
		<legend>Account Information</legend>
		<label></label> <input type="text" name="uname" /><br />
		<label></label> <input type="text" name="email" /><br />
		<label></label> <input type="password" name="pass" /><br />
		<label></label> <input type="password" name="cpass" />
	</fieldset>
	<fieldset>
		<legend>User Information</legend>
		<label></label> <input type="text" name="fname" /><br />
		<label></label> <input type="text" name="lname" /><br />
		<label></label> <input type="text" name="contact" /><br />
		<label></label> <textarea rows="2" cols="20" name="address" ></textarea><br />
		<label></label> <input type="text" name="city" /><br />
		<label></label> <input type="text" name="state" /><br />
		<label></label> <input type="text" name="zip" />
	</fieldset>
	<input type="hidden" name="action_type" value="add"/>
	<button name="add" type="submit">Register</button>
	</form>

	<script type="text/javascript">
		function submit_form(){
			alert("Thank you for your registration...");
		}
	</script>



</body>

</html>