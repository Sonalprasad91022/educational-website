<?php

if ($_FILES['file']['name'] != '') {

    $filename = $_FILES['file']['name']; // Get the Uploaded file Name.
    $extension = pathinfo($filename, PATHINFO_EXTENSION); // Get the Extension of uploaded file.
    $valid_extensions = array("jpg", "jpeg", "png", "gif");

    if (in_array($extension, $valid_extensions)) { // Check if upload file is a valid image file.
        $new_name = rand() . "." . $extension;
        $path = "images/" . $new_name;

        if (move_uploaded_file($_FILES['file']['tmp_name'], $path)) { // Upload the Image File on server path
            $response = ['success' => true,'message' => 'File uploaded successfully.','path' => $path];
        } else {
            $response = ['success' => false,'message' => 'Error uploading file.'];
        }
    } else {
            $response = ['success' => false,'message' => 'Invalid File Format Choose a valid file again.'];
    }

} else {
           $response = ['success' => false,'message' => 'No file choosen.'];
}

echo json_encode($response);
?>