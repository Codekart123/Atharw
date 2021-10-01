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
        <li class="sidebar-btn  active">
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

      <!-- Employee details -->
      <section class="no-padding-top">
        <div class="container-fluid">
          <div class="row">
            <!-- Add Employee-->
            <div class="col-lg-4">
              <div class="block">
                <div class="title"><strong>Add New Teacher</strong></div>
                <div class="block-body text-center">
                  <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">
                    Click here
                  </button>
                  <!-- Add Employee Modal-->
                  <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
                    class="modal fade text-left">
                    <div role="document" class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <strong id="exampleModalLabel" class="modal-title">New Teacher Details</strong>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Atharw Teacher's</p>
                          <form name="myForm" id="frmAddDetails" enctype="multipart/form-data">
                            <div class="form-group">
                              <label>FirstName</label>
                              <input type="text" placeholder="Enter FirstName" class="form-control" id="first_name" name="first_name" />
                              <input type="hidden" class="form-control" id="hidId" name="hidId" aria-describedby="id">
                            </div>
                            <div class="form-group">
                              <label>LastName</label>
                              <input type="text" placeholder="Enter LastName" class="form-control" id="last_name" name="last_name" />
                            </div>
                            <div class="form-group">
                              <label>Email</label>
                              <input type="email" placeholder="Email Address" class="form-control" id="email" name="email" />
                            </div>
                            <div class="form-group">
                              <label>Contact</label>
                              <input type="number" placeholder="Contact" class="form-control" id="contact" name="contact" />
                            </div>
                            <div class="form-group">
                              <label>Document 1 [Qualification copy]</label>
                              <input type="file" placeholder="Enter Document 1" class="form-control" id="qualification" name="qualification" />
                            </div>
                            <div class="form-group">
                              <label>Document 2 [Aadhaar Copy]</label>
                              <input type="file" placeholder="Enter Document 2" class="form-control" name="identification" name="identification" />
                              <span id='imagedisplay'></span>
                            </div>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" data-dismiss="modal" class="btn btn-secondary">
                            Close
                          </button>
                          <button type="submit" class="btn btn-primary" id="btnSubmit">
                            Save changes
                          </button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <!-- Form Elements -->
            <div class="col-lg-12">
              <div class="block margin-bottom-sm">
                <div class="title"><strong>All Teachers</strong></div>
                <div class="table-responsive">
                  <table class="table" id="teacherDataTable">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email Id</th>
                        <th>Contact</th>
                        <th>Doc:1</th>
                        <th>Doc:2</th>
                        <th>Edit</th>
                        <th>Delete</th>
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
          <p class="no-margin-bottom">
              2021 &copy;Atharw a CodeKart Product. Visit
              <a target="_blank" href="https://www.thecodekart.com/#">CodeKart</a>.
            </p>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- JavaScript Validation -->
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
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script>

$(document).ready(function(){

  var table1 = $('#teacherDataTable').DataTable({
    "bProcessing": false,
    "bServerSide": false,
    "bPaginate": true,
    "bLengthChange": true,
    "bFilter": true,
    "bSort": false,
    "bInfo": true,
    "bAutoWidth": true,
    "sAjaxSource": "teacherTable.php?oper=1001",
    "bDestroy":false,
    "aoColumns": [
      {"sName" : "slno","bSortable":"false"},
      {"data" : "first_name","sClass":"alignCenter"},
      {"data" : "last_name","sClass":"alignCenter"},
      {"data" : "email","sClass":"alignCenter"},
      {"data" : "contact","sClass":"alignCenter"}, //C:\xampp\htdocs\Atharw_V2\UploadDocument\id\img2.jpg
      {"data" : "identification",
        "render": function (data) {
            return '<a href="' + data + '" target="_blank"> <img src="' + data + '" width="55px" /></a>';
        },
      },
      {"data" : "qualification",render: function ( resume, type, row ) {
        return '<a href="'+resume+'" target="_blank">Download/View</a>';
        }
      },
      {"sName" : "action",
        "sWidth":"20%",
        "data"  : null,
        "sClass":"alignCenter",
        "defaultContent": "<button id='btnEdit' action ='btnEdit' class='btn btn-primary'>Edit</button>"
      },
      {"sName" : "action",
        "sWidth":"20%",
        "data"  : null,
        "sClass":"alignCenter",
        "defaultContent": "<button id='btnDelete' action ='btnDelete' class='btn btn-primary'>Delete</button>"
      }
    ]
  });

// add edit
$("#hidId").val('');

$('#frmAddDetails').submit(function(e){
  e.preventDefault();

  var res = validateForm();
  if(res){
    $("#btnSubmit").attr('disabled', true);
    var data = new FormData(document.getElementById("frmAddDetails"));
      var  hidId = $("#hidId").val();
      console.log(data);
      var oper = "";
      if (hidId == '' || hidId == null || hidId == undefined) {
        oper = 1002;
      } else {
        oper = 1003;
      }
      $.ajax({
        url:"teacherTable.php?oper="+oper,
        type:"post",
        data:data,
        cache: false,
        contentType: false,
        processData: false,
        success:function(response) {
          var result = jQuery.parseJSON(response);
          if (result.dbStatus == 'SUCCESS') {
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: result.dbMessage,
              showConfirmButton: false,
              timer: 1500
            });
            alert(result.dbMessage);
            table1.ajax.reload(null,false);
            $("#hidId").val('');
            $('#myModal').modal('hide');
            $("#btnSubmit").removeAttr('disabled');
            $('#frmAddDetails').reset(true);

          } else if (result.dbStatus == 'FAILURE') {
            alert("Sorry. Account name and Department Already Exists.");
            $("#btnSubmit").removeAttr('disabled');
          }
        }
      });
  }  
});

    // edit modal
  $('#teacherDataTable tbody').on( 'click', 'button[action=btnEdit]', function (event) {
			var data = table1.row($(this).parents('tr')).data();
			var icon = document.getElementById("btnEdit");
			if (icon.clicked == true) {
					var oTable = $('#teacherDataTable').dataTable();
					$(oTable.fnSettings().aoData).each(function () {
						$(this.nTr).removeClass('success');
					});
					$(event.target.parentNode.parentNode.parentNode).addClass('success');
					}
					else {
						var oTable = $('#teacherDataTable').dataTable();
						$(oTable.fnSettings().aoData).each(function () {
							$(this.nTr).removeClass('success');
						});
				$(event.target.parentNode.parentNode).addClass('success');
    }
		
			$("#first_name").val(data.first_name);
			$("#last_name").val(data.last_name);
			$("#contact").val(data.contact);
			$("#email").val(data.email);
			$("#hidId").val(data.id);
      $('#imagedisplay').prepend('<img height="55px" width="55px" src="../' + data.identification + '" />');
      $("#myModal").modal('show');     
		});
		
                                        // delete
    $('#teacherDataTable tbody').on( 'click', 'button[action=btnDelete]', function (event) {			
			var data = table1.row($(this).parents('tr')).data();
			var icon = document.getElementById("btnDelete");
			if (icon.clicked == true) {
				var oTable = $('#teacherDataTable').dataTable();
				$(oTable.fnSettings().aoData).each(function () {
					$(this.nTr).removeClass('success');
				});
				$(event.target.parentNode.parentNode.parentNode).addClass('success');
			} else {
				var oTable = $('#teacherDataTable').dataTable();
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
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
                url:"teacherTable.php?oper=1004",
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
                        table1.ajax.reload(null,false);
                    } else if (result.dbStatus == 'FAILURE') {
                        alert("Failed to delete Record..");
                    }
                }
            });
          }
        });        
    });
					

function validateForm(){
            fname = document.getElementById('first_name').value;
            lname = document.getElementById('last_name').value;
            contact = document.getElementById('contact').value;
            email = document.getElementById('email').value;

            if(fname.length == " "){
                alert( " Enter valid first name");
                return false;
            }
            if(fname.length < 4){
                alert("name must be greater than 4 character ");
                return false;
            }
            if(lname.length == " "){
                alert(" Enter valid last name");
                return false;
            }
            if(lname.length < 4){
                alert("name must be greater than 4 character ");
                return false;
            }

            if(contact == ""){
                alert("Please Enter phone no");    
                return false;
            }
            if(isNaN(contact)){
                alert("only numbers are allowed");    
                return false;
            }
            if(contact.length != 10){
                alert("no must be 10 digit only");    
                return false;
            }
            if(email == ""){
                alert ("Please Enter your mail id");    
                return false;
            }
            if(email.indexOf('@') <= 0){
                alert ("invalid position of @");    
                return false;
            }
            if((email.charAt(email.length-4) != '.') && (email.charAt(email.length-3) != '.')){
                alert("invalid '.' position");    
                return false;
            }
      return true;

    }          


});



  </script>
</body>

</html>