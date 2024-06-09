<?php
include 'partials/_dbconnect.php';
 include 'upload.php';
 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  //don't give them access and redirect to login
  header("location: adminlogin.php");
  exit;
}


// session_start();
$_SESSION['table_name']=isset($_POST['table_name'])?$_POST['table_name']:$_SESSION['table_name'];
$_SESSION['event_name']=isset($_POST['event_name'])?$_POST['event_name']:$_SESSION['event_name'];
$_SESSION['id']=isset($_POST['id'])?$_POST['id']:$_SESSION['id'];
$table_name = $_SESSION['table_name']."_images";

$event_name = $_SESSION['event_name'];
$event_id = $_SESSION['id'];



// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if selected_images[] is set
    if (isset($_POST['selected_images'])) {
        $selectedImages = $_POST['selected_images'];

        // Handle the downloading of selected images
        // ...

        // Deselect all photos
        $_POST['selected_images'] = array();
    }
}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>EDIT GALLERY</title>
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
nav {
  position: fixed;
  top: 0;
  left: 0;
  background: rgb(9, 48, 104);
  height: 80px;
  width: 100%;
  z-index: 999; 
  }

.logosymbol img{
  height: 75px;
  width: 75px;
  border-radius: 50%;
  position: absolute;
  margin-top: 2px;
  margin-left: 5px;


}
label.logo{
  color:#ffffff;
  font-size: 30px;
  font-family:   'Montserrat', sans-serif;
  line-height: 80px;
  padding: 0 30px;
  padding-left: 100px;
  font-weight: 100;
  font-style: italic;
  display: inline; 
}


nav ul {
  float: right;
  margin-top: 0px;
  margin-right: 20px;
}

nav ul li{
  display: inline-block;
  line-height: 80px ;
  margin: 0 10px
}

nav ul li a{
font-family:   'Montserrat', sans-serif;
  color: rgb(255, 255, 255);
  font-size: 17px;
  padding: 7px 13px ;
  border-radius: 3px;
  text-transform: uppercase;  
  text-decoration: none;  
}

a.active,a:hover{
  background: #135bd7;
  transition: .25s;
}

nav ul li a[href="/campus_captures/logout.php"] {
  border: 2px solid lightblue;
  padding: 10px; 
}

.App {
  max-width: 900px;
  margin: 0 auto;
  background-color: #d8ddff;
  padding: 20px;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  border-radius: 3px;
  text-align: center;
  margin-top:40px;
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
  
  background-image: linear-gradient(to bottom right, #03a9f4 0%, #2196f3 100%) !important;
  color: white;
}
.btn_home{
   
    cursor: pointer;
  display: flex;
  margin-left: 369px;
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
  text-decoration: none;
}
.btn_home:hover {
  text-decoration: none; /* Remove underline */
  background-image: linear-gradient(to bottom right, #0288d1 0%, #1976d2 100%) !important; /* Change the background color on hover */
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
    margin-top: 10px;
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#select-all").click(function() {
                $(".image-checkbox").prop('checked', $(this).prop('checked'));
            });
        });
    </script>
</head>
<body>
<nav>
  <div class="logosymbol"><a href="/campus_captures/welcome.php"><img src="pict1.png"></a></div>
        <label class="logo">PICT CampusCaptures</label>
        <ul>
            <li><a href="/campus_captures/welcome.php">Club Home</a></li>

            <li><a href="/campus_captures/gallery.php"  class="wbtn">Club Gallery</a></li>

            <li><a href="/campus_captures/logout.php"  class="wbtn">Logout</a></li>
                       
            
        </ul>
  </nav>

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this image?");
    }
</script>
<div class="App">
<h1> Upload Images </h1>
		<div class="wrapper">
			<div class="form__field">
				<?php if(!empty($statusMsg)){ ?>
					<p class="status__msg"><?php echo $statusMsg; ?></p>
				<?php } ?>
				<form action="/campus_captures/upload.php" method="post" enctype="multipart/form-data">
					<input type="file" name="images[]" class="form__field__img" multiple>
					<input type="submit" name="submit" value="Upload" class="btn__default">
					<!-- <button class="btn_home"><a href="/campus_captures/welcome.php"  >Back To Home</a></button> -->
				</form>

			</div>
    <div class="gallery">
    <button class="btn_home" onclick="goBackToPrevious()">Back To Home</button>
    <!-- <button class="btn_home"><a href="/campus_captures/welcome.php"  >Back To Home</a></button> -->
        <h2>Delete Images</h2>
      
         
            <?php
            
            $query = $conn->query("SELECT * FROM $table_name WHERE event_id='$event_id' ORDER BY uploaded_on DESC");

            if ($query->num_rows > 0) {
                while ($row = $query->fetch_assoc()) {
                    $imageURL = $row["file_name"];
                    ?>
                       <div class="image-item">
        <img src="<?php echo $row['file_name']; ?>" alt="" />
        <form action="/campus_captures/upload.php" method="POST">
            <input type="hidden" name="id" value="<?php echo isset($row['id']) ? ($row['id']) : ''; ?>">
            <input type="hidden" name="task" value="delete">
            <button class="edit btn btn-sm btn-primary" onclick="return confirmDelete()">Delete</button>
        </form>
    </div>
                    <?php
                }
            } else {
                echo "<p>No image(s) found...</p>";
            }
            ?>
            
            

      
    </div>
</div>
<script>
    // Function to navigate back to the previous page
    function goBackToPrevious() {
        const previousPage = sessionStorage.getItem('previousPage');
        if (previousPage) {
            window.location.href = previousPage;
        } else {
            // If previousPage is not available, navigate to the default home page
            window.location.href = '/campus_captures/welcome.php';
        }
    }
</script>
</body>
</html> 