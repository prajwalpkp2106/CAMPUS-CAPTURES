<?php include 'uploadaddimages.php'; 
 
   if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
       //don't give them access and redirect to login
       header("location: adminlogin.php");
       exit;
     }
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>UPLOAD MULTIPLE IMAGES</title>
	<meta charset="utf-8">
	<!-- <link rel="stylesheet" href="style.css"> -->
	<style>
		body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
    'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
    sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  background: linear-gradient(to left,#7cc7e3,#96a1ff);
  height: 775px; ;
  padding: 50px;
}
.App {
  max-width: 900px;
  margin: 0 auto;
  background-color: #d8ddff;
  padding: 20px;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  border-radius: 3px;
  text-align: center;
}
.App h1 {
  background-color: #d8ddff;
  text-align: center;
  padding: 20px;
  margin: 0;
  font-size: 23px;
}

.alertinfo{
  padding: 5px;
  font-size: 20px;
  color: #017ada;
  /* background-color: #c1d9ee; */
  border: 2px dotted #017ada ;
}

.max{
  font-size:19px ;
}

p {
  font-size: 18px;
  color: black;
  font-weight: 600;
  line-height: 27px;
  margin: 0 0 17px 0;
}
h4 {
  font-size: 21px;
  font-weight: 600;
}
.btn__default {
  cursor: pointer;
  display: flex;
  margin-left: 110px;
  font-size: 1.3em;
  padding: 10px 20px;
  border-radius: 7px;
  border-color: transparent;
  position: relative;
  border: 0;
  outline: 0;
  box-shadow: 0 1px 3px 0 rgb(0 0 0 / 10%), 0 1px 2px 0 rgb(0 0 0 / 6%);
  background-image: linear-gradient(to bottom right, #03a9f4 0%, #2196f3 100%) !important;
  color: white;
}

label {
  font-size: 18px;
  margin-bottom: 10px;
  display: flex;
  font-weight: 600;
}
input.form__field__img {
  width: 637px;
  font-size: 20px;
  border: 1px solid #f7f7f7;
  background-color: #ffffff;
  padding: 17px;
  border-radius: 7px;
  box-shadow: 0 4px 6px -1px rgb(0 0 0 / 10%), 0 2px 4px -1px rgb(0 0 0 / 6%);
  margin-bottom: 27px;
}
.form__field {
  display: flex;
  align-items: stretch;
  flex-direction: column;
  padding: 27px 0px 10px 0px;
}
.status__msg {
  font-size: 18px;
 
  color:red;
  border: 1px dashed;
  padding: 10px;
  margin-bottom: 27px;
}
.gallery img {
  max-width: 100%;
  height: 260px;
  object-fit: contain;
  margin-right: 17px;
  margin-left: 17px;
}
.gallery h2 {
  font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  text-align: center;
  margin-bottom: 20px;
  position: relative;
  font-size: 36px;
  font-weight: bold;
  color: #333;
  animation: fade-in 1s ease-in-out;
}

@keyframes fade-in {
  0% {
      opacity: 0;
      transform: translateY(-20px);
  }
  100% {
      opacity: 1;
      transform: translateY(0);
  }
}

h1 .upload{
  font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
		</style>
</head>

<body>
	<div class="App">
		<h1 class="upload">Upload Multiple Images</h1><br>
		<span class="alertinfo" role="alert">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Supported Image Extention - 'jpg','png','jpeg','gif','webp'.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span><br><br>
		<div class="wrapper">
			<div class="form__field">
				<?php if(!empty($statusMsg)){ ?>
					<p class="status__msg"><?php echo $statusMsg; ?></p>
				<?php } ?>
				<form action="" method="post" enctype="multipart/form-data">
				<input type='hidden' name='event_name' value="<?php echo $_SESSION['event_name']; ?>" >
				<input type='hidden' name='event_id' value="<?php echo $_SESSION['event_id']; ?>" >
					<input type="file" name="images[]" class="form__field__img" multiple>
					<input type="submit" name="submit" value="Upload" class="btn__default">
          <!-- <span class="max">A maximum of 20 images can be uploaded at once.</span><br>
					<span class="max"> Maximum total upload size should not exceed 40MB </span> -->
				</form>
			</div>
            </body>
</html>