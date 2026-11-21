<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Hub</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0050b9c8a5.js" crossorigin="anonymous"></script>
</head>
<body>
<!............Header Section...................>
    <section class="header">
        
        <nav>
            <a href="index.php"><img src="Images/logo_file/png/hub_logo.png" height="50px" width="15%"></a>
            <div class="nav-links"id="navLinks">
                <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <!-- <li><a href="departments.html">DEPARTMENTS</a></li> -->
                    <li><a href="course.php">DEPARTMENTS</a></li>
                    <li class="dropdown1">
                        <a href="#" class="dropbtn1">ACADEMICS</a>
                        <div class="dropdown1-content">
                            <a href="academics/ACademic/syllabus.pdf" target="_blank">Syllabus</a>
                            <a href="academics/ACademic/academic-calender23-24.pdf" target="_blank">Academic Calender</a>
                           
                        </div>
                    </li>
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
            <i class="fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>Welcome to <br> Academia Hub</h1>
            <p>To provide best Technical Education to achieve Excellency.</p>
            <a href="https://www.csmsspoly.com/" target="_blank" class="hero-btn">Visit Us to know More</a>
        </div>
    </section>

<!............Course Section.............>


<!............campus section...............>

<section class="campus">
    <h1>Our Campus</h1>
    <p>An inspiring campus fostering academic excellence and personal growth.</p>
    <div class="row">
        <div class="campus-col">
            <img src="Images/canteen.jpg">
            <div class="layer">
                <h3>CANTEEN</h3>
            </div>
        </div>
        <div class="campus-col" id="col2">
            <img src="Images/stadium.jpg">
            <div class="layer">
                <h3>STADIUM</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="Images/audi1.JPG">
            <div class="layer">
                <h3>AUDITORIUM</h3>
            </div>
        </div>
    </div>
</section>

<!.............Facilities...........>

<section class="facilities">
    <h1>Our facilities</h1>
    <p>Explore our cutting-edge digital lab and expansive library, tailored to support your academic journey.</p>
    <div class="row">
        <div class="facilities-col">
            <img src="Images/library.png">
            <h3>Library</h3>
            <p>Discover a treasure trove of knowledge and resources at our library, your gateway to academic excellence and lifelong learning.</p>
        </div>
        <div class="facilities-col">
            <img src="Images/lab.jpg">
            <h3>Digital Lab</h3>
            <p>Step into our digital lab, where innovation meets education, empowering students with the latest technology for hands-on learning and exploration</p>
        </div>
        <div class="facilities-col">
            <img src="Images/gym.jpg">
            <h3>Gymnasium</h3>
            <p>Transform your fitness journey at our fully-equipped gym, where wellness meets convenience in a motivating environment.</p>
        </div>
    </div>
</section>

<!...........Testimonials............>



<!..............Call To Action.............>

<section class="cta">
    <h1>Enroll For Our Various Online Courses<br>Anywhere From The World</h1>
    <a href="contact.html" class="hero-btn">CONTACT US</a>
</section>

<!...........Footer.....>

<section class="footer">
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
</section>

<!...........Javascript for Toggle Menu.............>
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