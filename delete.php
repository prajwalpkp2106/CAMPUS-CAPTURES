<?php
include 'partials/_dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['selected_images'])) {
    $selectedImages = $_POST['selected_images'];

    // Process each selected image for deletion
    foreach ($selectedImages as $imageId) {
        // Validate and sanitize the image ID if necessary

        // Perform the necessary actions to delete the image
        // Example: Delete the image from the database
        $deleteQuery = $conn->query("DELETE FROM $table_name WHERE id = '$imageId'");
        if ($deleteQuery) {
            // Image deleted successfully
            // You can perform any additional actions or return a success message
        } else {
            // Failed to delete the image
            // You can handle the error condition or return an error message
        }
    }
}
?>
