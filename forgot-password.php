<?php require_once "forgotalgorithm.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="forgotpass.css">
    <style>
    /* .loading {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    
    .loading-circle {
      width: 50px;
      height: 50px;
      border: 5px solid #ccc;
      border-top-color: #3498db;
      border-radius: 50%;
      animation: spin 1s infinite linear;
    }
    
    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }
    
    p {
      margin-top: 20px;
      font-weight: bold;
      color: #555;
    } */
    .loading {
      display: none;
      width: 50px;
      height: 50px;
      margin: 0 auto; 
      border: 3px solid #c9f2f6 ;
      border-radius: 50%;
      border-top-color: black ;
      animation: spin 0.8s infinite linear;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
  </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue" id="submit">
                    </div>
                </form>
            </div>
        </div>

    <!-- <button id="myButton">Click me</button> -->
    <div class="center">
    <span class="loading"></span>
    <script>
    document.querySelector('#submit').addEventListener('click', function() {
      var loadingElement = document.querySelector('.loading');
      loadingElement.style.display = 'block';

     // Simulate a delay for the loading animation
     setTimeout(function() {
        loadingElement.style.display = 'none';
      }, 25000); // Replace 3000 with the desired duration of the loading animation in milliseconds
    });
  </script>
    </div>
      </div>
</body>
</html>