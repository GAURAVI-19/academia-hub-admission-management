<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);

  ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Hub</title>
    <link rel="stylesheet" href="course.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0050b9c8a5.js" crossorigin="anonymous"></script>
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">

</head>
<body background="Images/courses3.jpg" class="courseimg">
<!-- <!............Header Section...................> -->
    <section class="sub-header">
        <nav>
            <a href="index.php"><img src="Images/logo_file/png/hub_logo.png" height="50px" width="15%"></a>
            <div class="nav-links"id="navLinks">
                <!-- <i class="fa-solid fa-xmark" onclick="hideMenu()"></i> -->
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <!-- <li><a href="departments.html">DEPARTMENTS</a></li> -->
                    <li><a href="course.php">DEPARTMENTS</a></li>
                    <!-- <li class="dropdown1">
                        <a href="" class="dropbtn1">ACADEMICS</a>
                        <div class="dropdown1-content">
                            <a href="academics/ACademic/syllabus.pdf" target="_blank">Syllabus</a>
                            <a href="academics/ACademic/academic-calender23-24.pdf" target="_blank">Academic Calender</a>
                        </div>
                    </li> -->
                    <li class="dropdown">
                        <a href="#" class="dropbtn">ADMISSION</a>
                        <div class="dropdown-content">
                            <a href="#">Admission Structure</a>
                            <a href="https://antiragging.in/affidavit_affiliated_form.php">Anti Ragging Form</a>
                            <a href="https://online.msbte.co.in/msbte23/index.php?act=exam_login">MSBTE Exam Form</a>
                            <a href="https://csmss.org/admin/uploads/student/file/56-student.pdf">Registration Form</a>
                            <!-- Add more admission links as needed -->
                        </div>
                    </li>
                    <li><a href="about.html">ABOUT US</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li>
                        <a href="admin/login.php" class="dropbtn">ADMIN</a>
                    </li>
                    <li>
                        <a href="user/login.php" class="dropbtn">USER</a>
                    </li>
                </ul>
            </div>
            <!-- <i class="fa-solid fa-bars" onclick="showMenu()"></i> -->
        </nav>
    </section>

<!-- <!............ Course ............> -->

<section class="w3l-pricing-7" id="pricing">
  <div class="w3l-pricing-7_sur py-5">
    <div class="container py-md-3">
      <div class="heading text-center mx-auto">
        <h3 class="head">See Our Departments</h3>
  
      </div>
      <div class="row w3l-pricing-7-gd-top pt-3 mt-5">
        
<?php
$ret=mysqli_query($con,"select * from tblcourse");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
        <div class="col-lg-4 col-md-6 mt-md-0 mt-4 w3l-pricing-7-gd-left active">
          <div class="w3l-pricing-7 pric-7 active">
            <h6><?php  echo $row['CourseName'];?></h6>
            <div class="w3l-pricing-7-top">
            
              <p><?php echo $row['CourseDescription'];?></p>
           </div>
            <br>
          </div>
        </div><?php 
$cnt=$cnt+1;
}?>
        
      </div>
    </div>
  </div>
</section>

<!-- <!............. facilities ...........> -->
<!-- <section class="facilities">
    <h1>Our facilities</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <div class="row">
        <div class="facilities-col">
            <img src="Images/library.png">
            <h3>World Class Library</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pellentesque aliquet turpis nulla</p>
        </div>
        <div class="facilities-col">
            <img src="Images/basketball.png">
            <h3>Largest Play Ground</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pellentesque aliquet turpis nulla</p>
        </div>
        <div class="facilities-col">
            <img src="Images/cafeteria.png">
            <h3>Tasty and Healthy Food</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pellentesque aliquet turpis nulla</p>
        </div>
    </div>
</section> -->
     

<!-- <!...........Footer.....> -->

 <!-- <section class="footer">
        <h4>About Us</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pellentesque aliquet turpis nulla, eleifend faucibus est<br>sollicitudin ut. Maecenas ut venenatis ex, et dapibus purus</p>
    <div class="icons">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-linkedin"></i>
        <i class="fa-brands fa-github"></i>
    </div>
    <p>Made with <i class="fa-solid fa-heart"></i> by Deepanshi Sharma</p>
</section> --> 

<!-- <!...........Javascript for Toggle Menu.............> -->
<!-- <section class="footer">
    <h4>About Us</h4>
    <p>At Academia Hub, we cultivate leaders through innovation, shaping futures. Join us in our commitment to excellence and growth. <br>Welcome to a community dedicated to empowering minds.</p>
    <div class="icons">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-linkedin"></i>
        <i class="fa-brands fa-github"></i>
    </div>
    <p> Academia Hub Team</p>
</section> -->
<script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>

    
</body>
</html>