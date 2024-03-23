<?php
    include 'connection.php';

    class teacher {
        public $teacher_id;
        public $fullName;
        public $department;
        public $image;
    }

    $teacherlist = array();
    $result = 0;

    
        $sql = "SELECT * FROM param_teacher";
        $result = $conn->query($sql);

        if ($result->num_rows != 0) {
            $i = 0;

            while($row = $result->fetch_assoc()) {
                $teacherList[$i] = new teacher();
                $teacherList[$i]->teacher_id = $row['teacher_id'];
                $teacherList[$i]->fullName = $row['fullname'];
                $teacherList[$i]->department = $row['department'];
                $teacherList[$i]->image=$row['filename'];
                $i++;
            }

            $result = 1;
        }else{
            echo "<script>alert('No new registration');</script>";
            echo '<meta http-equiv="refresh" content="0;url=admin.php">'; //redirecting to the main page
            exit; 
        }
    
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
    <style>
 .thumbnail {
  max-width: 11vw;
  max-height: 6vw;
  width: auto;
  height: auto;
  /* display: block; */
  margin: 0vw auto;
  margin-top: 2vw;
}

    </style>
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">  
            <li class="nav-item">
                <a class="nav-link" href="./admin.php">Back</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./teacher-module.php">Teacher's Approval</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link " href="./index.php">Home</a>
            </li>   

            </ul>
          </div>
        </div>
    </nav>
    <!-- Navbar End -->
    
    <!-- Wrapper Start -->
    <div class="wrapper">

        <!-- Display Container Start -->
            <?php
                if($result) {
            ?>
            <section class="display-section px-3 py-5">
                <h3 class="text-secondary mb-5 text-center">All department teacher's Info</h3>
                <table class="bg-dark text-light mx-auto" id="tableId">
                    <tr>
                        <th class="bg-warning text-dark">Teacher's Id</th>
                        <th class="bg-warning text-dark">Fullname</th>
                        <th class="bg-warning text-dark optional">Department </th>
                        <th class="bg-warning text-dark optional">image</th>
                        <th class="bg-warning text-dark optional">Delete</th>
                    </tr>
                <?php
                    foreach($teacherList as $tech) {
                        $teacherid=$tech->teacher_id;
                        $imagepath=$tech->image;
                        echo '<tr>';
                            echo '<td>' . $tech->teacher_id . '</td>';
                            echo '<td>' . $tech->fullName . '</td>';
                            echo '<td>' . $tech->department . '</td>';
                            echo '<td>' . '<img class="thumbnail" src="' . $tech->image . '" /><br><br>' . '</td>';


                            echo '<td>'.'&nbsp'.'&nbsp'.'<input type="button" value="Remove" onclick="deleteme(' . $teacherid . ', \'' . $imagepath . '\')"> '.'</td>';
                        echo '</tr>';
                        
                    }
                ?>
<script language="javascript">
  function deleteme(id,imagepath) {
  // Make an AJAX request to the server to delete the data
  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "delete.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

     // can do something with the response, such as displaying a success message or updating the UI
      var table = document.getElementById("tableId"); 

 if (table){
    var rows = table.getElementsByTagName("tr");

    for (var i = 0; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("td");

        // Check if there is at least one cell
        if (cells.length > 0) {
            var registrationNumber = cells[0].textContent || cells[0].innerText;

            if (registrationNumber.trim() === id.toString().trim()) {
                rows[i].parentNode.removeChild(rows[i]);
                break; // Stop the loop once the row is deleted
            }
        }
    }
}
}
  };
  var params = "del_id=" + encodeURIComponent(id) + "&image_path=" + encodeURIComponent(imagepath);
  xhttp.send(params); 
}

</script>
                
                </table>
            </section>
            <?php
                }
            ?>
        <!-- Display Container End -->

    </div>
    <!-- Wrapper End -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>