<?php 
$conn = new mysqli("localhost","root","","yakuza")or die("Conn Error");

if (isset($_GET['serie_id'])) {
	$id1 = $_GET['serie_id'];

	$select1 = $conn->query("SELECT * FROM serie_movie WHERE serie_id = '$id1'")or die("select failed");
	while ($row = mysqli_fetch_assoc($select1)) {
		$serie_id1 = $row['serie_id'];
		$serie_name1 = $row['serie_title'];
		$serie_description1 = $row['serie_decription'];
		$serie_link1 = $row['serie_link'];
		$picture1 = $row['picture'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yakuza Films</title>
	<style type="text/css">
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'poppins' sans-serif;
        }
        body{
            min-height: 100vh;
            display: block;
            position: relative;
            margin: 0 130px;
            top: 20px;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 1);
        }
        .main{
            position: relative;
            min-height: 85vh;
            width: 90%;
            display: flex;
            align-items: center;
            flex-direction: column;
            padding: 10px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0.1px 8px 8px 2px rgba(0, 0, 0, 0.1);
        }
        .top_bar{
            position: relative;
            width: 100%;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 10px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        .top_bar a{
            color: #fff;
            cursor: pointer;
            font-size: 1.4em;
        }
        .top_bar p{
            color: #ccc;
            font-size: 1.3em;
        }
        .main form{
            width: 80%;
            display: flex;
            justify-content: center;
            flex-direction: column;
            margin-top: 7em;
        }
        form input{
            width: 100%;
            height: 50px;
            outline: none;
            padding: 5px 15px;
            font-size: 1.2em;
            color: #ccc;
        }
        form input[type=text]{
            border: 1px solid #fff;
            background: none;
            border: none;
            outline: none;
            box-shadow: 0.1px 8px 8px 2px rgba(0, 0, 0, 0.15);
        }
        form input:not(:first-child){
            margin-top: 25px;
        }
        form input[type=submit]{
            background: #28B463;
            border: none;
            font-size: 1.3em;
            cursor: pointer;
            margin-top: 80px;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="main">
    <div class="top_bar">
        <a onclick="window.history.back()"><i class="fas fa-chevron-left" aria-hidden="true"></i></a>
        <p><i class="fas fa-video-camera" aria-hidden="true"></i>&nbsp;&nbsp; Yakuza Series Films Update</p>
    </div>
    <form action="" method="POST" >
        <input type="text" name="serie_title" placeholder="Title" value="<?php echo $serie_name1;?>">
        <input type="text" name="serie_decription" placeholder="Description" value="<?php echo $serie_description1;?>">
        <input type="submit" name="send" value="Update_Video" >
    </form>
</div>
<?php 

if (isset($_POST['send'])) {
	$serie_name = $_POST['serie_title'];
	$serie_description = $_POST['serie_decription'];

	$update = $conn->query("UPDATE serie_movie SET serie_title = '$serie_name', serie_decription = '$serie_description' WHERE serie_id = '$id1'")or die("Update failed");
}
if ($update) {
	echo "<script>window.location.replace('index.php')</script>";
}
?>
</body>
</html>















<?php 
$conn = new mysqli("localhost","root","","yakuza")or die("Conn Error");

if (isset($_GET['movie_id'])) {
	$id = $_GET['movie_id'];

	$select = $conn->query("SELECT * FROM end_movie WHERE movie_id = '$id'")or die("select failed");
	while ($row = mysqli_fetch_assoc($select)) {
		$movie_id1 = $row['movie_id'];
		$movie_name1 = $row['movie_title'];
		$movie_description1 = $row['movie_description'];
		$movie_link1 = $row['movie_link'];
		$pictures = $row['picture'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yakuza Films</title>
	<style type="text/css">
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'poppins' sans-serif;
        }
        body{
            min-height: 100vh;
            display: block;
            position: relative;
            margin: 0 130px;
            top: 20px;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 1);
        }
        .main{
            position: relative;
            min-height: 85vh;
            width: 90%;
            display: flex;
            align-items: center;
            flex-direction: column;
            padding: 10px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0.1px 8px 8px 2px rgba(0, 0, 0, 0.1);
        }
        .top_bar{
            position: relative;
            width: 100%;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 10px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        .top_bar a{
            color: #fff;
            cursor: pointer;
            font-size: 1.4em;
        }
        .top_bar p{
            color: #ccc;
            font-size: 1.3em;
        }
        .main form{
            width: 80%;
            display: flex;
            justify-content: center;
            flex-direction: column;
            margin-top: 7em;
        }
        form input{
            width: 100%;
            height: 50px;
            outline: none;
            padding: 5px 15px;
            font-size: 1.2em;
            color: #ccc;
        }
        form input[type=text]{
            border: 1px solid #fff;
            background: none;
            border: none;
            outline: none;
            box-shadow: 0.1px 8px 8px 2px rgba(0, 0, 0, 0.15);
        }
        form input:not(:first-child){
            margin-top: 25px;
        }
        form input[type=submit]{
            background: #28B463;
            border: none;
            font-size: 1.3em;
            cursor: pointer;
            margin-top: 80px;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="main">
    <div class="top_bar">
        <a onclick="window.history.back()"><i class="fas fa-chevron-left" aria-hidden="true"></i></a>
        <p><i class="fas fa-video-camera" aria-hidden="true"></i>&nbsp;&nbsp; Yakuza End Films Update</p>
    </div>
    <form action="" method="POST" >
        <input type="text" name="movie_title" placeholder="Title" value="<?php echo $movie_name1;?>">
        <input type="text" name="movie_description" placeholder="Description" value="<?php echo $movie_description1;?>">
        <input type="submit" name="update" value="Update_Video" >
    </form>
</div>
<?php 

if (isset($_POST['update'])) {
	$movie_name = $_POST['movie_title'];
	$movie_description = $_POST['movie_description'];

	$update = $conn->query("UPDATE end_movie SET movie_title = '$movie_name', movie_description = '$movie_description' WHERE movie_id = '$id'")or die("Update failed");
}
if ($update) {
	echo "<script>window.location.replace('index.php')</script>";
}
?>
</body>
</html>