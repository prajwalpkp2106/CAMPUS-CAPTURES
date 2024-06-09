<?php
session_start();
include 'partials/_dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLUB EVENTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="welcome.css">
  <link rel="stylesheet" href="style_copy.css">  
</head>
<body>
<?php
if (isset($_GET["table_name"])) {
    $_SESSION["table_name"] = $_GET["table_name"]; // Store table_name in session
}
if (isset($_SESSION["table_name"])) {
  $table_name = $_SESSION['table_name'];
  $images_table_name = $table_name . "_images";
 

 

// Storing data in the session
$_SESSION['images'] = $images_table_name;

 ?>
  <nav>
  <div class="logosymbol"><a href="/campus_captures/home.php"><img src="pict1.png"></a></div>
        <label class="logo">PICT CampusCaptures</label>
        <ul>
       <li><a href="/campus_captures/home.php">Home</a></li>
    <li><a href="#" class="wbtn">Years</a>
        <div class="sub-menu">
            <ul>
                <?php
                $query = "SELECT DISTINCT YEAR(event_date) AS year FROM $table_name ORDER BY year DESC ";
                $result = mysqli_query($conn, $query);
                $selectedYear = $_GET['year'] ?? '';
                // while ($row = mysqli_fetch_assoc($result)) {
                //     $year = $row['year'];
                //     $active = ($selectedYear == $year) ? 'active' : '';
                //     echo "<li><form method='post' action='guestgallery.php'>
                //               <input type='hidden' name='selected_year' value='$year'>
                //               <button type='submit' name='submit_year' class='$active'>$year</button>
                //           </form></li>";
                // }
                echo "<form action='/campus_captures/guestgallery.php' method='get'>
                <input type='hidden' name='selected_year' value=''>
                <button type='submit' name='submit_year' class='$selectedYear'>All</button>
            </form>";
                while ($row = mysqli_fetch_assoc($result)) {
                  $year = $row['year'];
                  $active = ($selectedYear == $year) ? 'active' : '';
                  echo "<li><form method='get' action='guestgallery.php'>
                            <input type='hidden' name='table_name' value='$table_name'> <!-- Add this line -->
                            <input type='hidden' name='selected_year' value='$year'>
                            <button type='submit' name='submit_year' class='$active'>$year</button>
                        </form></li>";
              }
                ?>
            </ul>
        </div>
    </li>
   
            <!-- make the rest small - as not important -->
            
           
            <li><a href="/campus_captures/clubgallery.php">Club Gallery</a></li>
            <li><a href="/campus_captures/adminlogin.php">Admin Login</a></li>
 
</nav>

<div class="h11">
    <div class="h1"><h1><?php $outputString = str_replace('_', ' ', $table_name);
     echo $outputString; ?></h1></div>

</div>

<!-- After your navigation bar and headline -->
<div class="corner-image">
    <img src="images/<?php echo $table_name?>.png" alt="Corner Image" class="fit-image">
</div>

<?php

  $query = "SELECT DISTINCT YEAR(event_date) AS year FROM $table_name ORDER BY year DESC ";
  $result = mysqli_query($conn, $query);

  echo '<ul>'; // Add this line to start an unordered list

  while ($row = mysqli_fetch_assoc($result)) {
      $year = $row['year'];
      $active = ($selectedYear == $year) ? 'active' : '';
       "<li><form method='get' action='guestgallery.php'>
                <input type='hidden' name='table_name' value='$table_name'> <!-- Add this line -->
                <input type='hidden' name='selected_year' value='$year'>
                <button type='submit' name='submit_year' class='$active'>$year</button>
            </form></li>";
  }

  echo '</ul>'; 
// if (isset($_POST['table_name'])) {
//     $table_name = $_POST['table_name'];
//     $images_table_name = $table_name . "_images";

//     $query = "SELECT DISTINCT YEAR(event_date) AS year FROM $table_name ORDER BY year DESC ";
//     $result = mysqli_query($conn, $query);
//     $selectedYear = $_POST['year'] ?? '';

//     while ($row = mysqli_fetch_assoc($result)) {
//         $year = $row['year'];
//         $active = ($selectedYear == $year) ? 'active' : '';
//          "<form method='post' action='guestgallery.php'>
//                   <input type='hidden' name='selected_year' value='$year'>
//                   <button type='submit' name='submit_year' class='$active'>$year</button>
//               </form>";
//     }

    $selectedYear = $_GET['selected_year'] ?? '';

    $sql = "SELECT * FROM $table_name ";
    if (!empty($selectedYear)) {
        $sql .= " WHERE YEAR(event_date) = $selectedYear ";
    }
    $sql .= " ORDER BY event_date ASC";
    $result = mysqli_query($conn, $sql);
    $no = 0;

    while ($row = mysqli_fetch_assoc($result)) {
        // Display event cards here
        // ...
      
    
        $no=$no+1;
        $date= $row['event_date'];
  
      
        ?>
        <!-- <tr>
        <th scope='row'>". $no."</th>
        <td>". date('d/m/Y',strtotime($date))."</td>
        <td>". $row['event_name']."</td>
  
        <td>". $row['details']."</td>
        
        </tr>; -->
  
   <div class="container">

      <div class="card" style="--clr:#009688; ">

      
          <div class="content" id="cardContent">
              <h2><?php echo $row['event_name']?></h2>
              <h3 class="date"><?php echo date('d/m/Y',strtotime($date))?></h3>
              <p><?php echo $row['details']?></p>
              <form action='/campus_captures/view.php' method='post'>
                
    <input type='hidden' name='id' value="<?php echo isset($row['id'])?($row['id']):''; ?>"  >
    <input type='hidden' name='event_name' value="<?php echo isset($row['event_name'])?($row['event_name']):''; ?>"  >
    <input type='hidden' name='table_name' value="<?php echo  $_SESSION['table_name']; ?>"  >
    <input type='hidden' name='task' value='view' >
    
    <button class='btn btn-sm btn-primary' id=".$row['id'].">View</button>
  </form>
          </div> 
  
          <?php   $event_id=$row['id'];
        $query = $conn->query("SELECT * FROM $images_table_name WHERE event_id='$event_id'");
        $row = $query->fetch_assoc(); ?>
          <div class="imgBX">
          <img src="<?php echo $row['file_name']; ?>" alt="" />
          </div>
      </div>
    </div>
    
     </div>
     <?php }
}
      
  
  ?>
</body>
</html>

<script>
    const cards = document.querySelectorAll(".card");

    cards.forEach((card) => {
        card.addEventListener("mouseout", (event) => {
            // Check if the mouse is leaving the card
            if (!card.contains(event.relatedTarget)) {
                const content = card.querySelector(".content");
                content.scrollTop = 0; // Reset the scroll position to the top
            }
        });
    });
</script>
<!-- <script>
    // Store scroll position when user scrolls
    window.addEventListener('scroll', () => {
        localStorage.setItem('scrollPosition', window.scrollY);
    });

    // Restore scroll position when the page loads
    window.addEventListener('load', () => {
        const savedScrollPosition = localStorage.getItem('scrollPosition');
        if (savedScrollPosition !== null) {
            window.scrollTo(0, savedScrollPosition);
        }
    });
</script> -->




