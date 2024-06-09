<?php
    //to avoid direct entry to this page
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        //don't give them access and redirect to login
        header("location: adminlogin.php");
        exit;
      }
      
//include 'partials/_dbconnect.php';
include 'partials/_dbconnect.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
   // $row='';
   
//   var_dump()

    if(isset($_POST['task'])&& $_POST['task']=='edit')
    {
        $table_name=$_POST["table_name"];
        $id=$_POST['id'];
        $sql="Select * from $table_name where id='$id' ";
   //     var_dump($sql);exit;
        $result= mysqli_query($conn,$sql);
      //  var_dump($result);exit;
        $num=mysqli_num_rows($result);
        $row=mysqli_fetch_assoc($result);
    }
    else if(isset($_POST['task']) && $_POST['task'] == 'delete')
    {   
        $table_name = $_POST["table_name"];
        $id = $_POST['id'];
    
        // Delete event record from the main table
        $sql = "DELETE FROM $table_name WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
    
        // Delete images and associated records from the images table
        $newtable = $table_name . "_images";
        $filePathsToDelete = array();
    
        $query = "SELECT id, file_name FROM $newtable WHERE event_id = '$id'";
        $result = mysqli_query($conn, $query);
    
        while ($row = mysqli_fetch_assoc($result)) {
            $filePathsToDelete[$row['id']] = $row['file_name'];
        }
    
        $sql = "DELETE FROM $newtable WHERE event_id = '$id'";
        $result = mysqli_query($conn, $sql);
    
        // Delete files from the server's filesystem
        foreach ($filePathsToDelete as $imageId => $filePath) {
            if (file_exists($filePath)) {
                if (unlink($filePath)) {
                    // File deleted successfully, update user if needed
                } else {
                    // Unable to delete the file, handle error
                }
            }
        }
    
        header("location: welcome.php");
        exit;
    }
    
    else if(isset($_POST['task'])&& $_POST['task']=='add')
    {   
        $table_name=$_POST["table_name"];
        $event_date=$_POST['eventdateEdit'];
        $title=$_POST['titleEdit'];
        $description=$_POST['descriptionEdit'];
        $id=$_POST['id'];
        
            $sql_check = "SELECT * FROM `$table_name` WHERE event_name = '$title' AND event_date = '$event_date'";
    $result_check = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($result_check) > 0) {
        // Event with the same name and date already exists, deny adding the new event
        echo '<div class="alert alert-danger mt-3" role="alert">';
        echo 'An event with the same name and date already exists. Please choose a different name or date.';
        echo '</div>';
     

    } else{
        // var_dump( $table_name);
        // var_dump( $title);
        // var_dump( $description);exit;
        if(!empty($id))
        {
            $sql = "UPDATE `$table_name` SET `event_name` = '$title' , `details` = '$description',`event_date` = '$event_date'  WHERE `id` = $id";
            $result = mysqli_query($conn, $sql);
                     if($result){
                     
                   $update = true;
                   header("location: addimages.php");
                 }
                     else{
                  echo "We could not update the record successfully";
                 }
        }
        else {
          $_SESSION['in'] = true;
          $_SESSION['table_name'] = $table_name;
          $_SESSION['event_name'] = $title;
      
          // Escape special characters in user input
          $escaped_title = mysqli_real_escape_string($conn, $title);
          $escaped_description = mysqli_real_escape_string($conn, $description);
          $escaped_event_date = mysqli_real_escape_string($conn, $event_date);
      
          $sql = "INSERT INTO `$table_name` (`event_name`, `details`, `event_date`) VALUES ('$escaped_title', '$escaped_description', '$escaped_event_date')";
          $result = mysqli_query($conn, $sql);
      
          if ($result) {
              $sql = "SELECT * FROM $table_name WHERE event_name='$escaped_title' AND event_date='$escaped_event_date' AND details='$escaped_description'";
              $result = mysqli_query($conn, $sql);
      
              if ($result && mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_assoc($result);
                  $_SESSION['event_id'] = $row['id'];
                  header("location: addimages.php");
                  exit();
              } else {
                  // Handle the case when the row could not be fetched
                  // ...
              }
          } else {
              // Handle the case when insertion fails
              // ...
          }
      }
      
    }  
        //header("location: welcome.php");
    }
  
  
}
?>
 <title>ADD EVENT</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="addevent.css">
<form action="/campus_captures/addevent.php" method="POST">

<div class="heading"><h1>ADD EVENT</h1></div>
<div class="container">   
<div class="modal-body">
      <input type="hidden" name="snoEdit" id="snoEdit">

          <div class="form-group">
            <label for="title">Event Name</label>
            <input type="text" class="form-control" id="titleEdit" value="<?php echo isset($row['event_name'])?($row['event_name']):''; ?>" Name="titleEdit" aria-describedby="emailHelp" required>
          </div>
          <div class="form-group">
            <label for="event_date">Event Date</label>
            <input type="date" class="form-control" id="eventdateEdit" value="<?php echo isset($row['event_date'])?($row['event_date']):''; ?>" Name="eventdateEdit" aria-describedby="emailHelp" required>
          </div>
          <input type='hidden' name='table_name' value="<?php echo $_POST["table_name"]; ?>" >
          <input type='hidden' name='id' value="<?php echo isset($row['id'])?($row['id']):''; ?>" >
          <input type='hidden' name='task' value='add' >
<div class="form-group">
              <label for="desc">Event Details</label>
              <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="6"  required><?php echo isset($row['details'])?($row['details']):''; ?></textarea>
            </div> 
          </div>
          <div class="modal-footer d-block mr-auto">
            <a href="/campus_captures/welcome.php"  class="btn btn-secondary">Close</a>
            <!-- <a href="/campus_captures/addimages.php"  class="btn btn-secondary">Add images</a> -->
            <button type="submit" class="btn btn-primary">Add Event and procced to upload images</button>
          </div>

</form>
</div>

<!-- isset($row['event_name'])?($row['event_name']):'';
if(isset($row['event_name'])){
    $row['event_name']   
}else
{
    ''
} -->