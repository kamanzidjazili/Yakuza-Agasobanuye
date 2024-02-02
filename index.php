 <?php 
$conn = new mysqli("localhost","root","","yakuza")or die("Conn Error");

?>

 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
   <title>Yakuza Films</title>
   <link rel="stylesheet" href="user.css" type="text/css">
 </head>
 <body>
   <div class="container">
     <div class="middle">
      <h2>Yakuza End_Movie Control</h2>
       <table id="customer">
         <tr>
           <th>Movie_Id</th>
           <th>Movie_Title</th>
           <th>Movie_Description</th>
           <th>Movie_Link</th>
           <th>Movie_Image</th>
           <th colspan="2">Action</th>
         </tr>
         <?php 

         $select = $conn->query("SELECT * FROM end_movie")or die("Select Failed");
          while ($row = mysqli_fetch_array($select)) {
            echo "<tr><td>";
            echo $row['movie_id'];
            echo "</td><td>";
            echo $row['movie_title'];
            echo "</td><td>";
            echo $row['movie_description'];
            echo "</td><td>";
            echo $row['movie_link'];
            echo "</td><td>";
            echo $row['picture'];
            echo "</td><td>";
            echo "<a href='delete.php?movie_id=".$row['movie_id']."'<button>Delete</button></a>";
            echo "</td><td>";
            echo "<a href='update.php?movie_id=".$row['movie_id']."'<button>Update</button></a>";
            echo "</td></tr>";

         }





         ?>
       </table>
     </div>
   </div>
<br><br><br><br><br><br><br><br><br>

   <div class="container">
     <div class="middle">
      <h2 style="color: lightgreen;">Yakuza Series_Movie Control</h2>
       <table id="customer">
         <tr>
           <th>Serie_Id</th>
           <th>Serie_Title</th>
           <th>Serie_Description</th>
           <th>Serie_Link</th>
           <th>Serie_Image</th>
           <th colspan="3">Action</th>
         </tr>
         <?php 

         $select = $conn->query("SELECT * FROM serie_movie")or die("Select Failed");
          while ($row = mysqli_fetch_array($select)) {
            echo "<tr><td>";
            echo $row['serie_id'];
            echo "</td><td>";
            echo $row['serie_title'];
            echo "</td><td>";
            echo $row['serie_decription'];
            echo "</td><td>";
            echo $row['serie_link'];
            echo "</td><td>";
            echo $row['picture'];
            echo "</td><td>";
            echo "</td><td>";
            echo "<a href='delete.php?serie_id=".$row['serie_id']."'<button>Delete</button></a>";
            echo "</td><td>";
            echo "<a href='update.php?serie_id=".$row['serie_id']."'<button>Update</button></a>";
            echo "</td></tr>";
            
          
         }





         ?>
       </table>
     </div>
   </div>
   </body>
 </html>
