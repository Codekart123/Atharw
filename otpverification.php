<?php 
session_start();
require_once('./process/db.php');


if (isset($_POST["otpsubmit"])) {

    $otp = $_POST['otp'];
    $email = $_SESSION['mail'];

    $search = "select * from `signup` where email = '$email' and passreset = '$otp' ";

    $query = mysqli_query($conn, $search);
    if(mysqli_num_rows($query) > 0 ){       
        echo "<script>OTP verified sucessfully..</script> ";
        header('location: setPassword.php?message=OTP verified sucessfully..');       
    }
    else{
        echo "<script>OTP mismatch</script> ";
        header('location: otpverification.php?message=OTP mismatch..'); 
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
    </style>
</head>

<body>
    <div class="modal-window">
        <div>
            <!-- action="./process/passwordlink.php" -->
            <a href="./register.html" class="modal-close">Go Back</a>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>"  method="post"  onsubmit="return validateOTP()">
                <label for="OTP" style="font-size: 12px; background-color: #fff; padding: 2px; position: absolute; left: 50px; top: 45px;">Enter
                    OTP</label>
                <input style="width: 100%; height: 2rem; font-size: 16px;  border-radius: 5px; margin-top: 20px; outline: none;" id="otp" type="text" autocomplete="false" name="otp">
                <button style="padding: 10px 20px; border-radius:5px; background-color: #000; color: #fff; border: none; margin-top: 10px;" type="submit" name="otpsubmit">Verify OTP</button><br>
                <p style="color: orangered; font-size:15px;"><?php $msg=$_GET['message'];echo $msg; ?></p>
            </form>
        </div>
    </div>


    <script>
        function validateOTP(){
           var otp = document.getElementById('otp').value;
            if(otp == ""){
                alert ("Please Enter the OTP");    
                return false;
            }
            if(otp.length < 8){
                alert("Please Enter the valid OTP");    
                return false;
            }

            return true;
        }
    </script>
</body>

</html>