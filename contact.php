<?php
session_start();
if (!isset($_SESSION['fullname'])) {
    header("location: register.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CONTACT | ATHARW | An Inititative of CodeKart</title>
    <!-- Header links -->
    <?php
    include "root-file-link.php";
    ?>

</head>

<body>

    <?php
    include "nav.php";
    ?>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-up ">Contact</h2>
            </div>

            <div class="row justify-content-center">

                <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>Plot No 504/2382/2701, Kanan Vihar, Patia, BHUBANESWAR.
                            ODISHA</p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p><a href="mailto:info@atharw.com">info@atharw.com</a><br><a href="info@codekart.com">info@codekart.com</a></p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p><a href="tel:+91 9178 587 486">+91 9178 587 486</a><br><a href="tel:+91 7978 924 665">+91
                                7978 924 665</a></p>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
                <div class="col-xl-9 col-lg-12 mt-4">
                    <form action="./process/contact-process.php" method="POST" class="">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <!-- <input type="text" name="fullname" class="form-control" id="name" placeholder="Your Name" required> -->
                                <div class="form-floating ">
                                    <input type="text" name="fullname" class="form-control" id="floatingInput" placeholder="Your Name">
                                    <label for="floatingInput">Your Fullname</label>
                                </div>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <!-- <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required> -->
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Your Email">
                                    <label for="floatingInput">Email address</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <!-- <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required> -->
                            <div class="form-floating">
                                <input type="text" name="subject" class="form-control" id="floatingInput" placeholder="Subject">
                                <label for="floatingInput">Subject</label>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="form-floating">
                            </div>
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div><br>
                        <div class="text-center"><button class="btn btn-warning btn-lg" type="submit" name="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Section -->


    <!-- footer -->
    <?php
    include "footer.php";
    ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>