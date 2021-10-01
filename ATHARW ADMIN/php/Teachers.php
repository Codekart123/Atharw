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
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css" />
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Custom Font Icons CSS-->
  <link rel="stylesheet" href="../css/font.css" />
  <!-- Google fonts - Muli-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700" />
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet" />
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="../css/custom.css" />
  <!-- Favicon-->
  <link rel="shortcut icon" href="../img/favicon.ico" />
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script
    ><![endif]-->
</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="
            container-fluid
            d-flex
            align-items-center
            justify-content-between
          ">
        <div class="navbar-header">
          <!-- Navbar Header--><a href="index.html" class="navbar-brand">
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
          <div class="list-inline-item">
            <a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a>
          </div>
          <div class="list-inline-item dropdown">
            <a id="navbarDropdownMenuLink1" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
            <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages">
              <a href="#" class="dropdown-item message d-flex align-items-center">
                <div class="profile">
                  <img src="img/avatar-3.jpg" alt="..." class="img-fluid" />
                  <div class="status online"></div>
                </div>
                <div class="content">
                  <strong class="d-block">Nadia Halsey</strong><span class="d-block">lorem ipsum dolor sit
                    amit</span><small class="date d-block">9:30am</small>
                </div>
              </a><a href="#" class="dropdown-item message d-flex align-items-center">
                <div class="profile">
                  <img src="img/avatar-2.jpg" alt="..." class="img-fluid" />
                  <div class="status away"></div>
                </div>
                <div class="content">
                  <strong class="d-block">Peter Ramsy</strong><span class="d-block">lorem ipsum dolor sit
                    amit</span><small class="date d-block">7:40am</small>
                </div>
              </a><a href="#" class="dropdown-item message d-flex align-items-center">
                <div class="profile">
                  <img src="img/avatar-1.jpg" alt="..." class="img-fluid" />
                  <div class="status busy"></div>
                </div>
                <div class="content">
                  <strong class="d-block">Sam Kaheil</strong><span class="d-block">lorem ipsum dolor sit
                    amit</span><small class="date d-block">6:55am</small>
                </div>
              </a><a href="#" class="dropdown-item message d-flex align-items-center">
                <div class="profile">
                  <img src="img/avatar-5.jpg" alt="..." class="img-fluid" />
                  <div class="status offline"></div>
                </div>
                <div class="content">
                  <strong class="d-block">Sara Wood</strong><span class="d-block">lorem ipsum dolor sit
                    amit</span><small class="date d-block">10:30pm</small>
                </div>
              </a><a href="#" class="dropdown-item text-center message">
                <strong>See All Messages <i class="fa fa-angle-right"></i></strong></a>
            </div>
          </div>
          <!-- Tasks-->
          <div class="list-inline-item dropdown">
            <a id="navbarDropdownMenuLink2" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
            <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list">
              <a href="#" class="dropdown-item">
                <div class="text d-flex justify-content-between">
                  <strong>Task 1</strong><span>40% complete</span>
                </div>
                <div class="progress">
                  <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                </div>
              </a><a href="#" class="dropdown-item">
                <div class="text d-flex justify-content-between">
                  <strong>Task 2</strong><span>20% complete</span>
                </div>
                <div class="progress">
                  <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                </div>
              </a><a href="#" class="dropdown-item">
                <div class="text d-flex justify-content-between">
                  <strong>Task 3</strong><span>70% complete</span>
                </div>
                <div class="progress">
                  <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2"></div>
                </div>
              </a><a href="#" class="dropdown-item">
                <div class="text d-flex justify-content-between">
                  <strong>Task 4</strong><span>30% complete</span>
                </div>
                <div class="progress">
                  <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4"></div>
                </div>
              </a><a href="#" class="dropdown-item">
                <div class="text d-flex justify-content-between">
                  <strong>Task 5</strong><span>65% complete</span>
                </div>
                <div class="progress">
                  <div role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                </div>
              </a><a href="#" class="dropdown-item text-center">
                <strong>See All Tasks <i class="fa fa-angle-right"></i></strong></a>
            </div>
          </div>
          <!-- Tasks end-->

          <!-- Languages dropdown    -->

          <!-- Log out               -->
          <div class="list-inline-item logout">
            <a id="logout" href="login.html" class="nav-link">Logout <i class="icon-logout"></i></a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <?php
    include 'sidebar.php';
    ?>
    <!-- Sidebar Navigation end-->
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <h2 class="h5 no-margin-bottom">Dashboard</h2>
        </div>
      </div>

      <!-- Employee details -->
      <section class="no-padding-top">
        <div class="container-fluid">
          <div class="row">
            <!-- Add Employee-->
            <div class="col-lg-4">
              <div class="block">
                <div class="title"><strong>Add New Employee</strong></div>
                <div class="block-body text-center">
                  <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">
                    Click here
                  </button>
                  <!-- Add Employee Modal-->
                  <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                    <div role="document" class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <strong id="exampleModalLabel" class="modal-title">New Employee Details</strong>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Lorem ipsum dolor sit amet consectetur.</p>
                          <form action="#" name="myForm" onsubmit=" return validateForm()">
                            <div class="form-group">
                              <label>Name</label>
                              <input type="text" placeholder="Enter Employee Name" class="form-control" name="name" id="name" />
                            </div>
                            <span id="erName"></span>
                            <div class="form-group">
                              <label>User Id</label>
                              <input type="text" placeholder="User id" class="form-control" name="id" />
                            </div>
                            <div class="form-group">
                              <label>Choose Use Role</label>

                              <select name="employee" class="form-control">
                                <option value="employee">Employee</option>
                                <option value="hr">HR</option>
                                <option value="teamLead">Team Lead</option>
                                <option value="extra">Extra</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Email</label>
                              <input type="email" placeholder="Email Address" class="form-control" />
                            </div>
                            <div class="form-group">
                              <label>Password</label>
                              <input type="password" placeholder="Password" class="form-control" />
                            </div>
                            <div class="form-group">
                              <label>Salary</label>
                              <input type="number" min="2000" max="50000" placeholder="Salary" class="form-control" required />
                            </div>
                            <div class="form-group">
                              <label>Phone Number</label>
                              <input type="number" min="10" max="10" placeholder="Phone Number" class="form-control" />
                            </div>
                            <div class="form-group">
                              <label>Address</label>
                              <input type="text" placeholder="Enter Address" class="form-control" />
                            </div>
                            <div class="form-group">
                              <input type="submit" value="Add Successefully" class="btn btn-primary" />
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" data-dismiss="modal" class="btn btn-secondary">
                            Close
                          </button>
                          <button type="button" class="btn btn-primary">
                            Save changes
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Edit Employee Modal-->
                  <div id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                    <div role="document" class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <strong id="exampleModalLabel" class="modal-title">Edit Employee Details</strong>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Lorem ipsum dolor sit amet consectetur.</p>
                          <form>
                            <div class="form-group">
                              <label>Name</label>
                              <input type="text" placeholder="Enter Employee Name" class="form-control" />
                            </div>
                            <div class="form-group">
                              <label>User Id</label>
                              <input type="text" placeholder="User id" class="form-control" />
                            </div>
                            <div class="form-group">
                              <label>Choose Use Role</label>

                              <select name="employee" class="form-control">
                                <option value="employee">Employee</option>
                                <option value="hr">HR</option>
                                <option value="teamLead">Team Lead</option>
                                <option value="extra">Extra</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Email</label>
                              <input type="email" placeholder="Email Address" class="form-control" />
                            </div>

                            <div class="form-group">
                              <label>Salary</label>
                              <input type="number" placeholder="Salary" class="form-control" />
                            </div>
                            <div class="form-group">
                              <label>Address</label>
                              <input type="text" placeholder="Enter Address" class="form-control" />
                            </div>
                            <div class="form-group">
                              <input type="submit" value="Signin" class="btn btn-primary" />
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" data-dismiss="modal" class="btn btn-secondary">
                            Close
                          </button>
                          <button type="button" class="btn btn-primary">
                            Save changes
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="showMore" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                    <div role="document" class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <strong id="exampleModalLabel" class="modal-title">Employee Details</strong>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="public-user-block block">
                            <div class="row d-flex align-items-center">
                              <div class="col-lg-4 d-flex align-items-center">
                                <div class="order">6th</div>
                                <div class="avatar">
                                  <img src="img/avatar-6.jpg" alt="..." class="img-fluid" />
                                </div>
                                <a href="#" class="name"><strong class="d-block">Saumyarani Panigrahi</strong><span class="d-block">@saumyarani.codecart</span></a>
                              </div>
                              <div class="col-lg-4 text-center">
                                <div class="contributions">
                                  Employeee as a Intern
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="details d-flex">
                                  <div class="item">
                                    <p>Salary: <strong>5k</strong></p>
                                  </div>
                                  <div class="item">
                                    <i class="icon-email"></i><strong>saumyarani@gmail.com</strong>
                                  </div>
                                  <hr />
                                  <div class="item">
                                    <address>
                                      Lorem ipsum dolor sit amet.
                                    </address>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" data-dismiss="modal" class="btn btn-secondary">
                            Close
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Form Elements -->
            <div class="col-lg-12">
              <div class="block margin-bottom-sm">
                <div class="title"><strong>Employee Table</strong></div>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>User Id</th>
                        <th>Edit</th>
                        <th>Dekete</th>
                        <th>Show More</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Saumyarani</td>

                        <td>Panigrahi</td>
                        <td>@mdo</td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#edit" class="btn btn-primary">
                            Edit
                          </button>
                        </td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">
                            Delete
                          </button>
                        </td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#showMore" class="btn btn-primary">
                            Show More
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#edit" class="btn btn-primary">
                            Edit
                          </button>
                        </td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">
                            Delete
                          </button>
                        </td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#showMore" class="btn btn-primary">
                            Show More
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#edit" class="btn btn-primary">
                            Edit
                          </button>
                        </td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">
                            Delete
                          </button>
                        </td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#showMore" class="btn btn-primary">
                            Show More
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
      </section>

      <footer class="footer">
        <div class="footer__block block no-margin-bottom">
          <div class="container-fluid text-center">
            <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            <p class="no-margin-bottom">
              2021 &copy; CodeKart Employee Management System. Go to
              <a target="_blank" href="https://www.thecodekart.com/#">CodeKart</a>.
            </p>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- JavaScript Validation -->
  <script>
    const currentLocation = location.href;
    const menuItem = document.getElementsByClassName('sidebar-btn');
    const menuLength = menuItem.length
    for (let i = 0; i < menuLength; i++) {
      if (menuItem[i].href === currentLocation) {
        menuItem[i].className = "active"
      }
    }
  </script>
  <!-- <script>
    var btnContainer = document.getElementById("sidebar-menu");
    var btns = btnContainer.getElementsByClassName("sidebar-btn");

    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener('click', function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active");
        this.className += " active";
      })
    }
  </script> -->
  <script>
    function validateForm() {
      var name = document.myform.name.value;
      var password = document.myform.password.value;

      if (name == null || name == "") {
        document.getElementById("erName").innerHTML = "blue";
        return false;
      } else if (id.length < 6) {
        alert("Password must be at least 6 characters long.");
        return false;
      }
    }
  </script>

  <!-- JavaScript files-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper.js/umd/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/jquery.cookie/jquery.cookie.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
  <script src="js/charts-home.js"></script>
  <script src="js/front.js"></script>
</body>

</html>