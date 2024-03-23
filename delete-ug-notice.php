<?php
 include 'connection.php';
$del_id = $_POST['del_id'];

$query1 = "DELETE FROM notice WHERE id = $del_id";

$conn->query($query1);?>