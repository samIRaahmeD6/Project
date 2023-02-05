<?php  
session_start();
$db = mysqli_connect("localhost", "root", "" , "user_db");

 if(isset($_POST['upload'])){
   $text = $_POST['text'];
    if(!empty($text)){
        $sql ="INSERT INTO complains(text) values ('$text')";
        mysqli_query($db, $sql);
    }

 }

 if (isset($_POST['delete'])){
    $id = mysqli_real_escape_string($db, $_POST['id']);
  
    $sql = "DELETE FROM complains WHERE id = $id";
    if(mysqli_query($db, $sql)){
      header('location: complain.php');
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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Complains</title>
</head>
<body>
    <div class="maindiv">
     <div class="sidebar">
        <ul>
        
       
        <li>
            <a href="#">
            <i class='bx bx-trophy' ></i>
            <span class="links_name">Achievments</span>
        </a>
        </li>
        <li>
       
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
            <a href="saved.php">
            <i class='bx bx-bookmark'></i>
      <span class="links_name">Saved</span>
    </a>
    </li>   
        <li>
           
            <a href="userHomepage.php">
            <i class='bx bxs-component'></i>
            <span class="links_name">Homepage</span>
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
                <p>Complains</p>
                <i id = 'person' class='bx bxs-dashboard'></i>
                <?php 
               
               echo "<a class ='username1'>".$_SESSION['firstname']."</a>";
               echo "<a class ='username2'>".$_SESSION['lastname']."</a>";
            ?>
               </div>
               
          <div class="postcontent">
             <form action="complain.php" method="POST" enctype="multipart/form-data">
                <textarea id="area" name="text" placeholder="Do you have any complains????"></textarea>             
               <input type="submit" name ="upload" value="Post" id = "post_button">
            </form>
         </div>
               
         <?php
        
          $db = mysqli_connect("localhost", "root", "", "user_db");
          $sql = "SELECT * FROM complains";
          $result = mysqli_query($db, $sql);
            while($row = mysqli_fetch_array($result)){
                echo "<div class='posts1'>";
              echo "<form action='complain.php' method='POST'>";
                 echo "<div class='dropdown'>";
                  echo "<button class='dropbtn'>"; echo"<i class='bx bx-dots-horizontal'>"; echo "</i>";
                  echo "</button>";
                echo "<div class='dropdown-content'>";
                echo "<input type='hidden' name = 'id' value='".$row['id']."'> ";
              echo"<input type='submit' value='Delete' name='delete' id='reg'>";
                 echo"</div>";
              echo "</form>";
                echo "</div>";
                  echo" <div class= 'para1'>";
                  echo "<p id='ctext'>".$row['text']."</p>";
                 echo" </div>";
                 echo" </div>";
                 echo "<br>";

            }
            mysqli_close($db);
               ?>
               
               
    </div>
</body>
</html>