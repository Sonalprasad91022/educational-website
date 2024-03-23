<?php
include 'connection.php';

if (isset($_GET['login'])) {
    $id = $_GET['official_id'];
    $pass = $_GET['filedSelect'];

    if ($id == 'sonal1234' && $pass == '1234sonal') {
        header('Location: admin.php');
        exit(); // Exit after sending the header to stop further execution
    }

    // Using prepared statements to prevent SQL injection
    $sql = "SELECT * FROM param_teacher WHERE teacher_id=? AND password=?";
    $statement = $conn->prepare($sql);
    $statement->bind_param("ss", $id, $pass);
    $statement->execute();
    $result = $statement->get_result();

    if ($result->num_rows == 1) {
        // Login successful, send teacher ID to teacher-module.php
        header('Location: teacher-module.php?id=' . $id);
        exit(); // Exit after sending the header to stop further execution
    } else {
        // Login failed
        echo '<script>alert("Invalid login id or password")</script>';
    }

    // Close the prepared statement
    $statement->close();
}
?>

 <script>
  function updateInfo() {
  var id = document.getElementById("official_id").value;
 
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "teacher-module.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  // Format data as URL-encoded key-value pairs
  var data = "id=" + encodeURIComponent(id);
 
  xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
          // Handle the response from the server (e.g., show a success message)
          alert(xhr.responseText);
      }
  };


  xhr.send(data);
}
    </script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/teacher-module1.css" rel="stylesheet">
    <title>Landing Page</title>
</head>
<body>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">  
            <li class="nav-item">
                <a class="nav-link " href="./main.php">Home</a>
            </li>   
            </ul>
          </div>
        </div>
    </nav>

    <div class="wrapper">

        <!-- Top Container Start -->
        <section class="top-section container px-3 py-5">
            
            <div class="centre-div">
                <h1>Teacher's Login</h1>
                <p>Welcome to teacher's module. Here you can view the current status of student registration
                    process. Just select enter registration number of student  and press the button to view the student details .
                </p>
                <form method="GET">
                  <label for="">Registration Number</label> <br>
                    <input type="text" name="official_id" id="official_id" > <br>
                    <label for="">Password</label><br>
                    <input type="password" name="filedSelect" id="official_pass"><br> <br>
                    <button type="submit" name="login" class="btn btn-dark">login</button>
                </form>
            </div>
        </section>
   

    </div>
    <!-- Wrapper End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>