<?php
    $conn = new mysqli("localhost","root","","yakuza")or die("Conn Error");
    if (isset($_POST['submit'])) {
        // code...
        $title_var = $_POST['movie_title'];
        $desc_var = $_POST['movie_description'];
        

        if (isset($_FILES['video']) && isset($_FILES['image'])) {
            // code...
            $unique_id = rand(1,20);

            
            $file_name = $_FILES['video']['name'];
            $image_name = $_FILES['image']['name'];
            $link = "End_Movies/". $unique_id . $file_name;
            $link2 = "image/".$unique_id . $image_name;
            $file_tmp = $_FILES['video']['tmp_name'];
            $file_tmp1 = $_FILES['image']['tmp_name'];

            if (move_uploaded_file($file_tmp, $link) && move_uploaded_file($file_tmp1, $link2)) {
                if ($title_var && $desc_var  != "") {
                    $insert = $conn->query("INSERT INTO end_movie(movie_title,movie_description,movie_link,picture) VALUES('$title_var','$desc_var','$link','$link2')")or die("query fail");
                    ?>
                    <script>
                        alert('Video Uploaded Sucessfully');
                    </script>
                    <?php
                }
            }
            else{
                    echo "Fill All Data";
                }
        }
        
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload Movies</title>
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/swiper-bundle.min.css">
    <link rel="stylesheet"  href="fontawesome-free-6.4.0-web/css/all.min.css">

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
            margin-top: 4em;
        }
        form input{
            width: 100%;
            height: 50px;
            outline: none;
            padding: 5px 10px;
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
            margin-top: 50px;
            color: #fff;
        }
    </style>
</head>
<body>
 <div class="main">
    <div class="top_bar">
        <a onclick="window.history.back()"><i class="fas fa-chevron-left" aria-hidden="true"></i></a>
        <p><i class="fas fa-video-camera" aria-hidden="true"></i>&nbsp;&nbsp; Yakuza End Films</p>
    </div>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <input type="text" name="movie_title" placeholder="Title">
        <input type="text" name="movie_description" placeholder="Description">
        <div class="image" style="font-size: 20px; color: ghostwhite; font-family: cursive; position: absolute; right: 80px; bottom: 11em;">
            <b>Choose Image</b>
        </div>
        <input type="file" name="image">
        <div class="image" style="font-size: 20px; color: ghostwhite; font-family: cursive; position: absolute; right: 80px; bottom: 6em;">
            <b>Choose Video</b>
        </div>
        <input type="file" name="video">
        <input type="submit" name="submit" value="Upload Video" >
    </form>
</div>
</body>
</html>

<br><br><br>











<?php
    $conn = new mysqli("localhost","root","","yakuza")or die("Conn Error");
    if (isset($_POST['send'])) {
        // code...
        $title_var1 = $_POST['serie_title'];
        $desc_var1 = $_POST['serie_decription'];
        
        if (isset($_FILES['videos']) && isset($_FILES['images'])) {
            // code...
            $unique_id1 = rand(1,20);

            $file_name1 = $_FILES['videos']['name'];
            $image_name1 = $_FILES['images']['name'];
            $link1 = "Series_Movies/". $unique_id1 . $file_name1;
            $link3 = "image/". $unique_id . $image_name1;
            $file_tmp1 = $_FILES['videos']['tmp_name'];
            $file_tmp2 = $_FILES['images']['tmp_name'];

            if (move_uploaded_file($file_tmp1, $link1) && move_uploaded_file($file_tmp2, $link3)) {
                if ($title_var1 && $desc_var1 != "") {
                    $insert = $conn->query("INSERT INTO serie_movie(serie_title,serie_decription,serie_link,picture) VALUES('$title_var1','$desc_var1','$link1','$link3')")or die("query fail");
                    ?>
                    <script>
                        alert('Video Sucessfully Uploaded');
                    </script>
                    <?php
                }
            }
            else{
                    echo "Fill All Data";
                }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload Movies</title>
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/swiper-bundle.min.css">
    <link rel="stylesheet"  href="fontawesome-free-6.4.0-web/css/all.min.css">

    
</head>
<body>
<div class="main">
    <div class="top_bar">
        <a onclick="window.history.back()"><i class="fas fa-chevron-left" aria-hidden="true"></i></a>
        <p><i class="fas fa-video-camera" aria-hidden="true"></i>&nbsp;&nbsp; Yakuza Series Films</p>
    </div>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <input type="text" name="serie_title" placeholder="Title">
        <input type="text" name="serie_decription" placeholder="Description">
        <div class="image" style="font-size: 20px; color: ghostwhite; font-family: cursive; position: absolute; right: 80px; bottom: 11em;">
            <b>Choose Image</b>
        </div>
        <input type="file" name="images" >
        <div class="image" style="font-size: 20px; color: ghostwhite; font-family: cursive; position: absolute; right: 80px; bottom: 6em;">
            <b>Choose Video</b>
        </div>
        <input type="file" name="videos">
        <input type="submit" name="send" value="Upload_Video" >
    </form>
</div>
</body>
</html>

