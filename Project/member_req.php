<?php

session_start();
$conn = new mysqli('localhost', 'root', '', 'user_db');
   if(!$conn){
    echo 'not connect';
}
  if(isset($_POST['aprove'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $sql = "UPDATE member_reg
     SET status = '1'
     WHERE status = 0 AND id=$id";

     $query = $conn->query($sql);
  }
  if (isset($_POST['delete'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);
  
    $sql = "DELETE FROM member_reg WHERE id = $id";
    if(mysqli_query($conn, $sql)){
      header('location: member_req.php');
    }
  
  
  if(isset($_GET['src1'])){
    $uni_id = ($_GET['search']);
    $sql= "SELECT * FROM member_reg WHERE uni_id= $uni_id AND status='0'";
    echo $sql;
    $query = $conn->query($sql);
    if($query->num_rows>0){
      $row = mysqli_fetch_array($query);
       $_SESSION['id'] = $row['id'];
        $_SESSION['club_name'] = $row['club_name'];
        $_SESSION['full_name'] = $row['full_name'];
        $_SESSION['uni_id'] = $row['uni_id'];
        $_SESSION['dept_name'] = $row['dept_name'];
        $_SESSION['semester'] = $row['semester'];
        $_SESSION['gender'] =$row['gender'];
        $_SESSION['dob'] =$row['dob'];
        $_SESSION['admission_year'] =$row['admission_year'];
        $_SESSION['mobile_no'] =$row['mobile_no'];
        $_SESSION['email'] =$row['email'];
        $_SESSION['status'] =$row['status'];
          
       header('location:search.php');

       
    }
    else{
      echo 'not found';
    }
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
          <li>
         <a href="dashboard.php">
         <i  class='bx bx-objects-vertical-bottom'></i>
         <span class="links_name">Dashboard</span>
           </a>
          </li> 
          <li>
            <a href="users.php">
            <i class='bx bx-user'></i>
            <span class="links_name">User</span>
          </a>
          </li>
          <li>
            <a href="#">
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
                <div class="logo_name">Clubs & Forums</div>
                </div>
                <p>Member Requests</p>
                <i id = 'person' class='bx bxs-dashboard'></i>
                <?php 
              echo "<a class ='username'>".$_SESSION['firstname']."</a>";
           ?>
               
            </div>
               <div class="pagename">
                <h2>USERS</h2>

                <div class="card-header2">
                    <h2>Pending Request</h2>
                </div>
                <table>
                    <tr>
                        <th>Club Name</th>
                        <th>Full Name</th>
                        <th>University ID</th>
                        <th>Department Name</th>
                        <th>Semester</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>Admission Year</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Approve</th>
                    </tr>
                <?php
      $sql ="SELECT id, club_name, full_name, uni_id, dept_name, semester, gender, dob, admission_year, mobile_no, email, status FROM member_reg WHERE status='0' ORDER BY uni_id ASC";
       $result = $conn-> query($sql);
       


     if($result->num_rows > 0){
       while($row = $result-> fetch_assoc()){
        echo "<tr><td>".$row["club_name"]."</td><td>".$row["full_name"]."</td><td>".$row["uni_id"]."</td><td>".$row["dept_name"]."</td><td>".$row["semester"]."</td><td>".$row["gender"]."</td><td>".$row["dob"]."</td><td>".$row["admission_year"]."</td><td>".$row["mobile_no"]."</td><td>".$row["email"]."</td><td>".$row["status"]."</td><td><form  method='POST'><input type='hidden' name='id' value='".$row['id']."'><input type='submit' name='aprove' value='Approve' id='aprove'></form></td></tr>";
    }
  }
              ?>
              <div class="card-header3">
                    <h2>Aproved Requests</h2>
                </div>
              </table>
              
              <table id='table1'>
                    <tr>
                        <th>Club Name</th>
                        <th>Full Name</th>
                        <th>University ID</th>
                        <th>Department Name</th>
                        <th>Semester</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>Admission Year</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Status</th>
                        
                    </tr>
                <?php
      $sql ="SELECT id, club_name, full_name, uni_id, dept_name, semester, gender, dob, admission_year, mobile_no, email, status FROM member_reg WHERE status='1' ORDER BY uni_id ASC";
       $result = $conn-> query($sql);
       


     if($result->num_rows > 0){
       while($row = $result-> fetch_assoc()){
        echo "<tr><td>".$row["club_name"]."</td><td>".$row["full_name"]."</td><td>".$row["uni_id"]."</td><td>".$row["dept_name"]."</td><td>".$row["semester"]."</td><td>".$row["gender"]."</td><td>".$row["dob"]."</td><td>".$row["admission_year"]."</td><td>".$row["mobile_no"]."</td><td>".$row["email"]."</td><td>".$row["status"]."</td></tr>";
    }
  }
              ?>
              </table>

</div>
</body>
</html>