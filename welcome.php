<?php 
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  //don't give them access and redirect to login
  header("location: adminlogin.php");
  exit;
}
$table_name = $_SESSION['club_name'];
$images_table_name = $table_name . '_images';

$_SESSION['table_name']=$table_name;

include 'partials/_dbconnect.php';


?>
 <title>ADMIN CLUB HOME</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="welcome.css">
 
  <nav>
  <div class="logosymbol"><a href="/campus_captures/welcome.php"><img src="pict1.png"></a></div>
        <label class="logo">PICT CampusCaptures</label>
        <ul>
            <li><a href="/campus_captures/welcome.php">Home</a></li>
          
            <li><a href="#" class="wbtn">Years</a>
            <div class="sub-menu">
              <ul>
                <li><?php   $query = "SELECT DISTINCT YEAR(event_date) AS year FROM $table_name ORDER BY year DESC ";
    $result = mysqli_query($conn, $query);
    $selectedYear = $_POST['year'] ?? '';
    echo "<form action='/campus_captures/welcome.php' method='get'>
    <input type='hidden' name='selected_year' value=''>
    <button type='submit' name='submit_year' class='$selectedYear'>All</button>
</form>";
    while ($row = mysqli_fetch_assoc($result)) {
        $year = $row['year'];
        $active = ($selectedYear == $year) ? 'active' : '';
        echo "<form action='/campus_captures/welcome.php' method='get'>
                 <input type='hidden' name='selected_year' value='$year'>
                  <button type='submit' name='submit_year' class='$active'>$year</button>
              </form>";

              
                }?></li>


                <!-- <li><a href="#">2024</a></li>
                <li><a href="#">2025</a></li> -->
                </ul>
            </div>
            </li>

            <li><a href="/campus_captures/gallery.php"  class="wbtn">Club Gallery</a></li>
            <!-- make the rest small - as not important -->
            <li><a href="/campus_captures/reset-password.php"  class="wbtn">Reset Password</a></li>
            <li><a href="/campus_captures/logout.php"  class="wbtn">Logout</a></li>
           
            
        </ul>
  </nav>
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
<div class="container my-4">
    <div class="row">
      <div class="col-10">
      </div>
      <div class="col-2">
        <form action="/campus_captures/addevent.php" method="post">
          <button class='edit  btn btn-sm btn-primary'>Add Event</button>
          <input type='hidden' name='table_name' value="<?php echo $table_name; ?>" >
        </form>
      </div>
    </div>
    <div class="table-container">
    <table id="dtBasicExample" class="table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">S.No.
      </th>
      <th class="th-sm">Date
      </th>
      <th class="th-sm">EVENT
      </th>
      <th class="th-sm">Gallery
      </th>
      <th class="th-sm">Details
      </th>
      <th class="th-sm">Action
      </th>
     
    </tr>
  </thead>

  <tbody>

  <?php
// ...

// Retrieve the selected year from the URL query parameter
$selectedYear = $_GET['selected_year'] ?? '';



$sql = "SELECT * FROM $table_name ";
if (!empty($selectedYear)) {
    $sql .= " WHERE YEAR(event_date) = $selectedYear ";
}
$sql .= " ORDER BY event_date ASC";
$result = mysqli_query($conn, $sql);
$no = 0;


// ...

// Display the events as before
while ($row = mysqli_fetch_assoc($result)) {
  $no=$no+1;
  $date = $row['event_date'];


 


$event_head= $row['event_name'];
$event_headline = str_replace(' ', '$', $event_head);






  echo "<tr>
          <th scope='row'>" . $no . "</th>
          <td>" . date('d/m/Y', strtotime($date)) . "</td>
  <td class='bold-text'>". $row['event_name']."</td>
  
  <td>
  <form action='/campus_captures/display.php' method='post'>
  <input type='hidden' name='id' value=". $row['id'] ." >
  <input type='hidden' name='event_headline' value=". $event_headline ." >
  <input type='hidden' name='table_name' value=". $images_table_name ." >
  <input type='hidden' name='task' value='view' >
  <button class='btn btn-sm btn-primary' id=".$row['id'].">View</button>
</form>

<form action='/campus_captures/deleteimages.php' method='post'>
<input type='hidden' name='id' value=". $row['id'] ." >
<input type='hidden' name='event_name' value=". $row['event_name'] ." >
<input type='hidden' name='table_name' value=". $table_name ." >
<input type='hidden' name='task' value='view' >
<button class='btn btn-sm btn-primary' id=".$row['id'].">Edit</button>
</form>
</td>
  <td>". $row['details']."</td>
  <td>
  <form action='/campus_captures/editevent.php' method='post'>
    <input type='hidden' name='id' value=". $row['id'] ." >
    <input type='hidden' name='table_name' value=". $table_name ." >
    <input type='hidden' name='task' value='edit' >
    <button class='edit  btn btn-sm btn-primary' id=".$row['id'].">Update</button>
  </form>

  <form action='/campus_captures/addevent.php' method='post' onsubmit='return confirmDeleteEvent()'>
                                <input type='hidden' name='id' value='". $row['id'] ."' >
                                <input type='hidden' name='table_name' value='". $table_name ."' >
                                <input type='hidden' name='task' value='delete' >
                                <button class='edit  btn btn-sm btn-primary' id='".$row['id']."'>Delete Event</button>
                            </form>
</td>
  </tr>";


}
?>
  </tbody>
  
</table>

</div>

<script>
    function confirmDeleteEvent() {
        return confirm("Are you sure you want to delete this event?");
    }
</script>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


<script>
$(document).ready(function () {
  $.fn.dataTable.ext.type.order['date-uk-pre'] = function (date) {
    var ukDate = date.split('/').reverse().join('');
    return ukDate;
  };

  $('#dtBasicExample').DataTable({
    columnDefs: [
  {
    type: 'date-uk',
    targets: 1 // Assuming the date column is the second column (index 1)
  },
  {
    orderable: false,
    targets: [3, 4, 5] // Disable sorting for columns 3 (Gallery) and 4 (Details)
  }
],

    order: [[1, 'asc']],
    language: {
      "sSortAscending": "Sort in ascending order",
      "sSortDescending": "Sort in descending order",
      "sEmptyTable": "No data available in the table",
      "sInfo": "Showing _START_ to _END_ of _TOTAL_ entries",
      "sInfoEmpty": "Showing 0 to 0 of 0 entries",
      "sLengthMenu": "Display _MENU_ entries",
      "sLoadingRecords": "Loading...",
      "sProcessing": "Processing...",
      "sSearch": "Search:",
      "sZeroRecords": "No matching records found",
      "oPaginate": {
        "sFirst": "First",
        "sLast": "Last",
        "sNext": "Next",
        "sPrevious": "Previous"
      }
    },
    pageLength: 25, // Set the default number of entries per page
    stateSave: true,
    stateDuration: -1
  });

  $('.dataTables_length').addClass('bs-select');
});

  </script>
<script>
// Capture scroll position before navigating away
window.addEventListener('beforeunload', function () {
    sessionStorage.setItem('scrollPosition', window.scrollY);
});
</script>
<script>
// Restore scroll position when page loads
window.addEventListener('load', function () {
    const scrollPosition = sessionStorage.getItem('scrollPosition');
    if (scrollPosition !== null) {
        window.scrollTo(0, scrollPosition);
    }
});
</script>

