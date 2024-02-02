<?php 

$conn = new mysqli("localhost","root","","yakuza")or die("Conn Error");
if (isset($_POST['register'])) {
	$user = $_POST['customer_name'];
	$email = $_POST['customer_email'];
	$pass = $_POST['customer_password'];
	$tel = $_POST['customer_telephone'];


	$insert = $conn->query("INSERT INTO customer(customer_name,customer_email,customer_password,customer_telephone) VALUES('$user','$email','$pass','$tel')")or die("Insert Failed");
	if ($insert) {
		echo "<script>window.location.replace('login.php')</script>";
	}
}




?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="form.css">
	<link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
	<title>Yakuza Films</title>
	
</head>
<body>
<div class="wrapper">
	<div class="form-wrapper sign-in">
		<form method="post">
			<h2>Sign_up</h2>
			<div class="input-group">
				<input type="text" name="customer_name" required>
				<label>Username</label>
			</div>
			<div class="input-group">
				<input type="text" name="customer_email" required>
				<label for="">Email</label>
			</div>
			<div class="input-group">
				<input type="password" name="customer_password" required>
				<label>Password</label>
			</div>
			<div class="input-group">
				<input id="phone" type="tel" name="customer_telephone" / required>
                <label>Phone_Number</label>
				
			</div>
			
			<button type="submit" name="register">Sign_up</button>
			<div class="login_link">
				<p>I already have Account? <a href="login.php" class="loginbtn">Login</a></p>
			</div>
		</form>
	</div>
</div>

 
</body>
<style type="text/css">
	
</style>
</html> 

 