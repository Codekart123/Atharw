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
        <li class="sidebar-btn active">
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
        <!-- <li class="sidebar-btn">
          <a href="Settings.php">
            <i class="icon-settings"></i>Site Settings
          </a>
        </li> -->
        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
              class="icon-settings"></i>Webiste Settings </a>
          <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
            <li><a href="Settings.php">Basic Settings</a></li>
            <li><a href="addcourse.php">Add Courses</a></li>
            <li><a href="addtestimonial.php">Add Testimonials</a></li>
          </ul>
        </li>
        <li class="sidebar-btn">
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
          <h2 class="h5 no-margin-bottom">Dashboard</h2>
        </div>
      </div>
      <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="statistic-block block">
                <div class="
                      progress-details
                      d-flex
                      align-items-end
                      justify-content-between
                    ">
                  <div class="title">
                    <div class="icon"><i class="icon-user-1"></i></div>
                    <strong>Total Teachers</strong>
                  </div>
                  <div class="number dashtext-1" id="teacher-count"> </div>
                </div>
                <div class="progress progress-template">
                  <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"
                    class="progress-bar progress-bar-template dashbg-1"  id="teacher-prop"></div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-6">
              <div class="statistic-block block">
                <div class="
                      progress-details
                      d-flex
                      align-items-end
                      justify-content-between
                    ">
                  <div class="title">
                    <div class="icon">
                      <i class="icon-paper-and-pencil"></i>
                    </div>
                    <strong>Total Sellers</strong>
                  </div>
                  <div class="number dashtext-3" id="seller-count">10</div>
                </div>
                <div class="progress progress-template">
                  <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"
                    class="progress-bar progress-bar-template dashbg-3"  id="seller-prop"></div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="statistic-block block">
                <div class="
                      progress-details
                      d-flex
                      align-items-end
                      justify-content-between
                    ">
                  <div class="title">
                    <div class="icon">
                      <i class="icon-writing-whiteboard"></i>
                    </div>
                    <strong>Total Buyers</strong>
                  </div>
                  <div class="number dashtext-4" id="buyer-count">23</div>
                </div>
                <div class="progress progress-template">
                  <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"
                    class="progress-bar progress-bar-template dashbg-4"  id="buyer-prop"></div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="statistic-block block">
                <div class="
                                  progress-details
                                  d-flex
                                  align-items-end
                                  justify-content-between
                                ">
                  <div class="title">
                    <div class="icon"><i class="icon-contract"></i></div>
                    <strong>Total Users</strong>
                  </div>
                  <div class="number dashtext-2" id="user-count"></div>
                </div>
                <div class="progress progress-template">
                  <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                    class="progress-bar progress-bar-template dashbg-2" id="user-prop"></div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <section class="no-padding-bottom">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="messages-block block">
                <div class="title"><strong>Active</strong></div>
                <div class="messages">
                  <a href="#" class="message d-flex align-items-center">
                    <div class="profile">
                      <img src="img/avatar-3.jpg" alt="..." class="img-fluid" />
                      <div class="status online"></div>
                    </div>

                    <div class="content">
                      <strong class="d-block">Saumyarani Panigrahi</strong><span class="d-block">lorem ipsum dolor sit
                        amit</span><small class="date d-block">9:30am</small>
                    </div>
                  </a>
                  <a href="#" class="message d-flex align-items-center">
                    <div class="profile">
                      <img src="img/avatar-3.jpg" alt="..." class="img-fluid" />
                      <div class="status online"></div>
                    </div>

                    <div class="content">
                      <strong class="d-block">Saumyarani Panigrahi</strong><span class="d-block">lorem ipsum dolor sit
                        amit</span><small class="date d-block">9:30am</small>
                    </div>
                  </a>
                  <a href="#" class="message d-flex align-items-center">
                    <div class="profile">
                      <img src="img/avatar-3.jpg" alt="..." class="img-fluid" />
                      <div class="status online"></div>
                    </div>

                    <div class="content">
                      <strong class="d-block">Saumyarani Panigrahi</strong><span class="d-block">lorem ipsum dolor sit
                        amit</span><small class="date d-block">9:30am</small>
                    </div>
                  </a>
                  <a href="#" class="message d-flex align-items-center">
                    <div class="profile">
                      <img src="img/avatar-3.jpg" alt="..." class="img-fluid" />
                      <div class="status online"></div>
                    </div>

                    <div class="content">
                      <strong class="d-block">Saumyarani Panigrahi</strong><span class="d-block">lorem ipsum dolor sit
                        amit</span><small class="date d-block">9:30am</small>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="messages-block block">
                <div class="title"><strong>Inactive</strong></div>
                <div class="messages">
                  <a href="#" class="message d-flex align-items-center">
                    <div class="profile">
                      <img src="img/avatar-2.jpg" alt="..." class="img-fluid" />
                      <div class="status away"></div>
                    </div>
                    <div class="content">
                      <strong class="d-block">Bhagyashree Patra</strong><span class="d-block">lorem ipsum dolor sit
                        amit</span><small class="date d-block">7:40am</small>
                    </div>
                  </a>
                  <a href="#" class="message d-flex align-items-center">
                    <div class="profile">
                      <img src="img/avatar-2.jpg" alt="..." class="img-fluid" />
                      <div class="status away"></div>
                    </div>
                    <div class="content">
                      <strong class="d-block">Bhagyashree Patra</strong><span class="d-block">lorem ipsum dolor sit
                        amit</span><small class="date d-block">7:40am</small>
                    </div>
                  </a>
                  <a href="#" class="message d-flex align-items-center">
                    <div class="profile">
                      <img src="img/avatar-2.jpg" alt="..." class="img-fluid" />
                      <div class="status away"></div>
                    </div>
                    <div class="content">
                      <strong class="d-block">Bhagyashree Patra</strong><span class="d-block">lorem ipsum dolor sit
                        amit</span><small class="date d-block">7:40am</small>
                    </div>
                  </a>
                  <a href="#" class="message d-flex align-items-center">
                    <div class="profile">
                      <img src="img/avatar-2.jpg" alt="..." class="img-fluid" />
                      <div class="status away"></div>
                    </div>
                    <div class="content">
                      <strong class="d-block">Bhagyashree Patra</strong><span class="d-block">lorem ipsum dolor sit
                        amit</span><small class="date d-block">7:40am</small>
                    </div>
                  </a>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </section>

      <footer class="footer">
        <div class="footer__block block no-margin-bottom">
          <div class="container-fluid text-center">
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

  <script>
    var btnContainer = document.getElementById("sidebar");
    var btns = btnContainer.getElementsByClassName("sidebar-btn");

    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener('click', function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active");
        this.className += " active";
      })
    }
  </script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper.js/umd/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/jquery.cookie/jquery.cookie.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
  <script src="js/charts-home.js"></script>
  <script src="js/front.js"></script>

<script type="text/javascript">                                       
    $(document).ready( function() { 

        $.ajax({
             url: "fetchDashboardInfo.php",
             type:'get',             
             success: function(data){	
                var result = jQuery.parseJSON(data); 
                document.getElementById('teacher-count').innerHTML= result.teacher;
                document.getElementById('user-count').innerHTML= result.user;     
                
                document.getElementById("user-prop").style.width = result.user+"%";                
                document.getElementById("user-prop").setAttribute("aria-valuenow",result.user);

                document.getElementById("teacher-prop").style.width = result.teacher+"%";                
                document.getElementById("teacher-prop").setAttribute("aria-valuenow",result.teacher);

                // document.getElementById('buyer-count').innerHTML= result.buyer;
                // document.getElementById('seller-count').innerHTML= result.seller;     
                
                // document.getElementById("buyer-prop").style.width = result.buyer+"%";                
                // document.getElementById("buyer-prop").setAttribute("aria-valuenow",result.buyer);

                // document.getElementById("seller-prop").style.width = result.seller+"%";                
                // document.getElementById("seller-prop").setAttribute("aria-valuenow",result.seller);
				

			}
        });

    }); 
</script> 
</body>

</html>