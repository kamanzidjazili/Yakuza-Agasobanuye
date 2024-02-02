<?php 

$conn = new mysqli("localhost","root","","yakuza")or die("Conn Error");

session_start();
session_destroy();
session_unset();

echo "<script>window.location.replace('login.php')</script>";

?>