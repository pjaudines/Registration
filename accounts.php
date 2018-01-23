<?php include "dbconnect.php";

 if(ISSET($_POST['add'])){

	$uname 	= $_POST['ACC_uname'];
	$email 	= $_POST['ACC_email'];
	$pass 	= $_POST['ACC_pass'];
	$cpass 	=$_POST['ACC_cpass'];


	$fname    	= $_POST['user_fname'];
	$lname 		= $_POST['user_lname'];
	$contact 	= $_POST['user_contact'];
	$address 	= $_POST['user_address'];
	$city 		= $_POST['user_city'];
	$state 		= $_POST['user_state'];
	$zip 		= $_POST['user_zip'];

				
	 mysqli_query($connect, "INSERT INTO accounts (uname, email, pass, cpass, fname, lname, contact, address, city, state, zip) VALUES ('$uname', '$email', '$pass', '$cpass', '$fname', '$lname' , '$contact', '$address', '$city', '$state', '$zip')");

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
	<form method="POST" action="accounts.php">
	<h1>Registration Form</h1>
	<fieldset>
		<legend>Account Information</legend>
		<label></label> <input type="text" name="ACC_uname" placeholder="Username" /><br />
		<label></label> <input type="text" name="ACC_email" placeholder="Email" /><br />
		<label></label> <input type="password" name="ACC_pass" placeholder="Password" /><br />
		<label></label> <input type="password" name="ACC_cpass" placeholder="Change password" />
	</fieldset>
	<fieldset>
		<legend>User Information</legend>
		<label></label> <input type="text" name="user_fname" placeholder="First name" /><br />
		<label></label> <input type="text" name="user_lname" placeholder="Last name" /><br />
		<label></label> <input type="text" name="user_contact" placeholder="Contact Number" /><br />
		<label></label> <textarea rows="2" cols="20" name="user_address" placeholder="Address" ></textarea><br />
		<label></label> <input type="text" name="user_city" placeholder="City" /><br />
		<label></label> <input type="text" name="user_state" placeholder="State" /><br />
		<label></label> <input type="text" name="user_zip" placeholder="Zip" />
	</fieldset>
	<button name="add" type="submit">Register</button>
	</form>

	<script type="text/javascript">
		function submit_form(){
			alert("Thank you for your registration...");
		}
	</script>



</body>

</html>