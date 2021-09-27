<?php 
session_start();
require_once('./process/db.php');


if (isset($_POST["emailsubmit"])) {

    function generateRandomString($length = 25) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    $otp= generateRandomString(8);
    
    $email = $_POST['email'];
    $search = " select * from signup where email = '$email' ";
    $query = mysqli_query($conn, $search);
    if(mysqli_num_rows($query) > 0 ){
        while($row = $query->fetch_assoc()) {
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
        }   
        
        
        $updateOTP = "UPDATE `signup` SET passreset='$otp' WHERE email ='$email'";
        $queryOTP = mysqli_query($conn, $updateOTP);
        if($queryOTP){

            
            $_SESSION['mail'] = $email;
            $subject = "Password reset OTP";
            $body = "Hi.. $first_name $last_name, $otp is your password reset OTP please use this to reset your password... \n Thank 
            You..!! "; 
            $headers = "From: patrabhagyashree004@gmail.com";
            if(mail($email,$subject,$body,$headers)){
                $_SESSION['mail'] = $email;
                header('location: otpverification.php?message=Check your registered mail for OTP details');
            }else{
                echo "Mail sending failed..";
            }       

        }
        else{
            echo "<script>Please Try again..</script> ";
            header('location: forgotpassword.php?message=Please Try again..');
        }
       
    }
    else{
        echo "<script>Invalid email..</script> ";
        header('location: forgotpassword.php?message=Invalid email id');
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
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>"  method="post"  onsubmit="return validateEmail()">
            
                <label for="email" style="font-size: 12px; background-color: #fff; padding: 2px; position: absolute; left: 50px; top: 45px;">Enter
                    your
                    Email</label>
                <input style="width: 100%; height: 2rem; font-size: 16px;  border-radius: 5px; margin-top: 20px; outline: none;" id="email" type="email" autocomplete="false" name="email">
                <button style="padding: 10px 20px; border-radius:5px; background-color: #000; color: #fff; border: none; margin-top: 10px;" type="submit" name="emailsubmit">Recover
                    Password</button><br>
                    <?php if(!empty($_GET['message'])) {
                        $msg=$_GET['message'];                        
                        echo'<p style="color: orangered; font-size:15px;"> '.$msg.'</p>';
                    } ?>
            </form>
        </div>
    </div>


    <script>
        function validateEmail(){
           var email = document.getElementById('email').value;
            if(email == ""){
                alert ("Please Enter your mail id");    
                return false;
            }
            if(email.indexOf('@') <= 0){
                alert ("invalid position of @");    
                return false;
            }
            if((email.charAt(mail.length-4) != '.') && (email.charAt(email.length-3) != '.')){
                alert("invalid '.' position");    
                return false;
            }

            return true;
        }
    </script>
</body>

</html>