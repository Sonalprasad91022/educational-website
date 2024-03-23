<?php
include 'connection.php';
$del_id = intval($_POST['del_id']);
$query = "SELECT * FROM teacher WHERE teacher_id =$del_id";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $column1 = $row['teacher_id'];
    $column2 = $row['department'];
    $passwordu=$row['password'];
    $fullname=$row['fullname'];
    $mobile_number=$row['mobile_no'];
    $email_address=$row['email'];
    $file_location=$row['filename'];


    
} else {
    echo "No results found for the individual.";
}

$destinationTable = 'param_teacher';
echo '<script>alert("' . $passwordu . '");</script>';
$insertQuery = "INSERT INTO $destinationTable (teacher_id, department,password,fullname,mobile_no,email,filename)
 VALUES ('$column1', '$column2','$passwordu','$fullname','$mobile_number','$email_address','$file_location')";
$conn->query($insertQuery);

$query1 = "DELETE FROM teacher WHERE teacher_id = $del_id";
$conn->query($query1);
?>