<?php
include 'connection.php';

$path = $_POST['path'];
$registrationNumber = $_POST['registrationNumber'];

// Update the database
$sql = "UPDATE students SET filename = '$path' WHERE registration_no = $registrationNumber";

if ($conn->query($sql) === TRUE) {
    echo "Database updated successfully";
} else {
    echo "Error updating database: " . $conn->error;
}

$conn->close();
?>
