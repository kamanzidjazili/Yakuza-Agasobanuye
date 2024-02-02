<?php 
$conn = new mysqli("localhost","root","","yakuza")or die("Conn Error");

if (isset($_GET['movie_id'])) {
	$id = $_GET['movie_id'];

	$delete = $conn->query("DELETE FROM end_movie WHERE movie_id = '$id'")or die("Delete Failed");
	echo "<script>window.location.replace('index.php')</script>";
}


?>


<?php 
$conn = new mysqli("localhost","root","","yakuza")or die("Conn Error");

if (isset($_GET['serie_id'])) {
	$id1 = $_GET['serie_id'];

	$delete1 = $conn->query("DELETE FROM serie_movie WHERE serie_id = '$id1'")or die("Delete Failed");
	echo "<script>window.location.replace('index.php')</script>";
}


?>