<?php
session_start();
if (!isset($_SESSION['fullname'])) {
    header("location: ../register.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CORE ANDROID | COURSES | ATHARW </title>
    <!-- header links -->
    <?php
    include "../course-file-link.php";
    ?>
</head>

<body>

    <?php
    include "../course-nav.php";
    ?>
    <main id="main">


        <!-- ======= course-details section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper-container">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="../assets/img/course/CORE ANDROID.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>CERTIFICATION IN CORE ANDROID</h3>
                            <p class="estimate-time"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                Estimate Completion Time: 60 Hours
                            </p>
                            <p class="certificate"><i class="fa fa-certificate" aria-hidden="true"></i>
                                Intenship Included + 100% Job Assistance
                            </p>
                            <p class="prerequisites"><i class="fa fa-cog" aria-hidden="true"></i>
                                Prerequisites: HTML, CSS & JS
                            </p><br>
                            <h3>Offer Price: </h3>
                            <h2 style="font-family:Verdana, Geneva, Tahoma, sans-serif"><b>₹11,999</b>
                                &nbsp;&nbsp;&nbsp;&nbsp;<strike style="color: #a3a3a3;">
                                    <span style="font-size: 20px;">
                                        ₹14,999
                                    </span>
                                </strike></h2><br>
                            <a href="../contact.php">
                                <div class="btn btn-lg btn-warning">ENQUIRY NOW</div>
                            </a>

                        </div>
                        <div class="portfolio-description">
                            <h2>What is Core Android Development ?</h2>
                            <p>Android software development is the process by which applications are created for devices
                                running the Android operating
                                system. Google states that "Android apps can be written using Kotlin, Java, and C++
                                languages" using the Android
                                software development kit (SDK), while using other languages is also possible.
                            </p>
                        </div>
                        <a href="../Syllabus/Main Course/Certification in Core Android.pdf" target="_blank">
                            <div class="btn btn-lg btn-info download-syllabus">Download Syllabus</div>
                        </a>
                    </div>

                </div>

            </div>
        </section><!-- End course-details section -->
    </main>
    <!-- ======= Footer ======= -->
    <?php
    include "../small-footer.php";
    ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>