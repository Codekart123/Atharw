<?php
session_start();
if (!isset($_SESSION['fullname'])) {
  header("location: register.html");
}
$username = $_SESSION['fullname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>ATHARW | An Inititative of CodeKart</title>
  <!-- Header links -->
  <?php
  include "root-file-link.php";
  ?>

</head>

<body>

  <?php
  include "nav.php";
  ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container" data-aos="fade-in">
      <?php
      if (isset($_SESSION['fullname'])) {
        echo "<h1> Hello $username </h1> .
          <h1>Welcome to Atharw</h1> .
          <h2>YOUR FUTURE BEGINS WITH US</h2>";
      } else {
        echo "<h1>Welcome to Atharw</h1>
      <h2>YOUR FUTURE BEGINS WITH US</h2>";
      };
      ?>
      <div class="d-flex align-items-center get-started">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="#portfolio" class="btn-get-started scrollto">Start Learning</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-xl-4 col-lg-5" data-aos="fade-up">
            <div class="content">
              <h3>Why Choose Atharw to learn a new Technology?</h3>
              <p>
                Atharw always follows three core values of Bhagavad Gita i.e. Purity Honesty and Dedication. The access
                to education,
                medicine, industry, transportation etc. has been simplified due to modern technology. Due to the
                convenience and
                efficiency provided by technology, our lives have improved significantly. So Atharw basically focuses on
                the idea of
                getting the best out of modern technology and creating new opportunities by providing the ray of modern
                science in terms
                of education among all because we believe that "Technology with education is for everyone".
              </p>
              <div class="text-center">
                <a href="About.php" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-flex">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bi bi-exclude"></i>
                    <h4>Purity</h4>
                    <p>Purity reverses our mental gravity. Purity of mind is the condition of Sattva, i.e., the state of
                      the internal organ
                      being untouched by Rajas and Tamas. Devotion to meditation on the knowledge (of the self) is firm
                      adherence to the
                      discrimination between the pure nature of the self and Prakrti.
                    <p><small>-Bhagavad Gita</small></p>
                    </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bi bi-flower2"></i>
                    <h4>Honesty</h4>
                    <p>Being honest is the foremost quality of especially those treading on the path of spiritualism. In
                      non-religious context
                      honesty is a much desirable virtue. Honesty is one of the main ingredients of what constitutes
                      knowledge. Honesty is one
                      of the transcendental qualities which is created by Lord Krishna himself.
                    <p><small>-Bhagavad Gita</small></p>
                    </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bi bi-gear-wide-connected"></i>
                    <h4>Dedication</h4>
                    <p>The Gita teaches perseverance in the face of impending threats. It calls upon us to dedicate our
                      mind, body, and soul to
                      pure duty and rewrite destiny. It provides strength in times of distress, spark in times of
                      darkness, and helps snatch
                      success from the jaws of failure.
                    <p><small>-Bhagavad Gita</small></p>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Cruisine Course Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">COURSES</h2>
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
        <div class="text-center">
          <a href="courses.php">
            <div class="btn btn-lg  btn-warning">
              Show More
            </div>
          </a>

        </div>
        # Which Tech Should Be a Better Career Options <a href="career-path.php" style="color: blue; font-weight:700; text-decoration:underline"> CLICK HERE</a>
        <img style="width: 200px;" src="./assets/img/notification.gif" alt="">


      </div>
    </section><!-- End Cruisine Course Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Services</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-dice-1-fill"></i></div>
              <h4 class="title"><a href="">Live Classes</a></h4>
              <p class="description"> <small>Atharw provides live online classes which allow interaction with students
                  through
                  chats and comments, which helps to
                  make the class more dynamic, encourages debate and allows immediate answers to questions. Using a
                  simple
                  messaging
                  system, those watching can interact with the teacher and other viewers. After every live class
                  students
                  will get the
                  recording of that particular class by which one can revise the classes and note down the doubts with
                  their own speed at
                  any time anywhere with any device.</small></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-dice-2-fill"></i></div>
              <h4 class="title"><a href="">Professional Instructor</a></h4>
              <p class="description"> <small>The instructors who are associated with Atharw are specially software
                  developers
                  having years of real world experience.
                  As they are working on the same domain in their day to day life so they will focus on practical
                  education more as
                  compared to theoretical to make students industry ready.</small></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-dice-3-fill"></i></div>
              <h4 class="title"><a href="">One on One Mentorship</a></h4>
              <p class="description"> <small>Every student will be associated directly with one member of Atharw. That
                  member
                  will provide mentorship to the student
                  to keep him motivated throughout the training. If the student will be stuck anywhere he/she can
                  directly
                  connect with
                  the mentor to get the best suggestions.</small></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-dice-4-fill"></i></div>
              <h4 class="title"><a href="">100% Placement Assistance</a></h4>
              <p class="description"> <small>When a student is joining any of the programs with a platform his/her main
                  motto to
                  get a good job after the completion
                  of the training. With every training program Atharw is promising the students to provide them the
                  placement guidance to
                  get selected in the corporate. The experienced members of team Atharw will provide Mocks, GDs,
                  pre-placement training
                  and many more things to help the students to get success in interviews.</small></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-dice-5-fill"></i></div>
              <h4 class="title"><a href="">Industrial Projects</a></h4>
              <p class="description"> <small>In every training program apart from some minor projects the students have
                  to
                  complete some major projects. It is
                  mandatory for the students to complete the major project and submit it to Atharw. That completion of
                  the
                  project will be
                  clearly mentioned on their final certificate. It is only to keep students confident about their
                  training.</small></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-dice-6-fill"></i></div>
              <h4 class="title"><a href="">Internship with Live Project</a></h4>
              <p class="description"> <small>Throughout the training sessions the students, who are completing all the
                  assignments properly, whose attendance will be
                  more than 90% and who have good scores in the quizzes will get the chance to join CodeKart as the
                  intern
                  and can work
                  with team CodeKart on the live projects.</small></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative" data-aos="fade-up">

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/swati monalisha.jpg" class="testimonial-img" alt="">
                <h3>Swati Monalisha</h3>
                <h4>MCA, SUIIT</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  It is a great experience with Atharw. The team is so helpful and always ready to guide. I strongly
                  recommend others to
                  join.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/Sasmita Mahanta.jpg" class="testimonial-img" alt="">
                <h3>Sasmita Mahanta</h3>
                <h4>MCA, SUIIT</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The training sessions are so interactive. All the contents are easily described. Anyone can easily get
                  all the exposure.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/default.png" class="testimonial-img" alt="">
                <h3>Sailendra Rath</h3>
                <h4>MSc, CV Raman</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The placement training is too good. All the instructors are so experienced and always ready to help. I
                  personally
                  recommend to others.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/Rajeswari Nath.jpg" class="testimonial-img" alt="">
                <h3>Rajeswari Nath</h3>
                <h4>MCA, SUIIT</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Throughout the training I got so much support from my mentor. The team always tries to keep me
                  motivated. Others can
                  definitely join Atharw.<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/default.png" class="testimonial-img" alt="">
                <h3>Satyam Mohapatra</h3>
                <h4>Btech, ITER</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Probably the best trainers are here. They are so dedicated and honest for their work. I have learnt
                  many things from
                  them.<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

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