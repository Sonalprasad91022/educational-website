<?php
   include 'connection.php';

     $alert = null;
     
     if(isset($_POST['done'])) {
      $notice_detail = $_POST['notice_detail'];
      $date = $_POST['date'];
      $selectedOption = $_POST['dropdown'];
      $name = $_POST['name'];
      $notice_id = $_POST['noticeid'];
      $file_name = $_FILES['pdf_file']['name'];
      $file_tmp = $_FILES['pdf_file']['tmp_name'];
      $path = "pdf/" . $file_name;
  
      if (move_uploaded_file($file_tmp, $path)) { 
          echo '<script>alert(" Notice added Successfully")</script>';
          
          $sql = "INSERT INTO notice(notice_detail, last_date, isnew, username, filename, id)
                  VALUES('$notice_detail', '$date', '$selectedOption', '$name', '$path', '$notice_id')";
  
          if (!($conn->query($sql) === TRUE)) {
              // echo '<script>alert("' . $conn->error. '")</script>';
              $alert = $conn->error;
          }
      } else {
          echo '<script>alert("File upload failed")</script>';
      }
  }
  
   if(isset($_POST['submit'])){
    $event_detail=$_POST['event_detail'];
    $event_date=$_POST['event_date'];
    $event_time=$_POST['event_time'];
    $sql2="INSERT INTO event(event_detail,event_date,event_time)VALUES('$event_detail','$event_date','$event_time')";
      if (!($conn->query($sql2) === TRUE))
                //echo '<script>alert("' . $conn->error. '")</script>';
                $alert = $conn->error;
      else 
                //echo '<script>alert("Registration Sucessful")</script>';
                $alert = 'Event added successfully';
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/registration1.css">
     <style>
      #notice-para{
        margin-left:3.7vw;
        width:90%;
        background-color:lightblue;
        padding:2vw;
      }
      .kaho{
        background-color:#1eb2a6;
        color:black;
}
     </style>
</head>
<body>

    <?php 
        if($alert)
            echo '<script>alert("' . $alert. '")</script>'; 
    ?>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link " href="./admin.php">back</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./main.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active " href="./ugnotice.php">Notice </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="./teacher-module.php">Teacher's Module</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- Navbar End -->
    
    <!-- Main Container Start -->
    <section class="main-section container px-3 py-5">
        <h1 class="kaho text-light pt-2 pb-3 mb-5 text-center">Notice Adding Section <button class="pg_button"><a href="ugnotice.php" id="pg_notice">UG</a></button> &nbsp &nbsp <button class="pg_button"><a href="pgnotice.php" id="pg_notice">PG</a></button> </h1>

        <div class="card kaho text-light mx-auto">
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="fullname" class="form-label">Notice Detail</label>
                    <input type="text" class="form-control" id="notice_detail" name="notice_detail">
                </div>
                <div class="mb-3">
                    <label for="nickName" class="form-label"> Date</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <input type="number"   name="noticeid" id="" placeholder="notice id">
                <label>is new notice?:</label>
                <select id="dropdown" name="dropdown">
                  <option selected disabled>choose</option>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>

                </select>
           <div class="form-input py-2">
		           <div class="form-group">
		           <input type="text" class="form-control" name="name"
				           placeholder="Enter your name" required>
		           </div>		
               <!-- pdf	uploading					 -->
		           <div class="form-group">
		           <input type="file" name="pdf_file" class="form-control" accept=".pdf" title="Upload PDF"/>
		           </div>
		           
           </div>
                <button type="submit" name="done" class="btn btn-warning w-100 mt-4">done</button>
            </form>
        </div>
    </section>
    <!-- Main Container End -->


    <ul class="ugnotice">
             <table class="bg-dark text-light" id="tableId" style="width:98%;margin-right:-2vw">
                    <tr>
                        <th class="bg-warning text-dark optional">notice id </th>
                        <th class="bg-warning text-dark">Notice</th>
                        <th class="bg-warning text-dark">Last Date</th>
                        <th class="bg-warning text-dark">File Location</th>
                        <th class="bg-warning text-dark optional">Delete Notice </th>
                        
                        
                    </tr>
                    <?php
                    
                    $sql1 = 'SELECT * FROM notice ORDER BY last_date DESC';
                    $result1 = $conn->query($sql1);
                
                if (mysqli_num_rows($result1) > 0) {
                    // output data of each row
                   
                    while ($row = mysqli_fetch_assoc($result1)) {
                       $notice_id= $row['id'];
                       $pdf_file_path=$row['filename'];
                       echo '<tr>';
                            echo '<td style="padding-left:2vw;">'.$notice_id.'</td>';
                            
                            echo '<td style="padding:2vw;">' .$row['notice_detail'].'<hr>'. '</td>';
                            echo '<td>' . $row['last_date']. '</td>';
                            echo '<td>' . $row['filename']. '</td>';
                            echo '<td>'.'&nbsp'.'&nbsp'.'<input type="button" value="Remove" onclick="deleteme(' . $notice_id .')"> '.'</td>';
                           
                       echo '</tr>';
                      
                    }
                } 
                
                ?>
    </ul>

    <!-- ............................................new event section........................ -->
    <form  method="POST" enctype="multipart/form-data">
    <div class="new_event" style="margin:4vw;margin-right:6vw;">
      <input type="text" name="event_detail" id="event_text" placeholder="write your event detail here";>
      <input type="text" id="event_date" name="event_date" style="width:24vh;margin:2vw;margin-left:0vw;"placeholder="Event date";>
      <input type="time" name="event_time" id="event_time" placeholder="Event Time;"  >
      <button type="submit" name="submit">submit</button>
    </div></form>



<script language="javascript">
  function deleteme(id) {

  // Make an AJAX request to the server to delete the data
  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "delete-ug-notice.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

     // You can do something with the response, such as displaying a success message or updating the UI

     var table = document.getElementById("tableId"); 

    //  var pdf_path=null;
if (table) {
    var rows = table.getElementsByTagName("tr");

    for (var i = 0; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("td");
       

// Check if there is at least one cell
if (cells.length > 0) {
    var registrationNumber = cells[0].textContent || cells[0].innerText;
    //  pdf_path=cells[3].textContent || cells[3].innerText;
//     alert(pdf_path);
//     if(unlink(pdf_path)){ // Delete the image from server path
//     alert('PDF successfully Deleted');
// }
    if (registrationNumber.trim() === id.toString().trim()) {
        rows[i].parentNode.removeChild(rows[i]);
        break; // Stop the loop once the row is deleted
    }
}
       
    }
}

  }
   };
  //  alert(pdf_path);
   var params = "del_id=" + encodeURIComponent(id);
  xhttp.send(params);   // Assuming the ID is passed as a parameter called `del_id`
}

</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>