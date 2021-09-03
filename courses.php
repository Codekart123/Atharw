<?php
session_start();
if (!isset($_SESSION['fullname'])) {
  header("location: register.html");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>COURSES | ATHARW | An Inititative of CodeKart</title>
  <!-- Header links -->
  <?php
  include "root-file-link.php";
  ?>


</head>

<body>

  <?php
  include "nav.php";
  ?>

  <main id="main">


    <!-- ======= Cruisine Course Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">CRUISINE COURSES</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">WEB DEVELOPEMENT</li>
              <li data-filter=".filter-card">MOBILE DEVELOPEMENT</li>
              <li data-filter=".filter-web">OTHER</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/course/mern.png" class="img-fluid" alt="">
            <a href="./CRUISINE-COURSE/MERN DEV course details.php" rel="noopener noreferrer">
              <div class="portfolio-info">
                <h4>WEB
                  DEVELOPEMENT IN
                  MERN
                  STACK</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/course/android.png" class="img-fluid" alt="">
            <a href="./CRUISINE-COURSE/ADVANCE ANDROID DEV course details.php" rel="noopener noreferrer">
              <div class="portfolio-info">
                <h4>MOBILE APPLICATION
                  WITH
                  ADVANCE ANDROID</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/course/mean.png" class="img-fluid" alt="">
            <a href="./CRUISINE-COURSE/MEAN DEV course details.php" rel="noopener noreferrer">
              <div class="portfolio-info">
                <h4>WEB DEVELOPEMENT IN
                  MEAN
                  STACK</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <img src="assets/img/course/NLP.png" class="img-fluid" alt="">
            <a href="./CRUISINE-COURSE/NLP course details.php" rel="noopener noreferrer">
              <div class="portfolio-info">
                <h4>CERTIFICATION IN NLP</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <img src="assets/img/course/core&advance PYTHON.png" class="img-fluid" alt="">
            <a href="./CRUISINE-COURSE/PYTHON course details.php" rel="noopener noreferrer">
              <div class="portfolio-info">
                <h4>CERTIFICATION IN PYTHON PROGRAMMING LANGUAGE</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <img src="assets/img/course/laravel.png" class="img-fluid" alt="">
            <a href="./CRUISINE-COURSE/LARAVEL course details.php" rel="noopener noreferrer">
              <div class="portfolio-info">
                <h4>WEB DEVELOPEMENT IN
                  LARAVEL</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <img src="assets/img/course/sellenium.png" class="img-fluid" alt="">
            <a href="./CRUISINE-COURSE/SOFTWARE TESTING course deatils.php" rel="noopener noreferrer">
              <div class="portfolio-info">
                <h4>SOFTWARE TESTING WITH SELLENIUM</h4>
              </div>
            </a>
          </div>



        </div>

      </div>
    </section><!-- End Cruisine Course Section -->


    <!-- ======= Main Course Section ======= -->
    <section id="clients" class="clients" style="background-color: #ff7839;">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2 data-aos="fade-up">MAIN COURSES</h2>
        </div>

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <div class="card shadow" style="width: 18rem;">
                <img src="./assets/img/course/ADVANCE PYTHON.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">CERTIFICATION IN ADVANCE PYTHON</h5>

                  <div class="text-center"><a href="./MAIN-COURSE/ADVANCE PYTHON course deatils.php" class="btn btn-warning">View Details</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card shadow" style="width: 18rem;">
                <img src="./assets//img/course/HIBERNATE.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">CERTIFICATION IN HIBERNATE</h5>

                  <div class="text-center"><a href="./MAIN-COURSE/HIBERNATE course deatils.php" class="btn btn-warning">View Details</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card shadow" style="width: 18rem;">
                <img src="./assets//img/course/JS2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">CERTIFICATION IN JAVASCRIPT</h5>

                  <div class="text-center"><a href="./MAIN-COURSE/JAVASCRIPT course deatils.php" class="btn btn-warning">View Details</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card shadow" style="width: 18rem;">
                <img src="./assets//img/course/JSP.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">CERTIFICATION IN JSP</h5>

                  <div class="text-center"><a href="./MAIN-COURSE/JSP course deatils.php" class="btn btn-warning">View
                      Details</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card shadow" style="width: 18rem;">
                <img src="./assets//img/course/SERVLETS.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">CERTIFICATION IN SERVLETS</h5>

                  <div class="text-center"><a href="./MAIN-COURSE/SERVLET course deatils.php" class="btn btn-warning">View Details</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card shadow" style="width: 18rem;">
                <img src="./assets//img/course/SPRING.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">CERTIFICATION IN SPRING</h5>

                  <div class="text-center"><a href="./MAIN-COURSE/SPRING course deatils.php" class="btn btn-warning">View Details</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card shadow" style="width: 18rem;">
                <img src="./assets//img/course/DATA ANALYTICS.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">CERTIFICATION IN DATA ANALYTICS</h5>

                  <div class="text-center"><a href="./MAIN-COURSE/DATA ANALYST course deatils.php" class="btn btn-warning">View Details</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card shadow" style="width: 18rem;">
                <img src="./assets//img/course/DATA VISUALIZATION.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">CERTIFICATION IN DATA VISUALIZATION</h5>

                  <div class="text-center"><a href="./MAIN-COURSE/DATA VISUALIZATION course deatils.php" class="btn btn-warning">View Details</a></div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card shadow" style="width: 18rem;">
                <img src="./assets//img/course/DEEP LEARNING.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">CERTIFICATION IN DEEP LEARNING</h5>

                  <div class="text-center"><a href="./MAIN-COURSE/DEEP LEARNING course deatils.php" class="btn btn-warning">View Details</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <div class="card shadow" style="width: 18rem;">
                <img src="./assets//img/course/DM.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">CERTIFICATION IN DIGITAL MARKETING</h5>

                  <div class="text-center"><a href="./MAIN-COURSE/DIGITAL MARKETING course deatils.php" class="btn btn-warning">View Details</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card shadow" style="width: 18rem;">
                <img src="./assets//img/course/PYTHON DATASCIENCE.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">PROGRAMMING FOR DATASCIENCE WITH PYTHON</h5>

                  <div class="text-center"><a href="./MAIN-COURSE/DATA SCIENCE WITH PYTHON course details.php" class="btn btn-warning">View Details</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card shadow" style="width: 18rem;">
                <img src="./assets//img/course/PYTHON SQL DS.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">PYTHON AND SQL FOR DATA SCIENCE</h5>

                  <div class="text-center"><a href="./MAIN-COURSE/PYTHON & SQL course details.php" class="btn btn-warning">View Details</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card shadow" style="width: 18rem;">
                <img src="./assets//img/course/ANGULAR.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">WEB DEVELOPEMENT IN ANGULAR</h5>

                  <div class="text-center"><a href="./MAIN-COURSE/ANGULAR course details.php" class="btn btn-warning">View Details</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card shadow" style="width: 18rem;">
                <img src="./assets//img/course/PHP MYSQL.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">WEB DEVELOPEMENT IN PHP</h5>

                  <div class="text-center"><a href="./MAIN-COURSE/PHP course details.php" class="btn btn-warning">View
                      Details</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card shadow" style="width: 18rem;">
                <img src="./assets//img/course/DJANGO.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">WEB DEVELOPEMENT IN PYTHON & DJANGO</h5>

                  <div class="text-center"><a href="./MAIN-COURSE/PYTHON WITH DJANGO course details.php" class="btn btn-warning">View Details</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card shadow" style="width: 18rem;">
                <img src="./assets//img/course/CORE ANDROID.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">WEB DEVELOPEMENT IN CORE ANDROID</h5>

                  <div class="text-center"><a href="./MAIN-COURSE/CORE ANDROID course details.php" class="btn btn-warning">View Details</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card shadow" style="width: 18rem;">
                <img src="./assets//img/course/REACT.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">WEB DEVELOPEMENT IN REACT</h5>

                  <div class="text-center"><a href="./MAIN-COURSE/REACT course details.php" class="btn btn-warning">View Details</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card shadow" style="width: 18rem;">
                <img src="./assets//img/course/DS & ALGO.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">DS ALGO WITH JAVA</h5>

                  <div class="text-center"><a href="./MAIN-COURSE/DS ALGO IN JAVA course details.php" class="btn btn-warning">View Details</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Clients Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">STARTER COURSES</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="member">
              <div class="member-img">
                <img src="./assets/img/course/C programming.png" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h4>CERTIFICATION IN "C" PROGRAMMING</h4>
                <a href="./STARTER-COURSES/C PROGRAMMING course details.php">
                  <button class="btn btn-warning mt-2">VIEW DETAILS</button>
                </a>
              </div>

            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="member">
              <div class="member-img">
                <img src="./assets/img/course/C++.png" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h4>CERTIFICATION IN "C++" PROGRAMMING</h4>
                <a href="./STARTER-COURSES/C++ PROGRAMMING course details.php">
                  <button class="btn btn-warning mt-2">VIEW DETAILS</button>
                </a>
              </div>

            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="member">
              <div class="member-img">
                <img src="./assets/img/course/java.png" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h4>CERTIFICATION IN "CORE JAVA" PROGRAMMING</h4>
                <a href="./STARTER-COURSES/CORE JAVA PROGRAMMING course details.php">
                  <button class="btn btn-warning mt-2">VIEW DETAILS</button>
                </a>
              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="member">
              <div class="member-img">
                <img src="./assets/img/course/CORE PYTHON.png" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h4>CERTIFICATION IN "CORE PYTHON" PROGRAMMING</h4>
                <a href="./STARTER-COURSES/CORE PYTHON PROGRAMMING course details.php">
                  <button class="btn btn-warning mt-2">VIEW DETAILS</button>
                </a>
              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="member">
              <div class="member-img">
                <img src="./assets/img/course/HTML CSS JS.png" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h4>CERTIFICATION ON "BASIC WEB TECHNOLOGY"</h4>
                <a href="./STARTER-COURSES/BASIC WEB TECHNOLOGY course details.php">
                  <button class="btn btn-warning mt-2">VIEW DETAILS</button>
                </a>
              </div>

            </div>
          </div>



          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="./assets/img/course/DB MYSQL.png" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h4>CERTIFICATION ON "INTRODUCTION TO SQL"</h4>
                <a href="./STARTER-COURSES/SQL course details.php">
                  <button class="btn btn-warning mt-2">VIEW DETAILS</button>
                </a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">DESSERTS</h2>
        </div>

        <div class="row">
          <div class="col-md-4  d-flex align-items-stretch mt-4 " data-aos="fade-up">
            <div class="card" style="background-image: url(assets/img/course/softskill.png);">
              <div class="card-body">
                <h5 class="card-title"><a href="">SOFT SKILLS TRAINING</a></h5>
                <p class="card-text">Soft skills are a combination of people skills, social skills, communication
                  skills, character or personality traits,
                  attitudes, mindsets, career attributes, social intelligence and emotional intelligence</p>
                <div class="read-more"><a href="contact.php"><i class="bi bi-arrow-right"></i> Enquiry
                    Now</a></div>
              </div>
            </div>
          </div>

          <div class="col-md-4  d-flex align-items-stretch mt-4 " data-aos="fade-up" data-aos-delay="100">
            <div class="card" style="background-image: url(assets/img/course/pre\ placement.png);">
              <div class="card-body">
                <h5 class="card-title"><a href="">PRE PLACEMENT TRAINING</a></h5>
                <p class="card-text">Placement training plays a major role in shaping up the career goals of students.
                  It is the dream of every engineering
                  student to get placed in a top organization visiting their campus for recruitment. ... Training of
                  students and
                  equipping them with life skills has become an important responsibility of the institution.</p>
                <div class="read-more"><a href="contact.php"><i class="bi bi-arrow-right"></i> Enquiry
                    Now</a></div>
              </div>
            </div>
          </div>

          <div class="col-md-4  d-flex align-items-stretch mt-4 " data-aos="fade-up" data-aos-delay="200">
            <div class="card" style="background-image: url(assets/img/course/ms\ office.png);">
              <div class="card-body">
                <h5 class="card-title"><a href="">MS OFFICE 360 COURSE</a></h5>
                <p class="card-text">Microsoft Office is a set of computer applications mainly used for business or
                  office purposes. ... MS Office helps
                  simplify basic office tasks and improve work productivity. Each application is designed to address
                  specific tasks, such
                  as word processing, data management, making presentations and organizing emails.</p>
                <div class="read-more"><a href="contact.php"><i class="bi bi-arrow-right"></i> Enquiry
                    Now</a></div>
              </div>
            </div>
          </div>


          <div class="col-md-6  d-flex align-items-stretch mt-4 " data-aos="fade-up">
            <div class="card" style="background-image: url(assets/img/course/reasoning\ apti.png);">
              <div class="card-body">
                <h5 class="card-title"><a href="">REASONING & APTI COURSE</a></h5>
                <p class="card-text">Reasoning is a process of evaluation. Aptitude is capability. For example, if
                  someone has an aptitude for math then they
                  can reason out the processes more easily. Aptitude is certain capability like thinking deeply, taking
                  things logically,
                  learning technical subjects, teaching, training people etc</p>
                <div class="read-more"><a href="contact.php"><i class="bi bi-arrow-right"></i> Enquiry
                    Now</a></div>
              </div>
            </div>
          </div>

          <div class="col-md-6  d-flex align-items-stretch mt-4 " data-aos="fade-up" data-aos-delay="100">
            <div class="card" style="background-image: url(assets/img/course/spoken\ english.png);">
              <div class="card-body">
                <h5 class="card-title"><a href="">SPOKEN ENGLISH TRAINING</a></h5>
                <p class="card-text">The ways in which the English language is transmitted through a conventional system
                  of sounds. Compare to written
                  English. The study of speech sounds (or spoken language) is the branch of linguistics known as
                  phonetics. ... The study
                  of sound changes in a language is phonology.</p>
                <div class="read-more"><a href="contact.php"><i class="bi bi-arrow-right"></i> Enquiry
                    Now</a></div>
              </div>
            </div>
          </div>

        </div>
      </div>

      </div>
    </section><!-- End Values Section -->


  </main><!-- End #main -->

  <!-- footer -->
  <?php
  include "footer.php";
  ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>