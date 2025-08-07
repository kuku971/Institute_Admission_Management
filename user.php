<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: main.php");
    exit;
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DHARAMPETH INSTITUTE OF MANAGEMENT</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  


  <header>
    <img src="institute_logo.png">
    <div class="brand">

      <h3>GOVERNMENT OF MAHARASHTRA</h3>
      <h1><b>DHARAMPETH INSTITUTE OF MANAGEMENT</b></h1>
      <h4>"विद्या सर्वस्य भूषणम्"</h4>
      <div class="container1">
        <h2 color="red">Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    </div>
    </div>
   
  </header>
  <nav>

    <ul>
      <li><a href="" id="Home-section">HOME</a></li>
      <li><a href="Form_folder/Admission.php">APPLY</a></li>
      <li><a href="">ABOUT US</a></li>
      <li><a href="logout.php">LOGOUT</a></li>
      <li><a href="check_status.php">CHECK STATUS</a></li>
    </ul>

   
    
  </nav>
  <marquee class="Intro">
    Admissions is Now Open !!!
    <img src="news logo.jpg">
  </marquee>
 
  <div class="container">
    <div class="left-container">
      <img src="sir.jpg"><br>
      <h2>
        
          Sunil Verma
      
      </h2>
    </div>

    <div class="right-container">

      <h1>Welcome To Dharampeth Institute</h1><br>
      "Our institute fosters innovation, leadership, and lifelong learning, empowering students to excel in a dynamic
      world. We are committed to holistic growth, ethical values, and shaping future leaders who contribute meaningfully
      to society, building a brighter future through education."
    </div>



  </div>


  <footer>
    <div class="footer-container">
      <div class="footer-section">
        <h4>About Us</h4>
        <p>Providing quality education and resources to help students excel in their academic journey.</p>
      </div>
      <div class="footer-section">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Courses</a></li>
          <li><a href="#">Admissions</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h4>Contact Us</h4>
        <p>Email: DharampethInstitute05@gmail.com</p>
        <p>Phone: +123 456 7890</p>
        <p>Address: 123 Main Street, City</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2025 Dharampeth Institute Management.<br> All Rights Reserved.</p>
    </div>
  </footer>
  <script src="script.js"></script>
</body>

</html>