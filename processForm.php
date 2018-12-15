<?php
include("conn.php");
  $message_alert = '';

  if(isset($_POST['register'])) {

    $fullName = mysql_real_escape_string($_POST['fullName']);
    $email = mysql_real_escape_string($_POST['email']);
    $age = mysql_real_escape_string($_POST['age']);
    $dob = mysql_real_escape_string($_POST['dob']);
    $gender = mysql_real_escape_string($_POST['gender']);
    $designation = mysql_real_escape_string($_POST['designation']);
      
    if(!empty($_POST['languages'])) {
        $language = "";
        foreach($_POST['languages'] as $lang) {
            $language .= $lang." "; 
        }
    }
      
    $bio = mysql_real_escape_string($_POST['bio']);
    $password = mysql_real_escape_string($_POST['password']);
    $confirmPassword =mysql_real_escape_string($_POST['confirmPassword']);

    $insert = "INSERT INTO users(fullName,email,age,dob,gender,designation,languages,bio,password) VALUES('$fullName','$email',$age,'$dob','$gender','$designation','$language','$bio','$password')";

    if($password == $confirmPassword) {
        if (mysqli_query($con, $insert)) {
            $message_alert = '
            <div class="alert alert-success">
              <strong>Success!</strong> User Registered<br>
            </div>';
        } else {
          $message_alert = '
          <div class="alert alert-danger">
            <strong>Failed!</strong> Not Registered!
          </div>';
        }
    } else {
        $message_alert = '
          <div class="alert alert-warning">
            <strong>Failed!</strong> Password does not match!
          </div>';
    }
  }
?>