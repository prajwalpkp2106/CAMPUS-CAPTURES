<?php
// Validate and sanitize the input
if (isset($_POST['selected_images']) && is_array($_POST['selected_images'])) {
    $selectedImages = $_POST['selected_images'];

    // Create a unique zip file name
    $zipName = 'selected_images_' . date('YmdHis') . '.zip';

    // Create a new zip archive
    $zip = new ZipArchive();

    if ($zip->open($zipName, ZipArchive::CREATE) === true) {
        // Process each selected image
        foreach ($selectedImages as $imageName) {
            // Validate and sanitize the image name if necessary

            // Add the image file to the zip archive
            $zip->addFile($imageName, basename($imageName));
        }

        // Close the zip archive
        $zip->close();

        // Set appropriate headers for the zip file download
        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename="' . $zipName . '"');
        header('Content-Length: ' . filesize($zipName));
        header('Pragma: no-cache');
  
        // Read and output the zip file
        readfile($zipName);
       
        // Delete the temporary zip file
        unlink($zipName);
       
    } else {
        echo "Failed to create the zip file.";
    }
} else {
    // No selected images
    echo "No images selected for download.";
}
?>
<?php
 include 'partials/_dbconnect.php';
 
session_start();
//$statusMsg = '';
// var_dump($_SESSION['table_name']);
//  exit();

if(isset($_POST['task'])&& $_POST['task']=='delete')
    {   $table_name=$_SESSION['table_name']."_images";
       // $table_name=$_POST["table_name"];
        $id=$_POST['id'];
        $sql="DELETE from $table_name where id='$id' ";
   //     var_dump($sql);exit;
        $result= mysqli_query($conn,$sql);
      //  var_dump($result);exit;
     //   $num=mysqli_num_rows($result);
    //  require "/campus_captures/addevent.php";

    // Execute your code here
    
    // Simulate button click by sending an HTTP request to the desired URL

     header("location: welcome.php");
    } 
    ?>
