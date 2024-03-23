<?php
// Assuming you have a database connection established
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the POST request
    $mobileNumber = $_POST["mobileNumber"];
    $id=$_POST["id"];
    $email=$_POST["email"];

    
    $sql = "UPDATE param_teacher SET mobile_no='$mobileNumber', email='$email' WHERE teacher_id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Information updated successfully";
        

    } else {
        echo "Error updating information: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
