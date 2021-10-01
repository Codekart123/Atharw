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
        <li class="sidebar-btn active">
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

      <section class="no-padding-bottom">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="block">
                <div class="title">
                  <strong>Notifications [Approve Teachers]</strong>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped table-hover" id="notApprovedTeacherTable">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email ID</th>
                        <th>Contact</th>
                        <th>Doc:1(Id)</th>
                        <th>Doc:2(Qualification)</th>
                        <th>Approve</th>
                        <th>Discard</th>
                      </tr>
                    </thead>
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
  <script type="text/javascript">

$(document).ready(function(){
  var table2 = $('#notApprovedTeacherTable').DataTable({
            "bProcessing": false,
            "bServerSide": false,
            "bPaginate": true,
            "bLengthChange": true,
            "bFilter": true,
            "bSort": false,
            "bInfo": true,
            "bAutoWidth": true,
            "sAjaxSource": "teacherTable.php?oper=1005",
            "bDestroy":false,
            "aoColumns": [
            {"sName" : "slno","bSortable":"false"},
            {"data" : "first_name","sClass":"alignCenter"},
            {"data" : "last_name","sClass":"alignCenter"},
            {"data" : "email","sClass":"alignCenter"},
            {"data" : "contact","sClass":"alignCenter"},
            {"data" : "identification",
                "render": function (data) {
                    return '<a href="../' + data + '" target="_blank"> <img src="../' + data + '" width="55px" /></a>';
                },
            },
            {"data" : "qualification",render: function ( resume, type, row ) {
                return '<a href="../'+resume+'" target="_blank">Download/View</a>';
                }
            },
            {"sName" : "action",
                "sWidth":"20%",
                "data"  : null,
                "sClass":"alignCenter",
                "defaultContent": "<button id='btnApprove' action ='btnApprove' class='btn btn-primary'><i class='fa fa-check' style='font-size: 24px' aria-hidden='true'></i></button>"
            },
            {"sName" : "action",
                "sWidth":"20%",
                "data"  : null,
                "sClass":"alignCenter",
                "defaultContent": "<button id='btnDiscard' action ='btnDiscard' class='btn btn-primary'> <i class='fa fa-times' style='font-size: 24px' aria-hidden='true'></i></button>"
            }
            ]
        });

        // approve
      $('#notApprovedTeacherTable tbody').on( 'click', 'button[action=btnApprove]', function (event) {			
			var data = table2.row($(this).parents('tr')).data();
			var icon = document.getElementById("btnApprove");
			if (icon.clicked == true) {
				var oTable = $('#notApprovedTeacherTable').dataTable();
				$(oTable.fnSettings().aoData).each(function () {
					$(this.nTr).removeClass('success');
				});
				$(event.target.parentNode.parentNode.parentNode).addClass('success');
			} else {
				var oTable = $('#notApprovedTeacherTable').dataTable();
				$(oTable.fnSettings().aoData).each(function () {
					$(this.nTr).removeClass('success');
				});
				$(event.target.parentNode.parentNode).addClass('success');
			}
			
      Swal.fire({
          title: 'Are you sure?',
          text: "You want to approve this request!",
          icon: 'success',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, approve it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
                url:"teacherTable.php?oper=1006",
                type:"post",
                data:{id : data.id},

                success:function(response) {
                    var result = jQuery.parseJSON(response);
                    if (result.dbStatus == 'SUCCESS') {
                        alert(result.dbMessage);
                        Swal.fire(
                            'Approved!',
                            'Your approve request has been submitted.',
                            'success'
                          )
                        table2.ajax.reload(null,false);
                    } else if (result.dbStatus == 'FAILURE') {
                        alert("Failed to approve Record..");
                    }
                }
            });
          }
        });        
    });
        // discard
      $('#notApprovedTeacherTable tbody').on( 'click', 'button[action=btnDiscard]', function (event) {			
			var data = table2.row($(this).parents('tr')).data();
			var icon = document.getElementById("btnDiscard");
			if (icon.clicked == true) {
				var oTable = $('#notApprovedTeacherTable').dataTable();
				$(oTable.fnSettings().aoData).each(function () {
					$(this.nTr).removeClass('success');
				});
				$(event.target.parentNode.parentNode.parentNode).addClass('success');
			} else {
				var oTable = $('#notApprovedTeacherTable').dataTable();
				$(oTable.fnSettings().aoData).each(function () {
					$(this.nTr).removeClass('success');
				});
				$(event.target.parentNode.parentNode).addClass('success');
			}
			
      Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Deny it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
                url:"teacherTable.php?oper=1007",
                type:"post",
                data:{id : data.id},

                success:function(response) {
                    var result = jQuery.parseJSON(response);
                    if (result.dbStatus == 'SUCCESS') {
                        alert(result.dbMessage);
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                          )
                        table2.ajax.reload(null,false);
                    } else if (result.dbStatus == 'FAILURE') {
                        alert("Failed to delete Record..");
                    }
                }
            });
          }
        });        
    });
  //.discard

});
        

  </script>
</body>

</html>