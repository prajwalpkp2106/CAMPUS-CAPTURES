<?php
include 'partials/_dbconnect.php';
session_start(); 
  
$statusMsg = '';

if(isset($_POST['submit'])){
	
	// File upload configuration
    $targetDir = "uploads/".$_SESSION['table_name']."/";
    $allowTypes = array('jpg','png','jpeg','gif','webp');
	
	$images_arr = array();
	foreach($_FILES['images']['name'] as $key=>$val){
		$image_name = $_FILES['images']['name'][$key];
		$tmp_name = $_FILES['images']['tmp_name'][$key];
		$size = $_FILES['images']['size'][$key];
		$type = $_FILES['images']['type'][$key];
		$error = $_FILES['images']['error'][$key];
		
		// Generate a unique filename
		$uniqueFileName = md5(uniqid(rand(), true)) . '.' . pathinfo($image_name, PATHINFO_EXTENSION);
		
		// File upload path
		$targetFilePath = $targetDir . $uniqueFileName;
		$newtable = $_SESSION['table_name']."_images";
		
		// Check whether file type is valid
		$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
		if(in_array($fileType, $allowTypes)){	
			// Store images on the server
			if(move_uploaded_file($tmp_name, $targetFilePath)){
				$images_arr[] = $targetFilePath;
				
				$insert = $conn->query("INSERT into $newtable (file_name, uploaded_on, event_id) VALUES ('".$targetFilePath."', NOW(),'".$_SESSION['event_id']."')");

				if($insert){
					$count = $key + 1;
					$statusMsg = "<span style='color: green;'>".$count. " image file has been uploaded successfully.</span>";
					header("refresh:1;url=welcome.php");
				}else{
					$statusMsg = "Failed to upload image";
				} 
				
			}else{
				$statusMsg = "Sorry, there was an error uploading your file.";
			}
		}else{
			$statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
		}
	}
}
?>
