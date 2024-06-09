<?php
include 'partials/_dbconnect.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  //don't give them access and redirect to login
  header("location: adminlogin.php");
  exit;
}


$table_name = $_POST['table_name'];
$event_head=$_POST['event_headline'];
$event_headline = str_replace('$',' ',  $event_head);

$event_id = $_POST['id'];

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
    <title>VIEW EVENT GALLERY</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lightgallery.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-autoplay.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-comments.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-fullscreen.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-rotate.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-share.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-thumbnail.min.css">
    <style>
  .image-item img {
  border: 2px solid #ccc; /* Add border properties */
  border-radius: 4px; /* Add border radius for a rounded border */
}




     /* Beautify Select All checkbox */
.select-all-container {
    display: flex;
    align-items: center;
    justify-content: center; /* Add this line to center align the content */
    margin-bottom: 10px;
}
.sacheck:checked::before {
  content: "\2713"; /* Unicode character for a checkmark */
  display: inline-block;
  width: 12px;
  height: 12px;
  border-radius: 2px;
  background-color: blue;
  color: white;
  text-align: center;
  line-height: 12px;
  margin-right: 5px;
}

.sacheck{
    appearance:none;
            width: 12px;
            height: 12px;
            background-color:white;
            border-radius: 4px;
            cursor: pointer;
}
.sacheck:checked{
    background-color:blue;
}

        #select-all {
            margin-right: 5px;
        }
        
        .imagediv{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            border:none;
        }
        .imagediv footer{
            align-self:flex-end;
        }

        /* Beautify checkboxes */
        .image-item {
            display:flex;
            justify-content:center;
            align-items:center;
            width:30%;
            height:30%;
            overflow:cover;
            margin:12px;
           
            /* position: relative; */

        }
        .image-item img:hover{
            transform: scale(1.1) ;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        .image-item img{
            border:2px solid #01492480;
            width:90%;
            height:auto;
            object-fit:contain;
            cursor:pointer;
            transition: transform 0.3s ease-out;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
    
        .image-checkbox {
            appearance:none;
            width: 12px;
            height: 12px;
            border-radius: 4px;
            background-color:white;
            color:#ffffff;
            cursor: pointer;
            margin-left:10px;
            
        }
        .image-checkbox:hover{
            transform:(1.2)
        }

        .image-checkbox:checked::before {
  content: "\2713"; /* Unicode character for a checkmark */
  display: inline-block;
  width: 12px;
  height: 12px;
  border-radius: 2px;
  background-color: blue;
  color: white;
  text-align: center;
  line-height: 12px;
  margin-right: 5px;
}
.image-counter {
    position: absolute;
    top: 10px;
    left: 10px;
    color: #fff;
    font-size: 16px;
}

        .image-checkbox:checked{
            background-color:blue;
        }
        /* Beautify Download Selected Images button */
        .download-button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .download-button:hover {
            background-color: #45a049;
        }

        .headline{
    margin-top:50px;
    display:flex;
    justify-content:center;
}

h1 {
  font-size: 70px;
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
 .back-button {
  display: inline-block;
  padding: 7px 16px;
  background-color: #0086D0;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  margin-top: 20px;
} 

 .back-button:hover {
  background-color: #003E7F;
}
.back{
    display:flex;
    justify-content:center;
    align-items:center;
} 

    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
$(document).ready(function() {
            // Select all checkboxes
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

<div class="headline">
        <h1><?php echo $event_headline; ?> </h1>
    </div>
    <!-- <div class="back">
    <a href="/campus_captures/welcome.php" class="back-button">Back to Home</a>  
    </div> -->
<div class="App">
   
   

        <form action="download.php" method="POST">
            <div class="select-all-container">
                <input class="sacheck" type="checkbox" id="select-all">
                <label for="select-all">Select All</label>
            </div>
            <div id="imageGallery" class="imagediv">
            
            <?php
            $query = $conn->query("SELECT * FROM $table_name WHERE event_id='$event_id'");

            if ($query->num_rows > 0) {
                while ($row = $query->fetch_assoc()) {
                    $imageURL = $row["file_name"];
                    ?>
                    
                    
                    <div class="image-item">
                        <div class="new">
                        <img src="<?php echo $row['file_name']; ?>" alt="" />
                </div>
                        <footer><input type="checkbox" class="image-checkbox" name="selected_images[]" value="<?php echo $row['file_name']; ?>"></footer>
                    </div>
                    <?php
                }
            } else {
                echo "<p>No image(s) found...</p>";
            }
            ?>
            </div>
            <button type="submit" name="download" class="download-button">Download Selected Images</button>
        </form>
       
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/autoplay/lg-autoplay.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/fullscreen/lg-fullscreen.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/rotate/lg-rotate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/share/lg-share.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/zoom/lg-zoom.min.js"></script> 

<script>
    lightGallery(document.getElementById('imageGallery'), {
        selector: '.image-item img',
        plugins: [lgZoom, lgFullscreen, lgRotate, lgAutoplay],
        download: true,
        controls: true,
        thumbwidth: 100,
        thumbHeight: 100
    });
</script>

</body>
</html> 











