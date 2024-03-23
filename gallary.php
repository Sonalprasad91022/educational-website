



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Upload Using PHP & Ajax</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="css/gallary_css.css">
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
                <a class="nav-link " href="./admin.php">back</a>
            </li>  
            <li class="nav-item">
                <a class="nav-link " href="./index.php">Home</a>
            </li>   
            </ul>
          </div>
        </div>
    </nav>
<div id="aao">
		
	<div id="content">
	<form id="submit_form">  
        <div class="form-group">  
          <label>Select Image</label>  
          <input type="file" name="file" id="upload_file" />  
          <span class="help-block">Allowed File Type - jpg, jpeg, png, gif</span>  
        </div>  
       <input type="submit" name="upload_button" id="upload_btn" value="Upload" />  
      </form>  
      <br />  
      <div id="preview">
        <h3>Image Preview</h3>  
        <div id="image_preview"></div> 
      </div> 
		</div>
	</div>



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    
    $("#submit_form").on("submit", function(e){
      e.preventDefault();

      var formData = new FormData(this);

      $.ajax({
        url : "upload_gallary.php",
        type : "POST",
        data : formData,
        contentType : false,
        processData: false,
        success: function(data){
          $("#preview").show();
          $("#image_preview").html(data);
          $("#upload_file").val('');
        }
      });
    });

    //Delete Image
    $(document).on("click","#delete_btn", function(){
      if(confirm("Are you sure you want to remove this image?")){
        var path = $("#delete_btn").data("path");

        $.ajax({
          url:'delete.php',
          type : "POST",
          data : {path : path},
          success: function(data){
            if(data != ""){
              $("#preview").hide();
              $("#image_preview").html('');
            }
          }
        });
      }
    });

$(document).on("click", ".confirm_btn", function () {
var path = $("#delete_btn").data("path");

$.ajax({
          url:'gallary_database_upload.php',
          type : "POST",
          data : {path : path},
          success: function(data){
            if(data != ""){
              $("#preview").hide();
              $("#image_preview").html('');
              alert(" image uploaded successfully")
            }
          }
        });

});
});

</script>
 <!-- ..........................................gallary action section ....................................... -->
<section class="gallary_action">
               
                <table id="tableId">
                    <tr>
                        <th class="bg-warning text-dark">Image </th>
                        <th class="bg-warning text-dark">Action</th>
                        
                    </tr>
                    <?php
include 'connection.php';

$sql = 'SELECT * FROM gallary_image';
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo '<table id="galleryTable">'; // added an ID to the table
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        
        echo '<td>' . '<img src="' . $row['file_name'] . '" alt="" >' . '</td>';
  
        // Display remove button in the second column
        $imagepath = $row['file_name']; // Assuming filename is the correct column name
        echo '<td>' . '<input type="button" value="Remove" onclick="deleteme(this, \'' . $imagepath . '\')">' . '</td>'; // added "this" as the first parameter

        echo '</tr>';
    }
    echo '</table>';
} else {
    echo 'No images found in the gallery.';
}
?>

<script language="javascript">
  function deleteme(button, imagepath) {
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "delete.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       
        var row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
      }
    };
    
    var params = "image_path=" + encodeURIComponent(imagepath) + "&value=" + encodeURIComponent(3);
    xhttp.send(params); 
  }
</script>      
</table>
</section>



</body>
</html>
