<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "php_registration";

$con = new mysqli($servername, $username, $password, $database);
                        // If submit button is clicked
                        if (isset($_POST['submit']))
                        {
                          // get name from the form when submitted
                          $name = $_POST['name'];                    
 
                          if (isset($_FILES['pdf_file']['name']))
                          {  
                          // If the ‘pdf_file’ field has an attachment
                            $file_name = $_FILES['pdf_file']['name'];
                            $file_tmp = $_FILES['pdf_file']['tmp_name'];
                             
                          
                            // Insert the submitted data from the form into the table
                            $insertquery =
                            "INSERT INTO pdf_files(username,filename) VALUES('$name','$file_name')";
                             
                            // Execute insert query
                            $iquery = mysqli_query($con, $insertquery);     
 
                                if ($iquery)
                               {                            
                    ?>                                             
                                  <div class=
                                "alert alert-success alert-dismissible fade show text-center">
        
                                    <strong>  <script> alert(" file uploaded successfully")</script> </strong> 
                                  </div>
                                <?php
                                }
                                else
                                {
                                ?>
                                  <div class=
                                "alert alert-danger alert-dismissible fade show text-center">
                  
                                    <strong>  <script> alert(" Failed Try again")</script> </strong> 
                                  </div>
                                <?php
                                }
                            }
                            else
                            {
                              ?>
                                <div class=
                                "alert alert-danger alert-dismissible fade show text-center">

                                  <strong>  <script> alert(" file uploaded successfully")</script> </strong> 
                                </div>
                              <?php
                            }// end if
                        }// end if
?>
<form method="post" enctype="multipart/form-data">
	<div class="form-input py-2">
		<div class="form-group">
		<input type="text" class="form-control" name="name"
				placeholder="Enter your name" required>
		</div>								
		<div class="form-group">
		<input type="file" name="pdf_file"
				class="form-control" accept=".pdf"
				title="Upload PDF"/>
		</div>
		<div class="form-group">
		<input type="submit" class="btnRegister"
				name="submit" value="Submit">
		</div>
</div>
</form>

