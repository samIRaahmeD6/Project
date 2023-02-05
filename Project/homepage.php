<?php 
 $msg="";
 $db = mysqli_connect("localhost", "root", "" , "user_db");
 
 if(isset($_POST['upload'])){
 
   $target = $_FILES['image']['name'];
  
   $image = $_FILES['image']['name'];
   $text = $_POST['text'];
   $types= $_POST['types'];
   $club_types = $_POST['club_types'];
 
   if(!empty($image)){
   $sql ="INSERT INTO posts(image, text, club_type, type) values ('$image', '$text', '$club_types', '$types')";
   mysqli_query($db, $sql);
   
   if(move_uploaded_file($_FILES['image']['tmp_name'], $target) ){
      $msg = "image uploaded successfully";
 
   }
   else{
    $msg = "there was a problem uploading the photo";
   }
 
   mysqli_close($db);
  }
 }
 
if (isset($_POST['delete'])){

  
  
  $id = mysqli_real_escape_string($db, $_POST['id']);

  $sql = "DELETE FROM posts WHERE id = $id";
  if(mysqli_query($db, $sql)){
    header('location: homepage.php');
?>
    <script>
  swal({
  title: "Successfully Deleted",

  icon: "success",
  button: "OK",
})
  </script> 
  <?php
   
  }
}


  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "homecss.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin</title>
</head>
<body>
    <div class="maindiv">
     <div class="sidebar">
        <ul>
        
        <li>
            <a href="dashboard.php"> 
            <i class='bx bx-objects-vertical-bottom'></i>
            <span class="links_name">Dashboard</span>
        </a>
        </li>
       
            <li>
            <a href="#">
            <i class='bx bxs-component'></i>
            <span class="links_name">Clubs & Forums</span>
        </a>
            <span class="tooltip1">
              <a href="computerclub.php">Computer Club</a>
              <a href="culturalclub.php">Cultural Club</a>
              <a href="sportsclub.php">Sports Club</a>
              <a href="sias.php">SIAS</a>
              <a href="appforum.php">App Forum</a>
            </span>
        </li>
       
                
           <li>
            <a href="achievement.php">
            <i class='bx bx-trophy' ></i>
            <span class="links_name">Achievments</span>
        </a>
        </li>
          </ul>
          <div class='footer'>
            <a href="login.php">
          <i class='bx bx-log-out'></i>
          <input type="submit" value='Logout'>
          </a>
          </div>
       </div>
               <div class="topbar">
                <div class="logo">
                    <i class='bx bxs-magnet'></i>
                <div class="logo_name">Club & Forum</div>
                </div>  
                <p>Homepage</p>
                <i id = 'person' class='bx bxs-dashboard'></i>
               <?php 
               session_start();
              echo "<a class ='username'>".$_SESSION['firstname']."</a>";
           ?>
               </div>
               
          <div class="postcontent">
             <form action="homepage.php" method="POST" enctype="multipart/form-data">
                <textarea id="area" name="text" placeholder="whats on your mind????"></textarea>
                <input type="file"  name="image" class="post_img" id='pimage'>
                <select name="club_types" id="club_type" required>
                  <option value="">Select a club</option>
                   <option value="Computer Club">Computer Club</option>
                   <option value="Cultural Club">Cultural Club</option>
                   <option value="Sports Club">Sports Club</option>
                   <option value="SIAS">SIAS</option>
                   <option value="APP forum">App Forum</option>
                </select>
                <select name="types" id='post_type' required>
                 
                  <option value="All">All</option>
                  <option value="uiu">UIU students</option>
                  <option value="members">only members</option>
                </select>
               <input type="submit" name ="upload" value="Post" id = "post_button">
            </form>
         </div>
               
        <?php
          
          $db = mysqli_connect("localhost", "root", "", "user_db");
          $sql = "SELECT * FROM posts";
          $result = mysqli_query($db, $sql);
            while($row = mysqli_fetch_array($result)){
                echo "<div class='posts'>";
              echo "<div class='imgf'>";
              echo "<form action='homepage.php' method='POST'>";
              echo "<div class='dropdown'>";
                  echo "<button class='dropbtn'>"; echo"<i class='bx bx-dots-horizontal'>"; echo "</i>";
                  echo "</button>";
                echo "<div class='dropdown-content'>";
                echo "<input type='hidden' name = 'id' value='".$row['id']."'> ";
              echo"<input type='submit' value='Delete' name='delete' id='reg'>";
               
                 echo"</div>";
                 echo"</div>";
              echo "</form>";
             
                  echo "<img src='".$row['image']."'>";
                echo "</div>";
                  echo" <div class= 'para'>";
                  echo "<br>";
                  echo "<p>".$row['text']."</p>";
                 echo" </div>";
                 echo" </div>";
                 echo "<br>";

            }
            mysqli_close($db);
               ?>
               
    </div>
</body>
</html>
<?php 
 $msg="";
 $db = mysqli_connect("localhost", "root", "" , "user_db");
 
 if(isset($_POST['upload'])){
 
   $target = $_FILES['image']['name'];
  
   $image = $_FILES['image']['name'];
   $text = $_POST['text'];
   $types= $_POST['types'];
   $club_types = $_POST['club_types'];
 
   if(!empty($image)){
   $sql ="INSERT INTO posts(image, text, club_type, type) values ('$image', '$text', '$club_types', '$types')";
   mysqli_query($db, $sql);
   
   if(move_uploaded_file($_FILES['image']['tmp_name'], $target) ){
      $msg = "image uploaded successfully";
 
   }
   else{
    $msg = "there was a problem uploading the photo";
   }
 
   mysqli_close($db);
  }
 }
 
if (isset($_POST['delete'])){

  
  
  $id = mysqli_real_escape_string($db, $_POST['id']);

  $sql = "DELETE FROM posts WHERE id = $id";
  if(mysqli_query($db, $sql)){
    header('location: homepage.php');
?>
    <script>
  swal({
  title: "Successfully Deleted",

  icon: "success",
  button: "OK",
})
  </script> 
  <?php
   
  }
}


  
?>