<?php
include 'connection.php'; // Ensure that this file has the database connection details


    $path = $_POST['path'];
   
    $sql = "INSERT INTO gallary_image (file_name) VALUES ('$path')";

    if ($conn->query($sql) === TRUE) {
        echo 'Image path inserted into the database successfully!';
    } else {
        echo 'Error: ' . $conn->error;
    }
?>
