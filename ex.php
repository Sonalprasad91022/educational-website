
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Teacher Information</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container21 {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: absolute;
            top:4vh;
            width:25rem;
            left:9vw;
        }
        @media screen and (max-width: 800px) {
            .container21 {
        /* Adjust styles for screens 800px or less */
        width: 90%;
   
    left: 4%;
    margin-top: 20vw;
 
    }
}

        #editForm label {
            display: block;
            margin-bottom: 10px;
        }

        #editForm input {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
        }

        #editForm button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container21">
    <h2>Your Information</h2>
    <form id="editForm">
        <?php
            include 'connection.php';
            $userId =$_GET['teacherId'];

            $sql = "SELECT * FROM param_teacher WHERE teacher_id=$userId";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
        ?>
      
        <label for="fullname">ID</label>
        <input type="text" id="id" name="id" value="<?php echo $row['teacher_id']; ?>" disabled>
        <label for="fullname">Name</label>
        <input type="text" id="fullname" name="fullname" value="<?php echo $row['fullname']; ?>"  disabled>
        <label for="mobileNumber">Mobile Number:</label>
        <input type="text" id="mobileNumber" name="mobileNumber" value="<?php echo $row['mobile_no']; ?>" required>
        <label for="mobileNumber">Email Id</label>
        <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>" required>
        <label for="Department">Department</label>
        <input type="text" id="Department" name="Department" value="<?php echo $row['department']; ?>" disabled>
        <!-- Add other fields as needed -->

        <button type="button" onclick="updateInfo()">Update </button>
        <button id="closeButton" onclick="closeWindow2()">Close</button>
        
        <?php
            } else {
                echo "Session Expired. Please <a href='official_login.php'>re-login</a>.";
            }
        ?>
    </form>
</div>


</body>
</html>
