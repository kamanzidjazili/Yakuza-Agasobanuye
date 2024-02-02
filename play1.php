<?php
if (isset($_GET['movie_link'])) {
    $link = $_GET['movie_link'];
}
else{
    ?>
    <script>
        alert('Oops Video Not Found');
    </script>
    <?php
}


?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yakuza Films</title>
    <!-- <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/swiper-bundle.min.css"> -->
    <link rel="stylesheet" type="text/css" href="player.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"  href="fontawesome-free-6.4.0-web/css/all.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="icon" as="image" href="image/dad.jpg">
   <style type="text/css">
        body{
    background-image: linear-gradient(rgba(5, 0, 148, 0.5),rgba(5, 0, 148, 0.5)),url(image/real.jpg);
    color: #fff;
    

}
    </style>
</head>
<body>
    <div class="top_bars">
        <h2><i class="fa-solid fa-jedi" style="font-size: 40px; color: #808000;"></i> Yakuza<span> Films</span>.com</h2>
        </div>

    <div class="container show-controls">
        <div class="top_bar">
        <a onclick="window.history.back()"><i class="fas fa-chevron-left" aria-hidden="true"></i></a>
        </div>
        <div class="wrapper">
            <div class="video-timeline">
                <div class="progress-area">
                    <span>0:00</span>
                    <div class="progress-bar"></div>
                </div>
            </div>
            <ul class="video-controls">
                <li class="option left">
                    <button class="volume"><i class="fa-solid fa-volume-high"></i></button>
                    <input type="range" min="0" max="1" step="any" >
                    <div class="video-timer">
                        <p class="current-time">0:00</p>
                        <p class="separator"> /</p>
                        <p class="video-duration">0:00</p>
                    </div>
                </li>
                <li class="option center">
                    <button class="skip-backward">
                        <i class="fas fa-backward"></i>
                    </button>
                    <button class="play-pause">
                        <i class="fa-solid fa-play"></i>
                    </button>
                    <button class="skip-forward">
                       <i class="fas fa-forward"></i>
                    </button>
                </li>
                <li class="option right">
                    <div class="playback-content">
                        <button class="playback-speed">
                            <span class="material-symbols-outlined">slow_motion_video</span>
                        </button>
                        <ul class="speed-option">
                   <li data-speed="2">2</li>
                   <li data-speed="1.5">1.5</li>
                   <li data-speed="1"class="active">Normal</li>
                   <li data-speed="0.75">0.75</li>
                   <li data-speed="0.5">0.5</li>
                   </ul>
                        
                    </div>
                    <button class="pic-in-pic">
            <span class="material-icons">picture_in_picture_alt</span>
                  </button>
                    <button class="fullscreen"><i class="fas fa-expand"></i>
               </button>
               
                
                
                </li>
            </ul>
        </div>
        
        <video src="<?php echo $link; ?>"></video>
    </div>
<div class="copyright">
            <p> Copyright &copy; Yakuza All Right Movies 2023</p>
        </div>


</body>

<script src="try.js"></script>
</html>
