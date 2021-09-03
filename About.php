<?php
session_start();
if (!isset($_SESSION['fullname'])) {
    header("location: register.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ABOUT | ATHARW | An Inititative of CodeKart</title>
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

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative" data-aos="fade-right">
                        <a href="./assets/img/Atharw Wix.mp4" class="glightbox play-btn mb-4"></a>
                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <!-- <h4 data-aos="fade-up">About us</h4> -->
                        <h3 data-aos="fade-up">About us</h3>
                        <p data-aos="fade-up">Atharw is an Ed-Tech platform which provides training, internships and
                            projects assistance with job assistance on
                            different technologies like all the commonly used programming languages, web development,
                            mobile application
                            development, software testing, digital marketing and many more. Apart from technical
                            students it helps the non-technical
                            students to make them industry ready by providing the training on soft skill, good
                            communication skill, reasoning and
                            aptitude training and many more.</p>

                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><i class="bi bi-emoji-smile"></i></div>
                            <h4 class="title"><a href="">Purity, Honesty and Dedication</a></h4>
                            <p class="description">Atharw always believes on three core values of Bhagavad Gita i.e.
                                Purity, Honesty and Dedication. It always determines
                                to provide the pure content which is helpful for the students to make them unique from
                                others. It always wants to be
                                stay honest towards the students and expect the students should be honest as well.
                                Dedication is another weapon to get
                                success. All the members of team Atherw are always dedicate to provide the best service
                                to the students so that the
                                students can get success in their life.</p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-hand-thumbs-up"></i></div>
                            <h4 class="title"><a href="">100% Job Assistance & Internship</a></h4>
                            <p class="description">Being an Ed-Tech platform Atharw always wants to provide best
                                services to the students. We provide services like live
                                classes, one-on-one mentorship, professional instructor, 100% job assistance, industrial
                                projects and internship with
                                live project opportunity. Atharw believes that when a student is coming to take
                                training, one thing always reflects in
                                his/her mind that whether he/she can get any job after the training. So here Atharw is
                                promising that it will do every
                                possible work to make the student industry ready by which students can crack the
                                interviews properly.</p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-atom"></i></div>
                            <h4 class="title"><a href="">Initiative</a></h4>
                            <p class="description">After all Atharw is an initiate of CodeKart. CodeKart is a software
                                company providing software consultancy in various
                                domain like Web Development, Mobile Application Development, Software Testing, UI/UX
                                designing, AI, Robotics and many
                                more. To get more details about CodeKart you can visit <a href="http://www.thecodekart.com" target="_blank">www.thecodekart.com</a> .</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

    </main>



    <!-- footer -->
    <?php
    include "small-footer.php";
    ?>


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>