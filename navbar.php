<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
 
    <link href="https://fonts.googleapis.com/css2?family=Gloock&family=Roboto+Slab:wght@900&display=swap"
        rel="stylesheet">
    <style>
        .admin {
 
 list-style: none;

 background-color: lightgrey;
 font-size: 2vw;
 padding: 1vw;
 padding-left: 1vw;
 border: 0.5vw solid lightgrey; /* Grey border */
 
}

.hoverable-button {
 padding: 8px 12px;
 background-color: #007BFF;
 color: #fff;
 border: none;
 cursor: pointer;
 transition: background-color 0.3s;
 position: relative;
 font-size:1.2vw;
 
}

.hoverable-button:hover {
 background-color: #0056b3;
}

.info-box {

 position:absolute;
 z-index: 10000;
 background-color: #007BFF;
 color: #fff;
 padding: 10px;
 border-radius: .2vw;
 width:16vw;
 left:15vw;
 font-size:1.3vw;
 border-left: 0.5vw solid #007BFF; /* Blue border on the left side */
 display:none;
 
}
#infoBox2{
   left:34vw;
}

.info-box a {
 color: #fff;
 text-decoration: none;
 display: block;
 margin-bottom: 5px;
}

.info-box a:hover {
 text-decoration: underline;
}
nav li{
    display:inline-flex;
}
nav ul {
    list-style-type: none; 
    margin: auto;
    background-color: lightgray;
   
  }
    </style>
</head>
<body>
<nav>
            <ul>
                <li><select id="dropdown" onChange="window.location.href=this.value">
                
                <!-- <label for="">Login</label>  -->
                <option value="#"  selected disabled >Register Here</option>
                <option value="teacher.php" >Teacher </option>
                <option value="registration.php">Student </option>
                
                </select></li>

                
        <li>
    <div class="admin" onmouseover="showBox('infoBox1','download')" onmouseout="hideBox('infoBox1')">
    <button class="hoverable-button" id="download" >Download</button>
    </div>
        </li>
      
      
                
              
        <li><a href="official_login.php">Admin</a></li>  
        <li>
    <div class="admin" onmouseover="showBox('infoBox2','facilities')" onmouseout="hideBox('infoBox2')">
    <button class="hoverable-button"  id="facilities">facilities</button>
    </div>
        </li>
             
               
                  <li><a href="index.php">Home</a></li>
               
            </ul>
            
     
        </nav>
     <div id="infoBox1" class="info-box" onmouseover="showBox('infoBox1','infoBox1')" onmouseout="hideBox('infoBox1')">
      <a href="#">NIRF Ranking</a>
      <a href="#">Syllabus</a>
      <a href="#">Acedemic Calender</a>
      <a href="#">Bonafide</a>
      <a href="#">Fee Structure 2023-24</a>
      <a href="#">PMS info</a>
      </div>
      <div id="infoBox2" class="info-box" onmouseover="showBox('infoBox2','infoBox2')" onmouseout="hideBox('infoBox2')">
      <a href="#">Computer Lab</a>
      <a href="#">24x7 library facility</a>
      <a href="#">Playground</a>
      <a href="#">Auditorium</a>
      <a href="#">Music</a>
      <a href="#">Faculy Development Centre</a>
      <a href="#">Student Welfare Department</a>
      <a href="#">Student Activity Centre</a>
      <a href="#">Research</a>
      </div>
      <script>
function showBox(box_id, anchor_id) {
    var Box = document.getElementById(box_id);
    var anchor = document.getElementById(anchor_id);

    
    var left_margin = anchor.getBoundingClientRect().left + window.scrollX;

    
    Box.style.marginLeft = left_margin + "px"-"2vh";
    Box.style.display = "block";
}

function hideBox(box_id) {
    var Box = document.getElementById(box_id);
    Box.style.display = "none";
}
</script>


</body>
</html>