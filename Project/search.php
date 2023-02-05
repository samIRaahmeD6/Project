<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'user_db');
if(!$conn){
    echo 'not connect';
}
if (isset($_POST['delete'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);
  
    $sql = "DELETE FROM member_reg WHERE id = $id";
    if(mysqli_query($conn, $sql)){
      header('location: member_req.php');
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
           <form action="member_req.php" method="GET">
         <a href="#">
        <i class='bx bx-search-alt' id="search"><input type="submit" name='src1'id='search1' value='' ></i>
        <input id="src" type="text" name='search' placeholder="Search....">
        </a>
        </form>
          </li> 
          
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
                <p>Search</p>
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
                        <th>Club Name</th>
                        <th>Full Name</th>
                        <th>University ID</th>
                        <th>department Name</th>
                        <th>Semester</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>Admission Year</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Approved</th>
                        
                    </tr>
                <?php
     
       
                 
     
       
        echo "<tr><td>".$_SESSION['club_name']."</td><td>".$_SESSION["full_name"]."</td><td>".$_SESSION["uni_id"]."</td><td>".$_SESSION["dept_name"]."</td><td>".$_SESSION['semester']."</td><td>".$_SESSION['gender']."</td><td>".$_SESSION['dob']."</td><td>".$_SESSION['admission_year']."</td><td>".$_SESSION['mobile_no']."</td><td>".$_SESSION['email']."</td><td>".$_SESSION['status']."</td><td><form  method='POST'><input type='hidden' name='id' value='".$_SESSION['id']."'><input type='submit' name='delete' value='Approved' id='aprove'></form></td></tr>";
    
  
              ?>
              </table>
            

</div>
</body>
</html>