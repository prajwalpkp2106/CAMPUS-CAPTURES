<?php
include 'upload.php';
 


if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  //don't give them access and redirect to login
  header("location: adminlogin.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLUB GALLERY</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lightgallery.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-autoplay.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-comments.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-fullscreen.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-rotate.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-share.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-thumbnail.min.css">
  <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  transition: all 0.2s linear;
}

body {
  /* background: #222; */
  /* background: linear-gradient(to left,#85ddfd,#96a1ff); */
  background: linear-gradient(to left,#7cc7e3,#96a1ff);
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

.gallery {
  margin-top: 20px; 
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  /* margin: 0 auto;
  width: 90%; */
}

.gallery a {
  height: 300px;
  width: relative;
  margin: 10px;
  border-radius: 5px;
  overflow: hidden;
  box-shadow: 0 0 10px grey;
  position: relative;
  cursor: pointer;
}

.gallery a:hover {
  transform: scale(1.05);
  box-shadow: 0 5px 10px black;
}

.gallery a img {
  height: 100%;
  width: 100%;
  object-fit: cover;
}

.gallery a .image-checkbox {
  position: absolute;
  top: 10px;
  right: 10px;
}
.headline{
  margin-top: 100px; 
    display:flex;
    justify-content:center;
}

h1 {
  font-size: 100px;
  margin-top: 0;
  margin-bottom:0;
  color: rgb(28, 2, 99);
  text-align: center;
  text-transform: uppercase;
  font-family: 'Courier New', Courier, monospace;
  overflow: hidden; /* Prevent the overflow of characters during animation */
  white-space: nowrap; /* Keep the text in a single line */
  animation: typewriter 4s steps(40) 10ms 1 normal both; /* Adjust the animation properties as desired */
  transition:color 1s;
}

@keyframes typewriter {
  0% {
    width: 0; /* Start with zero width */
    /* color: rgb(28, 2, 99); */
    color:rgb(213 176 5 / 0%);
  }
  100% {
    width: 100%; /* Expand the width to show complete text */
    background:#0d0064;
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
  }
}
   
    </style>


</head>
<body>
<nav>
  <div class="logosymbol"><a href="/campus_captures/welcome.php"><img src="pict1.png"></a></div>
        <label class="logo">PICT CampusCaptures</label>
        <ul>
            <li><a href="/campus_captures/welcome.php">Club Home</a></li>


            <li><a href="/campus_captures/logout.php"  class="wbtn">Logout</a></li>
                       
            
        </ul>
  </nav>

    <div class="headline">
        <h1>CLUB GALLERY</h1>
    </div>
    <div class="gallery">
    
    <?php  include 'partials/_dbconnect.php';
    $newtable=$_SESSION['table_name']."_images";
        $query = $conn->query("SELECT * FROM $newtable ORDER BY uploaded_on DESC");
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageURL = $row["file_name"];
            ?>
            
            <a href="<?php echo $imageURL; ?>">
                  <img src="<?php echo $imageURL; ?>" alt="" />
                  
          </a>

            
              <?php
          }
      } else {
          echo "<p>No image(s) found...</p>";
      }
      ?>
     
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/autoplay/lg-autoplay.min.js"></script> <script

src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/fullscreen/lg-fullscreen.min.js"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/rotate/lg-rotate.min.js"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/share/lg-share.min.js"></script> <script

src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/zoom/lg-zoom.min.js"></script> 

<script>
    lightGallery(document.querySelector('.gallery'), {
      plugins: [lgThumbnail, lgZoom, lgFullscreen,lgRotate, lgAutoplay], download: true,

controls: true,

thumbwidth: 100, thumbHeight: 100

        // download: false // Disable the download button
    });
</script>
</body>
</html>










<!-- <?php
include 'partials/_dbconnect.php';


$table_name = $_POST['table_name'];

$event_id = $_POST['id'];
$images_table_name=$table_name."_images";

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
    <title>CAMPUS CAPTURES GALLERY</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
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

<div class="App">
    <div class="gallery">
        <h2>CAMPUS CAPTURES GALLERY</h2>
        <form action="download.php" method="POST">
            <input type="checkbox" id="select-all"> Select All<br><br>
            <?php
            $query = $conn->query("SELECT * FROM $images_table_name WHERE event_id='$event_id'");
            if ($query->num_rows > 0) {
                while ($row = $query->fetch_assoc()) {
                    $imageURL = $row["file_name"];
                    ?>
                    <div class="image-item">
                        <img src="<?php echo $row['file_name']; ?>" alt="" />
                        <input type="checkbox" class="image-checkbox" name="selected_images[]" value="<?php echo $row['file_name']; ?>">
                    </div>
                    <?php
                }
            } else {
                echo "<p>No image(s) found...</p>";
            }
            ?>
            <button type="submit" name="download">Download Selected Images</button>
            

        </form>
    </div>
</div>
</body>
</html> -->