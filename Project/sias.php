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

if(isset($_POST['save'])){
  $_SESSION['id'] = ($_POST['id']);
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
    <title>Student</title>
</head>
<body>
    <div class="maindiv">
     <div class="sidebar">
        <ul>
        
       
       
            <li>
            <a href="#">
            <i class='bx bxs-component'></i>
            <span class="links_name">Clubs & Forums</span>
        </a>
        <span class="tooltip1">
              <a href="member_logcc.php">Computer Club</a>
              <a href="member_logccc.php">Cultural Club</a>
              <a href="member_logsp.php">Sports Club</a>
              <a href="member_logsias.php">SIAS</a>
              <a href="member_logappf.php">App Forum</a>
            </span>
        </li>
        <li>
            <a href="complain.php">
            <i class='bx bx-error-alt'></i>
            <span class="links_name">Complain Box</span>
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
                <p>SIAS</p>
                <i id = 'person' class='bx bxs-dashboard'></i>
                <?php 
               
              echo "<a class ='username1'>".$_SESSION['firstname']."</a>";
              echo "<a class ='username2'>".$_SESSION['lastname']."</a>";
           ?>
               </div>
               
            
               
        <?php
        
          $db = mysqli_connect("localhost", "root", "", "user_db");
          $sql = "SELECT * FROM posts Where club_type='SIAS' AND type='members'";
          $result = mysqli_query($db, $sql);
            while($row = mysqli_fetch_array($result)){
          echo "<div class='posts'>";
              echo "<div class='imgf'>";
              echo "<form action='userHomepage.php' method='POST'>";
               
                 echo "<div class='dropdown'>";
                  echo "<button class='dropbtn'>"; echo"<i class='bx bx-dots-horizontal'>"; echo "</i>";
                  echo "</button>";
                echo "<div class='dropdown-content'>";
                echo "<input type='hidden' name = 'id' value='".$row['id']."'> ";
              echo"<input type='submit'value='Register' name='register' id='reg'>";  
              echo"<input type='submit'value='Save' name='save' id='save'>";  
                     
                 echo"</div>";
                 echo"</div>";
              echo "</form>";
                  echo "<img src='".$row['image']."'>";
                echo "</div>";
                  echo" <div class= 'para'>";
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