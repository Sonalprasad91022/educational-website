<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="css/animation.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="script1.js"></script>
    <title>UIET MDU</title>
    <script src="https://kit.fontawesome.com/b2235bc8f9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloock&family=Roboto+Slab:wght@900&display=swap"
        rel="stylesheet">
        <style>
     nav {
    
      overflow: hidden;

    display: flex;
    flex-wrap: wrap;
    align-content: space-between;
    justify-content: space-around;
    }
    /* nav li {
      display:block; 
    } */
    nav ul {
      list-style-type: none; 
      margin: auto;
      background-color: lightgray;
      width: 100%;
     
    }
    

    .responsive-nav {
      display: none;
      float: right;
      
    }
    
    @media screen and (max-width: 720px) {
      nav li {
        float: none;
        width: 100%;
        text-align: center;
      }
     nav{
        justify-content: flex-start;
     }
      .nav-links {
        display: none;
        flex-direction: column;
        width: 42vw;
        
      }

      .nav-links.show {
        display: flex;
        /* margin-top:5vw; */
        width: 100%;
      }

      .responsive-nav {
        display: block;
        float: left;
        
      }
      nav ul {
      list-style-type: none; 
      /* margin: auto; */
      margin-left:0vw;
      /* background-color: lightgray; */
      width: 100%;
      padding-left:1vw;
      text-align:center;
     
    }
    nav li a{
        text-align:center;
    }
    #infoBox2 {
    left: 26vw;
    top: 32vw;
}
.info-box{
    left: 27vw;
    top: 20vw;
}
#dropdown{
    margin-top:2vw;
}

    }
    #dropdown {
    display: inline-block;
    background-color: lightblue;
    border-radius: 4px;
    padding:1vw 1vw;
    font-size: 1.5vw;
    font-weight: bold;
    cursor: pointer;
    /* user-select: none; */
  }
  .nav-links{
  margin-top:-1.4vw;
  }
  .footersection ul a{
    /* text-decoration:none; */
    color: black;
  }
  .row3 {
    display: flex;
    flex-wrap: wrap;
    margin-top: 1.3vw;
    background-color: #1eb2a673;
    margin-bottom: 3vw;
    color: black;
}
/* .......................footer icon........................... */
.footer_lowest {
            background-color: #15645d;
            color: #fff;
            padding: 10px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .social-icons {
            display: flex;
            gap: 10px;
        }

        .social-icons a {
            color: #fff;
            text-decoration: none;
            font-size: 20px;
        }

        .copyright {
            margin-top: 10px;
        }

    .para h1{
        margin-bottom:1vw;
    }
        </style>
  
</head>

<body >
    
<div class="sbkabaap">


    <div class="container1">
        <!-- this section is for slider -->
        <div class="wrapper">
            <img class="image1" src="image/12 (2).jpg">
            <img class="image2" src="image/13 (2).jpg">
            <img class="image2" src="image/14 (2).jpg">
            <img class="image2" src="image/16.jpg">

        </div>
    </div>
    <div id="main">

        <!-- this window is for upper part  -->
        <div class="top">
            <img src="image/uietlogo.png" alt="logo">
            <span class="container">
                <p class="line">University Institute Of Engineering And Technology</p>
                <p class="line">Delhi By Pass Road ,Rohtak </p> <br>
                <p class="line">A+ Grade University</p>
            </span>
            <!-- this section is for map -->
            <span id="map">

                <a id="pass" href="https://goo.gl/maps/uFqA5v35ubRE1XuF7">University Institute of Engineering &
                    Technology, MDU</a> <br>
                <a id="pass2" href="https://goo.gl/maps/uFqA5v35ubRE1XuF7">Delhi By-Pass,Rohtak,Haryana,124001</a>
                <a id="pass1" href="https://goo.gl/maps/uFqA5v35ubRE1XuF7"><i class="fa-solid fa-location-dot"></i></a>
            </span>
        </div>

        <!-- this section is for different navbar -->
        <nav>
            <ul> 
                <li><a href="#" class="responsive-nav" onclick="toggleNav()">☰ Menu</a></li>
                <div class="nav-links">
                <li><select id="dropdown" onChange="window.location.href=this.value">
                
                <!-- <label for="">Login</label>  -->
                <option value="#" style="color:black;" selected disabled >Register Here</option>
                <option value="teacher.php" style="color:black;" >Teacher </option>
                <option value="registration.php" style="color:black;">Student </option>
                
                </select>
               </li>

                
        <li>
    <div class="admin" onmouseover="showBox('infoBox1','download')" onmouseout="hideBox('infoBox1')">
    <button class="hoverable-button" id="download" >Download</button>
    </div>
        </li>
      
      
                
                <!-- <li><a href="#">Faculty</a></li> -->
                <li><a href="#notice">Notice</a></li>
                
        <li>
    <div class="admin" onmouseover="showBox('infoBox2','facilities')" onmouseout="hideBox('infoBox2')">
    <button class="hoverable-button"  id="facilities">student's portal</button>
    </div>
   
        </li>
                <li><a href="#">Placement Cell</a></li>
                <li><a href="#detail">Contact Us</a></li>
                <li><a href="official_login.php">Admin</a></li>
               </div>
               
            </ul>
            
        </nav>
        <script>
  function toggleNav() {
    var navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('show');
             }
</script>
     <div id="infoBox1" class="info-box" onmouseover="showBox('infoBox1','infoBox1')" onmouseout="hideBox('infoBox1')">
      <a href="#">NIRF Ranking</a>
      <a href="#">Syllabus</a>
      <a href="#">Acedemic Calender</a>
      <a href="#">Bonafide</a>
      <a href="#">Fee Structure 2023-24</a>
      <a href="#">PMS info</a>
      </div>
      <div id="infoBox2" class="info-box" onmouseover="showBox('infoBox2','infoBox2')" onmouseout="hideBox('infoBox2')">
      <a href="https://student.mdu.ac.in/index">Online Fee payment</a>
      <a href="https://student.mdu.ac.in/index">Examinations Results</a>
      <a href="https://mdu.refread.com/#/home">Learning Resources</a>
      
    
      <a href="https://mdu.ac.in/Department/OfficeMain.aspx?dept=46">Student Welfare Department</a>
      <a href="#">Student Activity Centre</a>
      <a href="https://mdu.ac.in/aspx/cells.aspx?Dept=77">Research</a>
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


        <!-- this section is for auto typing  -->
        <div class="autotyping">
            <div class="wrapper1">
                <ul class="dynamic-txts">
                    <li><span>WELCOME &nbsp; TO &nbsp; UIET &nbsp; MDU </span></li>
                    <li><span>FOLLOW &nbsp;YOUR &nbsp;DREAM&nbsp; @UIET</span></li>
                    <li><span>EXCELLENCE &nbsp;IN&nbsp; EDUCATION&nbsp;</span></li>
                    <li><span> RESEARCH &nbsp; AND &nbsp; PASSION</span></li>
                    <li><span>YOUR &nbsp;DREAM&nbsp; OUR &nbsp;MOTIVE</span></li>
                </ul>
            </div>

        </div>
    </div>
        
</div>
<!-- .........................get call from us ................................... -->
<div class="admission-container" id="admissionContainer">
    <div class="education-icon">🎓</div>
    <div class="call-to-action">
        Hurry up! Get a call from us and receive more information about fee details, admission, and more.
    </div>
    <button class="get-call-button" onclick="showMobileForm()">Get a Call</button>
</div>

<div class="admission-container mobile-form" id="mobileForm">
    <form action="#" method="post" onsubmit="return submitForm()">
        <label for="mobileNumber">Enter your mobile number:</label>
        <input type="tel" id="mobileNumber" name="mobileNumber" required pattern="[0-9]{10}">
        <button class="submit-button" type="submit">Submit</button>
    </form>
</div>

<script>
    // Check if mobile number is already submitted
    var mobileNumberSubmitted = localStorage.getItem("mobileNumberSubmitted");

    if (mobileNumberSubmitted) {
        document.getElementById("admissionContainer").style.display = "block";
        document.getElementById("mobileForm").style.display = "none";
    }

    function showMobileForm() {
        document.getElementById("admissionContainer").style.display = "none";
        document.getElementById("mobileForm").style.display = "block";
    }
    function NotshowMobileForm() {
        document.getElementById("admissionContainer").style.display = "block";
        document.getElementById("mobileForm").style.display = "none";
    }

    function submitForm() {
        var mobileNumber = document.getElementById("mobileNumber").value;

        // Check if mobile number is already submitted
        if (localStorage.getItem("mobileNumberSubmitted")) {
            alert("You have already submiited your mobile number .");
            return false;
        }

        // Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Define the AJAX request
        xhr.open("POST", "submit_form.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        // Set up the callback function to handle the response
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Display the response from the server (e.g., success message)
                alert(xhr.responseText);

                // Update the local storage to indicate that the mobile number is submitted
                localStorage.setItem("mobileNumberSubmitted", "true");

                // Update the display
                NotshowMobileForm();
            }
        };

        // Send the form data to the server
        xhr.send("mobileNumber=" + mobileNumber);

        return false; // Prevents the form from submitting and opening a new page
    }
</script>

<!-- ............................................get call from us ends here ....................... -->

<div class="charta">


<canvas id="myChart" style="width: 700px !important; max-width: 700px; display: block; height: 300px;margin-top:2vw;" width="1200" height="600" class="chartjs-render-monitor"></canvas>

<script>

const xValues = ["4 LPA", "4-7 LPA", "7-10 LPA", "10+ LPA"];
const yValues = [170, 100, 45, 10];
const barColors = [
  "#00aba9",
  "#e8c3b9",
  "#2b5797",
  "#b91d47",
  
  
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Placement Record Till Now"
    }
  }
});
</script>

<div class="info-container123">
    <img src="image/director.jpg" alt="Image Description">
    <div class="information">
        <h2 style="margin-bottom:1vw;">Directors message</h2>
        <p>Our institute stands as a beacon of academic rigor, fostering a dynamic learning environment where students are empowered to explore their passions and realize their full potential. With a diverse range of engineering disciplines, state-of-the-art facilities, and a distinguished faculty.
Through a blend of theoretical knowledge and hands-on experience, we prepare our students to tackle real-world challenges, drive technological advancements, and make meaningful contributions to society. </p>
        <p id="director_detail"> XYZ (Director of UIET MDU) </p>
    </div>
</div>

    
</div>

<!-- .....................................different branches we have ................... -->
    <h1 id="midheading">Courses we offers </h1>

        <div class="row">
            <div class="col-4">
                <div class="background"></div>
                <div class="para">
                    <h1>CSE </h1>
                    <hr>
<span class="animation1">

<div class="circle-1"></div>
<div class="circle-2"></div>
<div class="circle-3"></div>
<div class="circle-4"></div>
<div class="circle-5"></div>
<div class="circle-6"></div>
<div class="circle-7"></div>
<div class="circle-8"></div>
<div class="circle-9"></div>
<div class="circle-10"></div>
<div class="circle-11"></div>
<div class="circle-12"></div>
<div class="circle-13"></div>
<div class="circle-14"></div>

<div class="glitch"></div>

<div class="fragment-1"></div>
<div class="fragment-2"></div>
<div class="fragment-3"></div>


<svg width="190" height="190" viewBox="0 0 190 190" fill="none" xmlns="http://www.w3.org/2000/svg">
    <defs>
        <clipPath id='bagel1'>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M95 190C147.467 190 190 147.467 190 95C190 42.533 147.467 0 95 0C42.533 0 0 42.533 0 95C0 147.467 42.533 190 95 190ZM95 120C108.807 120 120 108.807 120 95C120 81.1929 108.807 70 95 70C81.1929 70 70 81.1929 70 95C70 108.807 81.1929 120 95 120Z" />
        </clipPath>
        <clipPath id='bagel2'>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M71 142C110.212 142 142 110.212 142 71C142 31.7878 110.212 0 71 0C31.7878 0 0 31.7878 0 71C0 110.212 31.7878 142 71 142ZM71 139C108.555 139 139 108.555 139 71C139 33.4446 108.555 3 71 3C33.4446 3 3 33.4446 3 71C3 108.555 33.4446 139 71 139Z" />
        </clipPath>
        <clipPath id='bagel3'>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M60 120C93.1372 120 120 93.1372 120 60C120 26.8628 93.1372 0 60 0C26.8628 0 0 26.8628 0 60C0 93.1372 26.8628 120 60 120ZM60 115C90.3757 115 115 90.3757 115 60C115 29.6243 90.3757 5 60 5C29.6243 5 5 29.6243 5 60C5 90.3757 29.6243 115 60 115Z" />
        </clipPath>
        <clipPath id='bagel4'>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M38 76C58.9868 76 76 58.9868 76 38C76 17.0132 58.9868 0 38 0C17.0132 0 0 17.0132 0 38C0 58.9868 17.0132 76 38 76ZM38 72C56.7777 72 72 56.7776 72 38C72 19.2224 56.7777 4 38 4C19.2223 4 4 19.2224 4 38C4 56.7776 19.2223 72 38 72Z" />
        </clipPath>
    </defs>

</svg>
</span> 
                    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, iste.&nbsp<button class="know-more" onclick="openWindow('cse')">Know More</button></p>
                </div>
                <div class="images">
                    <img src="image/computer-science.jpg" alt="" style="width:100%;height:100%;">
                </div>
            </div>
            <div class="col-4">
                <div class="background"></div>
                <div class="para">
                    <h1>electrical</h1>
                    <hr>
<!-- <span class="animation1">

<div class="eye"></div>

<div class="circle-1"></div>
<div class="circle-2"></div>
<div class="circle-3"></div>
<div class="circle-4"></div>
<div class="circle-5"></div>
<div class="circle-6"></div>
<div class="circle-7"></div>
<div class="circle-8"></div>
<div class="circle-9"></div>
<div class="circle-10"></div>
<div class="circle-11"></div>
<div class="circle-12"></div>
<div class="circle-13"></div>
<div class="circle-14"></div>

<div class="glitch"></div>

<div class="fragment-1"></div>
<div class="fragment-2"></div>
<div class="fragment-3"></div>


<svg width="190" height="190" viewBox="0 0 190 190" fill="none" xmlns="http://www.w3.org/2000/svg">
    <defs>
        <clipPath id='bagel1'>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M95 190C147.467 190 190 147.467 190 95C190 42.533 147.467 0 95 0C42.533 0 0 42.533 0 95C0 147.467 42.533 190 95 190ZM95 120C108.807 120 120 108.807 120 95C120 81.1929 108.807 70 95 70C81.1929 70 70 81.1929 70 95C70 108.807 81.1929 120 95 120Z" />
        </clipPath>
        <clipPath id='bagel2'>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M71 142C110.212 142 142 110.212 142 71C142 31.7878 110.212 0 71 0C31.7878 0 0 31.7878 0 71C0 110.212 31.7878 142 71 142ZM71 139C108.555 139 139 108.555 139 71C139 33.4446 108.555 3 71 3C33.4446 3 3 33.4446 3 71C3 108.555 33.4446 139 71 139Z" />
        </clipPath>
        <clipPath id='bagel3'>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M60 120C93.1372 120 120 93.1372 120 60C120 26.8628 93.1372 0 60 0C26.8628 0 0 26.8628 0 60C0 93.1372 26.8628 120 60 120ZM60 115C90.3757 115 115 90.3757 115 60C115 29.6243 90.3757 5 60 5C29.6243 5 5 29.6243 5 60C5 90.3757 29.6243 115 60 115Z" />
        </clipPath>
        <clipPath id='bagel4'>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M38 76C58.9868 76 76 58.9868 76 38C76 17.0132 58.9868 0 38 0C17.0132 0 0 17.0132 0 38C0 58.9868 17.0132 76 38 76ZM38 72C56.7777 72 72 56.7776 72 38C72 19.2224 56.7777 4 38 4C19.2223 4 4 19.2224 4 38C4 56.7776 19.2223 72 38 72Z" />
        </clipPath>
    </defs>

</svg>
</span> -->
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, iste.&nbsp<button class="know-more"onclick="openWindow('electrical')">Know More</button></p>
                </div>

                <div class="images">
                    <img src="image/electrical.jpg" alt="" style="width: 100%;height: 100%;">
                </div>

            </div>
            <div class="col-4">
                <div class="background"></div>
                <div class="para">
                    <h1>A.I.</h1>
                    <!-- <hr>
<span class="animation1">

<div class="eye"></div>

<div class="circle-1"></div>
<div class="circle-2"></div>
<div class="circle-3"></div>
<div class="circle-4"></div>
<div class="circle-5"></div>
<div class="circle-6"></div>
<div class="circle-7"></div>
<div class="circle-8"></div>
<div class="circle-9"></div>
<div class="circle-10"></div>
<div class="circle-11"></div>
<div class="circle-12"></div>
<div class="circle-13"></div>
<div class="circle-14"></div>

<div class="glitch"></div>

<div class="fragment-1"></div>
<div class="fragment-2"></div>
<div class="fragment-3"></div>


<svg width="190" height="190" viewBox="0 0 190 190" fill="none" xmlns="http://www.w3.org/2000/svg">
    <defs>
        <clipPath id='bagel1'>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M95 190C147.467 190 190 147.467 190 95C190 42.533 147.467 0 95 0C42.533 0 0 42.533 0 95C0 147.467 42.533 190 95 190ZM95 120C108.807 120 120 108.807 120 95C120 81.1929 108.807 70 95 70C81.1929 70 70 81.1929 70 95C70 108.807 81.1929 120 95 120Z" />
        </clipPath>
        <clipPath id='bagel2'>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M71 142C110.212 142 142 110.212 142 71C142 31.7878 110.212 0 71 0C31.7878 0 0 31.7878 0 71C0 110.212 31.7878 142 71 142ZM71 139C108.555 139 139 108.555 139 71C139 33.4446 108.555 3 71 3C33.4446 3 3 33.4446 3 71C3 108.555 33.4446 139 71 139Z" />
        </clipPath>
        <clipPath id='bagel3'>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M60 120C93.1372 120 120 93.1372 120 60C120 26.8628 93.1372 0 60 0C26.8628 0 0 26.8628 0 60C0 93.1372 26.8628 120 60 120ZM60 115C90.3757 115 115 90.3757 115 60C115 29.6243 90.3757 5 60 5C29.6243 5 5 29.6243 5 60C5 90.3757 29.6243 115 60 115Z" />
        </clipPath>
        <clipPath id='bagel4'>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M38 76C58.9868 76 76 58.9868 76 38C76 17.0132 58.9868 0 38 0C17.0132 0 0 17.0132 0 38C0 58.9868 17.0132 76 38 76ZM38 72C56.7777 72 72 56.7776 72 38C72 19.2224 56.7777 4 38 4C19.2223 4 4 19.2224 4 38C4 56.7776 19.2223 72 38 72Z" />
        </clipPath>
    </defs>

</svg>
</span> -->
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, iste.&nbsp<button class="know-more"onclick="openWindow('ai')">Know More</button></p>
                </div>


                <div class="images">
                    <img src="image/ai.jpg" alt="" style="width: 100%;height: 100%;">
                </div>


            </div>
            <div class="col-4">
                <div class="background"></div>
                <div class="para">
                    <h1>Mechanical</h1>
                    <hr>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, iste.&nbsp<button class="know-more"onclick="openWindow('mechanical')">Know More</button></p>
                </div>


                <div class="images">
                    <img src="image/mechanical.jpg" alt="" style="width: 100%;height: 100%;">
                </div>


            </div>
            <div class="col-4">
                <div class="background"></div>
                <div class="para">
                    <h1>Bio Technology</h1>
                    <hr>

</span>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, iste. &nbsp<button class="know-more"onclick="openWindow('bio_tech')">Know More</button></p>
                     
                </div>


                <div class="images">
                    <img src="image/biotechnology-new.jpg" alt="" style="width: 100%;height: 100%;">
                </div>


            </div>
            <div class="col-4">
                <div class="background"></div>
                <div class="para">
                    <h1>Civil</h1>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, iste.&nbsp<button class="know-more" onclick="openWindow('civil')">Know More</button></p>
                </div>


                <div class="images">
                    <img src="image/civil-engineering.jpg" alt="" style="width: 100%;height: 100%;">
                </div>


            </div>

            <div id="floatingWindow" style="display: none;margin-top: -37vw;">
            <button id="closeButton" onclick="closeWindow()">Close</button>
            <div id="floatingContent"></div></div>

        </div>
    </div>
    <script>

 function openWindow(id) {
  var floatingWindow = document.getElementById('floatingWindow');
  floatingWindow.style.display = 'block';

  // Fetch content dynamically based on the provided ID
  fetchContent(id);
}

function fetchContent(id) {
  var xhr = new XMLHttpRequest();
  xhr.open('GET', id + '.php', true);

  xhr.onload = function() {
    if (xhr.status === 200) {
      var floatingContent = document.getElementById('floatingContent');
      floatingContent.innerHTML = xhr.responseText;
    }
  };

  xhr.onerror = function() {
    console.log('Error fetching content.');
  };

  xhr.send();
}

function closeWindow() {
  var floatingWindow = document.getElementById('floatingWindow');
  floatingWindow.style.display = 'none';

  // Clear the content when closing the window
  var floatingContent = document.getElementById('floatingContent');
  floatingContent.innerHTML = '';
}







// ............................................faculty detail from database ...............................


function openWindow2(id) {
  var floatingWindow2 = document.getElementById('floatingWindow2');
  floatingWindow2.style.display = 'block';

  fetchContent21(id);
}

function closeWindow2() {
  var floatingWindow2 = document.getElementById('floatingWindow2');
  floatingWindow2.style.display = 'none';

  var floatingContent2 = document.getElementById('floatingContent2');
  floatingContent2.innerHTML = '';
}

function fetchContent21(id) {
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'fetch_data' + '.php?id=' + id, true);

  xhr.onload = function() {
    if (xhr.status === 200) {
      var floatingContent2 = document.getElementById('floatingContent2');
      floatingContent2.innerHTML = xhr.responseText;
    }
  };

  xhr.onerror = function() {
    console.log('Error fetching content.');
  };

  xhr.send();
}


// ...............................................faculty detail from database ends here ........................................


</script>


    <!-- ..............................................notice section................................... -->

    <h1 id="midheading">Notice </h1>
 <div class="noticehead" id="notice">

    <div class="notice">
        <div class="ug">
            <span class="ugheading">
                UG Course
                
            </span>
            <div class="ugheight">
                <ul class="ugnotice">
                    <?php
                    include 'connection.php';
                    $sql = 'SELECT * FROM notice ORDER BY last_date DESC';
                    $result = $conn->query($sql);
                
                // check if any rows were returned
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    $i=0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        if($i<5){
                            if($row['filename']!=''){
                                echo "<p class='notice-para'>".$row['notice_detail']. '<br>' . '<b>' . $row['last_date'] . '</b>'.'<a href="'.$row['filename'].'">'.'<img  src="image/download-symbol.png" style="height:6vw;width:6vw;margin-left:9vw;margin-bottom:-1.4vw;">'."</a>"."</p>".'&nbsp'.'&nbsp'.'&nbsp' . ($row['isnew'] == 'yes' ? "<img class='image123' src='image/newimage.png'>" : '');
                            }else{
                                echo "<p class='notice-para'>".$row['notice_detail']. '<br>' . '<b>' . $row['last_date'] . '</b>'."</p>".'&nbsp'.'&nbsp'.'&nbsp' . ($row['isnew'] == 'yes' ? "<img class='image123' src='image/newimage.png'>" : '');
                            }
                           
                        
                    
                       $i++;
                    }else{
                        break;
                    }
                       
                    }
                } else {
                    echo 'No new notice found.';
                }
                
                ?>
                </ul>
            </div>
            <script>
            function openNewPage1(){
                window.open('pastugnotice.php','_blank');
            }
            </script>
        <button  style=
        "color:#15645d;font-wight:900;margin-top:2vw;margin-left:2vw;font-size:2vw;cursor:pointer;background-color: white;" onclick="openNewPage1()">Archive
        </button>

        </div>

        <div class="pg">
            <span class="pgheading">
                PG Course
            </span>
            
            <div class="pgheight">
                <ul class="pgnotice">
                <?php
                    include 'connection.php';
                    $sql = 'SELECT * FROM noticepg ORDER BY last_date DESC';
                   
                    $result = mysqli_query($conn, $sql);
               
                
                // check if any rows were returned
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    $i=0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        if($row['filename']!=''){
                            echo "<p class='notice-para'>".$row['notice_detail']. '<br>' . '<b>' . $row['last_date'] . '</b><a href="pdf/' . $row['filename'] . '"><img src="image/download-symbol.png" style="height:6vw;width:6vw;margin-left:9vw;margin-bottom:-1.4vw;"></a></p>&nbsp;&nbsp;&nbsp;' . ($row['isnew'] == 'yes' ? "<img class='image123' src='image/newimage.png'>" : '');
                        }else{
                            echo "<p class='notice-para'>".$row['notice_detail']. '<br>' . '<b>' . $row['last_date'] . '</b>'."</p>".'&nbsp'.'&nbsp'.'&nbsp' . ($row['isnew'] == 'yes' ? "<img class='image123' src='image/newimage.png'>" : '');
                        }
                    }
                } else {
                    echo 'No new notice found.';
                }
                
                ?>
                </ul>
            </div>
            <script>
            function openNewPage(){
                window.open('pastpgnotice.php','_blank');
            }
            </script>
            <button  style=
        "color:#15645d; font-wight:900;margin-top:2vw;margin-left:2vw;font-size:2vw;cursor:pointer;background-color: white;" onclick="openNewPage()">Archive
        </button>
        </div>
    </div>
    <div class="upcomingevents">
    <h1 style="font-size: 2vw;font-weight: 900;width: 10vw;">
            UPCOMING <span style="color:#15645d;">EVENTS</span>
    </h1>
    <span style="font-size:1.5vw;">
            PROGRAMS ON PLATTER <br> <br>
            
    </span>
  <?php
    include 'connection.php';
                    $sql3 = 'SELECT * FROM event';
                    $result = $conn->query($sql3);
                
                // check if any rows were returned
                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                   
    echo "<span class='eventsname'>".$row['event_detail'].'<br>'."</span>"."<span class='dateofevents'>".$row['event_date']."</span>"."<span style='margin-left:2vw;'>".$row['event_time'].'<br>'."</span>";
                            
                       }
                } else {
                    echo 'No new Event found.';
                }

 ?>

        
        
        <!-- 1st EVENT add your events here -->
        <span class="eventsname">

        </span>
        <!-- 1st EVENT DATE add events date -->
        <span class="dateofevents">
           
        </span>
         <!-- 2nd EVENT add your events here -->
         <span class="eventsname">

         </span>
         <!-- 2nd EVENT DATE add events date -->
         <span class="dateofevents">
            
         </span>

        
    </div>
</div>
    <!-- ..........................................notice section ends here ......................................... -->

    <!-- ..........................................number increment animation ........................................ -->
    <h1 id="midheading">Overview</h1>
    
    <div class="counterheading">

        <div class="counter">
            <span class="circle">
                <h1 id="count1">0</h1>
            </span>
            <p class="total_count">Total Student </p>
        </div>

        <div class="counter">
            <span class="circle">
                <h1 id="count2">0</h1>
            </span>
            <p class="total_count">Total No. of Faculty</p>
        </div>

        <div class="counter">
            <span class="circle">
                <h1 id="count3">0</h1>
            </span>
            <p class="total_count"> Total No. of Staff</p>
        </div>
        <div class="counter">
            <span class="circle">
                <h1 id="count4">0</h1>
            </span>
            <p class="total_count">Average Package </p>
        </div>
    </div>
    <!-- .....................................................placement slider.............................. -->
    <h1 id="midheading">What Achiever Says </h1>
    
    <div id="container3" class="container3">
        <div class="subcontainer">
            <div class="under">
                <div class="image">
                    <img src="image/review1.jpg" alt="">
                </div>
                <div id="description">
                    The institute is known for its rigorous curriculum and comprehensive study material that helps
                    students excel in their exams. The faculty is highly qualified and experienced, with a strong focus
                    on providing personalized attention to each student. The institute also offers online coaching
                    classes, study materials, <br> <br>
                    <span  id="left_corner"> <b> Subham Singh  <br> Senior developer at google</b> </span>
                </div>
            </div>

            <div class="under">
                <div class="image">
                    <img src="image/review2.jpg" alt="">
                </div>
                <div id="description">
                    My Cousin brother was studying in this institute . The study material is really good but the problem
                    is that it is very expensive , If you have financial problem , then you cannot afford it . The
                    faculty is familiar with students and parents .
                    <br>  <br><br>
                    <span  id="left_corner"> <b>Sonal Sahu  <br> Software developer Amazon </b></span>
                </div>
            </div>
            <div class="under">
                <div class="image">
                    <img src="image/review4.jpg" alt="">
                </div>
                <div id="description">
                    Per year result in this institute is very nice many students coming to rank like this neet 1st rank
                    and jee mains/Advance coming higher percentile in all over India some think above 2 Lac student
                    admission in alpha coaching centyre in foundation one year and two years courses
                    <br>  <br> <br>
                    <span  id="left_corner"> <b> Akash Singh <br> American Express Head </b></span>
                </div>
            </div>
            <div class="under">
                <div class="image">
                    <img src="image/review5.jpg" alt="">
                </div>
                <div id="description">
                    It has everything that student need to prepare for any competitive exams. It's sudy material is
                    really great but the only problem is that it is very expensive. So if you have financial problem
                    then dont take admission untill unless you got scholarship. All romes are equipped with air
                    conditioner. 
                    <br> <br>
                    <span id="left_corner" > <b> Ravi Kumar <br> Software Engineer at google</b> </span>
                </div>
            </div>
        </div>
    </div>

<!-- ..........................................................our recruiter section .................................................. -->
<h1 id="midheading">Our Recruiters</h1>



<div class="charta">
    
<div class="chart-container">
        <canvas id="barChart"></canvas>
</div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    


    <script>
    document.addEventListener('DOMContentLoaded', function () {
    // Fetch data from PHP
    fetch('data.php?action=get_data')
        .then(response => response.json())
        .then(data => createBarChart(data))
        .catch(error => console.error('Error fetching data:', error));
});

function createBarChart(data) {
    const ctx = document.getElementById('barChart').getContext('2d');
    const labels = Object.keys(data);
    const values = Object.values(data);

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Recruiting Companies',
                data: values,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

</script>

<div class="container5">
    <div class="subcontainer2">
        <img src="image/amazon.jpg" alt="" class="companyimage">
        <img src="image/de_show.jpg" alt="" class="companyimage">
        <img src="image/google.jpg" alt="" class="companyimage">
        <img src="image/mahindra.jpg" alt="" class="companyimage">
        <img src="image/infosys.jpg" alt="" class="companyimage">
        <img src="image/wipro.jpg" alt="" class="companyimage">
        <img src="image/c.png" alt="" class="companyimage">
        <img src="image/d.jpeg" alt="" class="companyimage">
        <img src="image/e.png" alt="" class="companyimage">
        <img src="image/bi.jpeg" alt="" class="companyimage">
        <img src="image/f.jpeg" alt="" class="companyimage">
        <img src="image/g.jpeg" alt="" class="companyimage">
        <img src="image/g.png" alt="" class="companyimage">
    </div>
</div>




</div>
<!-- .......................................................image section starts here ................................................. -->
<h1 id="midheading">Gallary </h1>

    <?php
         include 'connection.php';

         $sql = 'SELECT * FROM gallary_image';
         $result = $conn->query($sql);

// check if any rows were returned
         if (mysqli_num_rows($result) > 0) {
             // output data of each row
             echo '<ul id="gallary123">';
             while ($row = mysqli_fetch_assoc($result)) {
                 echo '<li>';
                 echo '<span>UIET MDU</span>';
                 echo '<img src="' . $row['file_name'] . '" alt="">';
                 echo '</li>';
             }
             echo '</ul>';
         } else {
             echo 'No images found in the gallery.';
         }
     ?>


<!-- ........................................footer section ................................ -->
<h1 id="midheading">Contact Us </h1>
<footer>

    <div class="detail" id="detail"  >
        <div class="row3">
            <div class="footersection">
                
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem, ab.
                </p>
            </div>
            <div class="footersection">
               
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
              <div class="footersection">
                
                <ul>
                  <li>UIET MDU</li>
                  <li>Rohtak,Haryana 12345</li>
                  <li>Phone: (123) 456-7890</li>
                  <li>Email:uietmdu@gmail.com</li>
                </ul>
              </div>
        </div>
        <div class="footer_lowest">
        <div class="social-icons">
            <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
            <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
            <a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="copyright">
            All rights reserved to UIET MDU &copy; 2024
        </div>
    </div>
    </div>
   
</footer>        

<lord-icon part="box" class="country" src="https://cdn.lordicon.com/gqzfzudq.json" trigger="loop" colors="primary:#90C4F2,secondary:#90C4F2"></lord-icon>
<lord-icon src="https://cdn.lordicon.com/zzcjjxew.json" trigger="loop" colors="primary:#90C4F2,secondary:#90C4F2"></lord-icon>


</body>

</html>