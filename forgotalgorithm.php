<?php 
session_start();
require "partials/_dbconnect.php";
$email = "";
$name = "";
$errors = array();

//if user click continue button in forgot password form
if(isset($_POST['check-email'])){
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $check_email = "SELECT * FROM admin WHERE email='$email'";
  $result = mysqli_query($conn, $check_email); //check if mail is present or not in database
  if(mysqli_num_rows($result) > 0){ 
      $code = rand(999999, 111111); // if yes then reset the code
      $insert_code = "UPDATE admin SET code = $code WHERE email = '$email'";
      $result =  mysqli_query($conn, $insert_code);
      //code sending on mail for forget
      if($result){
          $subject = "Password Reset Code";
          $message = " Hello Admin, \n Please use this code to reset the password for the Campus Captures account.\n \n Here is the code: $code\n \n Thanks, \n The Campus Captures Team";
          $sender = "From: campuscaptureshelp@gmail.com";
          if(mail($email, $subject, $message, $sender)){
              $info = "We've sent a passwrod reset otp to your email - $email";
              $_SESSION['info'] = $info;
              $_SESSION['email'] = $email;
              header('location: reset-code.php');
              exit();
          }else{
              $errors['otp-error'] = "Failed while sending code!";
          }
      }else{
          $errors['db-error'] = "Something went wrong!";
      }
  }else{
      $errors['email'] = "Invalid Credentials!";
  }
}

 //if user click check reset otp button
 if(isset($_POST['check-reset-otp'])){
  $_SESSION['info'] = "";
  $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
  $check_code = "SELECT * FROM admin WHERE code = $otp_code";//checking for code
  $code_res = mysqli_query($conn, $check_code);
  if(mysqli_num_rows($code_res) > 0){
      $fetch_data = mysqli_fetch_assoc($code_res);
      $email = $fetch_data['email'];
      $_SESSION['email'] = $email;
      //New password page
      $info = "Please create a new password.";
      $_SESSION['info'] = $info;
      header('location: new-password.php');
      exit();
  }else{
      $errors['otp-error'] = "You've entered incorrect code!";
  }
}

    //if user click change password button
    // new password page
    if(isset($_POST['change-password'])){
      $_SESSION['info'] = "";
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
      if($password !== $cpassword){
          $errors['password'] = "Confirm password not matched!";
      }else{
          $code = 0;
          $email = $_SESSION['email']; //getting this email using session
          $encpass = password_hash($password, PASSWORD_BCRYPT);
          $update_pass = "UPDATE admin SET code = $code, password = '$encpass' WHERE email = '$email'";
          $result = mysqli_query($conn, $update_pass);
          if($result){
              $info = "Your password changed. Now you can login with your new password.";
              $_SESSION['info'] = $info;
              header('Location: password-changed.php');
          }else{
              $errors['db-error'] = "Failed to change your password!";
          }
      }
  }

 //if login now button click
 //after changing password go to login now 
  if(isset($_POST['login-now'])){
      header('Location: adminlogin.php');
  }

?>
