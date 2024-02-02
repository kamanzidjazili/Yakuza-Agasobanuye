<?php 
session_start();
$conn = new mysqli("localhost","root","","yakuza")or die("Conn Error");
if (isset($_POST['login'])) {
	$email = $_POST['customer_email'];
	$pass = $_POST['customer_password'];


$select = $conn->query("SELECT * FROM customer WHERE customer_email = '$email' AND customer_password = '$pass'")or die("Select Failed");
$row = mysqli_num_rows($select);
$result = mysqli_fetch_assoc($select);

if ($row) {
	$_SESSION['customer_email'] = $result['customer_password'];
	echo "<script>window.location.replace('movie.php')</script>";
}
else{
	echo "<script>alert('$email Not Found in Database')</script>";
	echo "<script>window.location.replace('register.php')</script>";
}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="form.css">
	<title>Yakuza Films</title>
</head>
<body>
<div class="wrapper">
	<div class="form-wrapper sign-in">
		<form method="post">
			<h2>Login</h2>
			<div class="input-group">
				<input type="email" name="customer_email" required>
				<label>Email</label>
			</div>
			<div class="input-group">
				<input type="password" name="customer_password" required>
				<label>Password</label>
			</div>
			
			<button type="submit" name="login">Login</button>
			<div class="login_link">
				<p>I Don't have account? <a href="register.php" class="loginbtn">Sign_up</a></p>
			</div>
		</form>
	</div>
</div>
</body>
</html>