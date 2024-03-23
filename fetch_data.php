<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .data-row{
      border: 1px solid #ccc;
      padding: 10px;
      margin: 10px;
      width:35vw;

        }
     #data{
        margin-left:25%;
       
     }
    </style>
</head>
<body>
<?php

include 'connection.php';
$id = $_GET['id'];

$sql = "SELECT * FROM param_teacher WHERE department='$id'"; // Customize with your table name and column names
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="data-row">';
        echo '<div>'.'<img src="' . $row['filename'] . '" alt="No image" style="height:5vw;width:5vw;position:absolute;">'.'</div>';
        echo '<div id="data">'."NAME : &nbsp &nbsp".$row['fullname'].'</div>';
        echo '<div id="data">'."Mobile No. : &nbsp &nbsp".$row['mobile_no'].'</div>';
        echo '<div id="data">'."Email : &nbsp &nbsp".$row['email'].'</div>';
        echo '<div id="data">'."Department : &nbsp &nbsp".$row['department'].'</div>';
        echo '</div>';
    }
    echo '<button id="closeButton" style="margin-right:2vw;" onclick="closeWindow2()">Close</button>';
} else {
    echo 'No data found.';
}

$conn->close();
?>

</body>
</html>


