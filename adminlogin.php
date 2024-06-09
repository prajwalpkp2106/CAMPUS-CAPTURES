<?php 
    
    $login=false;
    $showError=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){
   
      include 'partials/_dbconnect.php';
      require_once "forgotalgorithm.php";
      $username=$_POST["username"];
      $email=$_POST["email"];
      $password=$_POST["password"];
      
    
      
      $sql="Select * from admin where username='$username' AND email='$email'";
      $result= mysqli_query($conn,$sql);
      $num=mysqli_num_rows($result);
      
        if($num==1){
            $row=mysqli_fetch_assoc($result);
            $fetch_pass = $row['password'];
            if(password_verify($password, $fetch_pass)){

       //    while($row=mysqli_fetch_assoc($result)){
            //$row=mysqli_fetch_assoc($result)    
            $login=true;
                //Starting session
           //     var_dump($row);exit;
                session_start();
                $_SESSION['loggedin']= true;
                $_SESSION['username']= $username;
                $_SESSION['email']= $email;
                //because it is in row and not yet fetched by post
                $_SESSION['club_name']= $row['club_name'];

              //To redirect
                header("location: welcome.php");
            //}
            
      }
      else{ $showError= "Invalid Credentials";
      }
    
    
    
    }
      else{ $showError= "Invalid Credentials";
      }
    
         
            
    }
  
?>

<!doctype html>
<html lang="en">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <style>
  .password-eye {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 10px;
    cursor: pointer;
    color: #96a1ff;

  }
</style>
    <title>ADMIN LOGIN</title>
  </head>
  <body>
   
    <?php 


    if($login){
   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your are logged in
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';}
if($showError){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Error!</strong> '.$showError.'
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
 </div>';}


?>
 
    <section>
        <div class="form-box">
            <div class="form-value">
            <style>
    input[type="text"] {
      color: white;
    }
    input[type="email"] {
      color: white;
    }
    input[type="password"] {
      color: white;
    }
  </style>
                <form action="/campus_captures/adminlogin.php" method="post">
                    <h2>ADMIN LOGIN</h2>
                    <div class="inputbox">
                        
                        <input  class="x"  type="text" name="username"  required>
                        <label for="username">Username</label>
                    </div>
                    <div class="inputbox">
                        <input  class="x" type="email" name="email" required>
                        <label for="email">Email</label>
                    </div>
            
                    <div class="inputbox">
  <input class="x"  type="password" name="password" id="password" required>
  <label for="password">Password</label>
  <i class="fas fa-eye password-eye" onclick="togglePasswordVisibility()"></i>
</div>

                    <div class="forget">
                        <label for="forget"><a href="forgot-password.php">Forgot Password?</a></label>
                    </div>
                    <button type="submit">Login</button>
                    <div class="register">
                        <p><a href="/campus_captures/home.php">View as Guest</a></p>
                        
                    </div>
                </form>
            </div>
        </div>
    </section>   
    <script>
  function togglePasswordVisibility() {
    const passwordInput = document.getElementById("password");
    const passwordEyeIcon = document.querySelector(".password-eye");
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      passwordEyeIcon.classList.remove("fa-eye");
      passwordEyeIcon.classList.add("fa-eye-slash");
    } else {
      passwordInput.type = "password";
      passwordEyeIcon.classList.remove("fa-eye-slash");
      passwordEyeIcon.classList.add("fa-eye");
    }
  }
</script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
 
  </body>
</html>
