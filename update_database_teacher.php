<?php
include 'connection.php';

$path = $_POST['path'];
$registrationNumber = $_POST['registrationNumber'];

// Update the database
$sql = "UPDATE teacher SET filename = '$path' WHERE teacher_id = $registrationNumber";

if ($conn->query($sql) === TRUE) {
    echo "Database updated successfully";
} else {
    echo "Error updating database: " . $conn->error;
}

$conn->close();
?>
