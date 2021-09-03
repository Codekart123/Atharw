<?php
session_start();
if (!isset($_SESSION['fullname'])) {
  header("location: ../register.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>MERN STACK |COURSES | ATHARW </title>
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
                  <img src="../assets/img/course/mern.png" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>WEB DEVELOPEMENT IN MERN STACK</h3>
              <p class="estimate-time"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Estimate Completion Time: 120 Hours
              </p>
              <p class="certificate"><i class="fa fa-certificate" aria-hidden="true"></i>
                Intenship Included + 100% Job Assistance
              </p>
              <p class="prerequisites"><i class="fa fa-cog" aria-hidden="true"></i>
                Prerequisites: HTML, CSS & JS
              </p><br>
              <h3>Offer Price: </h3>
              <h2 style="font-family:Verdana, Geneva, Tahoma, sans-serif"><b>₹22,999</b> &nbsp;&nbsp;&nbsp;&nbsp;<strike style="color: #a3a3a3;">
                  <span style="font-size: 20px;">
                    ₹25,999
                  </span>
                </strike></h2><br>
              <a href="../contact.php">
                <div class="btn btn-lg btn-warning">ENQUIRY NOW</div>
              </a>

            </div>
            <div class="portfolio-description">
              <h2>What is MERN stack ?</h2>
              <p>The MERN stack is a JavaScript stack that's designed to make the development process smoother. MERN
                includes four
                open-source components: MongoDB, Express, React, and Node. js. These components provide an end-to-end
                framework for
                developers to work in.
              </p>
            </div>
            <a href="../Syllabus/Cruisin/MERN Stack Development.pdf" target="_blank">
              <div class="btn btn-lg btn-info download-syllabus">Download Syllabus</div>
            </a>
          </div>

        </div>

      </div>
    </section><!-- End course-details section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include "../small-footer.php";
  ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>

</html>