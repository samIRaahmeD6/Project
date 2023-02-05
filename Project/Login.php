<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Login</title>
    
</head>
   <body>
   

    <div class="wrapper">
     <div class="header">
   
    <div class="header1">LOGIN</div>
        </div>
         <div>
       <form action="Login.php" method="POST">
        <div class="label1">
        <label for="email"> E-mail: </label>
        </div>
        <div class="holder">
        <input type="text" name ="email" placeholder="Enter your Email...">
        
        
         </div>
       <div class="label1">
        <label for="password">Password:</label>
        </div>
        <div class="holder">
        <input type="password" name="password" placeholder="Enter you Password...">
        <i class="fa-solid fa-eye" id="eyeBtn"></i>
        </div>
        <div id="btn">
        
        <input type="submit" name="login"  value="Login">
    </div>
     </form>
     <div class="footer">
        Not yet signed up?<a href="SignUp.php">Sign up</a>
        
     </div>
    </div>
   </div>
   <script src="pass-hide-show.js"></script>
</body>
</html>
<?php 
$conn = new mysqli('localhost', 'root', '', 'user_db');
if(!$conn){
    echo 'not connect';
}

$empty_email = $empty_pass = '';
  
  if(isset($_POST['login'])){
  
    $email = ($_POST['email']);
    $password =  ($_POST['password']);
    $password = md5($password);
  }
  if(empty($email)){
     $empty_email ='Fill up this field';
  }
  if(empty($password)){
    $empty_pass = 'Fill up this field';
  }
  if(!empty($email) && !empty($password)){
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $sql1= "SELECT * FROM users WHERE email like '%admin%' AND password = '$password'";
    
    

    $query = $conn->query($sql);
    $query1 = $conn->query($sql1);
    if($query1->num_rows>0){
      $row = mysqli_fetch_array($query1);
       $_SESSION['firstname'] = $row['firstname'];
      header('location:homepage.php');
    }
    elseif($query->num_rows > 0){
      $row = mysqli_fetch_array($query);
      $_SESSION['id'] = $row['ID'];
      $_SESSION['firstname'] = $row['firstname'];
      $_SESSION['lastname'] = $row['lastname'];
      $_SESSION['email'] = $row['email'];
      
      header('location:userHomepage.php');
    }
   
    else{
      ?>
      <script>
  swal({
  title: "User not Found",
  text: "Register First",
  icon: "error",
  button: "OK",
})
  </script> 
      
  
  <?php  }

  }
?>
