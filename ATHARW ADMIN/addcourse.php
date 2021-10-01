<?php
session_start();
if (isset($_SESSION['fullname'])) {
    $username = $_SESSION['fullname'];
    $role  = $_SESSION['role_name'];
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Codekart Admin Page</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="robots" content="all,follow" />
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Custom Font Icons CSS-->
  <link rel="stylesheet" href="css/font.css" />
  <!-- Google fonts - Muli-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700" />
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet" />
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css" />
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.ico" />
  <!-- Data Tables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>
</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="search-panel">
        <div class="
              search-inner
              d-flex
              align-items-center
              justify-content-center
            ">
          <div class="close-btn">Close <i class="fa fa-close"></i></div>
          <form id="searchForm" action="#">
            <div class="form-group">
              <input type="search" name="search" placeholder="What are you searching for..." />
              <button type="submit" class="submit">Search</button>
            </div>
          </form>
        </div>
      </div>
      <div class="
            container-fluid
            d-flex
            align-items-center
            justify-content-between
          ">
        <div class="navbar-header">
          <!-- Navbar Header--><a href="index.php" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase">
              <img class="brand-logo " src="./img/aTHARW-ADMIN'.png" alt="">
            </div>
            <div class="brand-text brand-sm">
              <img style="width: 100px; height: 40px; " src="./img/aTHARW-ADMIN'.png" alt="">
            </div>
          </a>
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <div class="right-menu list-inline no-margin-bottom">         
          <div class="list-inline-item logout">
            <a id="logout" href="../logout.php" onclick=" return confirm(' Are You sure you want to logout?');" class="nav-link">Logout <i class="icon-logout"></i></a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar" class="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar">
          <img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle" />
        </div>
        <div class="title ml-4">
        <?php
      if (isset($_SESSION['fullname']) && isset($_SESSION['role_name'])) {
        echo "<h1 class='h5'>$username </h1>";
        echo "<p> $role</p>";
          
      } else {
        echo "<h1>Super Admin</h1>";
      };
      ?>
        </div>
      </div>
      <!-- Sidebar Navidation Menus -->
      <ul class="list-unstyled">
        <li class="sidebar-btn">
          <a href="index.php"> <i class="fa fa-home"></i>Home </a>
        </li>
        <li class="sidebar-btn">
          <a href="Teachers.php">
            <i class="fa fa-users"></i>Atharw Teachers
          </a>
        </li>
        <li class="sidebar-btn">
          <a href="#?"> <i class="fa fa-book"></i>Atharw Sellers</a>
        </li>
        <li class="sidebar-btn">
          <a href="#?"> <i class="fa fa-cart-plus"></i>Atharw Buyers</a>
        </li>
        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
              class="icon-settings"></i>Webiste Settings </a>
          <ul id="exampledropdownDropdown" class="open list-unstyled ">
            <li><a href="Settings.php">Basic Settings</a></li>
            <li class="sidebar-btn active"><a href="addcourse.php">Add Courses</a></li>
            <li><a href="addtestimonial.php">Add Testimonials</a></li>
          </ul>
        </li>
        <li class="sidebar-btn ">
          <a href="Notification.php"> <i class="fa fa-bell"></i>Notification Manager </a>
        </li>
        <li class="sidebar-btn">
          <a href="performance.php">
            <i class="fa fa-bar-chart"></i>Performance
          </a>
        </li>
      </ul>
    </nav>
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">Basic Settings</h2>
                </div>
            </div>
            <section class="no-padding-top">
                <div class="container-fluid">
                    <div class="row">
                        <!-- add board -->
                    <div class="col-sm-3">
                            <div class="block">
                                <div class="title"><strong>Add Board</strong></div>
                                <div class="block-body text-center">
                                    <button type="button" data-toggle="modal" data-target="#myModalBoard"
                                        class="btn btn-primary">
                                        Click here
                                    </button>
                                    <!-- Add Employee Modal-->
                                    <div id="myModalBoard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true" class="modal fade text-left">
                                        <div role="document" class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <strong id="exampleModalLabel" class="modal-title">New
                                                        Board</strong>
                                                    <button type="button" data-dismiss="modal" aria-label="Close"
                                                        class="close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Board</p>
                                                    <form action="#" name="myForm" id='frmBoard'>
                                                        <div class="form-group">
                                                                <label class="form-control-label">Enter Board Code</label>
                                                                <input type="text" placeholder="Enter the board code"
                                                                    class="form-control" id='board_code' name="board_code" minlength="3" maxlength="10" required>
                                                        </div>
                                                        <div class="form-group">
                                                                <label class="form-control-label">Enter Board Name</label>
                                                                <input type="text" placeholder="Enter Board Name"
                                                                    class="form-control" id="board_name" name="board_name" minlength="3" maxlength="10" required>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" data-dismiss="modal"
                                                        class="btn btn-secondary">
                                                        Close
                                                    </button>
                                                    <button type="submit" class="btn btn-primary" id='btnBoard'>
                                                        Save changes
                                                    </button>
                                                 </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--section class with modal-->
                        <div class="col-sm-3">
                            <div class="block">
                                <div class="title"><strong>Add Class</strong></div>
                                <div class="block-body text-center">
                                    <button type="button" data-toggle="modal" data-target="#myModalClass"
                                        class="btn btn-primary">
                                        Click here
                                    </button>
                                    <!-- Add class Modal-->
                                    <div id="myModalClass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true" class="modal fade text-left">
                                        <div role="document" class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <strong id="exampleModalLabel" class="modal-title">New
                                                        class</strong>
                                                    <button type="button" data-dismiss="modal" aria-label="Close"
                                                        class="close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Atharw Classes</p>
                                                    <form action="#" name="myForm" onsubmit=" return validateForm()">
                                                        <select class="form-control mb-3"
                                                            aria-label="Default select example">
                                                            <option selected>Select Board</option>
                                                            <option value="1">CBSE</option>
                                                            <option value="4">ICSE</option>
                                                            <option value="2">CHSE</option>
                                                            <option value="3">HSE</option>
                                                        </select>
                                                        <div class="form-group">
                                                            <label class="form-control-label">Enter class
                                                                Manually</label>
                                                            <input type="text" placeholder="Classes from the Board"
                                                                class="form-control">
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" data-dismiss="modal"
                                                        class="btn btn-secondary">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary">
                                                        Save changes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!--.section class with modal-->
                     <!--section subject with modal-->
                        <div class="col-sm-3">
                            <div class="block">
                                <div class="title"><strong>Add Subject</strong></div>
                                <div class="block-body text-center">
                                    <button type="button" data-toggle="modal" data-target="#myModalSubject"
                                        class="btn btn-primary">
                                        Click here
                                    </button>
                                    <!-- Add Employee Modal-->
                                    <div id="myModalSubject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true" class="modal fade text-left">
                                        <div role="document" class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <strong id="exampleModalLabel" class="modal-title">Atharw
                                                        Subject</strong>
                                                    <button type="button" data-dismiss="modal" aria-label="Close"
                                                        class="close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Atharw Teacher's</p>
                                                    <form action="#" name="myForm" onsubmit=" return validateForm()">
                                                        <select class="form-control mb-3"
                                                            aria-label="Default select example">
                                                            <option selected>Select Board</option>
                                                            <option value="1">CBSE</option>
                                                            <option value="4">ICSE</option>
                                                            <option value="2">CHSE</option>
                                                            <option value="3">HSE</option>
                                                        </select>

                                                        <select class="form-control mb-3"
                                                            aria-label="Default select example">
                                                            <option selected>Select Class</option>
                                                            <option value="1">I</option>
                                                            <option value="4">II</option>
                                                            <option value="2">III</option>
                                                            <option value="3">IV</option>
                                                            <option value="3">V</option>
                                                            <option value="3">VI</option>
                                                            <option value="3">VII</option>
                                                            <option value="3">VIII</option>
                                                            <option value="3">IX</option>
                                                            <option value="3">X</option>
                                                        </select>
                                                        <div class="form-group">
                                                            <label class="form-control-label">Enter Subject Code</label>
                                                            <input type="text" placeholder="Subject Code"
                                                                class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label">Enter Subject Name</label>
                                                            <input type="text" placeholder="Subject Name"
                                                                class="form-control">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" data-dismiss="modal"
                                                        class="btn btn-secondary">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary">
                                                        Save changes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!--.section subject with modal-->
                     <!--section course with modal-->
                        <div class="col-sm-3">
                            <div class="block">
                                <div class="title"><strong>Add Course</strong></div>
                                <div class="block-body text-center">
                                    <button type="button" data-toggle="modal" data-target="#myModalCourse"
                                        class="btn btn-primary">
                                        Click here
                                    </button>
                                    <!-- Add Employee Modal-->
                                    <div id="myModalCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true" class="modal fade text-left">
                                        <div role="document" class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <strong id="exampleModalLabel" class="modal-title">New Course
                                                        Details</strong>
                                                    <button type="button" data-dismiss="modal" aria-label="Close"
                                                        class="close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>New course details</p>
                                                    <form action="#" name="myForm" onsubmit=" return validateForm()">
                                                        <!-- <div class="block-body"> -->
                                                        <!-- <select class="form-control mb-3"
                                                            aria-label="Default select example">
                                                            <option selected>Select Board</option>
                                                            <option value="1">CBSE</option>
                                                            <option value="4">ICSE</option>
                                                            <option value="2">CHSE</option>
                                                            <option value="3">HSE</option>
                                                        </select>

                                                        <select class="form-control mb-3"
                                                            aria-label="Default select example">
                                                            <option selected>Select Class</option>
                                                            <option value="1">I</option>
                                                            <option value="4">II</option>
                                                            <option value="2">III</option>
                                                            <option value="3">IV</option>
                                                            <option value="3">V</option>
                                                            <option value="3">VI</option>
                                                            <option value="3">VII</option>
                                                            <option value="3">VIII</option>
                                                            <option value="3">IX</option>
                                                            <option value="3">X</option>
                                                        </select> -->
                                                        <div class="form-group">
                                                            <label class="form-control-label">Course Name</label>
                                                            <input type="text" placeholder="Course Name"
                                                                class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label">Course Image</label>
                                                            <input type="file" placeholder="" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label">Course Offer
                                                                Price</label>
                                                            <input type="number" placeholder="Offer Price"
                                                                class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label">Course Original
                                                                Price</label>
                                                            <input type="number" placeholder="Original Price"
                                                                class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label">Course Detail
                                                                Question</label>
                                                            <input type="text" placeholder="Details Question"
                                                                class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label">Course Details</label>
                                                            <textarea name="" id="" class="form-control"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-control-label">Syllabus</label>
                                                            <input type="file" name="" id="" class="form-control">
                                                        </div>
                                                        <!-- </div> -->

                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" data-dismiss="modal"
                                                        class="btn btn-secondary">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary">
                                                        Save changes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <!--section course with modal-->
                    <div class="row">
                        <!-- Add Board Table -->
                        <div class="col-sm-6">
                            <div class="block margin-bottom-sm">
                                <div class="title"><strong>All Board</strong></div>
                                <div class="table-responsive">
                                    <table class="table" id="tblBoard">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Board Code</th>
                                                <th>Board Name</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                        <!-- Classes Table -->
                        <div class="col-sm-6">
                            <div class="block margin-bottom-sm">
                                <div class="title"><strong>All classes</strong></div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Board</th>
                                                <th>Class Code</th>
                                                <th>Class Name</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                        <!-- Add course -->
                        <div class="col-sm-12">
                            <div class="block margin-bottom-sm">
                                <div class="title"><strong>All Subjects</strong></div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Board</th>
                                                <th>Class</th>
                                                <th>Subject Code</th>
                                                <th>Subject Name</th>
                                                <th colspan="2">Action</th>

                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>

                        <div class="col-sm-12">
                            <div class="block margin-bottom-sm">
                                <div class="title"><strong>All Tech & Non-Tech Courses</strong></div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Course Name</th>
                                                <th>Course Image</th>
                                                <th>Offer Price</th>
                                                <th>Original Price</th>
                                                <th>Question</th>
                                                <th>Detailed Ans</th>
                                                <th>Syllabus</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>MERN STACK</td>
                                                <td><img src="./img/flags/16/_abkhazia.png" style="width: 100px;"
                                                        alt=""></td>
                                                <td>$10000</td>
                                                <td>$15000</td>
                                                <td>What is MERN Stack?</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Voluptatibus, quasi. Illo, officiis corporis soluta totam minima,
                                                    magnam iure quos saepe, nihil consectetur dignissimos! Similique,
                                                    amet!</td>
                                                <td>some.pdf</td>
                                                <td>
                                                    <button type="button" data-toggle="modal" data-target="#edit"
                                                        class="btn btn-primary">
                                                        Edit
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="button" data-toggle="modal" data-target="#myModal"
                                                        class="btn btn-primary">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>MERN STACK</td>
                                                <td><img src="./img/flags/16/IN.png" style="width: 100px;" alt=""></td>
                                                <td>$10000</td>
                                                <td>$15000</td>
                                                <td>What is MERN Stack?</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Voluptatibus, quasi. Illo, officiis corporis soluta totam minima,
                                                    magnam iure quos saepe, nihil consectetur dignissimos! Similique,
                                                    amet!</td>
                                                <td>some.pdf</td>
                                                <td>
                                                    <button type="button" data-toggle="modal" data-target="#edit"
                                                        class="btn btn-primary">
                                                        Edit
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="button" data-toggle="modal" data-target="#myModal"
                                                        class="btn btn-primary">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>MERN STACK</td>
                                                <td><img src="./img/flags/16/_england.png" style="width: 100px;" alt="">
                                                </td>
                                                <td>$10000</td>
                                                <td>$15000</td>
                                                <td>What is MERN Stack?</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Voluptatibus, quasi. Illo, officiis corporis soluta totam minima,
                                                    magnam iure quos saepe, nihil consectetur dignissimos! Similique,
                                                    amet!</td>
                                                <td>some.pdf</td>
                                                <td>
                                                    <button type="button" data-toggle="modal" data-target="#edit"
                                                        class="btn btn-primary">
                                                        Edit
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="button" data-toggle="modal" data-target="#myModal"
                                                        class="btn btn-primary">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>MERN STACK</td>
                                                <td><img src="./img/flags/16/_basque-country.png" style="width: 100px;"
                                                        alt=""></td>
                                                <td>$10000</td>
                                                <td>$15000</td>
                                                <td>What is MERN Stack?</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Voluptatibus, quasi. Illo, officiis corporis soluta totam minima,
                                                    magnam iure quos saepe, nihil consectetur dignissimos! Similique,
                                                    amet!</td>
                                                <td>some.pdf</td>
                                                <td>
                                                    <button type="button" data-toggle="modal" data-target="#edit"
                                                        class="btn btn-primary">
                                                        Edit
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="button" data-toggle="modal" data-target="#myModal"
                                                        class="btn btn-primary">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>



                <!-- subject start -->
            </section>
            <footer class="footer">
            <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
                <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                <p class="no-margin-bottom">
                2021 &copy;Atharw a CodeKart Product. Visit
                <a target="_blank" href="https://www.thecodekart.com/#">CodeKart</a>.
                </p>
            </div>
            </div>
      </footer>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="js/course_script.js"></script>
</body>

</html>