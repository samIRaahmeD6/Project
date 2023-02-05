<?php  
$db = mysqli_connect("localhost", "root", "" , "user_db");
session_start();

if(isset($_POST['register'])){
  $id = mysqli_real_escape_string($db, $_POST['id']);
  $firstname = $_SESSION['firstname'];
  $lastname = $_SESSION['lastname'];
  $email = $_SESSION['email'];
  $sql = "INSERT INTO registerd_users (firstname, lastname, email, post_id) VALUES('$firstname','$lastname','$email','$id')";
  mysqli_query($db, $sql);
  
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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>
</head>
<body>
    <div class="maindiv">
     <div class="sidebar">
        <ul>
        <li>
         <a href="#">
        <i class='bx bx-search-alt' id="search"></i>
        <input id="src" type="text" placeholder="Search....">
        </a>
          </li> 
       
          <li>
         <a href="homepage.php">
         <i  class='bx bx-home-alt-2'></i>
         <span class="links_name">Homepage</span>
           </a>
          </li> 
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
            <a href="#">
            <i class='bx bx-bookmark'></i>
      <span class="links_name">Saved</span>
    </a>
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
                <i id = 'person' class='bx bxs-dashboard'></i>
                <?php 
               
              echo "<a class ='username'>".$_SESSION['firstname']."</a>";
              
           ?>
               </div>
               
            
               
        <?php
        
          $db = mysqli_connect("localhost", "root", "", "user_db");
          $sql = "SELECT * FROM complains";
          $result = mysqli_query($db, $sql);
            while($row = mysqli_fetch_array($result)){
                echo "<div class='posts1'>"; 
                  echo" <div class='para1'>";
                  echo "<p id= 'ctext'>".$row['text']."</p>";
                 echo" </div>";
                 echo "</div>";

            }
            mysqli_close($db);
               ?>
               
    </div>
</body>
</html>