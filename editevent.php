<?php
    //to avoid direct entry to this page
   
    // if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    //     //don't give them access and redirect to login
    //     header("location: adminlogin.php");
    //     exit;
    //   }
      
//include 'partials/_dbconnect.php';
include 'partials/_dbconnect.php';
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    //don't give them access and redirect to login
    header("location: adminlogin.php");
    exit;
  }
  
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
        $_SESSION['event_id']=$id;
    }
    else if(isset($_POST['task'])&& $_POST['task']=='delete')
    {   
        $table_name=$_POST["table_name"];
        $id=$_POST['id'];
        $sql="DELETE from $table_name where id='$id' ";
   //     var_dump($sql);exit;
        $result= mysqli_query($conn,$sql);
        $newtable=$table_name."_images";
        $sql="DELETE from $newtable where `event_id`='$id' ";
        
        $result= mysqli_query($conn,$sql);
      //  var_dump($result);exit;
     //   $num=mysqli_num_rows($result);
     header("location: welcome.php");
    } 
    else if(isset($_POST['task'])&& $_POST['task']=='add')
    {   
        $table_name=$_POST["table_name"];
        $event_date=$_POST['eventdateEdit'];
        $title=$_POST['titleEdit'];
        $description=$_POST['descriptionEdit'];
        $id=$_POST['id'];
        
        // var_dump( $table_name);
        // var_dump( $title);
        // var_dump( $description);exit;
        if (!empty($id)) {
          // Escape special characters in user input
          $escaped_title = mysqli_real_escape_string($conn, $title);
          $escaped_description = mysqli_real_escape_string($conn, $description);
          $escaped_event_date = mysqli_real_escape_string($conn, $event_date);
          $escaped_id = mysqli_real_escape_string($conn, $id);
      
          $sql = "UPDATE `$table_name` SET `event_name` = '$escaped_title', `details` = '$escaped_description', `event_date` = '$escaped_event_date' WHERE `id` = $escaped_id";
          $result = mysqli_query($conn, $sql);
      
          if ($result) {
              $update = true;
              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                     <strong>Updated!</strong> Entry has been updated successfully
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>';
      
              $table_name = mysqli_real_escape_string($conn, $_POST["table_name"]);
              $escaped_id = mysqli_real_escape_string($conn, $_POST['id']);
      
              $sql = "SELECT * FROM $table_name WHERE id='$escaped_id'";
              $result = mysqli_query($conn, $sql);
      
              $num = mysqli_num_rows($result);
              $row = mysqli_fetch_assoc($result);
      
              header("refresh:1;url=welcome.php");
              // header("location: addimages.php");
          } else {
              echo "We could not update the record successfully";
          }
      }
      
    //     else
    //     {  
    //       $_SESSION['in']= true;
    //       $_SESSION['table_name']= $table_name;
    //       $_SESSION['event_name']= $title;
    //      //$_SESSION['id']=$id;
    //     // $_SESSION['event_id']=$row['id'];
    //    // var_dump( $row['id']);
    //     //exit();
    //       //because it is in row and not yet fetched by post
    //      // $_SESSION['titleEdit']= $row['titleEdit'];
    //         $sql = "INSERT INTO `$table_name` (`event_name`, `details`,`event_date`) VALUES ('$title','$description','$event_date') ";
    //         $result = mysqli_query($conn, $sql);
    //         $sql="Select * from $table_name where event_name='$title' AND event_date='$event_date' AND details='$description'";
    //         //     var_dump($sql);exit;
    //              $result= mysqli_query($conn,$sql);
    //            //  var_dump($result);exit;
    //              $num=mysqli_num_rows($result);
    //              $row=mysqli_fetch_assoc($result);
    //              $_SESSION['event_id']=$row['id'];
    //              //var_dump($row['id']);
    //              //exit();
    //         header("location: addimages.php");
    //     }
        
        //header("location: welcome.php");
    }
  
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE DETAILS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="addevent.css">
</head>
<body>
<div class="heading">
    <h1>EDIT DETAILS</h1>
</div>
<form action="/campus_captures/editevent.php" method="POST">

    <div class="container">
        <div class="modal-body">
            <input type="hidden" name="snoEdit" id="snoEdit">

            <div class="form-group">
                <label for="title">Event Name</label>
                <input type="text" class="form-control" id="titleEdit" value="<?php echo isset($row['event_name']) ? ($row['event_name']) : ''; ?>" Name="titleEdit" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="event_date">Event Date</label>
                <input type="date" class="form-control" id="eventdateEdit" value="<?php echo isset($row['event_date']) ? ($row['event_date']) : ''; ?>" Name="eventdateEdit" aria-describedby="emailHelp" required>
            </div>
            <input type='hidden' name='table_name' value="<?php echo $_POST["table_name"]; ?>">
            <input type='hidden' name='id' value="<?php echo isset($row['id']) ? ($row['id']) : ''; ?>">
            <input type='hidden' name='task' value='add'>
            <div class="form-group">
                <label for="desc">Event Details</label>
                <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3" required><?php echo isset($row['details']) ? ($row['details']) : ''; ?></textarea>
            </div>
        </div>
        <div class="modal-footer d-block mr-auto">
        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to save the changes?'); goBackToPrevious();">Save changes</button>

        </div>
    </div>

</form>
    
</body>
</html>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
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
