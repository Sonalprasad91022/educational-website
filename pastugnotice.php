
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pastugnotice.do</title>
    <link rel="stylesheet" href="css/pastnotice.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
     
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
                    include 'connection.php';
                    $sql = 'SELECT * FROM notice';
                    $result = $conn->query($sql);
                
                // check if any rows were returned
                echo "<p class='noticeheading' >Past Ug Notice</p>";
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                       
                        echo "<p class='pastnotice'>".$row['notice_detail'] .'<br>'. '<b>'. $row['last_date'].'</b>' . '<br>'."</p>";
                        echo '<hr>';
                       
                    }
                } else {
                    echo 'No new notice found.';
                }
?>