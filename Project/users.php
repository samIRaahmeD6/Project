<?php

session_start();
$conn = new mysqli('localhost', 'root', '', 'user_db');
   if(!$conn){
    echo 'not connect';
}
if (isset($_POST['delete'])){
  $id = mysqli_real_escape_string($conn, $_POST['id']);

  $sql = "DELETE FROM users WHERE id = $id";
  if(mysqli_query($conn, $sql)){
    header('location: users.php');
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
    <title>Users</title>
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
            <a href="dashboard.php"> 
            <i class='bx bx-objects-vertical-bottom'></i>
            <span class="links_name">Dashboard</span>
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
                <p>USERS</p>
                <i id = 'person' class='bx bxs-dashboard'></i>
                <?php 
              echo "<a class ='username'>".$_SESSION['firstname']."</a>";
           ?>
               
            </div>
               <div class="pagename">
                <div class="card-header">
                    <h2>Registered Users</h2>
                </div>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Delete</th>
                    </tr>
                <?php
      $sql ="SELECT id, firstname, lastname, email FROM users";
       $result = $conn-> query($sql);

     if($result->num_rows > 0){
       while($row = $result-> fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td><td><form  method='POST'><input type='hidden' name='id' value='".$row['id']."'><input type='submit' name='delete' value='Delete' id='aprove'></form></td></tr>";
    }
  }
              ?>
              </table>
            

</div>
</body>
</html>