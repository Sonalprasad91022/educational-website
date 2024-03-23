<?php

    include 'connection.php';

    // if (isset($_SESSION['id'])) {
    //   header('Location: registration.php');
    //   exit();
    // }

    // if(isset($_GET['login'])) {
    //     $id = $_GET['official_id'];
    //     $pass = $_GET['filedSelect'];
    //     if($id=='sonal1234' && $pass=='1234sonal') {
    //       header('Location:registration.php');
    //     }
       
       
    //     $sql = "SELECT * FROM official_login WHERE id='$id' AND pass='$pass'";
    //     $result = mysqli_query($conn, $sql);
        
    //     if (mysqli_num_rows($result) == 1) {
    //       header('Location:teacher-module.php');
    //   } else {
    //       // Login failed
    //       echo '<script>alert("invalid login id or password")</script>';
    //   }
        

       
    // }
?>

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
      <style>
  .admin{
  /* margin-top:-44vh; */
   margin:auto;
   margin-top:2.2vw;
  list-style: none;
   width: 44vw;
   
    background-color: lightgrey;
    font-size:2vw;
    padding:1vw;
    
    padding-left: 1vw;
   
    
  
}
.sonal{
  list-style:none;
  margin-left:-2vw;
}
.sonal li{
     background-color:white;
     margin:1vw;
     padding:1vw;
     
}
.sonal li:nth-child(odd) {
    background-color: lightblue;
}
.nav-link{
    padding:0;
}
      </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">  
               
            <li class="nav-item">
                <a class="nav-link " href="./index.php">Home</a>
            </li>   
            </ul>
          </div>
        </div>
    </nav>

    <div class="wrapper">

    <div class="admin">
    <ul class="sonal">

    <li class="nav-item">
                <a class="nav-link " href="./ugnotice.php">Notice </a>
    </li>
    <li class="nav-item">
                <a class="nav-link active" href="./teacher-module.php">Teacher's Module</a>
    </li>
    <li class="nav-item">
                <a class="nav-link " href="./teacher_approval.php">Teachers for approval</a>
    </li>
 
    <li class="nav-item">
                <a class="nav-link " href="./permanent_teachers.php">Permanent Teachers Detail</a>
    </li>
    <li class="nav-item">
                <a class="nav-link " href="./gallary.php">Gallary management</a>
    </li>
    </ul>
    </div>
   
     

  
    </div>
   

    <!-- Wrapper End -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>