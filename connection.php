<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "php_registration";
    $conn = new mysqli('localhost', 'root', 'Google@2020', 'php_registration', 3308);

    // $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);
?>