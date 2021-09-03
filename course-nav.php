<?php
if (!isset($_SESSION['fullname'])) {
    header("location: ../register.html");
}
$username = $_SESSION['fullname'];
?>

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:info@atharw.com" target="_blank">info@atharw.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span><a href="tel:+91 9178 587 486">+91 9178 587
                        486</a></span></i>
        </div>

        <div class="cta d-none d-md-flex align-items-center">
            <a href="" class="scrollto">Get Started</a>
        </div>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="../home.php"><img src="../assets/img/logo-new.png" alt=""></a></h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="../home.php">Home</a></li>
                <li class="dropdown"><a href="#"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#"></a></li>
                        <li class="dropdown"><a href="#"><span>Web Developement</span><i class="bi bi-chevron-right"> </i></a>
                            <ul>
                                <li><a href="../CRUISINE-COURSE/MERN DEV course details.php">MERN Developement</a></li>
                                <li><a href=" ../CRUISINE-COURSE/MEAN DEV course details.php">MEAN Developement</a></li>
                                <li><a href="../CRUISINE-COURSE/LARAVEL course details.php">PHP & Laravel</a></li>
                                <li><a href="../MAIN-COURSE/REACT course details.php">React</a></li>
                                <li><a href="../MAIN-COURSE/ANGULAR course details.php">Angular</a></li>
                                <li><a href="../MAIN-COURSE/PYTHON WITH DJANGO course details.php">Python & Django</a></li>
                                <li><a href="../MAIN-COURSE/PHP course details.php">PHP</a></li>
                                <li><a href="../MAIN-COURSE/JAVASCRIPT course deatils.php">Javascript</a></li>
                                <li><a href="../STARTER-COURSES/BASIC WEB TECHNOLOGY course details.php">Basic web Tech</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Mobile App Developement</span><i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="../CRUISINE-COURSE/ADVANCE ANDROID DEV course details.php">Advance Android</a></li>
                                <li><a href="../MAIN-COURSE/CORE ANDROID course details.php">Core Android</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Frameworks</span><i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="../MAIN-COURSE/HIBERNATE course deatils.php">Hibernate</a></li>
                                <li><a href="../MAIN-COURSE/JSP course deatils.php">JSP</a></li>
                                <li><a href="../MAIN-COURSE/SERVLET course deatils.php">Servlet</a></li>
                                <li><a href="../MAIN-COURSE/SPRING course deatils.php">Spring</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Programming Language</span><i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="../CRUISINE-COURSE/PYTHON course details.php">Core & Advance Python</a></li>
                                <li><a href="../MAIN-COURSE/ADVANCE PYTHON course deatils.php">Advance Python</a></li>
                                <li><a href="../STARTER-COURSES/C PROGRAMMING course details.php">C Programming</a></li>
                                <li><a href="../STARTER-COURSES/C++ PROGRAMMING course details.php">C++ Programming</a></li>
                                <li><a href="../STARTER-COURSES/CORE JAVA PROGRAMMING course details.php">Core Java</a></li>
                                <li><a href="../STARTER-COURSES/CORE PYTHON PROGRAMMING course details.php">Core Python</a></li>
                                <li><a href="../STARTER-COURSES/SQL course details.php">Intro to SQL</a></li>
                                <li><a href="../MAIN-COURSE/DS ALGO IN JAVA course details.php">DS-ALGO in Java</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Analytics</span><i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="../CRUISINE-COURSE/NLP course details.php">NLP</a></li>
                                <li><a href="../MAIN-COURSE/DATA ANALYST course deatils.php">Data Analyst</a></li>
                                <li><a href="../MAIN-COURSE/DATA VISUALIZATION course deatils.php">Data Visualization</a></li>
                                <li><a href="../MAIN-COURSE/DEEP LEARNING course deatils.php">Deep Learning</a></li>
                                <li><a href="../MAIN-COURSE/DIGITAL MARKETING course deatils.php">Digital Marketing</a></li>
                                <li><a href="../MAIN-COURSE/DATA SCIENCE WITH PYTHON course details.php">Data Science</a></li>
                                <li><a href="../MAIN-COURSE/PYTHON & SQL course details.php">Python & SQL</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Skill Developement</span><i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="../courses.php#values">Soft Skill Training</a></li>
                                <li><a href="../courses.php#values">Preplacement Training</a></li>
                                <li><a href="../courses.php#values">MS Office Training</a></li>
                                <li><a href="../courses.php#values">Reasoning & Aptitude</a></li>
                                <li><a href="../courses.php#values">Spoken English</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="../home.php#services">Services</a></li>
                <li><a class="nav-link scrollto " href="../About.php">About us</a></li>
                <li><a class="nav-link scrollto" href="../contact.php">Contact</a></li>
                <!-- <li><a class="nav-link scrollto" href="login.html">Login/Register</a></li> -->
                <?php if (isset($_SESSION['fullname'])) {; ?>
                    <li> <a class="nav-link scrollto" href="../logout.php" onclick=" return confirm(' Are You sure you want to logout?');">Logout</a></li>
                <?php } else {; ?>
                    <li><a class="nav-link scrollto" href="../register.html">Login | Register</a></li>
                <?php }; ?>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->


<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="../home.php">Home</a></li>
            <li><a href="../courses.php#portfolio">Courses</a></li>
            <li>Course- Details</li>
        </ol>
        <!-- <h2>Course- Details</h2> -->
    </div>
</section><!-- End Breadcrumbs -->