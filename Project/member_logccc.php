

<!DOCTYPE html>
<html lang="en">
<head>   
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "member.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Member Login</title>
</head>
<body>
     <div class="wrapper1">
     <div class="error">
                        <p><?php echo $admin_wait ?></p>
                        </div>
        <div class="header">
        <div class="header">
            <h1>Login as Member</h1>
        </div>
      <form action="member_log.php" method='POST' autocomplete="off">
          <div class="label3">
            <label for="">University ID:</label>
          </div>
          <div class="in">
            <input type="text" placeholder="Enter your ID" name ="uni_id">
          </div>

          <div class="label3">
            <label for="">Password:</label>
          </div>
          <div  class="in"><input type="text" placeholder="Enter your Password" name="pass"></div>

          <div >
            <input type="submit" id="btn"value="Login" name="login">
          </div>

          <div class="sig"> Want to be a member?
            <a href="member_reg.php">Register</a>
        </div>
          
        </form>

        
     </div>
</body>
</html>
<?php  

$conn = new mysqli('localhost', 'root', '', 'user_db');
if(!$conn){
    echo 'not connect';
}
session_start();
$empty_email = $empty_pass = '';

if(isset($_POST['login'])){
  
  $uni_id = ($_POST['uni_id']);
  $password =  ($_POST['pass']);
  $password = md5($password);
  $status ='1';
}
if(empty($email)){
   $empty_email ='Fill up this field';
}
if(empty($password)){
  $empty_pass = 'Fill up this field';
}
if(!empty($uni_id) && !empty($password)){
 
  $sql2 = "SELECT * FROM member_reg WHERE uni_id = '$uni_id' AND password = '$password' AND club_name='cultural club' AND status ='1'";
  


  $query2 = $conn->query($sql2);
  

 
  if($query2->num_rows > 0){
    $row= mysqli_fetch_array($query2);
    header('location:sias.php');
  }
  else {
  }
  

}
?>