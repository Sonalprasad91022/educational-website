<?php
include 'connection.php';

$del_id = intval($_POST['del_id']);
$image_path = $_POST['image_path'];
$value=$_POST['value'];

if(unlink($image_path)){ // Delete the image from server path
    echo 'Image Deleted';
}
if($value==2){
    $query1 = "DELETE FROM teacher WHERE teacher_id = $del_id";
}elseif($value==3){
    $query1="DELETE FROM gallary_image WHERE file_name='$image_path'";
}else{
    $query1 = "DELETE FROM param_teacher WHERE teacher_id = $del_id";
}

$conn->query($query1);
?>

