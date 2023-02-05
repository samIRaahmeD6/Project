<?php 
session_start();
$conn = new mysqli('localhost', 'root', '', 'user_db');
   if(!$conn){
    echo 'not connect';
}
$sql ="SELECT count(id) as id FROM users";
$sql1="SELECT count(id) as id1 FROM posts";
$sql2="SELECT count(id) as id2 FROM complains";
$query = $conn->query($sql);
$row = mysqli_fetch_array($query);
$_SESSION['id'] = $row['id'];

$query1 = $conn->query($sql1);
$row1 = mysqli_fetch_array($query1);
$_SESSION['id1'] = $row1['id1'];

$query2 = $conn->query($sql2);
$row2 = mysqli_fetch_array($query2);
$_SESSION['id2'] = $row2['id2'];
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
    <title>Dashboard</title>
</head>
<body>
    <div class='maindiv'>
        <div class="sidebar">
           <ul>
        
            <li>
         <a href="homepage.php">
         <i  class='bx bx-home-alt-2'></i>
         <span class="links_name">Homepage</span>
           </a>
          </li> 
          <li>
            <a href="users.php">
            <i class='bx bx-user'></i>
            <span class="links_name">User</span>
          </a>
          </li>
          <li>
            <a href="member_req.php">
            <i class='bx bx-user-check'></i>
            <span class="links_name">Membership Request</span>
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
                <p>Dashboard</p>
                <i id = 'person' class='bx bxs-dashboard'></i>
                <?php 
              echo "<a class ='username'>".$_SESSION['firstname']."</a>";
           ?>
               
            </div>

               <div class='nameofpage'>
                   
                 <div class='homepage'>
              <div class='box'>
                <div class='box_name'>Total Users:</div>
                <div class='dashlogo'>
                <a href="users.php">
                  <div class='more'>More</div>
                  </a>
                <?php  
             
             echo "<p>".$_SESSION['id']."</p>";
           ?>
                   <i class='bx bxs-user' ></i>
                </div>

             </div>
            <div class='box1'>
                <div class='box_name1'>Total Posts:</div>
                <div class='dashlogo'>
                  <a href="homepage.php">
                  <div class='more'>More</div>
                  </a>
                <?php  
             
             echo "<p>".$_SESSION['id1']."</p>";
           ?>
                   <i class='bx bxs-comment-detail'></i>
                </div>
            </div>
            <div class='box2'>
                <div class='box_name2'>Total Complains:</div>
                <div class='dashlogo'>
                <a href="complain1.php">
                  <div class='more'>More</div>
                  </a>
                  <?php  
             
             echo "<p>".$_SESSION['id2']."</p>";
           ?>
                   <i class='bx bxs-box' ></i>
                </div>
            </div>
              </div>
         </div>
        

      
        

</div>
</body>
</html>