<?php 
$conn = new mysqli('localhost', 'root', '', 'user_db');
if(!$conn){
    echo 'not connect';
}

if(isset($_POST['signup'])){

    $firstname =  $_POST['firstname'];
    $lastname =  ($_POST['lastname']);
    $email = ($_POST['email']);
    $password =  ($_POST['password']);
    $password = md5($password);
       
       if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)){
          $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES('$firstname','$lastname','$email','$password')";
          if($conn->query($sql)== TRUE){
            header('location:Login.php');
          } else{

          }
       }


    if(mysqli_num_rows($result) > 0){
        $error[] = 'user already exist';
        
    }
    else{
        $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES('$firstname','$lastname','$email','$password')";
        mysqli_query($conn, $sql);
    } 
    
  }
   mysqli_close($conn)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "Style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>SignUp</title>
</head>
<body>

    <div class="wrapper1">
        <div class="header">
      
       <div class="header1">Sign-Up</div>
           </div>
            <div>
        <form action="SignUp.php" method= "POST">
           <div class="label1">
           <label for="firstname"> First Name: </label>
           </div>
           <div class="Name_details">
           <div class="holder">
           <input type="text" name="firstname" placeholder="First Name" required>
           <?php if(isset($_POST['signup'])){
           echo $empmsg_fn;} ?>
            </div>
          <div class="label1">
           <label for= "lastname">Last Name:</label>
           </div>
           <div class="holder">
           <input type="text" name="lastname" placeholder="Last Name" required>
           <?php if(isset($_POST['signup'])){
           echo $empmsg_fn;} ?>
           </div>
        </div>
         
          <div class="label1">
            <label for="email">Email:</label>
            </div>
            <div class="holder">
            <input type="text" name= "email" placeholder="Enter your Email address" required>
            <?php if(isset($_POST['signup'])){
           echo $empmsg_fn;} ?>
            </div>
            <div class="label1">
                <label for="password">Password:</label>
                </div>
                <div class="holder">
                <input type="text" name= "password"placeholder="Enter a new Password" required>
                <?php if(isset($_POST['signup'])){
           echo $empmsg_fn;} ?>
                
                    
                </div>
           <div id="btn">
           
           <input type="submit" name="signup" value="SignUp">
          </div>
        </form>
         <div class="footer">
          Already signed up?<a href="Login.php">Log In</a>
      </div>
      <script src="pass-hide-show.js"></script>
    
</body>
</html>