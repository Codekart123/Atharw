<?php
session_start();
require_once('./process/db.php');


if (isset($_POST["updatepassword"])) {

  
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $email =  $_SESSION['mail'];
    $passreset = 0;

    if($password === $cpassword){
        $updatePass = "UPDATE signup SET password='$password',con_password='$cpassword',passreset='$passreset' WHERE email ='$email'";
        $query = mysqli_query($conn,$updatePass);
        if($query){
            
                // echo "<script>alert('Password reset sucessfully')</script>";
                unset($_SESSION['mail']);
                header('location: register.html?message=Password reset sucessfully');
        }
        else{
            // echo "<script>alert('Try again..');</script>";
                header('location: setPassword.php?message=Please Try again..!!');
        }
    }
    else{
        // echo "<script>alert('Password mismatch..');</script>";
        header('location: setPassword.php?message=password mismatch..');
    }

       
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Favicons -->
    <link href="assets/img/ATHARW-icon.jpg" rel="icon">
    <link href="assets/img/ATHARW-icon.jpg" rel="apple-touch-icon">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATHARW | an inititative of CodeKart</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .modal-window>div {
            width: 400px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 2em;
            background: white;
            box-shadow: 5px 10px 40px #38383868;
            border: 1px solid #aaa;
        }

        .modal-close {
            color: #aaa;
            line-height: 50px;
            font-size: 80%;
            position: absolute;
            right: 10px;
            text-align: center;
            top: 0;
            width: 70px;
            text-decoration: none;
        }

        .modal-close:hover {
            color: black;
        }

        /* Demo Styles */

        html,
        body {
            height: 100%;
            font-size: 18px;
            line-height: 1.4;
        }

        body {
            font-family: apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            font-weight: 600;
            background-image: linear-gradient(to right, orangered 0, #657ced 100%);
            color: black;
        }

        .modal-window>div {
            border-radius: 1rem;
        }


        /*  */
        .password-check-inp {
            width: 100%;
            height: 2rem;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 20px;
            outline: none;
        }

        .inp-label {
            font-size: 12px;
            background-color: #fff;
            padding: 2px;
            position: absolute;
        }

        .label-position1 {
            left: 50px;
            top: 45px;
        }

        .label-position2 {
            left: 50px;
            top: 5.8rem;
        }
    </style>
</head>

<body>
    <div class="modal-window">
        <div> 
            <!--  action="./process/updatepassword.php"   -->
            <a href="./register.html" class="modal-close">Login</a>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post" onsubmit="return validatepass()">
                <label class="inp-label label-position1" for="">New Password</label>
                <input class="password-check-inp" type="password" name="password" autocomplete="false" id="pass" minlength="8" required>
                <label class="inp-label label-position2" for="">Confirm Password</label>
                <input class="password-check-inp" type="password" name="cpassword" autocomplete="false" id="cpass" minlength="8" required>
                <button type="submit" name="updatepassword" style="padding: 10px 20px; border-radius:5px; background-color: #000; color: #fff; border: none; margin-top: 10px;">Reset Password</button><br>
                <p style="color: orangered; font-size:15px;"><?php $msg=$_GET['message'];echo $msg; ?></p>
            </form>
        </div>
    </div>

    <script>
        function validatepass(){
            var pass = document.getElementById('pass').value;
            var cpass  =document.getElementById('cpass').value;

            if(pass != cpass){
                console.log(pass);
                console.log(cpass);
                alert('Password are not matching');
                return false;
            }
        }

    </script>

</body>
</html>