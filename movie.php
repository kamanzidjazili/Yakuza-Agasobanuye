<?php 
session_start();
$conn = new mysqli("localhost","root","","yakuza")or die("Conn Error");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welcome to Yakuza Films" />
    <meta name="author" content="Yakuza">
     <link rel="stylesheet"  href="css/all.min.css">
    <link rel="stylesheet"  href="css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/swiper-bundle.min.css">
    <link rel="stylesheet"  href="fontawesome-free-6.4.0-web/css/all.min.css">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
   <link rel="icon" type="jpg" sizes="24x20" href="image/dad.jpg">



    <title>Welcome to Yakuza Films</title>
   
    <style type="text/css">
        .search{
        display: flex;
        justify-content: space-between;
    }
    
    .search input{
        width: 100%;
        height: 40px;
        text-align: center;
        border: none;
        padding: 10px;
        border-radius: 10px;
        font-size: 17px;
        outline: none;
        position: relative;
        font-variant: small-caps;
        opacity: .90;
}
.search input::placeholder{
    color: green;
    font-weight: 500;
    font-family: cursive;
}
#text{
    font-size: 20px;
    font-variant: small-caps;
    text-align: center;
    color: orange;
    margin: 10px;
    line-height: 20px;
    letter-spacing: 2px;
}

body{
    background-image: linear-gradient(rgba(5, 100, 148, 0.5),rgba(5, 100, 148, 0.5)),url(image/mom.jpg);
    color: #fff;
    

}

    </style>
</head>
<body>
    
<section>
    <div class="nav container">
            <a href="movie.php" class="logo">
               <i class="fa-solid fa-jedi" style="font-size: 40px; color: #808000;"></i> Yakuza<span> Films</span>.com
            </a>
            
            <div class="search">
                <input type="text" name="" id="find" placeholder="Search Movie" onkeyup="search();">
                
            </div>
            
            <ul>
                
           
        </div>
</section>


 <section class="movie">
 	
 <div class="head">
            <h3 class="heading-tittle">Popular Movie</h3>
        </div>
        <div class="movie-content">
            <?php 

     $select = $conn->query("SELECT * FROM end_movie ORDER BY movie_id ASC")or die("Select Failed");
     if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
    
         ?>
            <div class="movie-box">
                
                <img src="<?php echo $row['picture']?>" alt="" class="img-box" id="vidoe">
                <div class="box-text">
                    <h2 class="movie-text"><?php echo $row['movie_title']?></h2>
                    <span class="movie-type"><?php echo $row['movie_description']?></span>
                    <a href="play.php?movie_link=<?php echo $row['movie_link'];?>" class="watch-btn play-btn">
                        <i class="fa-solid fa-play"></i>
                    </a>
                </div>
                
            </div>
            <?php  
      } 
       } else{
            echo '<p id="text">No Movie Is Available</p>';
         }
       ?>
        </div>
        
    </section>
    







<section class="movie">
    <div class="head">
            <h3 class="heading-tittle">Serie Movie</h3>
        </div>
        <div class="movie-content">
            <?php 

     $select = $conn->query("SELECT * FROM serie_movie ORDER BY serie_id ASC")or die("Select Failed");
     if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
    
         ?>
            <div class="movie-box">
                <img src="<?php echo $row['picture']?>" alt="" class="img-box">
                <div class="box-text">
                    <h2 class="movie-text"><?php echo $row['serie_title']?></h2>
                    <span class="movie-type"><?php echo $row['serie_decription']?></span>
                    <a href="play1.php?serie_link=<?php echo $row['serie_link'];?>" class="watch-btn play-btn">
                        <i class="fa-solid fa-play"></i>
                    </a>
                </div>
                
            </div>
            <?php  
      } 
       } else{
            echo '<p id="text">No Movie Is Available</p>';
         }
       ?>
        </div>
</section>
<div class="copyright">
            <p>&#169; Yakuza All Right Movies 2023</p>
        </div>
        <script src="try.js"></script>
        
</body>
</html>