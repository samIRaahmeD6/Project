

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <title>Register</title>
</head>
<body>
    <div class="wrapper">
          <div>
            <h1>Register For Membership</h1>
        </div>
        <div>
            <form action="member_reg.php" method="POST">
                <div class="club">
                    <select name="club_name" id="" required>
                        <option value="">Select Club</option>
                        <option value="computer club">Computer Club</option>
                        <option value="cultural club">Cultural Club</option>
                        <option value="sports club">Sports Club</option>
                        <option value="sias">SIAS</option>
                        <option value="app forum">APP Forum</option>
                    </select>
                </div>
                  <div class="name1">
                    <input type="text" name="full_name" placeholder="Full Name" required>
                  </div>
                  <div class="name2">
                    <input type="text" name="uni_id"  placeholder="University ID" required>
                  </div>

                <div class="department">
                    <select name="department" id="" required>
                        <option value="">Select Department</option>
                        <option value="cse">CSE</option>
                        <option value="eee">EEE</option>
                        <option value="civil engineering">CIVIL ENGINEERING</option>
                        <option value="bba">BBA</option>
                        <option value="economics">ECONOMICS</option>
                    </select>
                </div>
                   <div class="sem">
                    <label class ="label1"  for=""> Semester:</label>
                     <label for="">Spring</label>
                     <input type="radio" id="spring" name="semester" value="spring" required >
                     <label for="">Summer</label>
                     <input type="radio"id="summer" name="semester" value="summer" required>
                     <label for="">Fall</label>
                     <input type="radio" id="fall" name="semester" value="fall" required>
                    </div>
                    <div class="sem1">
                    <label class ="label1"for="">Gender:</label>
                     <label for="">Male</label>
                     <input type="radio" name="gender" value="male" required>
                     <label for="">Female</label>
                     <input type="radio" name="gender" value="female" required>
                     <label for="">Other</label>
                     <input type="radio" name="gender"  value="other" required>
                    </div>
                    <div class ="DOB">
                        <label for="">DOB:</label>
                        <input type="text" name="dob" id="dob" class="dob" placeholder="DD-MM-YYYY" required>
                    </div>
                    <div class="adm">
                        <select name="admission_year" id="admission_year">
                            <option value="">Admission Year</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                    <div class="mob">
                        <input type="text" name="phone" id="phone"placeholder="Phone" required>
                    </div>
                    <div class="mail">
                        <input type="text" name="mail" id="mail" placeholder="Email" required>
                    </div>
                    <div class="pass">
                        <input type="text" name="pass" id="pass"placeholder="Password" required>
                    </div>
                   
                    <div>
                        <input type="submit" name="register" id="btn" value="Register">
                    </div>
                    
                    
            </form>
            
            
        
    </div>
    


    
</body>
</html>

<?php

$conn = new mysqli('localhost', 'root', '', 'user_db');
if(!$conn){
    echo 'not connected';
}

if(isset($_POST['register'])){
  $club_name = ($_POST['club_name']);
  $full_name = ($_POST['full_name']);
  $uni_id = ($_POST['uni_id']);
  $department =($_POST['department']);
  $semester = ($_POST['semester']);
  $gender = ($_POST['gender']);
  $dob= ($_POST['dob']);
  $admission_year=($_POST['admission_year']);
  $phone = ($_POST['phone']);
  $mail = ($_POST['mail']);
  $pass=($_POST['pass']);
  $pass = md5($pass);
  $status= '0';
  
 $sql = "INSERT INTO member_reg (club_name, full_name, uni_id, dept_name, semester, gender, dob, admission_year, mobile_no, email, password, status) VALUES('$club_name', '$full_name', '$uni_id', '$department', '$semester', '$gender', '$dob', '$admission_year', '$phone', '$mail', '$pass', '$status')";
    $query = mysqli_query($conn, $sql);
    if($query){

      ?> 
     
    <script>
   swal({
  title: "Successfully Registerd!",
  text: "Wait for admins aproval",
  icon: "success",
  button: "OK",
});</script>
        
   
        <?php 
   } 
   
   else{ 
     
    ?>

    <script>
    swal({
        title: "Failed to register",
        text: "Wait for sometimes",
        icon: "error",
        button: "OK",
    })
    </script>
       <?php
   }

} ?>
