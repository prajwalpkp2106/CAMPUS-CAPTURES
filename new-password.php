<?php require_once "forgotalgorithm.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="new-password.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="new-password.php" method="POST" autocomplete="off">
                    <h2 class="text-center">New Password</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>

<div class="form-group">
    <div class="password-input">
        <input class="form-control" type="password" name="password" placeholder="Create new password" id="password" required>
        <span class="password-toggle" onclick="togglePasswordVisibility('password', 'password-toggle-icon', 'password-toggle-icon-crossed')">
    <i class="fas fa-eye" id="password-toggle-icon"></i>
    <i class="fas fa-eye-slash crossed" id="password-toggle-icon-crossed"></i>
</span>
    </div>
</div>
<div class="form-group">
    <div class="password-input">
        <input class="form-control" type="password" name="cpassword" placeholder="Confirm your password" id="cpassword" required>
        <span class="password-toggle" onclick="togglePasswordVisibility('cpassword', 'cpassword-toggle-icon', 'cpassword-toggle-icon-crossed')">
            <i class="fas fa-eye" id="cpassword-toggle-icon"></i>
            <i class="fas fa-eye-slash crossed" id="cpassword-toggle-icon-crossed"></i>
        </span>
    </div>
</div>
                    <div class="form-group">
                    <input class="form-control button" type="submit" name="change-password" id="change-password" value="Change">

                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
<style>
    .password-input {
        position: relative;
    }

    .password-toggle {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
    }
    .password-toggle.crossed-out i {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
    display: inline-block;
    width: 1em;
    height: 1em;
    font-size: 1.25rem;
    color: #ccc;
    text-decoration: line-through;
}
.password-toggle i.crossed {
    display: none;
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
    font-size: 1rem;
    color: #ccc;
    text-decoration: line-through;
}


</style>
<script>
    // Function to toggle password visibility
    function togglePasswordVisibility(inputId, iconId, iconCrossedId) {
    var input = document.getElementById(inputId);
    var icon = document.getElementById(iconId);
    var iconCrossed = document.getElementById(iconCrossedId);

    if (input.type === "password") {
        input.type = "text";
        icon.style.display = "none";
        iconCrossed.style.display = "inline-block";
    } else {
        input.type = "password";
        icon.style.display = "inline-block";
        iconCrossed.style.display = "none";
    }
}


    document.getElementById('change-password').addEventListener('click', function(event) {
        var confirmed = confirm("Are you sure you want to change your password?");
        
        if (!confirmed) {
            event.preventDefault(); // Prevent form submission
        }
    });
</script>
</html>